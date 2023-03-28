<?php 

namespace App\Http\Middleware;

use App\Session\Login;
use App\Model\User;

class RequireAdminLogin{

    /**
     * Método responsável por executar o middleware
     *
     * @param Request $request
     * @param Closure $next
     * @return Response
     */
    public function handle($request, $next)
    {
        //VERIFICA SE O USUÁRIO ESTÁ LOGADO
        if(!Login::isLogged()){
            $request->getRouter()->redirect('/auth/login');
        }

        //CONTINUA A EXECUTAÇÃO
        return $next($request);
    }
}