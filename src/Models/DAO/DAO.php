<?php


namespace APP\Models\DAO;

use PDO;
class DAO
{
    private $conexao;

    /**
     * DAO constructor.
     * @param $conexao
     */
    public function __construct()
    {
        $this->conexao = new PDO("mysql:host=localhost; dbname=ihair_db", "fatec", "");
    }

    /**
     * @return mixed
     */
    public function getConexao()
    {
        return $this->conexao;
    }



}