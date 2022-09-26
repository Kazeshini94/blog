
<ul>
        <?php if (isset($posts)) {
            foreach ($posts as $post): ?>
                <li>
                    <a href="/pages/Post.php?id=<?php echo $post->id; ?>"</a>
                    <?php echo $post->title; ?>
                </li>
            <?php endforeach;
        } ?>
</ul>