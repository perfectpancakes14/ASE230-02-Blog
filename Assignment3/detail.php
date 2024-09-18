<?php
    $i = $_GET['post_id'];

    $blog_posts=[
        [
            'title'=>'First PHP Blog',
            'content'=>'This is my first time creating a PHP blog. It\'s pretty cool!',
            'author'=>'Emery Frondorf',
            'date'=>'9/16/2024'
        ],
        [
            'title'=>'Second PHP Blog',
            'content'=>'This is my first time creating a PHP blog. It\'s pretty cool!',
            'author'=>'Logan Watts',
            'date'=>'9/16/2024'
        ],
        [
            'title'=>'Third PHP Blog',
            'content'=>'This is my first time creating a PHP blog. It\'s pretty cool!',
            'author'=>'David-Michael Davies',
            'date'=>'9/16/2024'
        ]
    ];


    function displayPost($post)
    {
        /*foreach($post as $line)
        {
            echo $line.'<br/>';
        }*/
        echo '<h1>'.$post['title'].'</h1>';
        echo '<h4>Authored by '.$post['author'].' on '.$post['date'].'</h4>';
        echo '<p>'.$post['content'].'</p>';
    }
    
?>
<script src="../bootstrap-5.3.3-dist/css/bootstrap-grid.css"></script>
<style>
	body{
		font-family:Arial, Helvetica, sans-serif ;
	}
</style>
<html>
    <title><?=$blog_posts[$i]['title']?></title>
    <body>
        <div>
        <?php
            displayPost($blog_posts[$i]);
        ?>
        </div>
        <div>
            <a class='button' href='index.php'>Go Back</a>
        </div>
    </body>
</html>