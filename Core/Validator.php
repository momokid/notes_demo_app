<?php

 namespace Core;

class Validator{

    public static function string($value, $min=1, $max=INF){
        return strlen(trim($value)) >$min && strlen($value) < $max;
    }

    public static function email($value){
        filter_var($value, FILTER_VALIDATE_URL);
    }
}