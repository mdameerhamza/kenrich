
<?php


foreach ($messages as $key => $value) {

	if ($value->sender_type == "staff") {
		?>


		<div>
			<div class="pull-left" style="padding-top: 20px;">
				<img src="<?php echo staff_profile_image_url('$value->sender_id'); ?>" class="img img-responsive img-circle" width="32px" height="32px" >
			</div>


			<div class=""  style="padding-left: 40px; margin-bottom: 20px">
				<div class="panel-body">
					<?php echo $value->message; ?>
				</div>
			</div>
		</div>

		<?php
	}elseif ($value->sender_type == "client") {
		?>
		<div>
			<div class="pull-right" style="padding-top: 20px;">
				<img src="<?php echo contact_profile_image_url('$value->sender_id'); ?>" class="img img-responsive img-circle" width="32px" height="32px" >
			</div>


			<div class=""  style="padding-right: 40px; text-align: right; margin-bottom: 20px">
				<div class="panel-body">
					<span class="arrow left""></span><?php echo $value->message; ?>
				</div>
			</div>
		</div>
		<?php
	}
}

?>


<!-- <div>
	<div class="pull-left" style="padding-top: 20px;">
		<img src="http://localhost:8080/kenrich/assets/images/user-placeholder.jpg" class="img img-responsive img-circle" width="32px" height="32px" alt="Haider Javaid">
	</div>


	<div class=""  style="padding-left: 40px; margin-bottom: 20px">
		<div class="panel-body">
			<span class="arrow left""></span>ko
		</div>
	</div>
</div>
<div>
	<div class="pull-right" style="padding-top: 20px;">
		<img src="http://localhost:8080/kenrich/assets/images/user-placeholder.jpg" class="img img-responsive img-circle" width="32px" height="32px" alt="Haider Javaid">
	</div>


	<div class=""  style="padding-right: 40px; text-align: right; margin-bottom: 20px">
		<div class="panel-body">
			<span class="arrow left""></span>ko
		</div>
	</div>
</div> -->