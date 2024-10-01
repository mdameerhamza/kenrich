<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Chat_model extends CRM_Model
{
    public function __construct()
    {
        parent::__construct();
    }


    public function send_msg($data){

    	$res =	$this->db->insert("tblchat",$data);
    	
    	if ($res) {	
    		return $this->db->insert_id();
    	}
    	
    	return false;
    }


     public function get_messages($where,$or_where){

     	$this->db->where($where);
     	$this->db->or_where($or_where);

    	$res =	$this->db->get("tblchat")->result();
    	
    	if ($res) {	
    		return $res;
    	}
    	
    	return false;
    }
}


?>