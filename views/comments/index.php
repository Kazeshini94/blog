<div class="container">

    <h1>Übersicht der Kommentare</h1>
<ul>
        <?php if (isset($comments)) {
            foreach ($comments as $comment): ?>
                <li>
                    <?php echo $comment->content; ?>
                </li>
            <?php endforeach;
        } ?>
</ul>