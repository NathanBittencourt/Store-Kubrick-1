<?php

use App\Library\ModelMain;

class CategoriaModel extends ModelMain
{
    public $table = "categoria";

    /**
     * insert
     *
     * @param array $dados 
     * @return boolean
     */
    public function insert($dados)
    {
        $rsc = $this->db->dbInsert(
            "INSERT INTO {$this->table}
            (descricao, statusRegistro)
            VALUES (?, ?)",
            [
                $dados['descricao'],
                $dados['statusRegistro']
            ]
        );

        if ($rsc > 0) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * update
     *
     * @param array $dados 
     * @return boolean
     */
    public function update($dados)
    {
        $rsc = $this->db->dbUpdate(
            "UPDATE {$this->table}
            SET descricao = ?, statusRegistro = ?
            WHERE id = ?",
            [
                $dados['descricao'],
                $dados['statusRegistro'],
                $dados['id']
            ]
        );

        if ($rsc > 0) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * delete
     *
     * @param integer $dados 
     * @return boolean
     */
    public function delete($id)
    {
        $rsc = $this->db->dbDelete(
            "DELETE FROM {$this->table} WHERE id = ?",
            [
                $id
            ]
        );

        if ($rsc > 0) {
            return true;
        } else {
            return false;
        }
    }
}