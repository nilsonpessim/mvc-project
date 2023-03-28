<?php 

namespace App\Controller;
use App\View\View;

class Contact extends Page{

    public static function getContact()
    {
        $content = View::render(APP_TEMPLATE.'/contact',[
            "title" => "Contact"
        ]);

        return parent::getPage("Contact", $content);
    }

    public static function setContact($request)
    {
        $postVars = $request->getPostVars();

        print_r($postVars);
        exit;
    }

}