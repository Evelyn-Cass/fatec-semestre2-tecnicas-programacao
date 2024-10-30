<?php
class CategoriaDAO extends Conexao
{
    public function __construct()
    {
        parent::__construct();
    }

    public function inserir(Categoria $categoria)
    {
        $sql = "INSERT INTO categorias (descritivo) VALUES (?)";
        try {
            $stm = $this->db->prepare($sql);
            $stm->bindValue(1, $categoria->getDescritivo());
            $stm->execute();
            $this->db = null; // Fecha a conexão
            echo "Categoria inserida com sucesso!";
        } catch (PDOException $e) {
            echo "Código: " . $e->getCode();
            echo " .Mensagem: " . $e->getMessage();
        }
    }

    public function alterar() {}

    public function excluir() {}

    public function listar()
    {
        $sql = "SELECT * FROM categorias";
        try {
            $stm = $this->db->prepare($sql);
            $stm->execute();
            $this->db = null; // Fecha a conexão
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            echo "Código: " . $e->getCode();
            echo " .Mensagem: " . $e->getMessage();
            die();
        }
    }

    public function pesquisarPorId() {}
}
