<?php
/* Smarty version 3.1.29, created on 2016-05-04 16:01:15
  from "C:\wamp\www\assignment_web\admincp\views\listuser\v_listuser.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_572a00ab6b5616_06217483',
  'file_dependency' => 
  array (
    '858cf1dfa09b18814ee95bbe93a195d620b641e4' => 
    array (
      0 => 'C:\\wamp\\www\\assignment_web\\admincp\\views\\listuser\\v_listuser.tpl',
      1 => 1461893254,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/listuser/v_breadcrumbs.tpl' => 1,
  ),
),false)) {
function content_572a00ab6b5616_06217483 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:views/listuser/v_breadcrumbs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div id="hoverable-table">
  <h4 class="header">Bảng danh sách thành viên</h4>
  <div class="row">
    <div class="input-field col s3">
      <input id="icon_prefix" type="text" class="validate">
      <label for="icon_prefix">Tìm kiếm</label>
    </div>
    <div class="input-field col s9">
      <div class="input-field col s9">
        <button class="btn cyan waves-effect waves-light " type="submit" name="action"> <i class="mdi-action-search"></i> </button>
      </div>
      <div class="input-field col s3"> <a href="adduser.php" class="center-align btn waves-effect waves-light yellow darken-4 right"> <i class="mdi-content-add left"></i>Add new </a> </div>
    </div>
  </div>
  <div class="row">
    <div class="col s12">
      <table class="hoverable tbpadding5">
        <thead>
          <tr>
            <th class="center-align" data-field="id">ID</th>
            <th data-field="name">Họ tên</th>
            <th data-field="type">Quyền</th>
            <th data-field="identitycard">CMND</th>
            <th data-field="birthday">Ngày sinh</th>
            <th data-field="gender">Giới tính</th>
            <th data-field="update">Sửa | Xóa</th>
          </tr>
        </thead>
        <tbody>
        <?php
$_from = $_smarty_tpl->tpl_vars['users']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_user_0_saved_item = isset($_smarty_tpl->tpl_vars['user']) ? $_smarty_tpl->tpl_vars['user'] : false;
$_smarty_tpl->tpl_vars['user'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['user']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
$__foreach_user_0_saved_local_item = $_smarty_tpl->tpl_vars['user'];
?>
          <tr>
            <td><input type="checkbox" id="<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
"/>
              <label for="<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
</label></td>
            <td><?php echo $_smarty_tpl->tpl_vars['user']->value->fullname;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['user']->value->role;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['user']->value->identitycard;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['user']->value->birthdate;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['user']->value->gender;?>
</td>
            <td>
              <a href="edituser.php?id_user=<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
">
                <i class="mdi-action-settings"></i></a>&nbsp;&nbsp; 
              <a class="red-text text-lighten-1" href="deluser.php?id_user=<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
">
                <i class="mdi-action-highlight-remove"></i>
              </a>
            </td>
          </tr>
        <?php
$_smarty_tpl->tpl_vars['user'] = $__foreach_user_0_saved_local_item;
}
if ($__foreach_user_0_saved_item) {
$_smarty_tpl->tpl_vars['user'] = $__foreach_user_0_saved_item;
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
