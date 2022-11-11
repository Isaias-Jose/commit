<?php
namespace core\controladores;

use core\classes\Functions;

class Main{
    public function index(){

        $dados = [
            'titulo' => 'Este é o titulo',
            'clientes' => ['joão', 'ana', 'carlos']
        ];

        Functions::Layout([
            'layouts/header',
            'inicial',
            'layouts/footer',
        ], $dados);
    }

    public function loja(){
        echo 'Loja!!!';
    }
}
?>