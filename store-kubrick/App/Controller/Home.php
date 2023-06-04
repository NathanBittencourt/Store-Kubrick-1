<?php

use App\Library\ControllerMain;

class Home extends ControllerMain
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $this->loadView('comuns/cabecalho');
        $this->loadView('comuns/menu');
        $this->loadView('home');
        $this->loadView('comuns/rodape');
    }

    public function produtos()
    {
        $this->loadView('produtos');
    }

    public function idealizador()
    {
        $this->loadView('idealizador');
    }
    
    public function quemsomos()
    {
        $this->loadView('quemsomos');
    }

    public function login()
    {
        $this->loadView('login');
    }
    public function criarConta()
    {
        $this->loadView('criarConta');
    }

    public function contato()
    {
        $this->loadView('contato');
    }

    public function carrinho()
    {
        $this->loadView('carrinho');
    }

    public function categoriaProdutos()
    {
        $this->loadView('categoriaProdutos');
    }

    public function formCategoriaProdutos()
    {
        $this->loadView('formCategoriaProdutos');
    }
}