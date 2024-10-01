<?php init_head(); ?>
<div id="wrapper" >
	<div class="content">
		<div class="row">
			<div class="col-md-12">

				<div class="panel_s">
					<div class="panel-body">
						<h3><?php echo get_contact_full_name($reciever_id) ?></h3>

						<div id="inbox_div" style="border: 2px solid #dce1ef;padding: 20px; height: 300px; overflow-x: auto;">

						</div>

						<div>


							<div class="panel-footer">
								<div class="pull-left">
									<img src="http://localhost:8080/kenrich/assets/images/user-placeholder.jpg" class="img img-responsive img-circle" width="32px" height="32px" alt="Haider Javaid">
								</div>
								<div class="col-md-10">
									<input class="form-control msg"  type="text">
								</div>
								<div class="pull-right">
									<button class="btn btn-primary send_msg">Send</button>
								</div>
								<div class="clearfix"></div>
							</div>


						</div>


					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>

<?php init_tail(); ?>
<script type="text/javascript">
	let reciever_id = "<?php echo $reciever_id ?>";

	function get_messages(){
		
		var url = "<?php echo admin_url('chat/get_messages') ?>";

		$.ajax({
			url: url,
			type: "post",
			data:{
				reciever_id: reciever_id,
			},
			success:function(res){
				
				$("#inbox_div").html(res);

				var objDiv = document.getElementById("inbox_div");
				objDiv.scrollTop = objDiv.scrollHeight;
				
			}
		})
	}

	$(document).ready(function(){

		get_messages();

		

		$(".send_msg").click(function(){
			var msg = $(".msg").val();
			var url = "<?php echo admin_url('chat/send_msg') ?>";

			$.ajax({
				url: url,
				type: "post",
				data:{
					msg: msg,
					reciever_id: reciever_id
				},
				success:function(res){
					$(".msg").val('');
					get_messages();
				}
			})
		})
	})
</script>
</body>
</html>
