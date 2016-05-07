<?php
/* Smarty version 3.1.29, created on 2016-05-04 16:01:15
  from "C:\wamp\www\assignment_web\admincp\views\listuser\v_breadcrumbs.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_572a00ab6cf4f9_25935791',
  'file_dependency' => 
  array (
    'da06360c5a65c2b3a7b0643776e0775b1fd8e800' => 
    array (
      0 => 'C:\\wamp\\www\\assignment_web\\admincp\\views\\listuser\\v_breadcrumbs.tpl',
      1 => 1462181997,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_572a00ab6cf4f9_25935791 ($_smarty_tpl) {
?>
<div id="breadcrumbs-wrapper" class="grey lighten-3">
  <div class="container">
    <div class="row">
      <div class="col s12 m12 l12">
        <h5 class="breadcrumbs-title">Danh mục thành viên</h5>
        <ol class="breadcrumb">
          <li><a href="dashboard.php">Dashboard</a> </li>
          <li><a href="#">Bài viết</a> </li>
          <?php echo $_smarty_tpl->tpl_vars['now']->value;?>

        </ol>
      </div>
    </div>
  </div>
</div>
<!--end breadcrumbs--><?php }
}
