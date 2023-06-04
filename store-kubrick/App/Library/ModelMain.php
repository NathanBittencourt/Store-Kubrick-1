<?php

namespace App\Library;

class ModelMain
{
    protected $db;
    public $table;
    public $validationRules;

    public function __construct()
    {
        $this->db = new Database(
            $_ENV['DB_CONNECTION'], 
            $_ENV['DB_HOST'], 
            $_ENV['DB_PORT'], 
            $_ENV['DB_DATABASE'], 
            $_ENV['DB_USERNAME'], 
            $_ENV['DB_PASSWORD']
        );

        $this->validationRules = [];
    }

    /**
     * lista
     *
     * @param string $orderBy 
     * @return array
     */
    public function lista($orderBy = 'id')
    {
        $rsc = $this->db->dbSelect("SELECT * FROM {$this->table} ORDER BY {$orderBy}");

        if ($this->db->dbNumeroLinhas($rsc) > 0) {
            return $this->db->dbBuscaArrayAll($rsc);
        } else {
            return [];
        }
    }

    /**
     * getById
     *
     * @param integer $id 
     * @return array
     */
    public function getById($id)
    {
        $rsc = $this->db->dbSelect(
            "SELECT * FROM {$this->table} WHERE id = ?",
            [$id]
        );

        if ($this->db->dbNumeroLinhas($rsc) > 0) {
            return $this->db->dbBuscaArray($rsc);
        } else {
            return [];
        }
    }
}