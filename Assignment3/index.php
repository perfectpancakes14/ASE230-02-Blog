<?php

function displayTitles($file)
    {
        $content=file_get_contents($file);
        $php_array=json_decode($content,true);
		for($i=0; $i<count($php_array); $i++)
		{
			echo "<h1><a href=detail.php?post_id=".$i.">".$php_array[$i]['title']."</a></h1>";
		}
        
    }
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
	displayTitles('posts.json');
	?>
</body>
</html>