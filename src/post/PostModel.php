<?php

namespace App\post;
use App\core\AbstractModel;
use ArrayAccess;

// Now we only need to define the Variables in here and Array Access gets handled over the Abstract Class!
class PostModel extends AbstractModel implements ArrayAccess
{
    public $id;
    public $title;
    public $content;
}