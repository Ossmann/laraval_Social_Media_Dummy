<?php
    include 'classes/postSeeder.php';
    $posts = wap\PostSeeder::seed();
    var_dump($posts);
    exit;
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>title</title>
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body>
    <h1>Social Media</h1>
    <?php foreach($posts as $post) { ?>
      <div id="post">
          <div id="post-content">
            <div id="name">
              <?= $post['name'] ?>
            </div>
            <?= $post['message'] ?>
          </div>
          
      </div>
    <?php } ?>
  </body>
</html>