<?php

namespace App\post;

use PDO;

class PostRepo
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    function fetchPosts(): bool|array
    {
        $stm =$this->pdo->query("SELECT * FROM `posts`");
        return $stm -> fetchAll(PDO::FETCH_CLASS, "App\\post\\PostModel");
    }

    function fetchPost($id): PostModel
    {
//    Prepared Statement
        $stm = $this->pdo->prepare("SELECT * FROM `posts` WHERE id = ? ");
        $stm->execute([$id]);
        $stm->setFetchMode(PDO::FETCH_CLASS, "App\\post\\PostModel");
        return $stm->fetch(PDO::FETCH_CLASS);

//    Enables SQL - Injection! DO NOT USE THIS ! USE PREPARED STATEMENT ABOVE!
//    $query = $pdo->query("SELECT * FROM `posts` WHERE title='{$title}'");
//    return $query->fetch();
    }
}