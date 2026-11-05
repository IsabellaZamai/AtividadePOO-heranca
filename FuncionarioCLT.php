<?php
require_once 'Funcionario.php';

// Criando a classe FuncionarioCLT
class FuncionarioCLT extends Funcionario {

    // Atributos
    private float $salario;

    // Métodos
    # [Override]
    public function __construct(string $nome, string $email, string $telefone, string $cpf, float $salario)
    {
        parent::__construct($nome, $email, $telefone, $cpf);

        $this->salario = $salario;
    }
    public function receberFerias()
    {
        return $this->salario + ($this->salario / 3);
    }
    public function receberDecimoTerceiro()
    {
        return $this->salario;
    }
    public function calcularFGTS()
    {
        return $this->salario * 0.08;
    }
    public function getDados()
    {
        return "
        Nome: {$this->nome}\n
        E-mail: {$this->email}\n
        Telefone: {$this->telefone}\n
        CPF: {$this->cpf}\n
        Salário: R$ {$this->salario}\n
        Férias: R$ {$this->receberFerias()}\n
        13º salário: R$ {$this->receberDecimoTerceiro()}\n
        FGTS: R$ {$this->calcularFGTS()}\n";
    }
}
?>