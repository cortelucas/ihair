<?php


namespace App\Models\Domain;


class Pessoa
{
    private $nome;
    private $rg;
    private $cpf;
    private $endereco;

    /**
     * Pessoa constructor.
     * @param $nome
     * @param $rg
     * @param $cpf
     * @param $endereco
     */
    public function __construct($nome, $rg, $cpf, $endereco)
    {
        $this->nome = $nome;
        $this->rg = $rg;
        $this->cpf = $cpf;
        $this->endereco = $endereco;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome): void
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getRg()
    {
        return $this->rg;
    }

    /**
     * @param mixed $rg
     */
    public function setRg($rg): void
    {
        $this->rg = $rg;
    }

    /**
     * @return mixed
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * @param mixed $cpf
     */
    public function setCpf($cpf): void
    {
        $this->cpf = $cpf;
    }

    /**
     * @return mixed
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * @param mixed $endereco
     */
    public function setEndereco($endereco): void
    {
        $this->endereco = $endereco;
    }
}