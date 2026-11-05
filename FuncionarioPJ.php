<?php
require_once 'Funcionario.php';

class FuncionarioPJ extends Funcionario {

    // Atributos
    private float $valorContrato;
    private float $gastos;

    // Métodos
    # [Override]
    public function __construct(string $nome, string $email, string $telefone, string $cpf, float $valorContrato, float $gastos)
    {
        parent::__construct($nome, $email, $telefone, $cpf);

        $this->valorContrato = $valorContrato;
        $this->gastos = $gastos;
    }

    public function calcularLucro()
    {
        return $this->valorContrato - $this->gastos;
    }

    public function getDados()
    {
        return "
        Nome: {$this->nome}\n
        E-mail: {$this->email}\n
        Telefone: {$this->telefone}\n
        CPF: {$this->cpf}\n
        Valor do contrato: R$ {$this->valorContrato}\n
        Gastos: R$ {$this->gastos}\n
        Lucro: R$ {$this->calcularLucro()}\n";
    }
}
?>