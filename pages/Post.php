<?php
include "../init.php";
include "../views/layout/head.php";
?>

<title> Posts</title>
</head>

<?php
include "../views/layout/header.php";
?>

<br/><br/>

<div class="container-fluid text-center">

    <h1>Posts des Blogs</h1>
    <?php

    /** @var $container
     *
     * Container handles everything from creating postRepo
     * to handling the DB Query Request !!
     * (if an Instance of postRepo exists gets used if not a new one will be created)
     */

        $postController = $container->make("postsController");
        $postController-> show();
        ?>


    <?php
    include "../views/layout/footer.php";
    ?>


