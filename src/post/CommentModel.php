<?php

namespace App\post;

use App\core\AbstractModel;
use ArrayAccess;

class CommentModel extends AbstractModel implements ArrayAccess
{
    public $id;
    public $postsId;
    public $content;
}
