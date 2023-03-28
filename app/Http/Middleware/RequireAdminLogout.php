<?php 

namespace App\Http\Middleware;

use App\Session\Login;

class RequireAdminLogout{

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
        if(Login::isLogged()){
            $request->getRouter()->redirect('/dashboard');
        }

        //CONTINUA A EXECUTAÇÃO
        return $next($request);
    }
}