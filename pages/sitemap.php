<?php
include"../init.php";
include "../views/Layout/head.php";
?>

<title>Startseite</title>
</head>

<?php include "../views/Layout/header.php"; ?>

<br/><br/>

<div class="container">

    <h1>Übersicht des Blogs</h1>
    <p class="lead">Das hier ist die Übersicht des Blogs.</p>

    <?php
    $postRepo = $container->make("postsController");
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


<?php include "../views/Layout/footer.php" ?>