<?php
/* Smarty version 3.1.29, created on 2016-04-25 04:55:44
  from "C:\wamp\www\assignment_web\views\about\v_about.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_571d873037dc90_57342339',
  'file_dependency' => 
  array (
    'ee8b815188c5c7d2e7a1e0532deb01c47e584b2e' => 
    array (
      0 => 'C:\\wamp\\www\\assignment_web\\views\\about\\v_about.tpl',
      1 => 1461552942,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/about/v_giaithuong.tpl' => 1,
    'file:views/about/v_cooks.tpl' => 1,
  ),
),false)) {
function content_571d873037dc90_57342339 ($_smarty_tpl) {
?>
<div id="main">
  <div class="row" id="about_whyus_book">
    <div class="col-md-4 col-sm-6">
      <h2 class="page-header">Thông tin</h2>
      <img src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'url');?>
images/about/1.jpg" alt="Giới thiệu"> <br>
      <h3>Chất lượng, đam mê, tự hào</h3>
      <br>
      <p align="justify"> Được thành lập năm 2006, hàng <strong>Restaurant</strong> là nơi hội tụ những tinh hoa ẩm thực đa dạng của thế giới và truyền thống, tạo sự khác lạ, phong phú, thỏa mãn niềm đam mê ẩm thực của nhiều thực khách. </p>
      <br>
      <p align="justify"> Nhà hàng tọa lạc ở vị trí thuộc trung tâm thành phố Hồ Chí Minh, có diện tích rộng rãi và được chia thành nhiều khu vực với mục đích và các món ăn khác nhau: khu ẩm thực Việt Nam, khu ẩm thực thế giới, khu tiệc Buffet, khu tổ chức tiệc cưới, tiệc sinh nhật. Với những điều trên, nhà hàng chúng tôi tự tin sẽ đáp ứng được tốt nhất các yêu cầu đa dạng từ khách hàng. </p>
      <button type="button" class="btn btn-default material_btn material_btn_danger"> Xem thêm </button>
    </div>
    <div class="col-md-4 col-sm-6" id="whyus">
      <h2 class="page-header">Lý do chọn chúng tôi</h2>
      <ul>
        <li>
          <h3 class="small">Thực đơn đa dạng</h3>
          <p class="small" align="justify">Thực đơn đa dạng với các món ăn từ Bắc đến Nam,từ Đông đến Âu, số lượng trên 100 món ăn</p>
        </li>
        <li>
          <h3 class="small">Phong cách chuyên nghiệp</h3>
          <p class="small" align="justify">Các nhân viên được đào tạo chuyên nghiệp bài bản ở các trường dịch vụ uy tín,luôn tươi cười và thân thiện với khách hàng. </p>
        </li>
        <li>
          <h3 class="small">Chất lượng món ăn</h3>
          <p class="small" align="justify">Đội ngũ nhà bếp đông đảo, có chuyên môn cao, các bếp trưởng đều có kinh nghiệm trên 10 năm làm việc chuyên nghiệp tại các nhà hàng</p>
        </li>
        <li>
          <h3 class="small">Nhiều danh hiệu</h3>
          <p class="small" align="justify">Restaurant tự hào là nhà hàng có nhiều giải thưởng cao tại các cuộc thi nhà hàng, với hơn hàng chục bằng khen từ hội ẩm thực</p>
        </li>
      </ul>
    </div>
    <!-- giải thưởng -->
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:views/about/v_giaithuong.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <!-- end giải thưởng -->
  </div>
  <hr>
  <h2 class="page-header">Các bếp trưởng tiêu biểu</h2>
  <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:views/about/v_cooks.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div><?php }
}
