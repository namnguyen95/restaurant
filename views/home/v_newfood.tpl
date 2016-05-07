<div class="row" id="whatnew">
  {foreach $foodNews as $foodNew}
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail material_thumbnail"> <img src="{#url#}images/menu/{$foodNew->image_food}" alt="Thumbnail label" />
      <div class="caption material_caption row">
        <div class="col-sm-3">
          <h3><span class="label label-info">{$foodNew->unit_price}</span></h3>
        </div>
        <div class="col-sm-9">
          <h3><a href="content_food.php?id_food={$foodNew->id_food}">{$foodNew->name_food}</a></h3>
          <p>{$foodNew->mini_content}</p>
        </div>
      </div>
    </div>
  </div>
  {/foreach}
</div>