<?php
/* Smarty version 3.1.29, created on 2016-05-02 09:37:47
  from "C:\wamp\www\assignment_web\views\menu\v_menu.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_572703cb638fb5_92542403',
  'file_dependency' => 
  array (
    '3b6457d4e9238b5b02f0f4940c8cbdcd46b96ee3' => 
    array (
      0 => 'C:\\wamp\\www\\assignment_web\\views\\menu\\v_menu.tpl',
      1 => 1462174540,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/menu/v_intro_menu.tpl' => 1,
    'file:views/menu/v_menu_breakfast.tpl' => 1,
    'file:views/menu/v_menu_lunch.tpl' => 1,
    'file:views/menu/v_menu_appetizer.tpl' => 1,
    'file:views/menu/v_menu_dessert.tpl' => 1,
  ),
),false)) {
function content_572703cb638fb5_92542403 ($_smarty_tpl) {
?>
<div id="main">
	<h2 class="page-header">Thực đơn</h2>
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:views/menu/v_intro_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<hr>
	<h2 class="page-header">Món ăn sáng</h2>
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:views/menu/v_menu_breakfast.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<hr>
	<h2 class="page-header">Món chính</h2>
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:views/menu/v_menu_lunch.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<hr>
	<h2 class="page-header">Các món khai vị</h2>
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:views/menu/v_menu_appetizer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<hr>
	<!--******************************Trang mieng********************************-->
	<h2 class="page-header">Các món tráng miệng</h2>
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:views/menu/v_menu_dessert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div><?php }
}
