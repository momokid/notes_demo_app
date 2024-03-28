<?php

use Core\Response;

function dd($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';

    die();
}

//  dd($_SERVER["REQUEST_URI"]);

// if ($_SERVER["REQUEST_URI"] === "/demo/") {
//     echo "bg-gray-900 text-white";
// } else {
//     echo "text-gray-300";
// }

// echo $_SERVER["REQUEST_URI"] === "/demo/" ? "bg-gray-900 text-white" : "text-gray-300";


function urlIs($value)
{
    return $_SERVER["REQUEST_URI"] === $value;
}

 //Abort function
 function abort($code = 404)
 {
     http_response_code($code);
     require base_path("views/{$code}.php");
     die();
 }

function authorize($condition, $status = Response::FORBIDDEN)
{
    if (!$condition) {
        abort($status);
    }
}

function base_path($path)
{
    return BASE_PATH . $path;
}

function view($path, $attributes=[])
{
    extract($attributes);
    require base_path('views/' . $path);
}
