<?php

$max_lenght = 50;

function main() {
    
    if (!isset($_POST['generate_triangle'])) {
        return;
    }
    
    $number = $_POST['fnumber'];
        
    //  O valor inserido deve ser um número natural maior que zero,
    //  e limitei para 50 o valor máximo do comprimento do cateto 
    //  com o intuito de evitar estouro de memória
     
    if($number < 1 || $number > $GLOBALS['max_lenght'] ){        
        include "src/message.fragment.html";
        return;
    }     
    
    generate_triangle($number);    
}

function generate_triangle($lenght) {    
    
    for ($i = 0; $i <= $lenght; $i++) {        
        include "src/div_init.fragment.html"; 
        
        for ($j = 1; $j <= $i; $j++) {            
            include "src/box.fragment.html";
        }                
        
        include "src/div_finish.fragment.html"; 
    }     
}

main();