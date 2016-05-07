<?php
/* Smarty version 3.1.29, created on 2016-05-02 04:47:50
  from "C:\wamp\www\assignment_web\views\home\v_menutoday.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5726bfd6f1f612_15998040',
  'file_dependency' => 
  array (
    '68e22487cc54a14a5c59412c4fbd7f3a00e6fa6a' => 
    array (
      0 => 'C:\\wamp\\www\\assignment_web\\views\\home\\v_menutoday.tpl',
      1 => 1462157170,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5726bfd6f1f612_15998040 ($_smarty_tpl) {
?>
<div class="row" id="menutoday">
  <?php
$_from = $_smarty_tpl->tpl_vars['foodTodays']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_foodToday_0_saved_item = isset($_smarty_tpl->tpl_vars['foodToday']) ? $_smarty_tpl->tpl_vars['foodToday'] : false;
$_smarty_tpl->tpl_vars['foodToday'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['foodToday']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['foodToday']->value) {
$_smarty_tpl->tpl_vars['foodToday']->_loop = true;
$__foreach_foodToday_0_saved_local_item = $_smarty_tpl->tpl_vars['foodToday'];
?>
  <div class="col-lg-4 col-md-4 col-sm-12">
    <div class="thumbnail material_thumbnail"> 
      <img src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'url');?>
images/menu/<?php echo $_smarty_tpl->tpl_vars['foodToday']->value->image_food;?>
" alt="Thumbnail label" />
      <div class="caption material_caption row">
        <div class="col-sm-3">
          <h3><span class="label label-info"><?php echo $_smarty_tpl->tpl_vars['foodToday']->value->unit_price;?>
đ</span></h3>
        </div>
        <div class="col-sm-9">
          <h3><a href="content_food.php?id_food=<?php echo $_smarty_tpl->tpl_vars['foodToday']->value->id_food;?>
"><?php echo $_smarty_tpl->tpl_vars['foodToday']->value->name_food;?>
</a></h3>
          <p><?php echo $_smarty_tpl->tpl_vars['foodToday']->value->mini_content;?>
</p>
        </div>
      </div>
    </div>
  </div>
  <?php
$_smarty_tpl->tpl_vars['foodToday'] = $__foreach_foodToday_0_saved_local_item;
}
if ($__foreach_foodToday_0_saved_item) {
$_smarty_tpl->tpl_vars['foodToday'] = $__foreach_foodToday_0_saved_item;
}
?>
</div><?php }
}
