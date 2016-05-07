<h2 class="page-header">Danh sách bài viết</h2>
<ul>
{foreach $posts as $post}
	<li>
		<div class="row">
			<div class="col-sm-4">
				<img src="{#url#}/images/post/{$post->image}" alt="images_post">
			</div>
			<div class="col-sm-8">
				<a href="content_post.php?id_post={$post->id_post}"><h3 style="color:#E44">{$post->title}</h3></a>
				<p>
					{$post->mini_content}
				</p>
			</div>
			<div class="col-sm-10 col-sm-offset-1" style="text-align: right">
				<p>
					<i class="fa fa-calendar" aria-hidden="true"></i> {$post->time_post}&nbsp;|&nbsp;
					<i class="fa fa-user" aria-hidden="true"></i> {$post->author}&nbsp;|&nbsp;
					<i class="fa fa-eye" aria-hidden="true"></i> {$post->n_views}
				</p>
			</div>
		</div>
	</li>
	<hr>
	{/foreach}
</ul>
<div class="pager_center">
	{$paginationHTML}
</div>


