<?php
/* Smarty version 3.1.29, created on 2016-05-05 22:24:45
  from "C:\wamp\www\assignment_web\admincp\views\post\v_listpost.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_572bac0d2fb7a2_23247191',
  'file_dependency' => 
  array (
    '4cd072b34e58bd1055eef8a2b7f971f7aecef0bd' => 
    array (
      0 => 'C:\\wamp\\www\\assignment_web\\admincp\\views\\post\\v_listpost.tpl',
      1 => 1462479883,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/post/v_breadcrumbs.tpl' => 1,
  ),
),false)) {
function content_572bac0d2fb7a2_23247191 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:views/post/v_breadcrumbs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div id="hoverable-table">
  <h4 class="header">Bảng danh sách bài viết</h4>
  <div class="row">
    <div class="input-field col s3">
      <input id="icon_prefix" type="text" class="validate">
      <label for="icon_prefix">Tìm kiếm</label>
    </div>
    <div class="input-field col s9">
      <div class="input-field col s9">
        <button class="btn cyan waves-effect waves-light " type="submit" name="action"> <i class="mdi-action-search"></i> </button>
      </div>
      <div class="input-field col s3"> <a href="addpost.php" class="center-align btn waves-effect waves-light yellow darken-4 right"> <i class="mdi-content-add left"></i>Add new </a> </div>
    </div>
  </div>
  <div class="row">
    <div class="col s12">
      <table class="hoverable tbpadding5">
        <thead>
          <tr>
            <th class="center-align" data-field="id">ID</th>
            <th data-field="title">Tiêu đề</th>
            <th data-field="image">Hình</th>
            <th data-field="update">Sửa | Xóa</th>
          </tr>
        </thead>
        <tbody>
        <?php
$_from = $_smarty_tpl->tpl_vars['posts']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_post_0_saved_item = isset($_smarty_tpl->tpl_vars['post']) ? $_smarty_tpl->tpl_vars['post'] : false;
$_smarty_tpl->tpl_vars['post'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['post']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
$__foreach_post_0_saved_local_item = $_smarty_tpl->tpl_vars['post'];
?>
          <tr>
            <td><input type="checkbox" id="<?php echo $_smarty_tpl->tpl_vars['post']->value->id_post;?>
"/>
              <label for="<?php echo $_smarty_tpl->tpl_vars['post']->value->id_post;?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value->id_post;?>
</label></td>
            <td><?php echo $_smarty_tpl->tpl_vars['post']->value->title;?>
</td>
            <td>
              <img width="60" height="50" src="../public/images/post/<?php echo $_smarty_tpl->tpl_vars['post']->value->image;?>
" alt="img_post">
            </td>
            <td>
              <a href="editpost.php?id_post=<?php echo $_smarty_tpl->tpl_vars['post']->value->id_post;?>
">
                <i class="mdi-action-settings"></i></a>&nbsp;&nbsp; 
              <a class="red-text text-lighten-1" onclick="return confirm('Bạn có chắc chắn xóa <?php echo $_smarty_tpl->tpl_vars['post']->value->title;?>
 không ?')" href="delpost.php?id_post=<?php echo $_smarty_tpl->tpl_vars['post']->value->id_post;?>
">
                <i class="mdi-action-highlight-remove"></i>
              </a>
            </td>
          </tr>
        <?php
$_smarty_tpl->tpl_vars['post'] = $__foreach_post_0_saved_local_item;
}
if ($__foreach_post_0_saved_item) {
$_smarty_tpl->tpl_vars['post'] = $__foreach_post_0_saved_item;
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
