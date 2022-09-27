<div class="container-fluid text-center">

    <h1>Posts des Blogs</h1>

<div class="row row-cols-1 g-2">
        <div class="col-3">
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
        </div>
    </div>