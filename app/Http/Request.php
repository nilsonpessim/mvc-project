<?php 

namespace App\Http;

class Request{

    private $router;
    private $httpMethod;
    private $uri;
    private $queryParams = [];
    private $postVars = [];
    private $postFiles = [];
    private $headers = [];

    public function __construct($router)
    {
        $this->router      = $router;
        $this->queryParams = $_GET ?? [];
        $this->postVars    = $_POST ?? [];
        $this->postFiles   = $_FILES ?? [];
        $this->headers     = getallheaders();
        $this->httpMethod  = $_SERVER['REQUEST_METHOD'] ?? '';
        $this->setUri();
        
    }

    private function setUri()
    {
        $this->uri = $_SERVER['REQUEST_URI'] ?? '';

        $xURI = explode('?',$this->uri);
        $this->uri = $xURI[0];
    }

    public function getRouter()
    {
        return $this->router;
    }

    public function getHttpMethod()
    {
        return $this->httpMethod;
    }

    public function getUri()
    {
        return $this->uri;
    }

    public function getHeaders()
    {
        return $this->headers;
    }

    public function getQueryParams()
    {
        return $this->queryParams;
    }

    public function getPostVars()
    {
        return $this->postVars;
    }

    public function getPostFiles()
    {
        return $this->postFiles;
    }
}