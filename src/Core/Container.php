<?php

namespace App\Core;

use PDO;
use App\Post\PostRepo;
use App\Post\PostsController;

class Container
{
    private array $recipes;
    private array $instances;

    public function __construct()
    {
        $this->recipes = [
            'postsController' => function () {
                return new PostsController(
                  $this->make("postRepo")
                );
            },
            'postRepo' => function() {
                return new PostRepo(
                    $this->make("pdo")
                );
            },
            'pdo' => function() {
                $pdo = new PDO (
                    'mysql:host=localhost:3307;dbname=blog;charset=utf8',
                    'blog',
                    'qE5LVPz@Zz[t*CnU'
                );
                $pdo -> setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
                return $pdo;
            }
        ];
    }

//    creates Instances of Objects depending on the given Recipe!  See Index.php for use-case!
//    with this function you don`t have to create a function for every private Parameter !
//    declare the specifics of any new Parameter + Function within the Recipe List! (BluePrint for Variables)
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