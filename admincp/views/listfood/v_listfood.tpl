{include file="views/listfood/v_breadcrumbs.tpl"}

<div id="hoverable-table">
  <h4 class="header">Bảng danh sách món ăn</h4>
  <div class="row">
    <div class="input-field col s3">
      <input id="icon_prefix" type="text" class="validate">
      <label for="icon_prefix">Tìm kiếm</label>
    </div>
    <div class="input-field col s9">
      <div class="input-field col s9">
        <button class="btn cyan waves-effect waves-light " type="submit" name="action"> <i class="mdi-action-search"></i> </button>
      </div>
      <div class="input-field col s3"> <a href="addfood.php" class="center-align btn waves-effect waves-light yellow darken-4 right"> <i class="mdi-content-add left"></i>Add new </a> </div>
    </div>
  </div>
  <div class="row">
    <div class="col s12">
      <table class="hoverable tbpadding5">
        <thead>
          <tr>
            <th class="center-align" data-field="id">ID</th>
            <th style="width: 15%" data-field="name">Tên món</th>
            <th data-field="type">Loại</th>
            <th style="width: 30%" data-field="decript">Mô tả ngắn</th>
            <th data-field="price">Đơn giá</th>
            <th data-field="image">Ảnh</th>
            <th data-field="update">Sửa | Xóa</th>
          </tr>
        </thead>
        <tbody>
        {foreach $foods as $food}
          <tr>
            <td><input type="checkbox" id="1"/>
              <label for="1">{$food->id_food}</label></td>
            <td style="width: 15%">{$food->name_food}</td>
            <td>{$food->ten_loai}</td>
            <td style="width: 30%">{$food->mini_content}</td>
            <td>{$food->unit_price}</td>
            <td><img width='60' height="50" src="../{#url#}images/menu/{$food->image_food}" alt="img_food"></td>
            <td>
              <a href="editfood.php?id_food={$food->id_food}">
                <i class="mdi-action-settings"></i></a>&nbsp;&nbsp; 
              <a class="red-text text-lighten-1" onclick="return confirm('Bạn có chắc chắn xóa {$food->name_food} không ?')" href="delfood.php?id_food={$food->id_food}">
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