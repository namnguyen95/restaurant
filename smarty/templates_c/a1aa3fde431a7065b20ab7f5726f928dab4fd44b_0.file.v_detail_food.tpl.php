<?php
/* Smarty version 3.1.29, created on 2016-05-02 11:15:23
  from "C:\wamp\www\assignment_web\views\detail_food\v_detail_food.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57271aab68a9d4_51355434',
  'file_dependency' => 
  array (
    'a1aa3fde431a7065b20ab7f5726f928dab4fd44b' => 
    array (
      0 => 'C:\\wamp\\www\\assignment_web\\views\\detail_food\\v_detail_food.tpl',
      1 => 1462180519,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57271aab68a9d4_51355434 ($_smarty_tpl) {
?>
<h2 class="page-header">Chi tiết món ăn</h2>
<div class="row">
	<div class="col-sm-6">
		<img src="public/images/menu/<?php echo $_smarty_tpl->tpl_vars['food']->value->image_food;?>
" alt="img food">
	</div>
	<div class="col-sm-6">
		<h3><?php echo $_smarty_tpl->tpl_vars['food']->value->name_food;?>
</h3>
		<h3><span class="label label-info"><?php echo $_smarty_tpl->tpl_vars['food']->value->unit_price;?>
 đ</span></h3>
		<p><?php echo $_smarty_tpl->tpl_vars['food']->value->mini_content;?>
</p>
    <div class="btn-group material_btn_group" style="margin-top: 30px">
      <button class="dropdown-toggle material_dropdown_btn material_btn material_btn_info" type="button" id="more_detail_food">
        Xem thêm chi tiết
        <span class="caret"></span>
      </button>
    </div>
	</div>
</div>

<div id="show_more_detail_food" class="row" style="margin-top: 50px;display: none;">
  <div class="col-sm-12">
    <?php echo $_smarty_tpl->tpl_vars['food']->value->content;?>

  </div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
  $(document).ready(function(){
    $('#more_detail_food').click(function(){
      $("#show_more_detail_food").toggle( "slow" );
    });
  });
<?php echo '</script'; ?>
>
<hr>
<h2 class="page-header">Món ăn cùng loại</h2>
<div class="row">
<?php
$_from = $_smarty_tpl->tpl_vars['foodSameTypes']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_foodSameType_0_saved_item = isset($_smarty_tpl->tpl_vars['foodSameType']) ? $_smarty_tpl->tpl_vars['foodSameType'] : false;
$_smarty_tpl->tpl_vars['foodSameType'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['foodSameType']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['foodSameType']->value) {
$_smarty_tpl->tpl_vars['foodSameType']->_loop = true;
$__foreach_foodSameType_0_saved_local_item = $_smarty_tpl->tpl_vars['foodSameType'];
?>
	<div class="col-sm-4 col-xs-12">
    <div class="thumbnail material_thumbnail"> 
    <img src="public/images/menu/<?php echo $_smarty_tpl->tpl_vars['foodSameType']->value->image_food;?>
" alt="Thumbnail label" />
      <div class="caption material_caption row">
        <div class="col-xs-9">
          <h4>
            <a href="content_food.php?id_food=<?php echo $_smarty_tpl->tpl_vars['foodSameType']->value->id_food;?>
"><?php echo $_smarty_tpl->tpl_vars['foodSameType']->value->name_food;?>
</a>
          </h4>
        </div>
        <span class="label label-info col-xs-3"><?php echo $_smarty_tpl->tpl_vars['foodSameType']->value->unit_price;?>
 đ</span>
        <div class="col-xs-12">
          <p style="height: 100px;overflow: auto"><?php echo $_smarty_tpl->tpl_vars['foodSameType']->value->mini_content;?>
</p>
        </div>
      </div>
    </div>
  </div>
<?php
$_smarty_tpl->tpl_vars['foodSameType'] = $__foreach_foodSameType_0_saved_local_item;
}
if ($__foreach_foodSameType_0_saved_item) {
$_smarty_tpl->tpl_vars['foodSameType'] = $__foreach_foodSameType_0_saved_item;
}
?>
</div><?php }
}
