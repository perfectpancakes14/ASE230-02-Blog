<?php
    $i = $_GET['post_id'];

    


    function displayPost($file, $post_id)
    {
        $content=file_get_contents($file);
        $php_array=json_decode($content,true);
        echo '<title>'.$php_array[$post_id]['title'].'</title>';
        echo '<h1>'.$php_array[$post_id]['title'].'</h1>';
        echo '<h4>Authored by '.$php_array[$post_id]['author'].' on '.$php_array[$post_id]['date'].'</h4>';
        echo '<p>'.$php_array[$post_id]['content'].'</p>';
    }
    
?>
<script src="../bootstrap-5.3.3-dist/css/bootstrap-grid.css"></script>
<style>
	body{
		font-family:Arial, Helvetica, sans-serif ;
	}
</style>
<html>
    
    <body>
        <div>
        <?php
            displayPost('posts.json',$i);
        ?>
        </div>
        <div>
            <a class='button' href='index.php'>Go Back</a>
        </div>
    </body>
</html>