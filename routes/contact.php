<?php 

use App\Http\Response;
use App\Controller\Contact;

//ROTA RAIZ
$obRouter->get('/contact',[
    function(){
        return new Response(200,Contact::getContact());
    }
]);

$obRouter->post('/contact',[
    function($request){
        return new Response(200,Contact::setContact($request));
    }
]);