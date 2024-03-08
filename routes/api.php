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

 

 