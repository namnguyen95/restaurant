<div class="panel panel-default material_panel material_panel_danger">
	<div class="panel-heading material_panel_heading">Bài viết hot</div>
	{foreach $hotPosts as $hotPost}
	<div class="panel-body material_panel_body">
		<div class="media"> 
			<div class="media-left"> 
				<a href="content_post.php?id_post={$hotPost->id_post}"> 
					<img data-holder-rendered="true" src="public/images/post/{$hotPost->image}" style="width: 64px; height: 64px;" class="media-object" data-src="holder.js/64x64" alt="64x64"> 
				</a> 
			</div> 
			<div class="media-body"> 
				<a href="content_post.php?id_post={$hotPost->id_post}"><h4 class="media-heading">{$hotPost->title}</h4></a>
					<i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;{$hotPost->time_post}
			</div> 
		</div>
	</div>
	{/foreach}
</div>
<div class="panel panel-default material_panel material_panel_danger">
	<div class="panel-heading material_panel_heading">
		On Facebook
	</div>
	<div class="fb-page" data-href="https://www.facebook.com/restaurant333/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/restaurant333/"><a href="https://www.facebook.com/restaurant333/">Restaurant</a></blockquote></div></div>
</div>