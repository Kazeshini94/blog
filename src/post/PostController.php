<?php

namespace App\post;
use App\core\AbstractController;

/**
 * @property PostRepo $postRepo
 * @property CommentRepo $commentRepo
 */
class PostController extends AbstractController
{
    public function __construct(
        PostRepo $postRepo,
        CommentRepo $commentRepo )
    {
        $this-> postRepo = $postRepo;
        $this-> commentRepo = $commentRepo;
    }

    public function index(): void
    {
        $posts = $this->postRepo->all();

        $this->render("post/index", [
            "posts" => $posts
        ]);

//        We use the render Function to handle the Include !
//        include __DIR__ . "/../../views/post/index.php";
    }

    public function show(): void
    {
        // Gets Post id !
        $id = $_GET['id'];
        if (isset($_POST['content'])) {
            $content = $_POST['content'];
            $this -> commentRepo ->insertForPost($id, $content);
        }

        $post = $this->postRepo->find($id);
        $comments = $this->commentRepo->allByPost($id);

        $this->render("post/post", [
            "post" => $post,
            "comments" => $comments
        ]);
//        include __DIR__ . "/../../views/post/post.php";
    }
}