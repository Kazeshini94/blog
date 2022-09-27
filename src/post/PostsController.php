<?php

namespace App\post;

class  PostsController
{

    public function __construct(PostRepo $postRepo)
    {
        $this-> postRepo = $postRepo;
    }

    protected function render($view, $values): void
    {
//        Never Use the Way below to set every Render manually !
//        if (isset($values["posts"])) {
//            $posts = $values["posts"];
//        }
//        if (isset($values["post"])) {
//            $post = $values["post"];
//        }

//        Still Ugly Code below !
//        foreach ($values AS $key => $value)
//        {
//            ${$key} = $value;
//        }

//        Ugly but needed ! does the same as the foreach above !
           extract($values);
        include __DIR__ . "/../../views/{$view}.php";
    }

    public function index(): void
    {
        $posts = $this->postRepo->fetchPosts();

        $this->render("post/index", [
            "posts" => $posts
        ]);

//        We use the render Function to handle the Include !
//        include __DIR__ . "/../../views/post/Index.php";
    }

    public function show(): void
    {
        $id = $_GET['id'];
        $post = $this->postRepo->fetchPost($id);

        $this->render("post/post", [
            "post" => $post
        ]);
//        include __DIR__ . "/../../views/post/post.php";
    }
}