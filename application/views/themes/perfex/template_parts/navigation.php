<nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

       <div class="nav_logo"> FT6 | Client </div>  

      <?php //get_company_logo('','navbar-brand'); ?>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <?php do_action('customers_navigation_start'); ?>
        <?php if((get_option('use_knowledge_base') == 1 && !is_client_logged_in() && get_option('knowledge_base_without_registration') == 1) || (get_option('use_knowledge_base') == 1 && is_client_logged_in())){ ?>
        <!-- <li class="customers-nav-item-kb"><a href="<?php echo site_url('knowledge-base'); ?>"><?php echo _l('clients_nav_kb'); ?></a></li> -->
        <?php } ?>
        <?php if(!is_client_logged_in() && get_option('allow_registration') == 1){ ?>
        <li class="customers-nav-item-register"><a href="<?php echo site_url('clients/register'); ?>"><?php echo _l('clients_nav_register'); ?></a></li>
        <?php } ?>
        <?php if(!is_client_logged_in()){ ?>
        <li class="customers-nav-item-login"><a href="<?php echo site_url('clients/login'); ?>"><?php echo _l('clients_nav_login'); ?></a></li>
        <?php } else { ?>
        <?php if(has_contact_permission('lifestyle')){ ?>
        <li class="customers-nav-item-lifestyle"><a href="#"><?php echo _l('clients_nav_lifestyle'); ?></a></li>
        <?php } ?>
        <?php if(has_contact_permission('ovulation')){ ?>
        <li class="customers-nav-item-ovulation"><a href="#"><?php echo _l('clients_nav_ovulation'); ?></a></li>
        <?php } ?>
        <?php if(has_contact_permission('barness_test')){ ?>
        <li class="customers-nav-item-barness-test"><a href="#"><?php echo _l('clients_nav_barness_test'); ?></a></li>
        <?php } ?>
        <?php if(has_contact_permission('hormone_analyse')){ ?>
        <li class="customers-nav-item-hormone-analyse"><a href="#"><?php echo _l('clients_nav_hormone_analyse'); ?></a></li>
        <?php } ?>
        <?php if(has_contact_permission('food_nutrition')){ ?>
        <li class="customers-nav-item-food-nutrition"><a href="#"><?php echo _l('clients_nav_food_nutrition'); ?></a></li>
        <?php } ?>
        <?php if(has_contact_permission('stress_management')){ ?>
        <li class="customers-nav-item-stress-management"><a href="#"><?php echo _l('clients_nav_stress_management'); ?></a></li>
        <?php } ?>
        <?php if(has_contact_permission('support')){ ?>
     <li class="customers-nav-item-tickets"><a href="<?php echo site_url('clients/tickets'); ?>"><?php echo _l('clients_nav_support'); ?></a></li>
        <?php } ?>
        <?php do_action('customers_navigation_end'); ?>
        <li class="dropdown customers-nav-item-profile">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            <img src="<?php echo contact_profile_image_url($contact->id,'thumb'); ?>" class="client-profile-image-small mright5">
            <?php echo $contact->firstname . ' ' .$contact->lastname; ?>
            <span class="caret"></span></a>
            <ul class="dropdown-menu animated fadeIn">
              <li class="customers-nav-item-edit-profile"><a href="<?php echo site_url('clients/profile'); ?>"><?php echo _l('clients_nav_profile'); ?></a></li>
              <li class="customers-nav-item-company-info"><a href="<?php echo site_url('clients/company'); ?>"><?php echo _l('client_company_info'); ?></a></li>
              <li class="customers-nav-item-announcements">
                <a href="<?php echo site_url('clients/announcements'); ?>"><?php echo _l('announcements'); ?>
                 <?php if($total_undismissed_announcements != 0){ ?>
                 <span class="badge"><?php echo $total_undismissed_announcements; ?></span>
                 <?php } ?>
               </a>
             </li>
             <?php if(is_primary_contact() && get_option('disable_language') == 0){
              ?>
              <li class="dropdown-submenu pull-left customers-nav-item-languages">
               <a href="#" tabindex="-1"><?php echo _l('language'); ?></a>
               <ul class="dropdown-menu dropdown-menu-left">
                 <li class="<?php if($client->default_language == ""){echo 'active';} ?>"><a href="<?php echo site_url('clients/change_language'); ?>"><?php echo _l('system_default_string'); ?></a></li>
                 <?php foreach($this->app->get_available_languages() as $user_lang) { ?>
                 <li <?php if($client->default_language == $user_lang){echo 'class="active"';} ?>>
                   <a href="<?php echo site_url('clients/change_language/'.$user_lang); ?>"><?php echo ucfirst($user_lang); ?></a>
                 </li>
                 <?php } ?>
               </ul>
             </li>
             <?php } ?>
             <li class="customers-nav-item-logout"><a href="<?php echo site_url('clients/logout'); ?>"><?php echo _l('clients_nav_logout'); ?></a></li>
           </ul>
         </li>
         <!-- <li class="icon ">

         <a href="http://localhost:8080/kenrich/chat" class="">
            <i class="fa fa-wechat fa-fw fa-lg" aria-hidden="true"></i>
             <span class="label bg-success icon-total-indicator icon-started-timers">

               1
            </span>
         </a>
      </li> -->
         <?php } ?>
         <?php do_action('customers_navigation_after_profile'); ?>
       </ul>
     </div>
     <!-- /.navbar-collapse -->
   </div>
   <!-- /.container-fluid -->
 </nav>
