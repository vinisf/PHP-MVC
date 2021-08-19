<?php

namespace App\core;

# Estrutura base da aplicação
class App
{
    public function __construct(){
        print_r($this->parseUrl());
    }
    
    # Converte o conteudo da URL em array separando por / cada posição
    public function parseUrl(){
        return explode('/', filter_var($_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'], FILTER_SANITIZE_URL));
    }
}