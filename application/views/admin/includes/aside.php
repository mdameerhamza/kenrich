<?php
$total_qa_removed = 0;
$quickActions = $this->app->get_quick_actions_links();
foreach($quickActions as $key => $item){
 if(isset($item['permission'])){
  if(!has_permission($item['permission'],'','create')){
    $total_qa_removed++;
  }
}
}
?>
<aside id="menu" class="sidebar">
 <ul class="nav metis-menu" id="side-menu">
  <li class="dashboard_user<?php if($total_qa_removed == count($quickActions)){echo ' dashboard-user-no-qa';}?>">
   <?php echo _l('welcome_top',$current_user->firstname); ?> <i class="fa fa-power-off top-left-logout pull-right" data-toggle="tooltip" data-title="<?php echo _l('nav_logout'); ?>" data-placement="right" onclick="logout(); return false;"></i>
 </li>
 <li class="menu-item-dashboard">
   <a href="<?php echo admin_url()?>" aria-expanded="false"><i class="fa fa-tachometer menu-icon"></i>
   Dashboard                  </a>
 </li>
 <li class="menu-item-tasks">
   <a href="#" aria-expanded="false"><i class="fa fa-tasks menu-icon"></i>
   Tasks                  </a>
 </li>
 <li class="menu-item-tasks">
  <a href="#" aria-expanded="false"><i class="fa fa-calendar menu-icon"></i>
  Agenda                  </a>
</li>
<li class="menu-item-tasks">
  <a href="#" aria-expanded="false"><i class="fa fa-area-chart menu-icon"></i>
  Statistics                  </a>
</li>
<li class="menu-item-tasks">
  <a href="#" aria-expanded="false"><i class="fa fa-file-text-o menu-icon"></i>
  Invoices                  </a>
</li>
<li class="menu-item-sales">
 <a href="#" aria-expanded="false"><i class="fa fa-ticket menu-icon"></i>
  Tickets         <span class="fa arrow"></span>
</a>
<ul class="nav nav-second-level collapse" aria-expanded="false">
   <li class="sub-menu-item-child-proposals"><a href="<?php echo admin_url('tickets/add')?>">
  Add Ticket</a>
</li>
  <li class="sub-menu-item-child-proposals"><a href="<?php echo admin_url('tickets')?>">
  View Tickets</a>
</li>
<li class="sub-menu-item-child-estimates"><a href="<?php echo admin_url('departments')?>">
Departments</a>
</li>
<li class="sub-menu-item-child-invoices"><a href="<?php echo admin_url('tickets/predefined_replies')?>">
Predefined Replies</a>
</li>
<li class="sub-menu-item-child-payments"><a href="<?php echo admin_url('tickets/priorities')?>">
Ticket Priorities</a>
</li>
<li class="sub-menu-item-child-items"><a href="<?php echo admin_url('tickets/statuses')?>">
Ticket Statuses</a>
</li>
<li class="sub-menu-item-credit_notes"><a href="<?php echo admin_url('tickets/services')?>">
Services</a>
</li>
<li class="sub-menu-item-child-items"><a href="<?php echo admin_url('tickets/spam_filters')?>">
Spam Filters</a>
</li>
</ul>
</li>
<li class="menu-item-sales">
 <a href="#" aria-expanded="false"><i class="fa fa-braille menu-icon"></i>
  Modules         <span class="fa arrow"></span>
</a>
<ul class="nav nav-second-level collapse" aria-expanded="false">
  <li class="sub-menu-item-child-proposals"><a href="#">
  Lifestyle</a>
</li>
<li class="sub-menu-item-child-estimates"><a href="#">
Ovulation</a>
</li>
<li class="sub-menu-item-child-invoices"><a href="#">
Barness test</a>
</li>
<li class="sub-menu-item-child-payments"><a href="#">
Hormone analyse</a>
</li>
<li class="sub-menu-item-credit_notes"><a href="#">
Food and nutrition</a>
</li>
<li class="sub-menu-item-child-items"><a href="#">
Stress Management</a>
</li>
</ul>
</li>
<li class="menu-item-customers">
  <a href="<?php echo admin_url('clients')?>" aria-expanded="false"><i class="fa fa-users menu-icon"></i>
  Clients                  </a>
</li>

<li class="menu-item-customers">
 <a href="#" aria-expanded="false"><i class="fa fa-user-o menu-icon"></i>
  Staff         <span class="fa arrow"></span>
</a>
<ul class="nav nav-second-level collapse" aria-expanded="false">
  <li class="sub-menu-item-child-proposals"><a href="<?php echo admin_url('staff')?>">
  View Staff</a>
</li>
<li class="sub-menu-item-child-estimates"><a href="<?php echo admin_url('roles')?>">
Roles</a>
</li>

</ul>
</li>

 <li class="menu-item-tasks">
   <a href="<?php echo admin_url('emails')?>" aria-expanded="false"><i class="fa fa-envelope-open-o menu-icon"></i>
   Email Templates                  
 </a>
 </li>


 <!--  <li class="dashboard_user<?php if($total_qa_removed == count($quickActions)){echo ' dashboard-user-no-qa';}?>">
   <?php echo _l('welcome_top',$current_user->firstname); ?> <i class="fa fa-power-off top-left-logout pull-right" data-toggle="tooltip" data-title="<?php echo _l('nav_logout'); ?>" data-placement="right" onclick="logout(); return false;"></i>
 </li>
 <li class="menu-item-customers">
   <a href="<?php echo admin_url('clients')?>" aria-expanded="false"><i class="fa fa-user-o menu-icon"></i>
   Customers                  </a>
 </li>
 <li class="menu-item-customers">
   <a href="<?php echo admin_url('clients/groups')?>" aria-expanded="false"><i class="fa fa-users menu-icon"></i>
   Customer Groups                 </a>
 </li>
 <li class="menu-item-customers">
   <a href="<?php echo admin_url('staff')?>" aria-expanded="false"><i class="fa fa-user-secret menu-icon"></i>
   Staff                  </a>
 </li> -->
</ul>
</aside>
