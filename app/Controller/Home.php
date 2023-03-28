<?php 

namespace App\Controller;
use App\View\View;

class Home extends Page{

    public static function getHome()
    {
        $content = View::render(APP_TEMPLATE.'/home',[
            "title" => "Home"
        ]);

        return parent::getPage("Home", $content);
    }

}