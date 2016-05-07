<?php
/* Smarty version 3.1.29, created on 2016-05-02 10:07:37
  from "C:\wamp\www\assignment_web\views\menu\v_menu_dessert.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57270ac9d9c3d4_06959892',
  'file_dependency' => 
  array (
    'b9f7a1153dc7fabb43310d6dbf9c383751044b44' => 
    array (
      0 => 'C:\\wamp\\www\\assignment_web\\views\\menu\\v_menu_dessert.tpl',
      1 => 1462176455,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57270ac9d9c3d4_06959892 ($_smarty_tpl) {
?>
<section id="trang_mieng">
<div class="row">
	<?php
$_from = $_smarty_tpl->tpl_vars['foodDesserts']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_foodDessert_0_saved_item = isset($_smarty_tpl->tpl_vars['foodDessert']) ? $_smarty_tpl->tpl_vars['foodDessert'] : false;
$_smarty_tpl->tpl_vars['foodDessert'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['foodDessert']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['foodDessert']->value) {
$_smarty_tpl->tpl_vars['foodDessert']->_loop = true;
$__foreach_foodDessert_0_saved_local_item = $_smarty_tpl->tpl_vars['foodDessert'];
?>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail material_thumbnail"> <img src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'url');?>
images/menu/<?php echo $_smarty_tpl->tpl_vars['foodDessert']->value->image_food;?>
" alt="Thumbnail label" />
      <div class="caption material_caption row">
        <div class="col-sm-3">
          <h3><span class="label label-info"><?php echo $_smarty_tpl->tpl_vars['foodDessert']->value->unit_price;?>
đ</span></h3>
        </div>
        <div class="col-sm-9">
          <h3><a href="content_food.php?id_food=<?php echo $_smarty_tpl->tpl_vars['foodDessert']->value->id_food;?>
"><?php echo $_smarty_tpl->tpl_vars['foodDessert']->value->name_food;?>
</a></h3>
          <p><?php echo $_smarty_tpl->tpl_vars['foodDessert']->value->mini_content;?>
</p>
        </div>
      </div>
    </div>
  </div>
	<?php
$_smarty_tpl->tpl_vars['foodDessert'] = $__foreach_foodDessert_0_saved_local_item;
}
if ($__foreach_foodDessert_0_saved_item) {
$_smarty_tpl->tpl_vars['foodDessert'] = $__foreach_foodDessert_0_saved_item;
}
?>
</div>
</section>
<button type="button" class="btn btn-default material_btn material_btn_danger">Xem tất cả</button><?php }
}
