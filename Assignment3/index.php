<?php

$blog_posts=[
	[
		'title'=>'First PHP Blog',
		'content'=>'This is my first time creating a PHP blog. It\'s pretty cool\!',
		'author'=>'Emery Frondorf',
		'date'=>'9/16/2024'
	],
	[
		'title'=>'Second PHP Blog',
		'content'=>'This is my first time creating a PHP blog. It\'s pretty cool\!',
		'author'=>'Logan Watts',
		'date'=>'9/16/2024'
	],
	[
		'title'=>'Third PHP Blog',
		'content'=>'This is my first time creating a PHP blog. It\'s pretty cool\!',
		'author'=>'David-Michael Davies',
		'date'=>'9/16/2024'
	]
]
?>
<html>
<head>
	<title>Our first PHP blog</title>
</head>
<script src="../bootstrap-5.3.3-dist/css/bootstrap-grid.css"></script>
<style>
	body{
		text-align:center;
		font-family:Arial, Helvetica, sans-serif
	}
</style>
<body>
	<?php
	for($i=0;$i<count($blog_posts);$i++) {?>
		<h1><a href="detail.php?post_id=<?= $i ?>"><?= $blog_posts[$i]['title']?></a></h1>
	<?php }?>
</body>
</html>