<?php
/* Smarty version 3.1.29, created on 2016-05-02 09:34:54
  from "C:\wamp\www\assignment_web\views\menu\v_menu_appetizer.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5727031e868da0_27356716',
  'file_dependency' => 
  array (
    'ffa344a17deed0662e53734e5b251a9dfc23e74a' => 
    array (
      0 => 'C:\\wamp\\www\\assignment_web\\views\\menu\\v_menu_appetizer.tpl',
      1 => 1462174492,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5727031e868da0_27356716 ($_smarty_tpl) {
?>
<section id="khai_vi">
  <div class="row">
  <?php
$_from = $_smarty_tpl->tpl_vars['foodAppetizers']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_foodAppetizer_0_saved_item = isset($_smarty_tpl->tpl_vars['foodAppetizer']) ? $_smarty_tpl->tpl_vars['foodAppetizer'] : false;
$_smarty_tpl->tpl_vars['foodAppetizer'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['foodAppetizer']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['foodAppetizer']->value) {
$_smarty_tpl->tpl_vars['foodAppetizer']->_loop = true;
$__foreach_foodAppetizer_0_saved_local_item = $_smarty_tpl->tpl_vars['foodAppetizer'];
?>
    <div class="col-sm-6 col-md-4">
      <div class="thumbnail material_thumbnail"> 
        <img src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'url');?>
images/menu/<?php echo $_smarty_tpl->tpl_vars['foodAppetizer']->value->image_food;?>
" alt="Thumbnail label" />
        <div class="caption material_caption row">
          <div class="col-sm-3">
            <h3><span class="label label-info"><?php echo $_smarty_tpl->tpl_vars['foodAppetizer']->value->unit_price;?>
đ</span></h3>
          </div>
          <div class="col-sm-9">
            <h3>
              <a href="content_food.php?id_food=<?php echo $_smarty_tpl->tpl_vars['foodAppetizer']->value->id_food;?>
">
              <?php echo $_smarty_tpl->tpl_vars['foodAppetizer']->value->name_food;?>

              </a>
            </h3>
            <p><?php echo $_smarty_tpl->tpl_vars['foodAppetizer']->value->mini_content;?>
</p>
          </div>
        </div>
      </div>
    </div>
  <?php
$_smarty_tpl->tpl_vars['foodAppetizer'] = $__foreach_foodAppetizer_0_saved_local_item;
}
if ($__foreach_foodAppetizer_0_saved_item) {
$_smarty_tpl->tpl_vars['foodAppetizer'] = $__foreach_foodAppetizer_0_saved_item;
}
?>
  </div>
</section>
<button type="button" class="btn btn-default material_btn material_btn_danger">Xem tất cả</button><?php }
}
