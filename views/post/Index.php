<div class="container">

    <h1>Startseite des Blogs</h1>
    <p class="lead">Das hier ist die Startseite des Blogs.</p>

<ul>
        <?php if (isset($posts)) {
            foreach ($posts as $post): ?>
                <li>
                    <a href="post?id=<?php echo $post->id; ?>"</a>
                    <?php echo $post->title; ?>
                </li>
            <?php endforeach;
        } ?>
</ul>