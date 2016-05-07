<?php
/* Smarty version 3.1.29, created on 2016-05-02 09:38:15
  from "C:\wamp\www\assignment_web\views\menu\v_menu_lunch.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_572703e78a4156_47288300',
  'file_dependency' => 
  array (
    '6b30e12462b421abbc1ac6a03aef17457836b142' => 
    array (
      0 => 'C:\\wamp\\www\\assignment_web\\views\\menu\\v_menu_lunch.tpl',
      1 => 1462174692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_572703e78a4156_47288300 ($_smarty_tpl) {
?>
<section id="lunch">
  <div class="row">
    <?php
$_from = $_smarty_tpl->tpl_vars['foodMains']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_foodMain_0_saved_item = isset($_smarty_tpl->tpl_vars['foodMain']) ? $_smarty_tpl->tpl_vars['foodMain'] : false;
$_smarty_tpl->tpl_vars['foodMain'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['foodMain']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['foodMain']->value) {
$_smarty_tpl->tpl_vars['foodMain']->_loop = true;
$__foreach_foodMain_0_saved_local_item = $_smarty_tpl->tpl_vars['foodMain'];
?>
    <div class="col-sm-6 col-md-4">
      <div class="thumbnail material_thumbnail"> <img src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'url');?>
images/menu/<?php echo $_smarty_tpl->tpl_vars['foodMain']->value->image_food;?>
" alt="Thumbnail label" />
        <div class="caption material_caption row">
          <div class="col-sm-3">
            <h3><span class="label label-info"><?php echo $_smarty_tpl->tpl_vars['foodMain']->value->unit_price;?>
Đ</span></h3>
          </div>
          <div class="col-sm-9">
            <h3><a href="content_food.php?id_food=<?php echo $_smarty_tpl->tpl_vars['foodMain']->value->id_food;?>
"><?php echo $_smarty_tpl->tpl_vars['foodMain']->value->name_food;?>
</a></h3>
            <p><?php echo $_smarty_tpl->tpl_vars['foodMain']->value->mini_content;?>
</p>
          </div>
        </div>
      </div>
    </div>
    <?php
$_smarty_tpl->tpl_vars['foodMain'] = $__foreach_foodMain_0_saved_local_item;
}
if ($__foreach_foodMain_0_saved_item) {
$_smarty_tpl->tpl_vars['foodMain'] = $__foreach_foodMain_0_saved_item;
}
?>
  </div>
</section>
<button type="button" class="btn btn-default material_btn material_btn_danger">Xem tất cả</button><?php }
}
