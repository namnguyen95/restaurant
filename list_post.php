<?php 
	require 'controllers/c_post.php';
	$c_post = new C_post();
	$c_post->loadAllPosts();
