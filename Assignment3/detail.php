<?php
    $i = $_GET['post_id'];
    $v = 0;
    $content=file_get_contents('posts.json');
    $php_array=json_decode($content,true);

    function displayPost($file, $post_id)
    {
        $content=file_get_contents($file);
        $php_array=json_decode($content,true);
        echo '<title>'.$php_array[$post_id]['title'].'</title>';
        echo '<h1>'.$php_array[$post_id]['title'].'</h1>';
        echo '<h4>Authored by '.$php_array[$post_id]['author'].' on '.$php_array[$post_id]['date'].'</h4>';
        echo '<p>'.$php_array[$post_id]['content'].'</p>';
    }
    $fp=fopen('visitors.csv','a+');
    fputs($fp,implode(';',$php_array[$i]).PHP_EOL);
    fclose($fp);
?>
<script src="../bootstrap-5.3.3-dist/css/bootstrap-grid.css"></script>
<style>
	body{
		font-family:Arial, Helvetica, sans-serif;
	}
</style>
<html>
    
    <body>
        <div>
        <?php
            displayPost('posts.json',$i);
            $visitors=file('visitors.csv',FILE_SKIP_EMPTY_LINES);
            for($i=0;$i<count($visitors);$i++)$v++;
            echo "Total visits: ".$v;
        ?>
        </div>
        <div>
            <a class='button' href='index.php'>Go Back</a>
        </div>
    </body>
</html>