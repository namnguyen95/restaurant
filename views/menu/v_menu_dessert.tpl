<section id="trang_mieng">
<div class="row">
	{foreach $foodDesserts as $foodDessert}
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail material_thumbnail"> <img src="{#url#}images/menu/{$foodDessert->image_food}" alt="Thumbnail label" />
      <div class="caption material_caption row">
        <div class="col-sm-3">
          <h3><span class="label label-info">{$foodDessert->unit_price}đ</span></h3>
        </div>
        <div class="col-sm-9">
          <h3><a href="content_food.php?id_food={$foodDessert->id_food}">{$foodDessert->name_food}</a></h3>
          <p>{$foodDessert->mini_content}</p>
        </div>
      </div>
    </div>
  </div>
	{/foreach}
</div>
</section>
<button type="button" class="btn btn-default material_btn material_btn_danger">Xem tất cả</button>