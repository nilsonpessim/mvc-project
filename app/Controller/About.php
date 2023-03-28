<?php 

namespace App\Controller;
use App\View\View;

class About extends Page{

    public static function getAbout()
    {
        $content = View::render(APP_TEMPLATE.'/about',[
            "title"   => "About",
            "name"    => COMPANY_NAME,
            "address" => COMPANY_ADDRESS,
            "mail"    => COMPANY_MAIL,
            "phone"   => COMPANY_PHONE,

        ]);

        return parent::getPage("About", $content);
    }

}