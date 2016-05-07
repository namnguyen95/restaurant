<?php
/* Smarty version 3.1.29, created on 2016-05-05 23:15:34
  from "C:\wamp\www\assignment_web\smarty\templates\master_layout.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_572bb7f623f444_40536774',
  'file_dependency' => 
  array (
    '128f9e278caac1893d47a02cccb6a03d2bb80706' => 
    array (
      0 => 'C:\\wamp\\www\\assignment_web\\smarty\\templates\\master_layout.tpl',
      1 => 1462482893,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:navigation.tpl' => 1,
    'file:main.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_572bb7f623f444_40536774 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, false);
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "define.conf", null, 0);
?>

<!DOCTYPE html>
<html>
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<body>
		<div id="fb-root"></div>
<div id="fb-root"></div>
<?php echo '<script'; ?>
>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6&appId=920421667994242";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));<?php echo '</script'; ?>
>
		
		<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<!--content page -->
  		<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'main', array (
  0 => 'block_30372572bb7f620f808_73459813',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

		<!-- /content page -->
		<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	</body>
</html><?php }
/* {block 'main'}  file:master_layout.tpl */
function block_30372572bb7f620f808_73459813($_smarty_tpl, $_blockParentStack) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {/block 'main'} */
}
