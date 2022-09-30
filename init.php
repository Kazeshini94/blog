<?php
use App\core\Container;

require __DIR__."/autoload.php";

function e($str): string
{
    return htmlentities($str,ENT_QUOTES,'UTF-8');
}

// Container creates and requires necessary Classes & Interfaces
$container = new Container();