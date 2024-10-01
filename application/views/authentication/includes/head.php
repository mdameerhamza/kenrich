<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
  <?php if(get_option('favicon') != ''){ ?>
  <link href="<?php echo base_url('uploads/company/'.get_option('favicon')); ?>" rel="shortcut icon">
  <?php } ?>
  <title>
    <?php echo get_option('companyname'); ?> - Authentication
  </title>
  <?php echo app_stylesheet('assets/css','reset.css'); ?>
  <!-- Bootstrap -->
  <link href="<?php echo base_url('assets/plugins/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
  <?php if(is_rtl()){ ?>
  <link href="<?php echo base_url('assets/plugins/bootstrap-arabic/css/bootstrap-arabic.min.css'); ?>" rel="stylesheet">
  <?php } ?>
  <link href='<?php echo base_url('assets/plugins/roboto/roboto.css'); ?>' rel='stylesheet'>
  <link href='<?php echo base_url('assets/css/bs-overides.min.css'); ?>' rel='stylesheet'>
  <?php echo app_stylesheet('assets/css','authentication.css'); ?>
  <?php if(get_option('recaptcha_secret_key') != '' && get_option('recaptcha_site_key') != ''){ ?>
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <?php } ?>
  <?php if(file_exists(FCPATH.'assets/css/custom.css')){ ?>
  <link href="<?php echo base_url('assets/css/custom.css'); ?>" rel="stylesheet">
  <?php } ?>
  <?php render_custom_styles(array('general','buttons')); ?>
  <style type="text/css">

  @font-face {
    font-family: DinoFont;
    src: url(<?php echo base_url()."assets/fonts/DINOPro-Regular.otf"; ?>);
  }
  body {
    font-family: DinoFont;
    background: #fff !important;
  }
  .authentication-form {
    background: #F9F9F9 !important;
    border-radius: 14px !important;
    box-shadow: 0px -9px 10px rgba(0, 0, 0, 0.08) !important;
  }
  .login-footer{
    background-color: #F4F4F4;
    min-height: 100px;
    padding-top: 10px;
  }
  .authentication-form-wrapper {
    margin-top: 0px !important;
    margin-bottom: 70px;
  }

  .login-header{
    font-size: 30px;
    padding: 12px 0px 12px 30px;
    color: white;
    background: rgb(162,111,26);
    background: linear-gradient(90deg, rgba(162,111,26,1) 30%, rgba(216,187,47,1) 50%, rgba(216,187,47,1) 100%, rgba(216,187,47,1) 100%);

  }
  .btn-login{
    background-color: #D8BB2F;
  }
</style>


</head>
