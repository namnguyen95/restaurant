<div class="container">
	<div class="row" id="post">
		<div class="col-md-8">
			{if isset($view)}
				{include file="$view"}
			{/if}
		</div>
		<div class="col-md-4">
			{include file="temp_sidebar/sidebar.tpl"}
		</div>
	</div>
</div>