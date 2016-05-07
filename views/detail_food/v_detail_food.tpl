<h2 class="page-header">Chi tiết món ăn</h2>
<div class="row">
	<div class="col-sm-6">
		<img src="public/images/menu/{$food->image_food}" alt="img food">
	</div>
	<div class="col-sm-6">
		<h3>{$food->name_food}</h3>
		<h3><span class="label label-info">{$food->unit_price} đ</span></h3>
		<p>{$food->mini_content}</p>
    <div class="btn-group material_btn_group" style="margin-top: 30px">
      <button class="dropdown-toggle material_dropdown_btn material_btn material_btn_info" type="button" id="more_detail_food">
        Xem thêm chi tiết
        <span class="caret"></span>
      </button>
    </div>
	</div>
</div>

<div id="show_more_detail_food" class="row" style="margin-top: 50px;display: none;">
  <div class="col-sm-12">
    {$food->content}
  </div>
</div>
<script type="text/javascript">
  $(document).ready(function(){
    $('#more_detail_food').click(function(){
      $("#show_more_detail_food").toggle( "slow" );
    });
  });
</script>
<hr>
<h2 class="page-header">Món ăn cùng loại</h2>
<div class="row">
{foreach $foodSameTypes as $foodSameType}
	<div class="col-sm-4 col-xs-12">
    <div class="thumbnail material_thumbnail"> 
    <img src="public/images/menu/{$foodSameType->image_food}" alt="Thumbnail label" />
      <div class="caption material_caption row">
        <div class="col-xs-9">
          <h4>
            <a href="content_food.php?id_food={$foodSameType->id_food}">{$foodSameType->name_food}</a>
          </h4>
        </div>
        <span class="label label-info col-xs-3">{$foodSameType->unit_price} đ</span>
        <div class="col-xs-12">
          <p style="height: 100px;overflow: auto">{$foodSameType->mini_content}</p>
        </div>
      </div>
    </div>
  </div>
{/foreach}
</div>