{include file="views/home/v_slider.tpl" }
<div id="main">
  <!-- món ăn hôm nay -->
  <h2 class="page-header">Món ăn hôm nay</h2>
  {include file="views/home/v_menutoday.tpl"}
  <button type="button" class="btn btn-default material_btn material_btn_danger">Xem thêm</button>
  <!-- end món ăn hôm nay -->
  <hr>
  
  <!-- món ăn mới -->
  <h2 class="page-header">Món ăn mới!</h2>
  {include file="views/home/v_newfood.tpl"}
  <button type="button" class="btn btn-default material_btn material_btn_danger">Xem thêm</button>
  <!-- end món ăn mới -->
  <hr>

  <h2 class="page-header">Câu nói</h2>
  {include file="views/home/v_talk.tpl"}
  <hr>

  <h2 class="page-header">Thông tin</h2>
  {include file="views/home/v_homeinfo.tpl"}
  <hr>

  <h2 class="page-header">Dịch Vụ</h2>
  {include file="views/home/v_homeservices.tpl"}
  <hr>

  <h2 class="page-header">Liên hệ và đóng góp ý kiến với chúng tôi</h2>
  {include file="views/home/v_homecontact.tpl"}
</div>