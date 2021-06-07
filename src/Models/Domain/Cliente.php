<?php


namespace App\Models\Domain;


class Cliente extends Pessoa
{
    private int $id;
    private int $bonificacao;

    public function __construct(int $id, string $nome, string $rg, string $cpf, string $endereco, bool $sexo, int $bonificacao )
    {
        parent::__construct($nome, $rg, $cpf, $endereco, $sexo);
        $this->id = $id;
        $this->bonificacao = $bonificacao;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getBonificacao(): int
    {
        return $this->bonificacao;
    }

    /**
     * @param int $bonificacao
     */
    public function setBonificacao(int $bonificacao): void
    {
        $this->bonificacao = $bonificacao;
    }
}
