<?php

namespace App\post;
use App\core\AbstractRepo;

// Only need to Declare Table and Model we want to use!
class PostRepo extends AbstractRepo
{
    public function getTableName(): string
    {
        return "posts";
    }
    public function getModelName(): string
    {
        return "App\\post\\PostModel";
    }
}