<?php

namespace App\Core;

use PDO;
use App\Post\PostRepo;

class Container
{
    private $recipes = [];
    private $instances = [];

    public function __construct()
    {
        $this->recipes = [
            'postRepo' => function() {
                return new PostRepo(
                    $this->make("pdo")
                );
            },
            'pdo' => function() {
                $pdo = new PDO (
                    'mysql:host=localhost:3307;dbname=blog;charset=utf8',
                    'blog',
                    'i)8s7MPCHR95.oxN'
                );
                $pdo -> setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
                return $pdo;
            }
        ];
    }
    public function make($name)
    {
        if (!empty($this->instances[$name])) {
            return $this->instances[$name];
        }

        if (isset($this->recipes[$name])) {
            $this->instances[$name] = $this->recipes[$name]();
        }
        return $this->instances[$name];
    }
}