<?php

namespace App\core;

use PDO;
use App\post\PostRepo;
use App\post\PostsController;
use PDOException;

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
//            added Try-Catch so Error Message won`t reveal our Password
//            if someone trys to access over a wrong User
                try {
                    $pdo = new PDO (
                        'mysql:host=localhost:3307;dbname=blog;charset=utf8',
                        'blog',
                        'i)8s7MPCHR95.oxN'
                    );
                } catch (PDOException $e) {
                    echo "Verbindung zur Datenbank fehlgeschlagen!";
                    die();
                }
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