<?php

namespace App\user;
use App\core\AbstractModel;

class UserModel extends AbstractModel
{
    public $id;
    public $name;
    public $password;
}