<section id="khai_vi">
  <div class="row">
  {foreach $foodAppetizers as $foodAppetizer}
    <div class="col-sm-6 col-md-4">
      <div class="thumbnail material_thumbnail"> 
        <img src="{#url#}images/menu/{$foodAppetizer->image_food}" alt="Thumbnail label" />
        <div class="caption material_caption row">
          <div class="col-sm-3">
            <h3><span class="label label-info">{$foodAppetizer->unit_price}đ</span></h3>
          </div>
          <div class="col-sm-9">
            <h3>
              <a href="content_food.php?id_food={$foodAppetizer->id_food}">
              {$foodAppetizer->name_food}
              </a>
            </h3>
            <p>{$foodAppetizer->mini_content}</p>
          </div>
        </div>
      </div>
    </div>
  {/foreach}
  </div>
</section>
<button type="button" class="btn btn-default material_btn material_btn_danger">Xem tất cả</button>