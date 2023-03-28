<?php 

use App\Http\Response;
use App\Controller\About;

//ROTA RAIZ
$obRouter->get('/about',[
    function(){
        return new Response(200,About::getAbout());
    }
]);