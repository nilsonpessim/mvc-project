 <?php 

// INCLUI CLASSES NA PAGINA
use App\Http\Middleware\Queue;
use App\Database\Database;
use App\View\View;


// CONSTANTES DE APPLICATION

define("APP_DESCRIPTION",  $GLOBALS['CONF_APPLICATION']["DESCRIPTION"]);
define("APP_AUTHOR",       $GLOBALS['CONF_APPLICATION']["AUTHOR"]);
define("APP_TIMEZONE",     $GLOBALS['CONF_APPLICATION']["TIMEZONE"]);
define("APP_MAINTENANCE",  $GLOBALS['CONF_APPLICATION']["MAINTENANCE"]);
define("APP_TEMPLATE",     $GLOBALS['CONF_APPLICATION']["TEMPLATE"]);


// CONSTANTES DE COMPANY - ABOUT -------------------------------------------------------------------------

/**
 * 
 * OBS: NÃO É NECESSÁRIO CRIAR UM ARQUIVO DE MODEL, SE AS CONFIGURAÇÕES 
 * FOREM ESTÁTICAS NO ARQUIVO DE CONFIGURAÇÃO, AQUI ESTAMOS APENAS MOSTRANDO A FORMA DE PASSAR OS VALORES 
 * PARA A CLASSE, E RECEBENDO O RETORNO.
 * 
 * SE USA QUANDO GERALMENTE ESSES DADOS VEM DO BANCO DE DADOS. :)
 * 
*/

// Instancia o Objeto de About
$obAbout = (new \App\Model\About);

// Atribui os valores de configurações na classe de About
$obAbout->setName($GLOBALS['CONF_COMPANY']["NAME"]);
$obAbout->setAddress($GLOBALS['CONF_COMPANY']["ADDRESS"]);
$obAbout->setMail($GLOBALS['CONF_COMPANY']["MAIL"]);
$obAbout->setPhone($GLOBALS['CONF_COMPANY']["PHONE"]);

// Retorna os valores de About
define("COMPANY_NAME"   , $obAbout->getName());
define("COMPANY_ADDRESS", $obAbout->getAddress());
define("COMPANY_MAIL"   , $obAbout->getMail());
define("COMPANY_PHONE"  , $obAbout->getPhone());


// CONFIGURAÇÃO DO BANCO DE DADOS
Database::config(
    $GLOBALS['CONF_DATABASE']["HOST"],
    $GLOBALS['CONF_DATABASE']["NAME"],
    $GLOBALS['CONF_DATABASE']["USER"],
    $GLOBALS['CONF_DATABASE']["PASS"],
    $GLOBALS['CONF_DATABASE']["PORT"]
);


// CONFIGURAÇÃO DA TIMEZONE
date_default_timezone_set(APP_TIMEZONE);


// CONFIGURAÇÕES DE URLS E DIRETÓRIOS
define("URL",     $GLOBALS['CONF_APPLICATION']["URL"]);


// INICIA A VIEW
View::init([
    'URL' => URL
]);


// MAPEAMENTO DE MIDDLEWARES
Queue::setMap([
    'maintenance'           => \App\Http\Middleware\Maintenance::class,
    'require-admin-logout'  => \App\Http\Middleware\RequireAdminLogout::class,
    'require-admin-login'   => \App\Http\Middleware\RequireAdminLogin::class
]);


// MAPEAMENTO DE MIDDLEWARES PADRÕES (EXECUTADO EM TODAS AS ROTAS)
Queue::setDefault([
    'maintenance'
]);

