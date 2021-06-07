<?php


namespace App\Models\Domain;


class Funcionario extends Pessoa
{
    private int $id;
    private float $salario;
    private float $comissao;

    /**
     * Funcionario constructor.
     * @param integer $id
     * @param float $salario
     * @param float $comissao
     */
    public function __construct(int $id, string $nome, string $rg, string $cpf, string $email, string $endereco, bool $sexo, float $salario, float $comissao)
    {
        parent::__construct($nome, $rg, $cpf, $email, $endereco, $sexo);
        $this->id = $id;
        $this->salario = $salario;
        $this->comissao = $comissao;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getSalario()
    {
        return $this->salario;
    }

    /**
     * @param mixed $salario
     */
    public function setSalario($salario): void
    {
        $this->salario = $salario;
    }

    /**
     * @return mixed
     */
    public function getComissao()
    {
        return $this->comissao;
    }

    /**
     * @param mixed $comissao
     */
    public function setComissao($comissao): void
    {
        $this->comissao = $comissao;
    }


}