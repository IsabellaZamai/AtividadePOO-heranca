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
Nome: {$this->nome}
E-mail: {$this->email}
Telefone: {$this->telefone}
CPF: {$this->cpf}
Salário: R$ {$this->salario}
Férias: R$ {$this->receberFerias()}
13º salário: R$ {$this->receberDecimoTerceiro()}
FGTS: R$ {$this->calcularFGTS()}\n";
    }
}
?>