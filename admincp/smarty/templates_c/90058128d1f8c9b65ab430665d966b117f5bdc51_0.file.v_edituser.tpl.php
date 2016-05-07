<?php
/* Smarty version 3.1.29, created on 2016-05-04 18:27:46
  from "C:\wamp\www\assignment_web\admincp\views\listuser\v_edituser.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_572a2302019536_13995946',
  'file_dependency' => 
  array (
    '90058128d1f8c9b65ab430665d966b117f5bdc51' => 
    array (
      0 => 'C:\\wamp\\www\\assignment_web\\admincp\\views\\listuser\\v_edituser.tpl',
      1 => 1462379263,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_572a2302019536_13995946 ($_smarty_tpl) {
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
                <input name="fullname" id="fullname" type="text" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->fullname;?>
">
                <label for="fullname">Họ và tên</label>
              </div>
              <div class="input-field col s4">
                <select id="gender" name="gender">
                <?php if ($_smarty_tpl->tpl_vars['user']->value->gender == 1) {?>
                  <option selected value="1">Male</option>
                  <option value="0">Female</option>
                <?php } else { ?>
                  <option value="1">Male</option>
                  <option selected value="0">Female</option>
                <?php }?>
                </select>
                <label for="gender">Gender</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s5">
                <i class="mdi-action-perm-identity prefix"></i>
                <input name="user" id="user" type="text"  readonly value="<?php echo $_smarty_tpl->tpl_vars['user']->value->username;?>
">
                <label for="user">Username</label>
              </div>
              <div class="input-field col s5">
                <i class="mdi-communication-vpn-key prefix"></i>
                <input name="pass" id="pass" type="password" readonly value="<?php echo $_smarty_tpl->tpl_vars['user']->value->password;?>
">
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
                  <?php if ($_smarty_tpl->tpl_vars['role']->value->role == $_smarty_tpl->tpl_vars['user']->value->role) {?>
                    <option selected value="<?php echo $_smarty_tpl->tpl_vars['role']->value->role;?>
"><?php echo $_smarty_tpl->tpl_vars['role']->value->role;?>
</option>
                  <?php } else { ?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['role']->value->role;?>
"><?php echo $_smarty_tpl->tpl_vars['role']->value->role;?>
</option>
                  <?php }?>
                  
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
                <input name="idcard" id="idcard" type="text" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->identitycard;?>
">
                <label for="idcard">CMND</label>
              </div>
              <div class="input-field col s4">
                <i class="mdi-communication-phone prefix"></i>
                <input name="phone" id="phone" type="text" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->mobiphone;?>
">
                <label for="phone">Phone</label>
              </div>
              <div class="input-field col s4">
                <i class="mdi-action-today prefix"></i>
                <input name="ngaysinh" type="date" id="ngaysinh" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->birthdate;?>
">
              </div>                                        
            </div>
            <div class="row">
              <div class="input-field col s6">
                <i class="mdi-action-account-balance-wallet prefix"></i>
                <input name="address" id="address" type="text" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->address;?>
">
                <label for="address">Địa chỉ</label>
              </div>
              <div class="input-field col s6">
                <i class="mdi-communication-email prefix"></i>
                <input name="email" id="email" type="email" class="validate" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
">
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
                <button class="btn cyan waves-effect waves-light right" type="submit" name="edituser">
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
</div><?php }
}
