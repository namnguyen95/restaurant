<?php
/* Smarty version 3.1.29, created on 2016-04-25 06:34:59
  from "C:\wamp\www\assignment_web\views\contact\v_contact.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_571d9e73509810_12076406',
  'file_dependency' => 
  array (
    'b34c0c44a423ff30a5f3bd31b81589bf8680e006' => 
    array (
      0 => 'C:\\wamp\\www\\assignment_web\\views\\contact\\v_contact.tpl',
      1 => 1461558897,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_571d9e73509810_12076406 ($_smarty_tpl) {
?>
<h2 class="page-header">Liên hệ và đóng góp ý kiến với chúng tôi</h2>
<section id="home_contact">
<div class="row">
  <div class="form-group materail_input_block materail_input_error col-sm-6">
    <input type="email" class="form-control materail_input" placeholder="Họ tên:">
  </div>
  <div class="form-group materail_input_block materail_input_error col-sm-6">
    <input type="email" class="form-control materail_input" placeholder="Địa chỉ:">
  </div>
  <div class="form-group materail_input_block materail_input_error col-sm-6">
    <input type="email" class="form-control materail_input" placeholder="Số điện thoại:">
  </div>
  <div class="form-group materail_input_block materail_input_error col-sm-6">
    <input type="email" class="form-control materail_input" placeholder="Email (nếu có):">
  </div>
  <div class="form-group materail_input_block materail_input_error col-sm-12">
    <textarea class="form-control materail_input material_textarea" placeholder="Thông tin muốn liên hệ:"></textarea>
  </div>
  <div class="col-sm-6">
    <h3>Ý kiến của bạn về nhà hàng?</h3>
    <div class="material_checkbox_group">
      <input type="checkbox" id="checkbox" name="checkbox" class="material_checkbox material_checkbox_error" />
      <label class="material_label_checkbox" for="checkbox">Rất hài lòng</label>
    </div>
    <div class="material_checkbox_group">
      <input type="checkbox" id="checkbox2" name="checkbox" class="material_checkbox material_checkbox_error" />
      <label class="material_label_checkbox" for="checkbox2">Hài lòng</label>
    </div>
    <div class="material_checkbox_group">
      <input type="checkbox" id="checkbox3" name="checkbox" class="material_checkbox material_checkbox_error" />
      <label class="material_label_checkbox" for="checkbox3">Khá hài lòng</label>
    </div>
    <div class="material_checkbox_group">
      <input type="checkbox" id="checkbox4" name="checkbox" class="material_checkbox material_checkbox_error" />
      <label class="material_label_checkbox" for="checkbox4">Không hài lòng</label>
    </div>
  </div>
</div>
<button type="button" class="btn btn-default material_btn material_btn_danger">Gửi</button>
</section>
<section id="google_map">
<h2 class="page-header">Google Map</h2>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2692.618130044522!2d106.69185955111595!3d10.771572129512961!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0xa0c6b26424d56ad4!2zTmjDoCBIw6BuZyBUaeG7h2MgQ8aw4bubaSBS4bqhbmcgxJDDtG5n!5e0!3m2!1svi!2s!4v1459437275401" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
</section><?php }
}
