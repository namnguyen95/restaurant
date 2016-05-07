<?php
/* Smarty version 3.1.29, created on 2016-05-04 16:22:59
  from "C:\wamp\www\assignment_web\admincp\views\listuser\v_adduser.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_572a05c3a79b64_83870985',
  'file_dependency' => 
  array (
    '0e089d68cba121ecb433f483bb4bf2b569443922' => 
    array (
      0 => 'C:\\wamp\\www\\assignment_web\\admincp\\views\\listuser\\v_adduser.tpl',
      1 => 1462366724,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/listuser/v_breadcrumbs.tpl' => 1,
  ),
),false)) {
function content_572a05c3a79b64_83870985 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:views/listuser/v_breadcrumbs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div id="hoverable-table">
  <h4 class="header"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h4>

  <div class="row">
    <div class="col s12 m12 l12">
      <div class="card-panel">
        <div class="row">
          <form method="post" action="" class="col s12">
            <div class="row">
              <div class="input-field col s8">
                <i class="mdi-action-accessibility prefix"></i>
                <input name="fullname" id="fullname" type="text">
                <label for="fullname">Họ và tên</label>
              </div>
              <div class="input-field col s4">
                <select name="gender">
                  <option value="1">Male</option>
                  <option value="0">Female</option>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s5">
                <i class="mdi-action-perm-identity prefix"></i>
                <input name="user" id="user" type="text">
                <label for="user">Username</label>
              </div>
              <div class="input-field col s5">
                <i class="mdi-communication-vpn-key prefix"></i>
                <input name="pass" id="pass" type="text">
                <label for="pass">Password</label>
              </div>
              <div class="input-field col s2">
                <select name="role">
                  <?php
$_from = $_smarty_tpl->tpl_vars['roles']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_role_0_saved_item = isset($_smarty_tpl->tpl_vars['role']) ? $_smarty_tpl->tpl_vars['role'] : false;
$_smarty_tpl->tpl_vars['role'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['role']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['role']->value) {
$_smarty_tpl->tpl_vars['role']->_loop = true;
$__foreach_role_0_saved_local_item = $_smarty_tpl->tpl_vars['role'];
?>
                  <option value="<?php echo $_smarty_tpl->tpl_vars['role']->value->role;?>
"><?php echo $_smarty_tpl->tpl_vars['role']->value->role;?>
</option>
                  <?php
$_smarty_tpl->tpl_vars['role'] = $__foreach_role_0_saved_local_item;
}
if ($__foreach_role_0_saved_item) {
$_smarty_tpl->tpl_vars['role'] = $__foreach_role_0_saved_item;
}
?>
                </select>
                <label>Role</label>
              </div> 
            </div>
            <div class="row">
              <div class="input-field col s4">
                <i class="mdi-communication-business prefix"></i>
                <input name="idcard" id="idcard" type="text">
                <label for="idcard">CMND</label>
              </div>
              <div class="input-field col s4">
                <i class="mdi-communication-phone prefix"></i>
                <input name="phone" id="phone" type="text">
                <label for="phone">Phone</label>
              </div>
              <div class="input-field col s4">
                <i class="mdi-action-today prefix"></i>
                <input name="ngaysinh" type="date" id="ngaysinh">
              </div>                                        
            </div>
            <div class="row">
              <div class="input-field col s6">
                <i class="mdi-action-account-balance-wallet prefix"></i>
                <input name="address" id="address" type="text">
                <label for="address">Địa chỉ</label>
              </div>
              <div class="input-field col s6">
                <i class="mdi-communication-email prefix"></i>
                <input name="email" id="email" type="email" class="validate">
                <label for="email">Email</label>
              </div>
            </div>
            <div class="row">
              <div class="col s12">
                <ul id="errors">
                  <?php if (isset($_smarty_tpl->tpl_vars['errValidate']->value)) {?>
                    <?php echo $_smarty_tpl->tpl_vars['errValidate']->value;?>

                  <?php }?>
                </ul>
                <button class="btn cyan waves-effect waves-light right" type="submit" name="adduser">
                  DONE !
                  <i class="mdi-content-send right"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php }
}
