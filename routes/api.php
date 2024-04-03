<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Route;

Route::get('receber/nome', function (Request $request) {
    $nome = $request->input('nome');
    return $nome;
});

Route::get('nome/idade', function (Request $request) {
    $nome = $request->input('nome');
    $idade = $request->input('idade');
    return 'Meu nome é ' . $nome .  ', Tenho ' . $idade . ' anos de idade';
});

Route::get('nome/idade/cidade', function (Request $request) {
    $nome = $request->input('nome');
    $anodenascimento = $request->input('anodenascimento');
    $cidadeNatal = $request->input('cidadeNatal');
    return 'Meu nome é ' . $nome .  ', Nasci no ano de ' . $anodenascimento . ',na cidade de ' . $cidadeNatal;
});

Route::get('soma', function (request $request) {
    $primeiroNumero = $request->input('primeiroNumero');
    $segundoNumero = $request->input('segundoNumero');
    $resultado = $primeiroNumero + $segundoNumero;
    return $resultado;
});

Route::get('subtração', function (request $request) {
    $primeiroNumero = $request->input('primeiroNumero');
    $segundoNumero = $request->input('segundoNumero');
    $terceiroNumero = $request->input('terceiroNumero');
    $resultado = $primeiroNumero - $segundoNumero - $terceiroNumero;
    return $resultado;
});

Route::get('divisão', function (request $request) {
    $primeiroNumero = $request->input('primeiroNumero');
    $segundoNumero = $request->input('segundoNumero');
    $resultado = $primeiroNumero / $segundoNumero;
    return $resultado;
});

Route::get('multiplicação', function (request $request) {
    $primeiroNumero = $request->input('primeiroNumero');
    $segundoNumero = $request->input('segundoNumero');
    $resultado = $primeiroNumero * $segundoNumero;
    return $resultado;
});

Route::get('media', function (Request $request) {
    $Nota1 = $request->input('Nota1');
    $Nota2 = $request->input('Nota2');
    $Nota3 = $request->input('Nota3');
    $Nota4 = $request->input('Nota4');
    $Nota5 = $request->input('Nota5');
    $resultado = ($Nota1 + $Nota2 + $Nota3 + $Nota4 + $Nota5) / 5;
    return $resultado;
});

Route::get('dividir', function (Request $request) {
    $primeiroNumero = $request->input('primeiroNumero');
    $segundoNumero = $request->input('segundoNumero');
    $resultado = $segundoNumero / $primeiroNumero;
    return $resultado;
});

Route::get('dobro', function (request $request) {
    $numero1 = $request->input('numero1');
    $resultado = $numero1 * 2;
    return 'O dobro do ' . $numero1 . ' é igual a:' . $resultado;
});

Route::get('retângulo', function (request $request) {
    $base = $request->input('base');
    $altura = $request->input('altura');
    $resultado = $base * $altura;
    return 'A área do retângulo é: ' . $resultado;
});

Route::get('desconto', function (Request $request) {
    $preçooriginal = $request->input('preço');
    $porcentagem = $request->input('porcentagem');
    $desconto = ($preçooriginal * $porcentagem) / 100;
    $resultado = $preçooriginal - $desconto;
    return $resultado;
});

Route::get('aumento', function (Request $request) {
    $salarioAnterior = $request->input('SA');
    $percentualdeaumento = $request->input('PA');
    $valorAumento = ($salarioAnterior * $percentualdeaumento) / 100;
    $salarioatual = $salarioAnterior + $valorAumento;
    return 'Salario Anterior: ' . $salarioAnterior . ' , Percentual de aumento: ' . $percentualdeaumento . ' , Salario Atual: ' .  $salarioatual;
});

Route::get('fidelidade', function (Request $request) {
    $valorCompra = $request->input('VC');
    $pontos = $valorCompra / 10;
    return $pontos;
});

Route::get('comissao', function (Request $request) {
    $valorTotal = $request->input('VT');
    $comissão = ($valorTotal * 5) / 100;
    return 'O valor da Comissão é: ' . $comissão;
});

Route::get('dias', function (Request $request) {
    $ND = $request->input('ND');
    $Hora = $ND * 24;
    $Minutos = $Hora * 60;
    $Segundos = $Minutos * 60;
    return 'Hora: ' . $Hora . ' , Minutos:' . $Minutos . ' , Segundos: ' . $Segundos;
});

Route::get('total/compra', function (request $request) {
    $preçoProduto = $request->input('PP');
    $quantidade = $request->input('QP');
    $valorTotal = $preçoProduto * $quantidade;
    return $valorTotal;
});

Route::get('exemplo/condicao', function (Request $request) {
    $idade = $request->input('idade');
    $retorno = "";
    if ($idade >= 18) {
        $retorno = "Maior de idade";
    } else {
        $retorno = "Menor de idade";
    }
    return $retorno;
});

Route::get('ex 1', function (Request $request) {
    $numero = $request->input('numero');

    if ($numero > 10) {
        return "Número maior que dez";
    } else {
        return "Número menor que dez";
    }
});

Route::get('ex 2', function (Request $request) {
    $numero = $request->input('num');

    if ($numero > 0) {
        return "O número " . $numero .  " é positivo";
    } else if ($numero < 0) {
        return "O número " . $numero .  " é negativo";
    } else {
        return "O número " . $numero .  " é igual a zero";
    }
});

Route::get('ex 3', function (Request $request) {
    $idade = $request->input('idade');

    if ($idade >= 18) {
        return "Maior de idade";
    } else {
        return "Menor de idade";
    }
});

Route::get('ex 4', function (Request $request) {
    $numero = $request->input('numero');

    if ($numero % 2 == 0) {
        return 'par';
    } else {
        return "impar";
    }
});

Route::get('ex 5', function (Request $request) {
    $num1 = $request->input('num1');
    $num2 = $request->input('num2');

    if ($num1 > $num2) {
        return "O maior número é " . $num1;
    } else {
        return " O maior número é " . $num2;
    }
});

Route::get('6', function (Request $request) {
    $numero = $request->input('num1');

    if ($numero % 9 == 0) {
        return "O número é divisível por nove";
    } else {
        return "O número não é divisível por nove";
    }
});

Route::get('ex 7', function (Request $request) {
    $temp = $request->input('temperatura');

    if ($temp > 30) {
        return "Está quente!";
    } else {
        return "Não está quente.";
    }
});

Route::get('8', function (Request $request) {
    $num = $request->input('num');

    if ($num % 7 == 0) {
        return "O " . $num . " é múltiplo de sete";
    } else {
        return "O " . $num . " não é múltiplo de sete";
    }
});

Route::get('9', function (Request $request) {
    $idade = $request->input('idade');

    if ($idade < 12) {
        return "Você é uma criança";
    } else {
        return "Você não é uma criança";
    }
});

Route::get('10', function (Request $request) {
    $numero = $request->input('num');

    if ($numero > 0) {
        if ($numero % 2 == 0) {
            return "O número " . $numero .  " é positivo e par";
        }
        if ($numero % 2 != 0) {
            return " O número " . $numero . " é positivo e ímpar";
        }
    } 
    if ($numero < 0) {
        if ($numero % 2 == 0) {
            return "O número " . $numero .  " é negativo e par";
        }
        if ($numero % 2 != 0) {
            return " O número " . $numero . " é negativo e ímpar";
        }
    }
});

Route::get('11', function (Request $request) {
    $num = $request->input('num');

    if ($num > 100) {
        return "O " . $num . " é maior que 100";
    } else if ($num < 100) {
        return "O " . $num . " é menor que 100";
    } else {
        return "O " . $num . " é igual a 100";
    }
});

Route::get('12', function (Request $request) {
    $num = $request->input('num');

    if ($num % 6 == 0) {
        return "O " . $num . " é divisível por 6";
    } else {
        return "O " . $num . " não é divisível por 6";
    }
});

Route::get('13', function (Request $request) {
    $nome = $request->input('nome');

    if ($nome == "Alice") {
        return "Olá, Alice!";
    } else {
        return "Olá, " . $nome . "!";
    }
});

Route::get('14', function (Request $request) {
    $idade = $request->input('idade');
    $carteira = $request->input('carteira');

    if ($idade >= 18) {
        if ($carteira == "sim") {
            return "Você pode dirigir";
        } else {
            return "Você não pode dirigir";
        }
    } else {
        return "Você não pode dirigir";
    }
});

Route::get('16', function (Request $request) {
    $num1 = $request->input('num1');
    $num2 = $request->input('num2');

    if ($num1 != $num2){
     if ($num1 < $num2){
        return "O " . $num1 . " é menor que o " . $num2;    
    } else {
        return "O ". $num2 . " é menor que o " . $num1;
    }
} else{
    return  "O número são iguais";
} 
});

Route::get('17', function(Request $request){
    $nome = $request->input('nome');
    $idade = $request->input('idade');

    if($idade >= 18){
        return "Você é maior de idade,  " . $nome;
    } else {
        return "Você é menor de idade, " . $nome;
    }
});

Route::get('18', function(Request $request){
    $num1 = $request->input('num1');
    $num2 = $request->input('num2');

    if($num1 == 0){
     return "não é possível efetuar a divisão pois o primeiro número é zero";
    } else if($num2 == 0){
        return "não é possível efetuar a divisão pois o segundo número é zero";
    } else {
        return $num1 / $num2;
    }
    
});

Route::get('19', function(Request $request){
    $num1 = $request->input('num1');
    $num2 = $request->input('num2');

    if($num1 * $num2 > 100){
        return "O resultado da multiplicação é maior que 100";
    } else{
        return "O resultado da multiplicação é menor que 100";
    }
});

Route::get('20', function(Request $request){
    $num1 = $request->input('num1');
    $num2 = $request->input('num2');
    $somaDosNumeros = $num1 + $num2;

    if($somaDosNumeros % 2 ==0){
        return $num1 * $num2;
    } else{
        return $num1 / $num2;
    }

    
});

Route::get('atv1', function(Request $request){
    $nota1 = $request->input('nota1');
    $nota2 = $request->input('nota2');
    $nota3 = $request->input('nota3');
    $resultado = $nota1 + $nota2 + $nota3 / 3;

    if($resultado >= 7){
        return "Você foi aprovado :)";
    } else{
        return "Você não foi aprovado :(";
    }

});

Route::get('impostoDeRenda', function(Request $request){
    $renda = $request->input('renda');

    if($renda <= 1900){
        return "Isento de imposto";
    } 
    if($renda >= 1901){
        if($renda <= 2800){
         return "Seu imposto de renda é " . ($renda * 7) /100;
    }
    if($renda >= 2801){
        if($renda <= 3700)
        return "Seu imposto de renda é " . ($renda * 15) /100;
    } 
    if($renda > 3700){
        return "Seu imposto de renda é " . ($renda * 22) /100;
    }

    }
});

Route::get('anoBissexto', function(Request $request){
    $ano = $request->input('ano');

    if($ano % 4 == 0){
        return  $ano . " é bissexto";
    } else{
        return $ano . " não é bissexto";
    }
});

Route::get('atv4', function(Request $request){
    $preço = $request->input('preço');
    $desconto = ($preço * 15) /100;

    if($preço >= 1000){
        return "O valor total da compra é: R$". ($preço - $desconto);
    } else{
        return "O valor total da compra é: R$". $preço;
    }
});

Route::get('IMC', function(Request $request){
    $peso = $request->input('peso');
    $altura = $request->input('altura');
    $imc = $peso/($altura * $altura);

    if($imc < 18.5){
        return "Você está abaixo do peso :(";
    } 
    if($imc > 18.5){
        if($imc <= 24.9 ){
            return "Seu peso está normal :)";
        }
    }
    if($imc > 25){
        if($imc <= 29.9){
            return "Seu peso está acima do normal :(";
        }
    }
    if($imc > 30){
        if($imc <= 34.9){
            return "Obeso grau 1 :(";
        }
    }
    if($imc > 35){
        if($imc <= 40){
            return "Obeso grau 2 :(";
        }
    }
    if($imc > 40){
        return "Obeso grau 3 :(";
    }
});
    
Route::get('operario', function(Request $request){
    $salario = $request->input('salario');
    $codigo = $request->input('codigo');
    $cod1 = ($salario * 5) /100;
    $cod2 = ($salario * 10) /100;
    $cod3 = ($salario * 15) /100;
    $cod4 = ($salario * 20) /100;
    

    if($codigo == 1){
        return "Seu salário é: R$" . ($cod1 + $salario);
    }
    if($codigo == 2){
        return "Seu salário é: R$" . ($cod2 + $salario);
    }
    if($codigo == 3){
        return "Seu salário é: R$" . ($cod3 + $salario);
    }
    if($codigo == 4){
        return "Seu salário é: R$" . ($cod4 + $salario);
    }
});