<?php


namespace App\Models\Domain;


class Pessoa
{
    private string $nome;
    private string $rg;
    private string $cpf;
    private string $endereco;
    private bool $sexo;

    /**
     * Pessoa constructor.
     * @param string $nome
     * @param string $rg
     * @param string $cpf
     * @param string $endereco
     * @param bool $sexo
     */
    public function __construct(string $nome, string $rg, string $cpf, string $endereco, bool $sexo)
    {
        $this->nome = $nome;
        $this->rg = $rg;
        $this->cpf = $cpf;
        $this->endereco = $endereco;
        $this->sexo = $sexo;
    }

    /**
     * @return string
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * @param string $nome
     */
    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    /**
     * @return string
     */
    public function getRg(): string
    {
        return $this->rg;
    }

    /**
     * @param string $rg
     */
    public function setRg(string $rg): void
    {
        $this->rg = $rg;
    }

    /**
     * @return string
     */
    public function getCpf(): string
    {
        return $this->cpf;
    }

    /**
     * @param string $cpf
     */
    public function setCpf(string $cpf): void
    {
        $this->cpf = $cpf;
    }

    /**
     * @return string
     */
    public function getEndereco(): string
    {
        return $this->endereco;
    }

    /**
     * @param string $endereco
     */
    public function setEndereco(string $endereco): void
    {
        $this->endereco = $endereco;
    }

    /**
     * @return bool
     */
    public function isSexo(): bool
    {
        return $this->sexo;
    }

    /**
     * @param bool $sexo
     */
    public function setSexo(bool $sexo): void
    {
        $this->sexo = $sexo;
    }


}