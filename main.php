<?php

require_once 'FuncionarioCLT.php';
require_once 'FuncionarioPJ.php';

// Criando os funcionários
$f[0] = new FuncionarioCLT("Jorge","Jorge@gmail.com","19999999999","12345678900",3000);

$f[1] = new FuncionarioCLT(
    "Mayara","Mayra@gmail.com","19988888888","98765432100",4000);

$f[2] = new FuncionarioPJ("Julia","Julia@gmail.com","19977777777","11122233344",5000, 1200);

// Mostrando os dados
foreach ($f as $funcionario) {
    echo $funcionario->getDados();
}

?>