<?php
/* Smarty version 3.1.29, created on 2016-05-05 22:10:23
  from "C:\wamp\www\assignment_web\admincp\views\post\v_breadcrumbs.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_572ba8af450964_91641736',
  'file_dependency' => 
  array (
    '0d2d3a2b8c771b562854e34de42db80824f63cc1' => 
    array (
      0 => 'C:\\wamp\\www\\assignment_web\\admincp\\views\\post\\v_breadcrumbs.tpl',
      1 => 1462247696,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_572ba8af450964_91641736 ($_smarty_tpl) {
?>
<div id="breadcrumbs-wrapper" class="grey lighten-3">
  <div class="container">
    <div class="row">
      <div class="col s12 m12 l12">
        <h5 class="breadcrumbs-title">Danh mục bài viết</h5>
        <ol class="breadcrumb">
          <li><a href="">Dashboard</a> </li>
          <li><a href="#">Bài viết</a></li>
          <?php echo $_smarty_tpl->tpl_vars['now']->value;?>

        </ol>
      </div>
    </div>
  </div>
</div>
<!--end breadcrumbs--><?php }
}
