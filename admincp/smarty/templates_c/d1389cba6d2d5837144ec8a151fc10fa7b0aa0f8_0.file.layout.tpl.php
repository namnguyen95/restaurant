<?php
/* Smarty version 3.1.29, created on 2016-05-04 15:52:36
  from "C:\wamp\www\assignment_web\admincp\smarty\templates\dashboard\layout.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5729fea41c0015_31111239',
  'file_dependency' => 
  array (
    'd1389cba6d2d5837144ec8a151fc10fa7b0aa0f8' => 
    array (
      0 => 'C:\\wamp\\www\\assignment_web\\admincp\\smarty\\templates\\dashboard\\layout.tpl',
      1 => 1461598975,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:master_layout.tpl' => 1,
    'file:dashboard/head.tpl' => 1,
    'file:dashboard/script.tpl' => 1,
    'file:dashboard/footer.tpl' => 1,
  ),
),false)) {
function content_5729fea41c0015_31111239 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "head", array (
  0 => 'block_208455729fea4199f76_85658718',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "script", array (
  0 => 'block_45145729fea41a7553_29586329',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "footer", array (
  0 => 'block_36355729fea41b3e46_88930736',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:master_layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'head'}  file:dashboard/layout.tpl */
function block_208455729fea4199f76_85658718($_smarty_tpl, $_blockParentStack) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:dashboard/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {/block 'head'} */
/* {block 'script'}  file:dashboard/layout.tpl */
function block_45145729fea41a7553_29586329($_smarty_tpl, $_blockParentStack) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:dashboard/script.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {/block 'script'} */
/* {block 'footer'}  file:dashboard/layout.tpl */
function block_36355729fea41b3e46_88930736($_smarty_tpl, $_blockParentStack) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:dashboard/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {/block 'footer'} */
}
