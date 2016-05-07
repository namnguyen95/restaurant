{include file="views/listfood/v_breadcrumbs.tpl"}
<div id="hoverable-table">
  <h4 class="header">{$title}</h4>
  <div class="row">
    <div class="col s12 m12 l12">
      <div class="card-panel">
        <div class="row">
          <form method="post" action="" accept-charset="utf-8" enctype="multipart/form-data" class="col s12">
            <div class="row">
              <div class="input-field col s4">
                <input id="namefood" name="namefood" type="text" value="{$food->name_food}">
                <label for="namefood">Tên món ăn</label>
              </div>
              <div class="input-field col s4">
                <input id="unit_price" name="unit_price" type="text" value="{$food->unit_price}">
                <label for="unit_price">Đơn giá</label>
              </div> 
              <div class="input-field col s4">
                <select name="typefood">
                  {foreach $typeFoods as $typeFood}
                  <option value="{$typeFood->id_type}">{$typeFood->name_type}</option>
                  {/foreach}
                </select>
                <label>Loại món ăn</label>
              </div> 
            </div>

            <div class="row">
              <div class="input-field col s12">
                <textarea name="mini_content" id="mini_content" class="materialize-textarea" length="500">{$food->mini_content}</textarea>
                <label for="message">Tóm tắt</label>
              </div>    
              <div class="input-field col s12">
                <h6>Nội dung chi tiết</h6>
                <textarea name="content" id="content" class="materialize-textarea ckeditor" length="999999">
                  {$food->content}
                </textarea>
              </div>                                    
            </div>
            <div class="row">
              <div class="input-field col s5">
                <select name="cook">
                {foreach $cooks as $cook}
                {if $cook->id==$food->cook}
                  <option selected value="{$cook->id}">{$cook->fullname} ({$cook->birthdate})</option>
                {else}
                  <option value="{$cook->id}">{$cook->fullname} ({$cook->birthdate})</option>
                {/if}
                {/foreach}
                </select>
                <label>Đầu bếp</label>
              </div>                                    
              <div class="file-field input-field col s5">
                <input class="file-path validate" type="text"/>
                <div class="btn">
                  <span>Ảnh</span>
                  <input type="file" name="img_food"  />
                </div>
              </div>
              <div class="file-field input-field col s2">
                <input type="checkbox" name="today" id="today" />
                <label for="today">Trong ngày</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <ul class="loi">
                {if isset($loi)}
                {$loi}
                {/if}
                </ul>
                <button name="editfood" class="btn cyan waves-effect waves-light right" type="submit">Done!
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