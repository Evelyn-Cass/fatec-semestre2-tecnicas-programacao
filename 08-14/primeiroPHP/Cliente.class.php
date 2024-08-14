<?php

class Cliente
{
    // Atributos
    public function __Contruct(
        public string $nome = "",
        public string $sobrenome = "",
        public string $cpf = ""
    ) {}


    // Metodos
    public function inserir()
    {
        echo "Estou no inserir";
    }
} //Fim da classe
