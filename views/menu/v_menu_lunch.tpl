<section id="lunch">
  <div class="row">
    {foreach $foodMains as $foodMain}
    <div class="col-sm-6 col-md-4">
      <div class="thumbnail material_thumbnail"> <img src="{#url#}images/menu/{$foodMain->image_food}" alt="Thumbnail label" />
        <div class="caption material_caption row">
          <div class="col-sm-3">
            <h3><span class="label label-info">{$foodMain->unit_price}Đ</span></h3>
          </div>
          <div class="col-sm-9">
            <h3><a href="content_food.php?id_food={$foodMain->id_food}">{$foodMain->name_food}</a></h3>
            <p>{$foodMain->mini_content}</p>
          </div>
        </div>
      </div>
    </div>
    {/foreach}
  </div>
</section>
<button type="button" class="btn btn-default material_btn material_btn_danger">Xem tất cả</button>