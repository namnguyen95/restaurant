<?php
/* Smarty version 3.1.29, created on 2016-04-25 04:01:53
  from "C:\wamp\www\assignment_web\views\home\v_slider.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_571d7a919b55c9_95622128',
  'file_dependency' => 
  array (
    '268fd8658f1806aa9220b46cc4cc256a086d18c9' => 
    array (
      0 => 'C:\\wamp\\www\\assignment_web\\views\\home\\v_slider.tpl',
      1 => 1461549604,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_571d7a919b55c9_95622128 ($_smarty_tpl) {
?>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel"> 
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active"> <img src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'url');?>
images/slide/bo_bit_tet.jpg" alt="slider">
      <div class="carousel-caption">
        <h1 class="textwhite">Bò bít tết thơm ngon từ thịt bò Mỹ</h1>
        <p class="hidden-sm hidden-xs"> Chế biến từ thịt bò Mỹ hảo hạng, là món ăn mà bạn không nên bỏ qua khi đến với chúng tôi! </p>
      </div>
    </div>
    <div class="item"> <img src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'url');?>
images/slide/pizza.jpg" alt="slider">
      <div class="carousel-caption">
        <h1 class="textwhite">Pizza to giá chỉ 98,000đ</h1>
        <p class="hidden-sm hidden-xs"> Áp dụng ngày thứ 5 & thứ 6 hàng tuần, để đặt trước có thể gọi số: 04- 3789.3788 </p>
      </div>
    </div>
  </div>
  <!-- Controls --> 
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> 
</div>
<!-- end slide --><?php }
}
