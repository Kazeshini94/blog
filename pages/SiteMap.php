<?php

include"../init.php";
include "../views/layout/head.php";
?>

<title>Startseite</title>
</head>

<?php include "../views/layout/header.php"; ?>

<br/><br/>

<div class="container">

    <h1>Übersicht des Blogs</h1>
    <p class="lead">Das hier ist die Übersicht des Blogs.</p>

    <?php

    /** @var $container
     *
     * Container handles everything from creating postRepo
     * to handling the DB Query Request !!
     * (if an Instance of postRepo exists gets used if not a new one will be created)
     */
    $postRepo = $container->make("postRepo");
    $posts = $postRepo -> fetchPosts();
    ?>

    <ul>
        <?php foreach ($posts as $post): ?>
            <li>
                <?php echo "{$post->title}"; ?>
            </li>
        <?php endforeach; ?>
    </ul>
</div>


<?php include "../views/layout/footer.php" ?>