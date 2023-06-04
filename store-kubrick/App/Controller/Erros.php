<?php

use App\Library\ControllerMain;

class Erros extends ControllerMain
{
    /**
     * controllerNotFound
     *
     * @return void
     */
    public function controllerNotFound()
    {
        $this->loadView('comuns/erros', [
            'msgError' => "<div class='alert alert-danger text-center my-5'>Controller não Localizado.</div>"
        ]);
    }

    /**
     * methodNotFound
     *
     * @return void
     */
    public function methodNotFound()
    {
        $this->loadView('comuns/erros', [
            'msgError' => "<div class='alert alert-danger text-center my-5 '>Método não localizado no controller</div>"
        ]);
    }

}
