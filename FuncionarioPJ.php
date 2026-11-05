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
Nome: {$this->nome}
E-mail: {$this->email}
Telefone: {$this->telefone}
 CPF: {$this->cpf}
Valor do contrato: R$ {$this->valorContrato}
 Gastos: R$ {$this->gastos}
Lucro: R$ {$this->calcularLucro()}\ngi";
    }
}
?>