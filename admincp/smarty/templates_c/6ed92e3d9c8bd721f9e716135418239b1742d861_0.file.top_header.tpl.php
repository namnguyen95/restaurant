<?php
/* Smarty version 3.1.29, created on 2016-05-04 15:52:33
  from "C:\wamp\www\assignment_web\admincp\smarty\templates\top_header.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5729fea1d8e249_53652641',
  'file_dependency' => 
  array (
    '6ed92e3d9c8bd721f9e716135418239b1742d861' => 
    array (
      0 => 'C:\\wamp\\www\\assignment_web\\admincp\\smarty\\templates\\top_header.tpl',
      1 => 1461598028,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5729fea1d8e249_53652641 ($_smarty_tpl) {
?>
<header id="header" class="page-topbar"> 
  <!-- start header nav-->
  <div class="navbar-fixed">
    <nav class="cyan">
      <div class="nav-wrapper">
        <h1 class="logo-wrapper"><a href="." class="brand-logo darken-1"><img src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'url');?>
images/admin-logo.png" alt="materialize logo"></a> <span class="logo-text">Admin</span></h1>
        <ul class="right hide-on-med-and-down">
          <li class="search-out">
            <input type="text" class="search-out-text">
          </li>
          <li> <a href="javascript:void(0);" class="waves-effect waves-block waves-light show-search"><i class="mdi-action-search"></i></a> </li>
          <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen"><i class="mdi-action-settings-overscan"></i></a> </li>
          <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light"><i class="mdi-social-notifications"></i></a> </li>
          <!-- Dropdown Trigger -->
          <li><a href="#" data-activates="chat-out" class="waves-effect waves-block waves-light chat-collapse"><i class="mdi-communication-chat"></i></a> </li>
        </ul>
      </div>
    </nav>
  </div>
  <!-- end header nav--> 
</header><?php }
}
