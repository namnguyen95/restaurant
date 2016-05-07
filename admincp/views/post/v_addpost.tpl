{include file="views/post/v_breadcrumbs.tpl"}
<div id="hoverable-table">
  <h4 class="header">{$title}</h4>
  <div class="row">
    <div class="col s12 m12 l12">
      <div class="card-panel">
        <div class="row">
          <form method="post" accept-charset="utf-8" enctype="multipart/form-data" class="col s12">
            <div class="row">
              <div class="input-field col s12">
                <input id="title" name="title" type="text">
                <label for="title">Tiêu đề</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <textarea name="mini_content" id="mini_content" class="materialize-textarea" length="500"></textarea>
                <label for="message">Mô tả ngắn</label>
              </div>    
              <div class="input-field col s12">
                <h6>Nội dung chi tiết</h6>
                <textarea name="content" id="content" class="materialize-textarea ckeditor" length="999999"></textarea>
              </div>                                    
            </div>
            <div class="row">
              <div class="file-field input-field col s5">
                <input class="file-path validate" type="text"/>
                <div class="btn">
                  <span>Ảnh</span>
                  <input type="file" name="img_post"  />
                </div>
              </div>
              <div class="file-field input-field col s2">
                <input type="checkbox" name="slideshow" id="slideshow" />
                <label for="slideshow">Slide show</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <ul class="loi">
                {if isset($loi)}
                {$loi}
                {/if}
                </ul>
                <button name="addpost" class="btn cyan waves-effect waves-light right" type="submit">   Done!
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
