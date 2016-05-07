{include file="views/listuser/v_breadcrumbs.tpl"}
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
        {foreach $users as $user}
          <tr>
            <td><input type="checkbox" id="{$user->id}"/>
              <label for="{$user->id}">{$user->id}</label></td>
            <td>{$user->fullname}</td>
            <td>{$user->role}</td>
            <td>{$user->identitycard}</td>
            <td>{$user->birthdate}</td>
            <td>{$user->gender}</td>
            <td>
              <a href="edituser.php?id_user={$user->id}">
                <i class="mdi-action-settings"></i></a>&nbsp;&nbsp; 
              <a class="red-text text-lighten-1" href="deluser.php?id_user={$user->id}">
                <i class="mdi-action-highlight-remove"></i>
              </a>
            </td>
          </tr>
        {/foreach}
        </tbody>
      </table>
    </div>
  </div>
  <div class="row">
    <div class="col s5 offset-s4">
      {$paginationHTML}
    </div>
  </div>
</div>