<?php
/* Smarty version 3.1.29, created on 2016-05-04 15:52:33
  from "C:\wamp\www\assignment_web\admincp\smarty\templates\right_nav.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5729fea1e7f735_73176069',
  'file_dependency' => 
  array (
    'c895c1c791cb3ae193abb45ad1119e6c7578ac9d' => 
    array (
      0 => 'C:\\wamp\\www\\assignment_web\\admincp\\smarty\\templates\\right_nav.tpl',
      1 => 1461598095,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5729fea1e7f735_73176069 ($_smarty_tpl) {
?>
<aside id="right-sidebar-nav">
  <ul id="chat-out" class="side-nav rightside-navigation">
    <li class="li-hover"> <a href="#" data-activates="chat-out" class="chat-close-collapse right"><i class="mdi-navigation-close"></i></a>
      <div id="right-search" class="row">
        <form class="col s12">
          <div class="input-field"> <i class="mdi-action-search prefix"></i>
            <input id="icon_prefix" type="text" class="validate">
            <label for="icon_prefix">Search</label>
          </div>
        </form>
      </div>
    </li>
    <li class="li-hover">
      <ul class="chat-collapsible" data-collapsible="expandable">
        <li>
          <div class="collapsible-header teal white-text active"><i class="mdi-social-whatshot"></i>Thông báo mới</div>
          <div class="collapsible-body recent-activity">
            <div class="recent-activity-list chat-out-list row">
              <div class="col s3 recent-activity-list-icon"><i class="mdi-action-add-shopping-cart"></i> </div>
              <div class="col s9 recent-activity-list-text"> <a href="#">Vừa rồi</a>
                <p>Jim Doe đặt 1 món mới</p>
              </div>
            </div>
            <div class="recent-activity-list chat-out-list row">
              <div class="col s3 recent-activity-list-icon"><i class="mdi-device-airplanemode-on"></i> </div>
              <div class="col s9 recent-activity-list-text"> <a href="#">Yesterday</a>
                <p>Chuyển món ăn thành công</p>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="collapsible-header light-blue white-text active"><i class="mdi-editor-attach-money"></i>Sales Repoart</div>
          <div class="collapsible-body sales-repoart">
            <div class="sales-repoart-list  chat-out-list row">
              <div class="col s8">Target Salse</div>
              <div class="col s4"><span id="sales-line-1"></span> </div>
            </div>
            <div class="sales-repoart-list chat-out-list row">
              <div class="col s8">Payment Due</div>
              <div class="col s4"><span id="sales-bar-1"></span> </div>
            </div>
            <div class="sales-repoart-list chat-out-list row">
              <div class="col s8">Total Delivery</div>
              <div class="col s4"><span id="sales-line-2"></span> </div>
            </div>
            <div class="sales-repoart-list chat-out-list row">
              <div class="col s8">Total Progress</div>
              <div class="col s4"><span id="sales-bar-2"></span> </div>
            </div>
          </div>
        </li>
        <li>
          <div class="collapsible-header red white-text"><i class="mdi-action-stars"></i>Favorite Associates</div>
          <div class="collapsible-body favorite-associates">
            <div class="favorite-associate-list chat-out-list row">
              <div class="col s4"><img src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'url');?>
images/avatar.jpg" alt="" class="circle responsive-img online-user valign profile-image"> </div>
              <div class="col s8">
                <p>Weno Carasbong</p>
                <p>Tokyo, Japan</p>
              </div>
            </div>
            <div class="favorite-associate-list chat-out-list row">
              <div class="col s4"><img src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'url');?>
images/avatar.jpg" alt="" class="circle responsive-img offline-user valign profile-image"> </div>
              <div class="col s8">
                <p>Nusja Nawancali</p>
                <p class="place">Bangkok, Thailand</p>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </li>
  </ul>
</aside><?php }
}
