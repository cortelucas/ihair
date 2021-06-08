<?php


namespace APP\Models\DAO;

use App\Models\Domain\Cliente;

class ClienteDAO
{
    private DAO $dao;

    public function __construct()
    {
        $this->dao = new DAO();
    }

    private function antiInjection($attr, $html = true)
    {
        $attr = preg_replace(strtolower("/(from|select|insert|delete|where|drop table|show tables|\|--|\\\\)/"),
            "", $attr);
        if (!is_array($attr)) {
            $attr = trim($attr);
            $attr = strip_tags($attr);
            $attr = addslashes($attr);
        }
        return $attr;
    }

    public function inserir(Cliente $cliente)
    {
        try {
            $sql = "INSERT INTO cliente (idCliente, nome, rg, cpf, telefone, email, endereco, sexo, bonificacao) 
                    VALUES (:idCliente, :nome, :rg, :cpf, :telefone, :email, :endereco, :sexo, :bonificacao)";
            $p = $this->dao->getConexao()->prepare($sql);
            $p->bindValue(":idCliente", $this->antiInjection($cliente->getId()));
            $p->bindValue("nome", $this->antiInjection($cliente->getNome()));
            $p->bindValue("rg", $this->antiInjection($cliente->getRg()));
            $p->bindValue("cpf", $this->antiInjection($cliente->getCpf()));
            $p->bindValue("telefone", $this->antiInjection($cliente->getTelefone()));
            $p->bindValue("email", $this->antiInjection($cliente->getEmail()));
            $p->bindValue("endereco", $this->antiInjection($cliente->getEndereco()));
            $p->bindValue("sexo", $this->antiInjection($cliente->getSexo()));
            $p->bindValue("bonificacao", $this->antiInjection($cliente->getBonificacao()));
            return $p->execute();
        } catch (Exception $e) {
            return 0;
        }
    }

    public function alterar(Cliente $cliente)
    {
        try {
            $sql = "UPDATE cliente SET :idCliente, :nome, :rg, :cpf, :telefone, :email, :endereco, :sexo, :bonificacao WHERE idCliente = :idCliente";
            $p = $this->dao->getConexao()->prepare($sql);
            $p->bindValue(":idCliente", $this->antiInjection($cliente->getId()));
            $p->bindValue("nome", $this->antiInjection($cliente->getNome()));
            $p->bindValue("rg", $this->antiInjection($cliente->getRg()));
            $p->bindValue("cpf", $this->antiInjection($cliente->getCpf()));
            $p->bindValue("telefone", $this->antiInjection($cliente->getTelefone()));
            $p->bindValue("email", $this->antiInjection($cliente->getEmail()));
            $p->bindValue("endereco", $this->antiInjection($cliente->getEndereco()));
            $p->bindValue("sexo", $this->antiInjection($cliente->getSexo()));
            $p->bindValue("bonificacao", $this->antiInjection($cliente->getBonificacao()));
            return $p->execute();
        } catch (\Exception $e) {
            return 0;
        }
    }

    public function excluir(int $id)
    {
        try {
            $sql = "DELETE FROM cliente WHERE idCliente = :idCliente";
            $p = $this->dao->getConexao()->prepare($sql);
            $p->bindValue(":idCliente", $id);
            return $p->execute();
        } catch (\Exception $e) {
            return 0;
        }
    }

    public function consultar()
    {
        try {
            $sql = "SELECT * FROM cliente";
            return $this->dao->getConexao()->query($sql);
        } catch (\Exception $e) {
            return 0;
        }
    }

    public function consultarPorId(int $id)
    {
        try {
            $sql = "SELECT * FROM cliente WHERE idCliente = :idCliente";
            $p = $this->dao->getConexao()->prepare($sql);
            $p->bindValue(":idCliente", $id);
            $p->execute();
            return $p->fetch();
        } catch (\Exception $e) {
            return 0;
        }
    }
}