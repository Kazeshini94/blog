<?php
use App\Post\PostRepo;

include "../init.php";
    include "inc/head.php";
?>
<title>Startseite</title>
</head>

<body>

<?php include "inc/header.php";
?>

<br/><br/>

<div class="container">

    <h1>Startseite des Blogs</h1>
    <p class="lead">Das hier ist die Startseite des Blogs.</p>

    <?php
    $postRepo  = $container->make("postRepo");
    $res = $postRepo -> fetchPosts();
    ?>

    <ul>
        <?php foreach ($res as $row): ?>
            <li>
                <a href="post.php?id=<?php echo $row['id'] ; ?>"</a>
                <?php echo $row['title']; ?>
            </li>
        <?php endforeach;?>
    </ul>
</div>

<?php include "inc/footer.php" ; ?>
