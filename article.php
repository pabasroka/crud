<?php 

include_once('includes/connection.php');
include_once('includes/article.php');

$article = new Article;

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $data = $article->fetch_data($id);

    ?>

        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>CMS</title>
            <link rel="stylesheet" href="css/style.css">
        </head>
        <body>
            
            <div class="container">
                <a href="index.php" id="logo">CMS</a>
            
            <h4>
                <?php echo $data['article_title']; ?> 
                <small>
                    posted <?php echo date('l jS', $data['article_timestamp']) ?>
                </small>

                <p><?php echo $data['article_content']; ?></p>

                <a href="index.php">&larr; BACK</a>
            </h4>

            </div>
        </body>
        </html>

    <?php
} else {
    header('Location: index.php');
    exit();
}

?>