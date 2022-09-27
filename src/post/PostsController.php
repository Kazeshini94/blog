<?php

namespace App\post;
use App\core\AbstractController;

class PostsController extends AbstractController
{
    protected PostRepo $postRepo;

    public function __construct(PostRepo $postRepo)
    {
        $this-> postRepo = $postRepo;
    }

    public function index(): void
    {
        $posts = $this->postRepo->all();

        $this->render("post/index", [
            "posts" => $posts
        ]);

//        We use the render Function to handle the Include !
//        include __DIR__ . "/../../views/post/Index.php";
    }

    public function show(): void
    {
        $id = $_GET['id'];
        $post = $this->postRepo->find($id);

        $this->render("post/post", [
            "post" => $post
        ]);
//        include __DIR__ . "/../../views/post/post.php";
    }
}