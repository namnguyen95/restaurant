<?php
/* Smarty version 3.1.29, created on 2016-05-04 16:06:12
  from "C:\wamp\www\assignment_web\admincp\views\listfood\v_breadcrumbs.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_572a01d4a8c649_04939071',
  'file_dependency' => 
  array (
    '731bc8477f0522df402dee9b2b344d8bf168eec5' => 
    array (
      0 => 'C:\\wamp\\www\\assignment_web\\admincp\\views\\listfood\\v_breadcrumbs.tpl',
      1 => 1461600597,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_572a01d4a8c649_04939071 ($_smarty_tpl) {
?>
<div id="breadcrumbs-wrapper" class="grey lighten-3">
  <div class="container">
    <div class="row">
      <div class="col s12 m12 l12">
        <h5 class="breadcrumbs-title">Danh mục món ăn</h5>
        <ol class="breadcrumb">
          <li><a href="">Dashboard</a> </li>
          <li><a href="#">Món Ăn</a> </li>
          <?php echo $_smarty_tpl->tpl_vars['now']->value;?>

        </ol>
      </div>
    </div>
  </div>
</div>
<!--end breadcrumbs--><?php }
}
