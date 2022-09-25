<?php

use App\Post\PostRepo;

include "../init.php";
include "inc/head.php";
?>

<title> Posts</title>
</head>

<?php
include "inc/header.php";
?>

<br/><br/>

<div class="container-fluid text-center">

    <h1>Posts des Blogs</h1>
    <pre>
        <?php
        $postRepo = $container->make("postRepo");
        $id = $_GET['id'];
        $post = $postRepo->fetchPost($id);
        //        var_dump($post);
        ?>
</pre>

    <div class="row row-cols-1 g-2">
        <div class="col-3">
        </div>
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><b><?php echo $post['title']; ?></b></h5>
                    <p class="card-text"><?php echo nl2br($post['content']); ?></p>
                </div>
            </div>
        </div>
        <div class="col-3">
        </div>
    </div>


    <?php
    include "inc/footer.php";
    ?>


