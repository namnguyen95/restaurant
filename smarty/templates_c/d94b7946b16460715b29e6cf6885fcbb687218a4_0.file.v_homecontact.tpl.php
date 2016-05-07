<?php
/* Smarty version 3.1.29, created on 2016-04-25 04:25:35
  from "C:\wamp\www\assignment_web\views\home\v_homecontact.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_571d801f4d8395_63753822',
  'file_dependency' => 
  array (
    'd94b7946b16460715b29e6cf6885fcbb687218a4' => 
    array (
      0 => 'C:\\wamp\\www\\assignment_web\\views\\home\\v_homecontact.tpl',
      1 => 1461551119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_571d801f4d8395_63753822 ($_smarty_tpl) {
?>
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
        <input type="checkbox" id="checkbox3" name="checkbox" class="material_checkbox material_checkbox_error" />
        <label class="material_label_checkbox" for="checkbox3">Không hài lòng</label>
      </div>
    </div>
  </div>
  <button type="button" class="btn btn-default material_btn material_btn_danger">Gửi</button>
</section><?php }
}
