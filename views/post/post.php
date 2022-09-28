<div class="container-fluid text-center">

    <h1>Posts des Blogs</h1>

    <div class="row row-cols-1 g-2">
        <div class="col-3">
            <form method="post" action="post?id=<?php echo $post['id'] ?>">
                <textarea name="content" cols="20" rows="5" class="form-control"></textarea>
                <br>
                <input type="submit" value="Kommentar Hinzufügen" class="btn btn-primary">
            </form>
        </div>
        <div class="col-6">
            <div class="card">
                <h5 class="card-title"><b><?php echo $post['title']; ?></b></h5>
                <div class="card-body">
                    <p class="card-text"><?php echo nl2br($post['content']); ?></p>
                </div>
            </div>
        </div>
        <div class="col-3">
            <ul class="list-group">
                <?php if (isset($comments))
                    foreach ($comments as $comment): ?>
                        <li class="list-group-item">
                            <?php echo $comment->content; ?>
                        </li>
                    <?php endforeach;
                 ?>
            </ul>
        </div>
    </div>
