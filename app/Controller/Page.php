<?php 

namespace App\Controller;

use App\View\View;

class Page{

    public static function getHeader()
    {
        return View::render(APP_TEMPLATE.'/header',[]);
    }

    public static function getNavbar()
    {
        return View::render(APP_TEMPLATE.'/navbar',[
            "home"    => "Home",
            "about"   => "About",
            "contact" => "Contact",
        ]);
    }

    // RENDERIZA A PÁGINA COMPLETA
    public static function getPage($title, $content)
    {
        return View::render(APP_TEMPLATE.'/page',[
            'title'   => $title,
            'navbar'  => self::getNavbar(),
            'header'  => self::getHeader(),
            'content' => $content
        ]);
    }

}