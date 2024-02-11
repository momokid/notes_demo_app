<?php


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

function urlIs($value){
    return $_SERVER["REQUEST_URI"] === $value;
}

