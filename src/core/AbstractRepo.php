<?php
namespace App\core;

use App\post\PostModel;
use PDO;

// Abstract Classes get used for multifunctional code that we need in every Repository
abstract class AbstractRepo
{
    protected PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }
//    Loading Table and Model Name from the actual Repo this class gets used in!
    abstract function getTableName();
    abstract function getModelName();

    function all(): bool|array
    {
        $table = $this->getTableName();
        $model = $this->getModelName();

        $stm =$this->pdo->query("SELECT * FROM {$table}");
        return $stm -> fetchAll(PDO::FETCH_CLASS, "{$model}");
    }

    function find($id): PostModel
    {
        $table = $this->getTableName();
        $model = $this->getModelName();
//    Prepared Statement
        $stm = $this->pdo->prepare("SELECT * FROM {$table} WHERE id = ? ");
        $stm->execute([$id]);
        $stm->setFetchMode(PDO::FETCH_CLASS, "{$model}");
        return $stm->fetch(PDO::FETCH_CLASS);

//    Enables SQL - Injection! DO NOT USE THIS ! USE PREPARED STATEMENT ABOVE!
//    $query = $pdo->query("SELECT * FROM `posts` WHERE title='{$title}'");
//    return $query->fetch();
    }
}