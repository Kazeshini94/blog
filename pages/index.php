<?php

include "../init.php";
include "../views/Layout/head.php";
?>


<title>Startseite</title>
</head>

<body>

<?php include "../views/Layout/header.php";
?>

<br/><br/>

<div class="container">

    <h1>Startseite des Blogs</h1>
    <p class="lead">Das hier ist die Startseite des Blogs.</p>
   <?php
   $postController = $container->make("postsController");
   $postController-> index();
   ?>

<?php include "../views/Layout/footer.php"; ?>
