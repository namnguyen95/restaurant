<?php
/* Smarty version 3.1.29, created on 2016-05-04 15:52:33
  from "C:\wamp\www\assignment_web\admincp\smarty\templates\master_layout.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5729fea1c11856_65941979',
  'file_dependency' => 
  array (
    'f56d4cb925dc18f14cf56099a4d01747e07e4bdf' => 
    array (
      0 => 'C:\\wamp\\www\\assignment_web\\admincp\\smarty\\templates\\master_layout.tpl',
      1 => 1461598962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:pageloader.tpl' => 1,
    'file:top_header.tpl' => 1,
    'file:left_nav.tpl' => 1,
    'file:right_nav.tpl' => 1,
    'file:footer.tpl' => 1,
    'file:script.tpl' => 1,
  ),
),false)) {
function content_5729fea1c11856_65941979 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, false);
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "define.conf", null, 0);
?>

<!DOCTYPE html>
<html lang="en">
<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "head", array (
  0 => 'block_158655729fea1b4ac07_75594586',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<body>
<!-- Start Page Loading --> 
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:pageloader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
<!-- End Page Loading --> 

<!-- //////////////////////////////////////////////////////////////////////////// --> 

<!-- START HEADER -->
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:top_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
<!-- END HEADER --> 

<!-- //////////////////////////////////////////////////////////////////////////// --> 

<!-- START MAIN -->
<div id="main"> 
  <!-- START WRAPPER -->
  <div class="wrapper"> 
    
    <!-- START LEFT SIDEBAR NAV-->
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:left_nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <!-- END LEFT SIDEBAR NAV--> 
    
    <!-- //////////////////////////////////////////////////////////////////////////// --> 
    
    <!-- START CONTENT -->
    <section id="content"> 
      
      <!--start container-->
      <div class="container">
      <?php if (isset($_smarty_tpl->tpl_vars['view']->value)) {?>
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['view']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

      <?php }?>  
      </div>
      <!--end container--> 
    </section>
    <!-- END CONTENT --> 
    
    <!-- //////////////////////////////////////////////////////////////////////////// --> 
    <!-- START RIGHT SIDEBAR NAV-->
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:right_nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <!-- LEFT RIGHT SIDEBAR NAV--> 
    
  </div>
  <!-- END WRAPPER --> 
  
</div>
<!-- END MAIN --> 

<!-- //////////////////////////////////////////////////////////////////////////// --> 
<!-- START FOOTER -->
<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "footer", array (
  0 => 'block_289905729fea1bf6ae3_01402008',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<!-- END FOOTER --> 

<!-- ================================================
  Scripts
  ================================================ --> 
<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "script", array (
  0 => 'block_193595729fea1c051f2_83252202',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

</body>
</html><?php }
/* {block 'head'}  file:master_layout.tpl */
function block_158655729fea1b4ac07_75594586($_smarty_tpl, $_blockParentStack) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {/block 'head'} */
/* {block 'footer'}  file:master_layout.tpl */
function block_289905729fea1bf6ae3_01402008($_smarty_tpl, $_blockParentStack) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {/block 'footer'} */
/* {block 'script'}  file:master_layout.tpl */
function block_193595729fea1c051f2_83252202($_smarty_tpl, $_blockParentStack) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:script.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {/block 'script'} */
}
