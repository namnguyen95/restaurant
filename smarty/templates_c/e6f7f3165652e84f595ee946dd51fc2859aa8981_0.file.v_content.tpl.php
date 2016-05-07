<?php
/* Smarty version 3.1.29, created on 2016-05-03 12:15:31
  from "C:\wamp\www\assignment_web\views\post\v_content.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57287a4333ee24_64787196',
  'file_dependency' => 
  array (
    'e6f7f3165652e84f595ee946dd51fc2859aa8981' => 
    array (
      0 => 'C:\\wamp\\www\\assignment_web\\views\\post\\v_content.tpl',
      1 => 1462270528,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57287a4333ee24_64787196 ($_smarty_tpl) {
?>
<h3><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h3><br>
<?php echo $_smarty_tpl->tpl_vars['post']->value->content;?>

<?php }
}
