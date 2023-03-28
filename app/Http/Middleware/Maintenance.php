<?php 

namespace App\Http\Middleware;

class Maintenance{

    public function handle($request, $next)
    {
        //VERIFICA O ESTADO DE MANUTENÇÃO DA PAGINA
        if(APP_MAINTENANCE == true){
            throw new \Exception("<h3> Estamos em manutenção. Tente novamente mais tarde </h3>", 200);
        }

        //EXECUTA O PROXIMO NIVEL DO MIDDLEWARE
        return $next($request);
    }

}