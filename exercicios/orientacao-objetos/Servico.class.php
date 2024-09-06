<?php

class Servico
{
    public function __construct(
        private string $descricao = "",
        private float $preco = 0
    ) {}

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function getPreco()
    {
        return $this->preco;
    }

    public function setPreco($preco)
    {
        $this->preco = $preco;
    }

    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }
}
