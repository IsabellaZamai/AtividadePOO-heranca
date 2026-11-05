<?php 
//criando a classe cliente
abstract class Funcionario{
    //atributos
    protected string $nome;
    protected string $email;
    protected string $telefone;
    protected string $cpf;

    //medotos
    public function __construct(string $nome, string $email, string $telefone, string $cpf)
    {
        $this->nome = $nome;
        $this->email = $email;
        $this->telefone = $telefone;
        $this->cpf = $cpf;
    }
    protected function getDados(){}
}


?>