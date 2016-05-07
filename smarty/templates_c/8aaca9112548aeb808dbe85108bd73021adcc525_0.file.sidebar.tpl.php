<?php
/* Smarty version 3.1.29, created on 2016-05-05 23:15:34
  from "C:\wamp\www\assignment_web\smarty\templates\temp_sidebar\sidebar.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_572bb7f63111c5_56945002',
  'file_dependency' => 
  array (
    '8aaca9112548aeb808dbe85108bd73021adcc525' => 
    array (
      0 => 'C:\\wamp\\www\\assignment_web\\smarty\\templates\\temp_sidebar\\sidebar.tpl',
      1 => 1462482927,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_572bb7f63111c5_56945002 ($_smarty_tpl) {
?>
<div class="panel panel-default material_panel material_panel_danger">
	<div class="panel-heading material_panel_heading">Bài viết hot</div>
	<?php
$_from = $_smarty_tpl->tpl_vars['hotPosts']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_hotPost_0_saved_item = isset($_smarty_tpl->tpl_vars['hotPost']) ? $_smarty_tpl->tpl_vars['hotPost'] : false;
$_smarty_tpl->tpl_vars['hotPost'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['hotPost']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['hotPost']->value) {
$_smarty_tpl->tpl_vars['hotPost']->_loop = true;
$__foreach_hotPost_0_saved_local_item = $_smarty_tpl->tpl_vars['hotPost'];
?>
	<div class="panel-body material_panel_body">
		<div class="media"> 
			<div class="media-left"> 
				<a href="content_post.php?id_post=<?php echo $_smarty_tpl->tpl_vars['hotPost']->value->id_post;?>
"> 
					<img data-holder-rendered="true" src="public/images/post/<?php echo $_smarty_tpl->tpl_vars['hotPost']->value->image;?>
" style="width: 64px; height: 64px;" class="media-object" data-src="holder.js/64x64" alt="64x64"> 
				</a> 
			</div> 
			<div class="media-body"> 
				<a href="content_post.php?id_post=<?php echo $_smarty_tpl->tpl_vars['hotPost']->value->id_post;?>
"><h4 class="media-heading"><?php echo $_smarty_tpl->tpl_vars['hotPost']->value->title;?>
</h4></a>
					<i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;<?php echo $_smarty_tpl->tpl_vars['hotPost']->value->time_post;?>

			</div> 
		</div>
	</div>
	<?php
$_smarty_tpl->tpl_vars['hotPost'] = $__foreach_hotPost_0_saved_local_item;
}
if ($__foreach_hotPost_0_saved_item) {
$_smarty_tpl->tpl_vars['hotPost'] = $__foreach_hotPost_0_saved_item;
}
?>
</div>
<div class="panel panel-default material_panel material_panel_danger">
	<div class="panel-heading material_panel_heading">
		On Facebook
	</div>
	<div class="fb-page" data-href="https://www.facebook.com/restaurant333/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/restaurant333/"><a href="https://www.facebook.com/restaurant333/">Restaurant</a></blockquote></div></div>
</div><?php }
}
