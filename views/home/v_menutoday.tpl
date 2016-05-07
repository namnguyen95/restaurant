<div class="row" id="menutoday">
  {foreach $foodTodays as $foodToday}
  <div class="col-lg-4 col-md-4 col-sm-12">
    <div class="thumbnail material_thumbnail"> 
      <img src="{#url#}images/menu/{$foodToday->image_food}" alt="Thumbnail label" />
      <div class="caption material_caption row">
        <div class="col-sm-3">
          <h3><span class="label label-info">{$foodToday->unit_price}đ</span></h3>
        </div>
        <div class="col-sm-9">
          <h3><a href="content_food.php?id_food={$foodToday->id_food}">{$foodToday->name_food}</a></h3>
          <p>{$foodToday->mini_content}</p>
        </div>
      </div>
    </div>
  </div>
  {/foreach}
</div>