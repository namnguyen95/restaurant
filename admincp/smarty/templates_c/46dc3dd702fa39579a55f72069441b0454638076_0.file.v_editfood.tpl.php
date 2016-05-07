<?php
/* Smarty version 3.1.29, created on 2016-05-05 10:55:08
  from "C:\wamp\www\assignment_web\admincp\views\listfood\v_editfood.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_572b0a6ca29f03_12500140',
  'file_dependency' => 
  array (
    '46dc3dd702fa39579a55f72069441b0454638076' => 
    array (
      0 => 'C:\\wamp\\www\\assignment_web\\admincp\\views\\listfood\\v_editfood.tpl',
      1 => 1462438496,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/listfood/v_breadcrumbs.tpl' => 1,
  ),
),false)) {
function content_572b0a6ca29f03_12500140 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:views/listfood/v_breadcrumbs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div id="hoverable-table">
  <h4 class="header"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h4>
  <div class="row">
    <div class="col s12 m12 l12">
      <div class="card-panel">
        <div class="row">
          <form method="post" action="" accept-charset="utf-8" enctype="multipart/form-data" class="col s12">
            <div class="row">
              <div class="input-field col s4">
                <input id="namefood" name="namefood" type="text" value="<?php echo $_smarty_tpl->tpl_vars['food']->value->name_food;?>
">
                <label for="namefood">Tên món ăn</label>
              </div>
              <div class="input-field col s4">
                <input id="unit_price" name="unit_price" type="text" value="<?php echo $_smarty_tpl->tpl_vars['food']->value->unit_price;?>
">
                <label for="unit_price">Đơn giá</label>
              </div> 
              <div class="input-field col s4">
                <select name="typefood">
                  <?php
$_from = $_smarty_tpl->tpl_vars['typeFoods']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_typeFood_0_saved_item = isset($_smarty_tpl->tpl_vars['typeFood']) ? $_smarty_tpl->tpl_vars['typeFood'] : false;
$_smarty_tpl->tpl_vars['typeFood'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['typeFood']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['typeFood']->value) {
$_smarty_tpl->tpl_vars['typeFood']->_loop = true;
$__foreach_typeFood_0_saved_local_item = $_smarty_tpl->tpl_vars['typeFood'];
?>
                  <option value="<?php echo $_smarty_tpl->tpl_vars['typeFood']->value->id_type;?>
"><?php echo $_smarty_tpl->tpl_vars['typeFood']->value->name_type;?>
</option>
                  <?php
$_smarty_tpl->tpl_vars['typeFood'] = $__foreach_typeFood_0_saved_local_item;
}
if ($__foreach_typeFood_0_saved_item) {
$_smarty_tpl->tpl_vars['typeFood'] = $__foreach_typeFood_0_saved_item;
}
?>
                </select>
                <label>Loại món ăn</label>
              </div> 
            </div>

            <div class="row">
              <div class="input-field col s12">
                <textarea name="mini_content" id="mini_content" class="materialize-textarea" length="500"><?php echo $_smarty_tpl->tpl_vars['food']->value->mini_content;?>
</textarea>
                <label for="message">Tóm tắt</label>
              </div>    
              <div class="input-field col s12">
                <h6>Nội dung chi tiết</h6>
                <textarea name="content" id="content" class="materialize-textarea ckeditor" length="999999">
                  <?php echo $_smarty_tpl->tpl_vars['food']->value->content;?>

                </textarea>
              </div>                                    
            </div>
            <div class="row">
              <div class="input-field col s5">
                <select name="cook">
                <?php
$_from = $_smarty_tpl->tpl_vars['cooks']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_cook_1_saved_item = isset($_smarty_tpl->tpl_vars['cook']) ? $_smarty_tpl->tpl_vars['cook'] : false;
$_smarty_tpl->tpl_vars['cook'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['cook']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['cook']->value) {
$_smarty_tpl->tpl_vars['cook']->_loop = true;
$__foreach_cook_1_saved_local_item = $_smarty_tpl->tpl_vars['cook'];
?>
                <?php if ($_smarty_tpl->tpl_vars['cook']->value->id == $_smarty_tpl->tpl_vars['food']->value->cook) {?>
                  <option selected value="<?php echo $_smarty_tpl->tpl_vars['cook']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['cook']->value->fullname;?>
 (<?php echo $_smarty_tpl->tpl_vars['cook']->value->birthdate;?>
)</option>
                <?php } else { ?>
                  <option value="<?php echo $_smarty_tpl->tpl_vars['cook']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['cook']->value->fullname;?>
 (<?php echo $_smarty_tpl->tpl_vars['cook']->value->birthdate;?>
)</option>
                <?php }?>
                <?php
$_smarty_tpl->tpl_vars['cook'] = $__foreach_cook_1_saved_local_item;
}
if ($__foreach_cook_1_saved_item) {
$_smarty_tpl->tpl_vars['cook'] = $__foreach_cook_1_saved_item;
}
?>
                </select>
                <label>Đầu bếp</label>
              </div>                                    
              <div class="file-field input-field col s5">
                <input class="file-path validate" type="text"/>
                <div class="btn">
                  <span>Ảnh</span>
                  <input type="file" name="img_food"  />
                </div>
              </div>
              <div class="file-field input-field col s2">
                <input type="checkbox" name="today" id="today" />
                <label for="today">Trong ngày</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <ul class="loi">
                <?php if (isset($_smarty_tpl->tpl_vars['loi']->value)) {?>
                <?php echo $_smarty_tpl->tpl_vars['loi']->value;?>

                <?php }?>
                </ul>
                <button name="editfood" class="btn cyan waves-effect waves-light right" type="submit">Done!
                  <i class="mdi-content-send right"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div><?php }
}
