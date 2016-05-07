<?php
/* Smarty version 3.1.29, created on 2016-04-25 08:25:53
  from "C:\wamp\www\assignment_web\views\post\v_sidebar_post.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_571db871381fd5_12152136',
  'file_dependency' => 
  array (
    '77d2037d268a1e8908b4f59cfce3ed6bb7b8b0e5' => 
    array (
      0 => 'C:\\wamp\\www\\assignment_web\\views\\post\\v_sidebar_post.tpl',
      1 => 1461565432,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_571db871381fd5_12152136 ($_smarty_tpl) {
?>
<div class="panel panel-default material_panel material_panel_danger">
	<div class="panel-heading material_panel_heading">Bài viết hot</div>
	<?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 5+1 - (1) : 1-(5)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
	<div class="panel-body material_panel_body">
		<div class="media"> 
			<div class="media-left"> 
				<a href="#"> 
					<img data-holder-rendered="true" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PCEtLQpTb3VyY2UgVVJMOiBob2xkZXIuanMvNjR4NjQKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNTQ0YmZlYzNkNSB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE1NDRiZmVjM2Q1Ij48cmVjdCB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIxMi41IiB5PSIzNi44Ij42NHg2NDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" style="width: 64px; height: 64px;" class="media-object" data-src="holder.js/64x64" alt="64x64"> 
				</a> 
			</div> 
			<div class="media-body"> 
				<a href="#"><h4 class="media-heading">Tiêu đề</h4></a>
					Ngày giờ
			</div> 
		</div>
	</div>
	<?php }
}
?>

</div>
<div class="panel panel-default material_panel material_panel_danger">
	<div class="panel-heading material_panel_heading">
		On Facebook
	</div>
	<div class="fb-page" data-href="https://www.facebook.com/kbongda/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="true">
		<div class="fb-xfbml-parse-ignore">
		<blockquote cite="https://www.facebook.com/kbongda/"><a href="https://www.facebook.com/kbongda/">Kênh Bóng Đá</a></blockquote>
		</div>
	</div>
</div><?php }
}
