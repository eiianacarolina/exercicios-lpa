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

 