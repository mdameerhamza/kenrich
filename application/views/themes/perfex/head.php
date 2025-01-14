<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
  <title><?php if (isset($title)){ echo $title; } ?></title>
  <?php if(get_option('favicon') != ''){ ?>
  <link href="<?php echo base_url('uploads/company/'.get_option('favicon')); ?>" rel="shortcut icon">
  <?php } ?>
  <?php if(!isset($exclude_reset_css)){ ?>
  <?php echo app_stylesheet('assets/css','reset.css'); ?>
  <?php } ?>
  <link href='<?php echo base_url('assets/plugins/roboto/roboto.css'); ?>' rel='stylesheet'>
  <link href="<?php echo base_url('assets/plugins/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
  <?php if(is_rtl(true)){ ?>
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/bootstrap-arabic/css/bootstrap-arabic.min.css'); ?>">
  <?php } ?>
  <script src="<?php echo base_url('assets/plugins/jquery/jquery.min.js'); ?>"></script>
  <link href="<?php echo base_url('assets/plugins/datatables/datatables.min.css'); ?>" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/font-awesome/css/font-awesome.min.css'); ?>">
  <link href="<?php echo base_url('assets/plugins/datetimepicker/jquery.datetimepicker.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/plugins/bootstrap-select/css/bootstrap-select.min.css'); ?>" rel="stylesheet">
  <?php if(is_client_logged_in()){ ?>
  <link href="<?php echo base_url('assets/plugins/dropzone/min/basic.min.css'); ?>" rel='stylesheet'>
  <link href="<?php echo base_url('assets/plugins/dropzone/min/dropzone.min.css'); ?>" rel='stylesheet'>
  <link href='<?php echo base_url('assets/plugins/gantt/css/style.css'); ?>' rel='stylesheet' />
  <link href='<?php echo base_url('assets/plugins/jquery-comments/css/jquery-comments.css'); ?>' rel='stylesheet' />
  <link href='<?php echo base_url('assets/plugins/fullcalendar/fullcalendar.min.css'); ?>' rel='stylesheet' />
  <?php } ?>
  <link href="<?php echo base_url('assets/plugins/lightbox/css/lightbox.min.css'); ?>" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css'); ?>">
  <?php echo app_stylesheet('assets/css','bs-overides.css'); ?>
  <?php echo app_stylesheet(template_assets_path().'/css','style.css'); ?>
  <?php if(file_exists(FCPATH.'assets/css/custom.css')){ ?>
  <link href="<?php echo base_url('assets/css/custom.css'); ?>" rel="stylesheet" type='text/css'>
  <?php } ?>
  <?php render_custom_styles(array('general','tabs','buttons','customers','modals')); ?>
  <?php $isRTL = (is_rtl(true) ? 'true' : 'false'); ?>
  <!-- DO NOT REMOVE -->
  <?php do_action('app_customers_head',array('language'=>$language)); ?>
</head>
<style type="text/css">
@font-face {
  font-family: DinoFont;
  src: url(<?php echo base_url()."assets/fonts/DINOPro-Regular.otf"; ?>);
}
body {
  font-family: DinoFont;
  background-color: #fff;
}
.navbar-default{
  font-size: 30px;
  color: white;
  background: rgb(162,111,26);
  background: linear-gradient(90deg, rgba(162,111,26,1) 30%, rgba(216,187,47,1) 50%, rgba(216,187,47,1) 100%, rgba(216,187,47,1) 100%);

  

}
.login-form{
  background: #F9F9F9 !important;
  border-radius: 14px !important;
  box-shadow: 0px -9px 10px rgba(0, 0, 0, 0.08) !important;
}
.nav_logo{
  padding-top: 20px;
}
.btn-login{
  background-color: #D8BB2F;
}
.navbar-fixed-bottom{
  background-color: #F4F4F4;
  min-height: 70px;
  padding-top: 10px;
}
.company-logo {
  padding: 25px 10px;
  display: block;
}
.login-logo .navbar-brand {
  float: left;
  height: 100%;
  padding: 9% 27%;
  font-size: 18px;
  line-height: 20px;
}
</style>
<body class="customers <?php if(isset($bodyclass)){echo $bodyclass; } ?>" <?php if(is_rtl(true)){ echo 'dir="rtl"';} ?>>
