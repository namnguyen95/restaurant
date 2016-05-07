{include file="views/post/v_breadcrumbs.tpl"}
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
        {foreach $posts as $post}
          <tr>
            <td><input type="checkbox" id="{$post->id_post}"/>
              <label for="{$post->id_post}">{$post->id_post}</label></td>
            <td>{$post->title}</td>
            <td>
              <img width="60" height="50" src="../public/images/post/{$post->image}" alt="img_post">
            </td>
            <td>
              <a href="editpost.php?id_post={$post->id_post}">
                <i class="mdi-action-settings"></i></a>&nbsp;&nbsp; 
              <a class="red-text text-lighten-1" onclick="return confirm('Bạn có chắc chắn xóa {$post->title} không ?')" href="delpost.php?id_post={$post->id_post}">
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