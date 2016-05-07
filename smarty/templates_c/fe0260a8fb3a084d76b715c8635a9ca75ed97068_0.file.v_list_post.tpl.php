<?php
/* Smarty version 3.1.29, created on 2016-05-03 11:57:28
  from "C:\wamp\www\assignment_web\views\post\v_list_post.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57287608405205_16403752',
  'file_dependency' => 
  array (
    'fe0260a8fb3a084d76b715c8635a9ca75ed97068' => 
    array (
      0 => 'C:\\wamp\\www\\assignment_web\\views\\post\\v_list_post.tpl',
      1 => 1462269446,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57287608405205_16403752 ($_smarty_tpl) {
?>
<h2 class="page-header">Danh sách bài viết</h2>
<ul>
<?php
$_from = $_smarty_tpl->tpl_vars['posts']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_post_0_saved_item = isset($_smarty_tpl->tpl_vars['post']) ? $_smarty_tpl->tpl_vars['post'] : false;
$_smarty_tpl->tpl_vars['post'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['post']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
$__foreach_post_0_saved_local_item = $_smarty_tpl->tpl_vars['post'];
?>
	<li>
		<div class="row">
			<div class="col-sm-4">
				<img src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'url');?>
/images/post/<?php echo $_smarty_tpl->tpl_vars['post']->value->image;?>
" alt="images_post">
			</div>
			<div class="col-sm-8">
				<a href="content_post.php?id_post=<?php echo $_smarty_tpl->tpl_vars['post']->value->id_post;?>
"><h3 style="color:#E44"><?php echo $_smarty_tpl->tpl_vars['post']->value->title;?>
</h3></a>
				<p>
					<?php echo $_smarty_tpl->tpl_vars['post']->value->mini_content;?>

				</p>
			</div>
			<div class="col-sm-10 col-sm-offset-1" style="text-align: right">
				<p>
					<i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['post']->value->time_post;?>
&nbsp;|&nbsp;
					<i class="fa fa-user" aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['post']->value->author;?>
&nbsp;|&nbsp;
					<i class="fa fa-eye" aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['post']->value->n_views;?>

				</p>
			</div>
		</div>
	</li>
	<hr>
	<?php
$_smarty_tpl->tpl_vars['post'] = $__foreach_post_0_saved_local_item;
}
if ($__foreach_post_0_saved_item) {
$_smarty_tpl->tpl_vars['post'] = $__foreach_post_0_saved_item;
}
?>
</ul>
<div class="pager_center">
	<?php echo $_smarty_tpl->tpl_vars['paginationHTML']->value;?>

</div>


<?php }
}
