<?php 

use App\Http\Response;
use App\Controller\Home;

//ROTA RAIZ
$obRouter->get('/',[
    function(){
        return new Response(200,Home::getHome());
    }
]);