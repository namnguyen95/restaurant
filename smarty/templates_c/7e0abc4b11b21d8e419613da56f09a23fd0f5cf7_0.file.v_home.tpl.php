<?php
/* Smarty version 3.1.29, created on 2016-04-25 04:25:35
  from "C:\wamp\www\assignment_web\views\home\v_home.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_571d801f4a8e90_36770932',
  'file_dependency' => 
  array (
    '7e0abc4b11b21d8e419613da56f09a23fd0f5cf7' => 
    array (
      0 => 'C:\\wamp\\www\\assignment_web\\views\\home\\v_home.tpl',
      1 => 1461551133,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/home/v_slider.tpl' => 1,
    'file:views/home/v_menutoday.tpl' => 1,
    'file:views/home/v_newfood.tpl' => 1,
    'file:views/home/v_talk.tpl' => 1,
    'file:views/home/v_homeinfo.tpl' => 1,
    'file:views/home/v_homeservices.tpl' => 1,
    'file:views/home/v_homecontact.tpl' => 1,
  ),
),false)) {
function content_571d801f4a8e90_36770932 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:views/home/v_slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div id="main">
  <!-- món ăn hôm nay -->
  <h2 class="page-header">Món ăn hôm nay</h2>
  <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:views/home/v_menutoday.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <button type="button" class="btn btn-default material_btn material_btn_danger">Xem thêm</button>
  <!-- end món ăn hôm nay -->
  <hr>
  
  <!-- món ăn mới -->
  <h2 class="page-header">Món ăn mới!</h2>
  <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:views/home/v_newfood.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <button type="button" class="btn btn-default material_btn material_btn_danger">Xem thêm</button>
  <!-- end món ăn mới -->
  <hr>

  <h2 class="page-header">Câu nói</h2>
  <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:views/home/v_talk.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <hr>

  <h2 class="page-header">Thông tin</h2>
  <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:views/home/v_homeinfo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <hr>

  <h2 class="page-header">Dịch Vụ</h2>
  <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:views/home/v_homeservices.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <hr>

  <h2 class="page-header">Liên hệ và đóng góp ý kiến với chúng tôi</h2>
  <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:views/home/v_homecontact.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div><?php }
}
