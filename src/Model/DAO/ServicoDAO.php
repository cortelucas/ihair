<?php


namespace APP\Model\DAO;

use App\Model\Domain\Servico;

class ServicoDAO
{
    private DAO $dao;

    public function __construct()
    {
        $this->dao = new DAO();
    }

    private function antiInjection($attr,$html = true){
        $attr = preg_replace(strtolower("/(from|select|insert|delete|where|drop table|show tables|\|--|\\\\)/"),"",$attr);
        if (!is_array($attr)) {
            $attr = trim($attr);
            $attr = strip_tags($attr);
            $attr = addslashes($attr);
        }
        return $attr;
    }

    public function inserir(Servico $servico)
    {
        try{
            $sql = "INSERT INTO serivo (idServico, descricao, preco) 
                    VALUES (:idServico, :descricao, :preco)";
            $p = $this->dao->getConexao()->prepare($sql);
            $p->bindValue(":idServico", $this->antiInjection($servico->getCodigo()));
            $p->bindValue(":descricao", $this->antiInjection($servico->getDescricao()));
            $p->bindValue(":preco", $this->antiInjection($servico->getPreco()));
            return $p->execute();
        } catch (\Exception $e){
            return 0;
        }
    }

    public function alterar(Servico $servico)
    {
        try{
            $sql = "UPDATE servico SET :idServico, :descricao, :preco, WHERE idServico :idServico";
            $p = $this->dao->getConexao()->prepare($sql);
            $p->bindValue(":idServico", $this->antiInjection($servico->getCodigo()));
            $p->bindValue(":descricao", $this->antiInjection($servico->getDescricao()));
            $p->bindValue(":preco", $this->antiInjection($servico->getPreco()));
            return $p->execute();
        } catch (\Exception $e){
            return 0;
        }
    }

    public function excluir(int $id)
    {
        try{
            $sql = "DELETE FROM servico WHERE idServico = :idServico";
            $p = $this->dao->getConexao()->prepare($sql);
            $p->bindValue(":id", $id);
            return $p->execute();
        } catch (\Exception $e){
            return 0;
        }
    }

    public function consultar()
    {
        try{
            $sql = "SELECT * FROM servico";
            return $this->dao->getConexao()->query($sql);
        } catch (\Exception $e){
            return 0;
        }
    }

    public function consultarPorId(int $id)
    {
        try{
            $sql = "SELECT * FROM servico WHERE idServico = :idServico";
            $p = $this->dao->getConexao()->prepare($sql);
            $p->bindValue(":idServico", $id);
            $p->execute();
            return $p->fetch();
        } catch (\Exception $e){
            return 0;
        }
    }
}