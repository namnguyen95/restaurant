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
                <input name="fullname" id="fullname" type="text" value="{$user->fullname}">
                <label for="fullname">Họ và tên</label>
              </div>
              <div class="input-field col s4">
                <select id="gender" name="gender">
                {if $user->gender==1}
                  <option selected value="1">Male</option>
                  <option value="0">Female</option>
                {else}
                  <option value="1">Male</option>
                  <option selected value="0">Female</option>
                {/if}
                </select>
                <label for="gender">Gender</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s5">
                <i class="mdi-action-perm-identity prefix"></i>
                <input name="user" id="user" type="text"  readonly value="{$user->username}">
                <label for="user">Username</label>
              </div>
              <div class="input-field col s5">
                <i class="mdi-communication-vpn-key prefix"></i>
                <input name="pass" id="pass" type="password" readonly value="{$user->password}">
                <label for="pass">Password</label>
              </div>
              <div class="input-field col s2">
                <select name="role">
                  {foreach $roles as $role}
                  {if $role->role==$user->role}
                    <option selected value="{$role->role}">{$role->role}</option>
                  {else}
                    <option value="{$role->role}">{$role->role}</option>
                  {/if}
                  
                  {/foreach}
                </select>
                <label>Role</label>
              </div> 
            </div>
            <div class="row">
              <div class="input-field col s4">
                <i class="mdi-communication-business prefix"></i>
                <input name="idcard" id="idcard" type="text" value="{$user->identitycard}">
                <label for="idcard">CMND</label>
              </div>
              <div class="input-field col s4">
                <i class="mdi-communication-phone prefix"></i>
                <input name="phone" id="phone" type="text" value="{$user->mobiphone}">
                <label for="phone">Phone</label>
              </div>
              <div class="input-field col s4">
                <i class="mdi-action-today prefix"></i>
                <input name="ngaysinh" type="date" id="ngaysinh" value="{$user->birthdate}">
              </div>                                        
            </div>
            <div class="row">
              <div class="input-field col s6">
                <i class="mdi-action-account-balance-wallet prefix"></i>
                <input name="address" id="address" type="text" value="{$user->address}">
                <label for="address">Địa chỉ</label>
              </div>
              <div class="input-field col s6">
                <i class="mdi-communication-email prefix"></i>
                <input name="email" id="email" type="email" class="validate" value="{$user->email}">
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
</div>