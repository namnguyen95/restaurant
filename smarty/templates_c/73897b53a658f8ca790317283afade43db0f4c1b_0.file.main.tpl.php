<?php
/* Smarty version 3.1.29, created on 2016-04-30 07:54:32
  from "C:\wamp\www\assignment_web\smarty\templates\temp_sidebar\main.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57244898473998_03884232',
  'file_dependency' => 
  array (
    '73897b53a658f8ca790317283afade43db0f4c1b' => 
    array (
      0 => 'C:\\wamp\\www\\assignment_web\\smarty\\templates\\temp_sidebar\\main.tpl',
      1 => 1461995635,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:temp_sidebar/sidebar.tpl' => 1,
  ),
),false)) {
function content_57244898473998_03884232 ($_smarty_tpl) {
?>
<div class="container">
	<div class="row" id="post">
		<div class="col-md-8">
			<?php if (isset($_smarty_tpl->tpl_vars['view']->value)) {?>
				<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['view']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

			<?php }?>
		</div>
		<div class="col-md-4">
			<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:temp_sidebar/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		</div>
	</div>
</div><?php }
}
