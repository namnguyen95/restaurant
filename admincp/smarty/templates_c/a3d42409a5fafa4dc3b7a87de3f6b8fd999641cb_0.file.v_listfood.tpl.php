<?php
/* Smarty version 3.1.29, created on 2016-05-05 01:51:51
  from "C:\wamp\www\assignment_web\admincp\views\listfood\v_listfood.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_572a8b17e25794_78731998',
  'file_dependency' => 
  array (
    'a3d42409a5fafa4dc3b7a87de3f6b8fd999641cb' => 
    array (
      0 => 'C:\\wamp\\www\\assignment_web\\admincp\\views\\listfood\\v_listfood.tpl',
      1 => 1462405392,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/listfood/v_breadcrumbs.tpl' => 1,
  ),
),false)) {
function content_572a8b17e25794_78731998 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:views/listfood/v_breadcrumbs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div id="hoverable-table">
  <h4 class="header">Bảng danh sách món ăn</h4>
  <div class="row">
    <div class="input-field col s3">
      <input id="icon_prefix" type="text" class="validate">
      <label for="icon_prefix">Tìm kiếm</label>
    </div>
    <div class="input-field col s9">
      <div class="input-field col s9">
        <button class="btn cyan waves-effect waves-light " type="submit" name="action"> <i class="mdi-action-search"></i> </button>
      </div>
      <div class="input-field col s3"> <a href="addfood.php" class="center-align btn waves-effect waves-light yellow darken-4 right"> <i class="mdi-content-add left"></i>Add new </a> </div>
    </div>
  </div>
  <div class="row">
    <div class="col s12">
      <table class="hoverable tbpadding5">
        <thead>
          <tr>
            <th class="center-align" data-field="id">ID</th>
            <th style="width: 15%" data-field="name">Tên món</th>
            <th data-field="type">Loại</th>
            <th style="width: 30%" data-field="decript">Mô tả ngắn</th>
            <th data-field="price">Đơn giá</th>
            <th data-field="image">Ảnh</th>
            <th data-field="update">Sửa | Xóa</th>
          </tr>
        </thead>
        <tbody>
        <?php
$_from = $_smarty_tpl->tpl_vars['foods']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_food_0_saved_item = isset($_smarty_tpl->tpl_vars['food']) ? $_smarty_tpl->tpl_vars['food'] : false;
$_smarty_tpl->tpl_vars['food'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['food']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['food']->value) {
$_smarty_tpl->tpl_vars['food']->_loop = true;
$__foreach_food_0_saved_local_item = $_smarty_tpl->tpl_vars['food'];
?>
          <tr>
            <td><input type="checkbox" id="1"/>
              <label for="1"><?php echo $_smarty_tpl->tpl_vars['food']->value->id_food;?>
</label></td>
            <td style="width: 15%"><?php echo $_smarty_tpl->tpl_vars['food']->value->name_food;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['food']->value->ten_loai;?>
</td>
            <td style="width: 30%"><?php echo $_smarty_tpl->tpl_vars['food']->value->mini_content;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['food']->value->unit_price;?>
</td>
            <td><img width='60' height="50" src="../<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'url');?>
images/menu/<?php echo $_smarty_tpl->tpl_vars['food']->value->image_food;?>
" alt="img_food"></td>
            <td>
              <a href="editfood.php?id_food=<?php echo $_smarty_tpl->tpl_vars['food']->value->id_food;?>
">
                <i class="mdi-action-settings"></i></a>&nbsp;&nbsp; 
              <a class="red-text text-lighten-1" onclick="return confirm('Bạn có chắc chắn xóa <?php echo $_smarty_tpl->tpl_vars['food']->value->name_food;?>
 không ?')" href="delfood.php?id_food=<?php echo $_smarty_tpl->tpl_vars['food']->value->id_food;?>
">
                <i class="mdi-action-highlight-remove"></i>
              </a>
            </td>
          </tr>
        <?php
$_smarty_tpl->tpl_vars['food'] = $__foreach_food_0_saved_local_item;
}
if ($__foreach_food_0_saved_item) {
$_smarty_tpl->tpl_vars['food'] = $__foreach_food_0_saved_item;
}
?>
        </tbody>
      </table>
    </div>
  </div>
  <div class="row">
    <div class="col s5 offset-s4">
      <?php echo $_smarty_tpl->tpl_vars['paginationHTML']->value;?>

    </div>
  </div>
</div><?php }
}
