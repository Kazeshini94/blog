<?php

namespace App\post;

use App\core\AbstractRepo;
use PDO;

class CommentRepo extends AbstractRepo
{
    function getTableName(): string
    {
        return e("comments");
    }

    function getModelName(): string
    {
        return "App\\post\\CommentModel";
    }

// Enables us to Insert new Comments and Pair them to the corresponding Post
    function insertForPost($postId, $content)
    {
        $table = $this->getTableName();
        $stm = $this->pdo->prepare("INSERT INTO `{$table}` (`post_id`, `content`) VALUES (?, ?)");
        $stm->execute([
        $postId, $content
        ]);
    }
// Selects * Comments from each Post
    function allByPost($id): bool|array
    {
        $table = $this->getTableName();
        $model = $this->getModelName();

        $stm = $this->pdo->prepare("SELECT * FROM {$table} WHERE post_id = :id");
        $stm->execute(['id' => $id]);
        return $stm->fetchAll(PDO::FETCH_CLASS, "{$model}");
    }
}