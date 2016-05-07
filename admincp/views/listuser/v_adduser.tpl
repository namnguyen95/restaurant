{include file="views/listuser/v_breadcrumbs.tpl"}

<div id="hoverable-table">
  <h4 class="header">{$title}</h4>

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
                  {foreach $roles as $role}
                  <option value="{$role->role}">{$role->role}</option>
                  {/foreach}
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
                  {if isset($errValidate)}
                    {$errValidate}
                  {/if}
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
