<?php
/* Smarty version 3.1.29, created on 2016-05-04 16:28:07
  from "C:\wamp\www\assignment_web\admincp\smarty\templates\left_nav.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_572a06f7dcb279_59618764',
  'file_dependency' => 
  array (
    'b28ef14d4a8365c4569fc3653aa2990a33092aaa' => 
    array (
      0 => 'C:\\wamp\\www\\assignment_web\\admincp\\smarty\\templates\\left_nav.tpl',
      1 => 1462372042,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_572a06f7dcb279_59618764 ($_smarty_tpl) {
?>
<aside id="left-sidebar-nav">
  <ul id="slide-out" class="side-nav fixed leftside-navigation">
    <li class="user-details cyan darken-2">
      <div class="row">
        <div class="col col s4 m4 l4"> 
          <img src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'url');?>
images/<?php if ($_SESSION['gender'] == 1) {?>avatar_boy1<?php } else { ?>avatar_girl1<?php }?>.jpg" alt="avatar" class="circle responsive-img valign profile-image"> 
        </div>
        <div class="col col s8 m8 l8">
          <ul id="profile-dropdown" class="dropdown-content">
            <li><a href="profile.php?id_user=<?php echo $_SESSION['id_user'];?>
">
              <i class="mdi-action-face-unlock"></i>Profile</a> 
            </li>
            <li><a href="#"><i class="mdi-action-settings"></i> Settings</a> </li>
            <li class="divider"></li>
            <li><a href="#"><i class="mdi-action-lock-outline"></i> Lock</a> </li>
            <li><a href=".?logout=<?php echo $_SESSION['username'];?>
"><i class="mdi-hardware-keyboard-tab"></i> Logout</a> </li>
          </ul>
          <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown"><?php echo $_SESSION['fullname'];?>
</a>
          <p class="user-roal"><?php echo $_SESSION['role'];?>
</p>
        </div>
      </div>
    </li>
    <li class="bold"> <a href="dashboard.php" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Dashboard</a> </li>
    <li class="no-padding">
      <ul class="collapsible collapsible-accordion">
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-image-timer-auto"></i>User</a>
          <div class="collapsible-body">
            <ul>
              <li><a href="listuser.php">Danh sách User</a> </li>
              <li><a href="adduser.php">Thêm User</a> </li>
            </ul>
          </div>
        </li>
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-maps-restaurant-menu"></i>Món Ăn <span class="new badge">4</span></a>
          <div class="collapsible-body">
            <ul>
              <li><a href="listfood.php">Danh sách món ăn</a> </li>
              <li><a href="addfood.php">Thêm món ăn</a> </li>
            </ul>
          </div>
        </li>
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-image-dehaze"></i>Loại món ăn</a>
          <div class="collapsible-body">
            <ul>
              <li><a href="listtype.php">Danh sách loại món</a> </li>
              <li><a href="addtype.php">Thêm loại món</a> </li>
            </ul>
          </div>
        </li>
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-image-edit"></i>Bài viết</a>
          <div class="collapsible-body">
            <ul>
              <li><a href="listpost.php">Danh sách bài viết</a> </li>
              <li><a href="addpost.php">Viết bài</a> </li>
            </ul>
          </div>
        </li>
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-social-pages"></i>Pages</a>
          <div class="collapsible-body">
            <ul>
              <li><a href="page-login.php">Login</a> </li>
              <li><a href="page-register.php">Register</a> </li>
              <li><a href="page-lock-screen.php">Lock Screen</a> </li>
              <li><a href="page-404.php">404</a> </li>
              <li><a href="page-500.php">500</a> </li>
              <li><a href="page-forgot-password.php">Forgot password</a> </li>
            </ul>
          </div>
        </li>
      </ul>
    </li>
    <li class="li-hover">
      <div class="divider"></div>
    </li>
    <li class="li-hover">
      <p class="ultra-small margin more-text">MORE</p>
    </li>
    <li> <a href="css-grid.html"><i class="mdi-image-grid-on"></i>Learn More</a> </li>
    <li class="li-hover">
      <div class="divider"></div>
    </li>
    <li class="li-hover">
      <p class="ultra-small margin more-text">Daily Sales</p>
    </li>
    <li class="li-hover">
      <div class="row">
        <div class="col s12 m12 l12">
          <div class="sample-chart-wrapper">
            <div class="ct-chart ct-golden-section" id="ct2-chart"></div>
          </div>
        </div>
      </div>
    </li>
  </ul>
  <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only darken-2"><i class="mdi-navigation-menu" ></i></a> 
</aside><?php }
}
