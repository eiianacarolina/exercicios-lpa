<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('receber/nome', function(Request $request){  
    $nome = $request->input('nome');  
    return $nome;  
});  

Route::get('nome/idade', function(Request $request){  
    $nome = $request->input('nome');  
    $idade = $request->input('idade');  
    return 'Meu nome é ' . $nome .  ', Tenho ' . $idade . ' anos de idade';  
});  

Route::get('nome/idade/cidade', function(Request $request){  
    $nome = $request->input('nome');  
    $anodenascimento = $request->input('anodenascimento');  
    $cidadeNatal = $request->input('cidadeNatal');  
    return 'Meu nome é ' . $nome .  ', Nasci no ano de ' . $anodenascimento . ',na cidade de '. $cidadeNatal;  
});  

Route::get('soma', function(request $request){ 
    $primeiroNumero = $request->input('primeiroNumero'); 
    $segundoNumero = $request->input('segundoNumero'); 
    $resultado = $primeiroNumero + $segundoNumero; 
    return $resultado; 
}); 

Route::get('subtração', function(request $request){ 
    $primeiroNumero = $request->input('primeiroNumero'); 
    $segundoNumero = $request->input('segundoNumero'); 
    $terceiroNumero = $request->input('terceiroNumero'); 
    $resultado = $primeiroNumero - $segundoNumero - $terceiroNumero; 
    return $resultado; 
}); 

Route::get('divisão', function(request $request){ 
    $primeirNoumero = $request->input('primeiroNumero'); 
    $segundoNumero = $request->input('segundoNumero'); 
    $resultado = $primeiroNumero / $segundoNumero; 
    return $resultado; 
}); 

Route::get('multiplicação', function(request $request){ 
    $primeiroNumero = $request->input('primeiroNumero'); 
    $segundoNumero = $request->input('segundoNumero'); 
    $resultado = $primeiroNumero * $segundoNumero; 
    return $resultado; 
}); 

Route::get('media', function(Request $request){ 
    $Nota1 = $request->input('Nota1'); 
    $Nota2 = $request->input('Nota2'); 
    $Nota3 = $request->input('Nota3'); 
    $Nota4 = $request->input('Nota4'); 
    $Nota5 = $request->input('Nota5'); 
    $resultado = ($Nota1 + $Nota2 + $Nota3 + $Nota4 + $Nota5)/5; 
    return $resultado; 
}); 

Route::get('dividir', function(Request $request){ 
    $primeiroNumero = $request->input('primeiroNumero'); 
    $segundoNumero = $request->input('segundoNumero'); 
    $resultado = $segundoNumero / $primeiroNumero; 
    return $resultado; 
}); 

Route::get('dobro', function(request $request){ 
    $numero1 = $request->input('numero1'); 
    $resultado = $numero1 *2; 
    return 'O dobro do ' . $numero1 . ' é igual a:' . $resultado; 
}); 

Route::get('retângulo', function(request $request){ 
    $base = $request->input('base'); 
    $altura = $request->input('altura'); 
    $resultado = $base * $altura; 
    return 'A área do retângulo é: ' . $resultado; 
}); 

Route::get('desconto', function(Request $request){ 
    $preçooriginal = $request->input('preço'); 
    $porcentagem = $request->input('porcentagem'); 
    $desconto = ($preçooriginal * $porcentagem) /100; 
    $resultado = $preçooriginal - $desconto; 
    return $resultado; 
}); 

Route::get('aumento', function(Request $request){ 
    $salarioAnterior = $request->input('SA'); 
    $percentualdeaumento = $request->input('PA'); 
    $valorAumento = ($salarioAnterior * $percentualdeaumento) /100; 
    $salarioatual = $salarioAnterior + $valorAumento; 
    return 'Salario Anterior: '. $salarioAnterior . ' , Percentual de aumento: '. $percentualdeaumento . ' , Salario Atual: '.  $salarioatual;  
}); 

Route::get('fidelidade', function(Request $request){ 
    $valorCompra = $request->input('VC'); 
    $pontos = $valorCompra /10; 
    return $pontos; 
}); 

Route::get('comissao', function(Request $request){ 
    $valorTotal = $request->input('VT'); 
    $comissão = ($valorTotal * 5) /100; 
    return 'O valor da Comissão é: '. $comissão; 
}); 

Route::get('dias', function(Request $request){ 
    $ND = $request->input('ND'); 
    $Hora = $ND * 24; 
    $Minutos = $Hora * 60; 
    $Segundos = $Minutos * 60; 
    return 'Hora: '. $Hora . ' , Minutos:'. $Minutos . ' , Segundos: '. $Segundos; 
}); 

 
 
 

 