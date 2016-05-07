{config_load file="define.conf"}
<!DOCTYPE html>
<html>
	{include file="head.tpl"}
	<body>
		<div id="fb-root"></div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6&appId=920421667994242";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
		
		{include file="navigation.tpl"}
		<!--content page -->
  		{block name='main'}{include file="main.tpl"}{/block}
		<!-- /content page -->
		{include file="footer.tpl"}
	</body>
</html>