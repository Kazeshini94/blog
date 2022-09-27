<?php
namespace App\core;

// Abstract Classes get used for multifunctional code that we need in every Controller
abstract class AbstractController
{
    protected function render($view, $values): void
    {
//        Never Use the Way below to set every Render manually !
//        if (isset($values["posts"])) {
//            $posts = $values["posts"];
//        }
//        if (isset($values["post"])) {
//            $post = $values["post"];
//        }

//        Still Ugly Code below !
//        foreach ($values AS $key => $value)
//        {
//            ${$key} = $value;
//        }

//        Ugly but needed ! does the same as the foreach above !
        extract($values);
        include __DIR__ . "/../../views/{$view}.php";
    }
}