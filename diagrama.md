# Diagrama Herança FUncionarios

````mermaid
classDiagram
Funcionario<|--FuncionarioCLT
Funcionario<|--FuncionarioPJ
class Funcionario{
    # nome
    # email
    # telefone
    # CPF

    #getDados()
}

class FuncionarioCLT{
    -salario
    +receberFerias()
    +receberDecimoTerceiro()
    +calcularFGTS()
    +calcularINSS()


}
class FuncionarioPJ{
    -valorContrato
    -gastos
    +calcularLucro()
    +getDados()
}


````

Diferença:

+publico: todos e qualquer lugar do codigo.
-privado: somente pela propria classe.
#protegido: pela propria classe e pelos filhos e netos.



Diferencas entre os tipos de funcionarios:
Funcionario CLT->
-Recebe salário mensal.
-Tem direito a férias remuneradas + 1/3.
-Recebe 13º salário.
-Tem direito ao FGTS.
-Tem contribuição ao INSS.

Funcionario PJ->
Salario = Lucro - gastos
