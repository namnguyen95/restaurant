<?php
/* Smarty version 3.1.29, created on 2016-05-05 22:13:00
  from "C:\wamp\www\assignment_web\admincp\views\post\v_addpost.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_572ba94c11aa50_01675385',
  'file_dependency' => 
  array (
    '976c7eb0f14ad0478f87df778747dca0e87869e5' => 
    array (
      0 => 'C:\\wamp\\www\\assignment_web\\admincp\\views\\post\\v_addpost.tpl',
      1 => 1462249693,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/post/v_breadcrumbs.tpl' => 1,
  ),
),false)) {
function content_572ba94c11aa50_01675385 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:views/post/v_breadcrumbs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div id="hoverable-table">
  <h4 class="header"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h4>
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
                <?php if (isset($_smarty_tpl->tpl_vars['loi']->value)) {?>
                <?php echo $_smarty_tpl->tpl_vars['loi']->value;?>

                <?php }?>
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
<?php }
}
