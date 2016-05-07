<?php
/* Smarty version 3.1.29, created on 2016-05-02 09:29:29
  from "C:\wamp\www\assignment_web\views\menu\v_menu_breakfast.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_572701d9c92f30_42751747',
  'file_dependency' => 
  array (
    '1a143a4b29c35a4020e72c89f6d0a1c8f62100c5' => 
    array (
      0 => 'C:\\wamp\\www\\assignment_web\\views\\menu\\v_menu_breakfast.tpl',
      1 => 1462174148,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_572701d9c92f30_42751747 ($_smarty_tpl) {
?>
<section id="breakfast">
  <div class="row">
    <?php
$_from = $_smarty_tpl->tpl_vars['foodBreakfasts']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_foodBreakfast_0_saved_item = isset($_smarty_tpl->tpl_vars['foodBreakfast']) ? $_smarty_tpl->tpl_vars['foodBreakfast'] : false;
$_smarty_tpl->tpl_vars['foodBreakfast'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['foodBreakfast']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['foodBreakfast']->value) {
$_smarty_tpl->tpl_vars['foodBreakfast']->_loop = true;
$__foreach_foodBreakfast_0_saved_local_item = $_smarty_tpl->tpl_vars['foodBreakfast'];
?>
    <div class="col-sm-6 col-md-4">
      <div class="thumbnail material_thumbnail"> <img src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'url');?>
images/menu/<?php echo $_smarty_tpl->tpl_vars['foodBreakfast']->value->image_food;?>
" alt="Thumbnail label" />
        <div class="caption material_caption row">
          <div class="col-sm-3">
            <h3><span class="label label-info"><?php echo $_smarty_tpl->tpl_vars['foodBreakfast']->value->unit_price;?>
 đ</span></h3>
          </div>
          <div class="col-sm-9">
            <h3><a href="content_food.php?id_food=<?php echo $_smarty_tpl->tpl_vars['foodBreakfast']->value->id_food;?>
"><?php echo $_smarty_tpl->tpl_vars['foodBreakfast']->value->name_food;?>
</a></h3>
            <p><?php echo $_smarty_tpl->tpl_vars['foodBreakfast']->value->mini_content;?>
</p>
          </div>
        </div>
      </div>
    </div>
    <?php
$_smarty_tpl->tpl_vars['foodBreakfast'] = $__foreach_foodBreakfast_0_saved_local_item;
}
if ($__foreach_foodBreakfast_0_saved_item) {
$_smarty_tpl->tpl_vars['foodBreakfast'] = $__foreach_foodBreakfast_0_saved_item;
}
?>
  </div>
</section>
<button type="button" class="btn btn-default material_btn material_btn_danger">Xem tất cả</button><?php }
}
