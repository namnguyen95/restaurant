<?php
/* Smarty version 3.1.29, created on 2016-05-05 22:44:58
  from "C:\wamp\www\assignment_web\views\home\v_newfood.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_572bb0ca582e30_01790932',
  'file_dependency' => 
  array (
    '028f369c4b1602e3cc6cba07be58a43cf4935684' => 
    array (
      0 => 'C:\\wamp\\www\\assignment_web\\views\\home\\v_newfood.tpl',
      1 => 1462481095,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_572bb0ca582e30_01790932 ($_smarty_tpl) {
?>
<div class="row" id="whatnew">
  <?php
$_from = $_smarty_tpl->tpl_vars['foodNews']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_foodNew_0_saved_item = isset($_smarty_tpl->tpl_vars['foodNew']) ? $_smarty_tpl->tpl_vars['foodNew'] : false;
$_smarty_tpl->tpl_vars['foodNew'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['foodNew']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['foodNew']->value) {
$_smarty_tpl->tpl_vars['foodNew']->_loop = true;
$__foreach_foodNew_0_saved_local_item = $_smarty_tpl->tpl_vars['foodNew'];
?>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail material_thumbnail"> <img src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'url');?>
images/menu/<?php echo $_smarty_tpl->tpl_vars['foodNew']->value->image_food;?>
" alt="Thumbnail label" />
      <div class="caption material_caption row">
        <div class="col-sm-3">
          <h3><span class="label label-info"><?php echo $_smarty_tpl->tpl_vars['foodNew']->value->unit_price;?>
</span></h3>
        </div>
        <div class="col-sm-9">
          <h3><a href="content_food.php?id_food=<?php echo $_smarty_tpl->tpl_vars['foodNew']->value->id_food;?>
"><?php echo $_smarty_tpl->tpl_vars['foodNew']->value->name_food;?>
</a></h3>
          <p><?php echo $_smarty_tpl->tpl_vars['foodNew']->value->mini_content;?>
</p>
        </div>
      </div>
    </div>
  </div>
  <?php
$_smarty_tpl->tpl_vars['foodNew'] = $__foreach_foodNew_0_saved_local_item;
}
if ($__foreach_foodNew_0_saved_item) {
$_smarty_tpl->tpl_vars['foodNew'] = $__foreach_foodNew_0_saved_item;
}
?>
</div><?php }
}
