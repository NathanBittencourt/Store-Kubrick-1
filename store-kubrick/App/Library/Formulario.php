<?php

namespace App\Library;

class Formulario
{
    static public function titulo($titulo, $btNew = true, $btVoltar = false) 
    {
        $service = new Service();
        $html = '';

        if ($service->getAcao() == 'insert') {
            $titulo .= " - Inclusão";
        } elseif ($service->getAcao() == 'update') {
            $titulo .= " - Alteração";
        } elseif ($service->getAcao() == 'delete') {
            $titulo .= " - Exclusão";
        } elseif ($service->getAcao() == 'view') {
            $titulo .= " - Visualização";
        }

        $html = '<h2>' . $titulo . '</h2>';

        if ($btNew) {
            $html .= Formulario::botao('insert');
        }

        if ($btVoltar) {
            $html .= '<p>'. Formulario::botao('voltar') . '</p>';
        }

        $html .= Formulario::mensagem();

        return $html;
    }

    /**
     * botao
     *
     * @param string $tipo 
     * @param mixed $id 
     * @return string
     */
    static public function botao($tipo, $id = null)
    {
        $service = new Service();

        $html = "";
        $url = baseUrl() . $service->getController();

        if ($tipo == 'insert') {
            $html = '
                    <p>
                        <a href="' . $url . '/form/insert/0" title="Inclusão">Novo</a>
                    </p>';
        } elseif ($tipo == 'update') {
            $html = '<a href="' . $url . '/form/update/' . $id . '" title="Alteração">Alteração</a>&nbsp;|&nbsp;';
        } elseif ($tipo == 'delete') {
            $html = '<a href="' . $url . '/form/delete/' . $id . '" title="Exclusão">Exclusão</a>&nbsp;|&nbsp;';
        } elseif ($tipo == 'view') {
            $html = '<a href="' . $url . '/form/view/' . $id . '" title="Visualização">Visualizar</a>&nbsp;|&nbsp;';
        } elseif ($tipo == 'voltar') {
            $html = '<a href="' . $url . '" title="Voltar">Voltar</a>';
        }

        return $html;
    }

    /**
     * mensagem
     *
     * @return string
     */
    static public function mensagem()
    {
        $html = "";

        if (Session::get("msgSuccess") != false) {
            $html .= "<p>SUCESSO: " . Session::getDestroy("msgSuccess") . "</p>";
        }
    
        if (Session::get("msgError") != false) {
            $html .= "<p>ERROR: " . Session::getDestroy("msgError") . "</p>";
        }

        return $html;
    }


}