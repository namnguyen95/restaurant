<?php
/* Smarty version 3.1.29, created on 2016-04-25 13:02:30
  from "C:\wamp\www\assignment_web\views\post\v_content_page.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_571df946abe571_24109220',
  'file_dependency' => 
  array (
    '6ca081ae9b198b2115520f7860a304450125fe2c' => 
    array (
      0 => 'C:\\wamp\\www\\assignment_web\\views\\post\\v_content_page.tpl',
      1 => 1461582148,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/post/v_content.tpl' => 1,
    'file:views/post/v_sidebar_post.tpl' => 1,
  ),
),false)) {
function content_571df946abe571_24109220 ($_smarty_tpl) {
?>
<div class="row" id="post">
	<div class="col-md-8">
		<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:views/post/v_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	</div>
	<div class="col-md-4">
		<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:views/post/v_sidebar_post.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		
	</div>
</div><?php }
}
