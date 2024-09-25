<?php
class Produto
{
    public function __construct(
        private string $nome = "",
        private string $descricao = "",
        private float $preco = 0,
        private int $estoque = 0,
        private $categoria = null
    ) {}

    public function getNome()
    {
        return $this->nome;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function getEstoque()
    {
        return $this->estoque;
    }


    public function getPreco()
    {
        return $this->preco;
    }

    public function getCategoria()
    {
        return $this->categoria;
    }

    public function setNome(string $nome)
    {
        $this->nome = $nome;
    }

    public function setDescricao(string $descricao)
    {
        $this->descricao = $descricao;
    }

    public function setPreco(float $preco)
    {
        $this->preco = $preco;
    }

    public function setEstoque(int $estoque)
    {
        $this->estoque = $estoque;
    }

    public function setCategoria(Categoria $categoria)
    {
        $this->categoria = $categoria;
    }
}
