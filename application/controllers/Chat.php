<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Chat extends Clients_controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('chat_model');
		$this->load->model('staff_model');
	}



	public function index(){

		if (!is_client_logged_in()) {
			redirect(site_url('clients/login'));
		}

		$data['title'] = get_company_name(get_client_user_id());
		$data['staff'] = $this->staff_model->get();

		//print_r($data['staff']); die;

		$this->data    = $data;
		$this->view    = 'chat';
		$this->layout();
	}


	public function inbox($reciever_id){

		$data['reciever_id'] = $reciever_id;

		$this->load->view('admin/chat/inbox', $data);

	}


	public function send_msg(){
		if ($this->input->is_ajax_request()) {

			$data['sender_id'] = get_staff_user_id();
			$data['reciever_id'] = $this->input->post('reciever_id');
			$data['sender_type'] = "staff";
			$data['message'] = $this->input->post('msg');
			$res =  $this->chat_model->send_msg($data);

			if ($res) {
				echo json_encode(array("success"=>true));
			}else{
				echo json_encode(array("error"=>true));
			}

		}
	}


	public function get_messages(){
		if ($this->input->is_ajax_request()) {

			$where['sender_id'] = get_staff_user_id();
			$where['reciever_id'] = $this->input->post('reciever_id');
			$where['sender_type'] = "staff";

			$or_where['sender_id'] = $this->input->post('reciever_id');
			$or_where['reciever_id'] = get_staff_user_id();
			$or_where['sender_type'] = "client";

			$res['messages'] =  $this->chat_model->get_messages($where,$or_where);

			if ($res) {
				echo $this->load->view("admin/chat/messages",$res,true);
			}else{
				echo "Start Chat Now";
			}

		}
	}
}



?>