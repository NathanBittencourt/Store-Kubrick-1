<?php

use App\Library\ControllerMain;
use App\Library\Redirect;
use App\Library\Session;

class Categoria extends ControllerMain
{
    public function index()
    {
        return $this->loadView(
            "Admin/listaCategoria",
            $this->model->lista()
        );  
    }

    /**
     * form
     *
     * @return void
     */
    public function form()
    {
        $this->loadHelper("Formulario");

        return $this->loadView(
            "Admin/formCategoria",
            $this->model->getById($this->getId())
        );
    }

    /**
     * insert
     *
     * @return void
     */
    public function insert()
    {
        if ($this->model->insert($this->getPost())) {
            Session::set("msgSuccess", "Categoria adicionada com sucesso.");
        } else {
            Session::set("msgError", "Falha tentar inserir uma nova categoria.");
        }

        Redirect::page("Categoria");
    }

    /**
     * update
     *
     * @return void
     */
    public function update()
    {
        if ($this->model->update($this->getPost())) {
            Session::set("msgSuccess", "Categoria alterada com sucesso.");
        } else {
            Session::set("msgError", "Falha tentar alterar a categoria.");
        }

        Redirect::page("Categoria");
    }
    /**
     * delete
     *
     * @return void
     */
    public function delete()
    {
        if ($this->model->delete($this->getPost('id'))) {
            Session::set("msgSuccess", "Categoria excluída com sucesso.");
        } else {
            Session::set("msgError", "Falha tentar excluir a categoria.");
        }

        Redirect::page("Categoria");
    }
}