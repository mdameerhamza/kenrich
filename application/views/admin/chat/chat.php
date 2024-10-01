<?php init_head(); ?>
<div id="wrapper" >
	<div class="content">
		<div class="row">
			<div class="col-md-12">

				<div class="panel_s">
					<div class="panel-body">
						<h3>Clients</h3>

						<table class="table">
							<tbody>

								<?php
								foreach ($clients as $key => $value) {
									?>		<tr>
									<td width="15%" style="vertical-align: middle;">  
									<div class="pull-left" style="padding-right: 10px ">           
												<img src="<?=contact_profile_image_url($value['id'])?>" class="img img-responsive img-circle" width="32px" height="32px">
											</div>
												<div style="padding-top: 5px;">
													<a href="#"><?php
													echo $value['firstname']." ".$value['lastname'];

													?></a>
												</div>  
												
											 </td>
										<td style="vertical-align: middle;"><a href="<?php echo admin_url("chat/inbox/".$value['id']) ?>">Message</a></td>
									</tr>

								<?php
								}
								?>
						
								
								</tbody>
							</table>  


						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php init_tail(); ?>
</body>
</html>
