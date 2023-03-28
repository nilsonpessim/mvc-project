<?php

namespace App\View;

class View{

    private static $vars = [];

    public static function init($vars = [])
    {
        self::$vars = $vars;
    }

    private static function getContentView($view)
    {
        $error = "{$view} não existe!";
        $file = __DIR__ . '/../../view/'.$view.'.html';
        return file_exists($file) ? file_get_contents($file) : $error;
    }

    public static function render($view, $vars = [])
    {
        $contentView = self::getContentView($view);
        $vars = array_merge(self::$vars,$vars);

        $keys = array_keys($vars);
        $keys = array_map(function($item){
            return '{{'.$item.'}}';
        },$keys);
        
        return str_replace($keys, array_values($vars),$contentView);
    }
}