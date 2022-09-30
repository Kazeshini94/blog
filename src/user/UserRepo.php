<?php

namespace App\user;
use App\core\AbstractRepo;
use PDO;

class UserRepo extends AbstractRepo
{
    function getTableName(): string
    {
        return "user";
    }

    function getModelName(): string
    {
       return "App\\user\\UserModel";
    }

    function findByUsername($name)
    {
        $table = $this->getTableName();
        $model = $this->getModelName();
//    Prepared Statement
        $stm = $this->pdo->prepare("SELECT * FROM {$table} WHERE name = ? ");
        $stm->execute([$name]);
        $stm->setFetchMode(PDO::FETCH_CLASS, "{$model}");
        $user = $stm->fetch(PDO::FETCH_CLASS);
        return $user;
    }


}