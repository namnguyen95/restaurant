<?php
/* Smarty version 3.1.29, created on 2016-04-30 07:52:43
  from "C:\wamp\www\assignment_web\smarty\templates\temp_sidebar\layout.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5724482bb28fb3_24453082',
  'file_dependency' => 
  array (
    'af96e71c40742dc16c4871c0331487b39dd62472' => 
    array (
      0 => 'C:\\wamp\\www\\assignment_web\\smarty\\templates\\temp_sidebar\\layout.tpl',
      1 => 1461995562,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:master_layout.tpl' => 1,
    'file:temp_sidebar/main.tpl' => 1,
  ),
),false)) {
function content_5724482bb28fb3_24453082 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'main', array (
  0 => 'block_255545724482bb1dce8_99189956',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:master_layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'main'}  file:temp_sidebar/layout.tpl */
function block_255545724482bb1dce8_99189956($_smarty_tpl, $_blockParentStack) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:temp_sidebar/main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {/block 'main'} */
}
