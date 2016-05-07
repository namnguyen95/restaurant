<?php
/* Smarty version 3.1.29, created on 2016-04-25 08:55:33
  from "C:\wamp\www\assignment_web\views\post\v_post.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_571dbf65b818a4_90740041',
  'file_dependency' => 
  array (
    '5a5a256a26fe5d78294f2a5dd9aeb4ea3822feeb' => 
    array (
      0 => 'C:\\wamp\\www\\assignment_web\\views\\post\\v_post.tpl',
      1 => 1461567331,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/post/v_list_post.tpl' => 1,
    'file:views/post/v_sidebar_post.tpl' => 1,
  ),
),false)) {
function content_571dbf65b818a4_90740041 ($_smarty_tpl) {
?>
<div class="row" id="post">
	<div class="col-md-8">
		<h2 class="page-header">Danh sách bài viết</h2>
		<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:views/post/v_list_post.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	</div>
	<div class="col-md-4">
		<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:views/post/v_sidebar_post.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		
	</div>
</div><?php }
}
