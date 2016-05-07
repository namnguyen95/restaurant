<?php
/* Smarty version 3.1.29, created on 2016-05-04 15:52:33
  from "C:\wamp\www\assignment_web\admincp\smarty\templates\script.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5729fea1ef2fe1_12268991',
  'file_dependency' => 
  array (
    '180ac107106d0a5f3b4cde3961374e1463cd5000' => 
    array (
      0 => 'C:\\wamp\\www\\assignment_web\\admincp\\smarty\\templates\\script.tpl',
      1 => 1461597994,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5729fea1ef2fe1_12268991 ($_smarty_tpl) {
?>
<!-- jQuery Library --> 
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'url');?>
js/jquery-1.11.2.min.js"><?php echo '</script'; ?>
> 
<!--materialize js--> 
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'url');?>
js/materialize.min.js"><?php echo '</script'; ?>
> 
<!--scrollbar--> 
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'url');?>
js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"><?php echo '</script'; ?>
> 

<!--jvectormap--> 
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'url');?>
js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'url');?>
js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'url');?>
js/plugins/jvectormap/vectormap-script.js"><?php echo '</script'; ?>
> 

<!--plugins.js - Some Specific JS codes for Plugin Settings--> 
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'url');?>
js/plugins.js"><?php echo '</script'; ?>
> 

<!-- chartist --> 
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'url');?>
js/plugins/chartist-js/chartist.min.js"><?php echo '</script'; ?>
> 
<!-- Toast Notification 
<?php echo '<script'; ?>
 type="text/javascript">
// Toast Notification
/*$(window).load(function() {
    setTimeout(function() {
        Materialize.toast('<span>Hiya! I am a toast.</span>', 1500);
    }, 3000);
    setTimeout(function() {
        Materialize.toast('<span>You can swipe me too!</span>', 3000);
    }, 5500);
    setTimeout(function() {
        Materialize.toast('<span>You have new order.</span><a class="btn-flat yellow-text" href="#">Read<a>', 3000);
    }, 18000);
});*/

<?php echo '</script'; ?>
>--><?php }
}
