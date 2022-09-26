<?php

namespace App\Post;

class  PostsController
{

    public function __construct(PostRepo $postRepo)
    {
        $this->postRepo = $postRepo;
    }

    public function index(): void
    {
        $posts = $this->postRepo->fetchPosts();

        include __DIR__ . "/../../views/Post/index.php";
    }

    public function show(): void
    {
        $id = $_GET['id'];
        $posts = $this->postRepo->fetchPost($id);

        include __DIR__ . "/../../views/Post/post.php";
    }
}