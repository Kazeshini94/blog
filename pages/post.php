<?php

use App\Post\PostRepo;

include "../init.php";
include "../views/Layout/head.php";


?>

<title> Posts</title>
</head>

<?php
include "../views/Layout/header.php";
?>

<br/><br/>

<div class="container-fluid text-center">

    <h1>Posts des Blogs</h1>
    <?php
        $postController = $container->make("postsController");
        $postController-> show();
        ?>


    <?php
    include "../views/Layout/footer.php";
    ?>


