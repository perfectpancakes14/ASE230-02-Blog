<?php 

$blog_posts=[
	[
		'title'=>'First php Blog',
		'content'=>'This is my first time creating a php blog. It\'s pretty cool\!',
		'author'=>'Emery Frondorf',
		'date'=>'9/16/2024'
	],
	[
		'title'=>'Second php Blog',
		'content'=>'This is my first time creating a php blog. It\'s pretty cool\!',
		'author'=>'Logan Watts',
		'date'=>'9/16/2024'
	],
	[
		'title'=>'Third php Blog',
		'content'=>'This is my first time creating a php blog. It\'s pretty cool\!',
		'author'=>'David-Michael Davies',
		'date'=>'9/16/2024'
	]
]
?>
<html>
<head>
	<title>Our first php blog</title>
</head>
<body>
	<?php
	for($i=0;$i<count($blog_posts);$i++) {?>
		<h1><a href="detail.php?post_id=<?= $i ?>"><?= $blog_posts[$i]['title']?></a></h1>
	<?php }?>
</body>
</html>