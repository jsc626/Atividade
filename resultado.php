<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $nota = $_POST["nota"];
     
    //nome
    if($nome == true){
        echo "Aluno:$nome<br>";
    }else{
        echo "Por favor:informe seu nome<br>";
    }
    
    //idade
    if($idade == true){
        echo "Idade:$idade<br>";
    }else{
        echo "Por favor:informe sua idade<br>";
    }
    
    //nota 
    
    if($nota >= 7){
        echo "Aprovado";
    }
    elseif($nota <= 5  && $nota < 7){
        echo "Recuperação";
    }
    elseif($nota < 5 ){
        echo "Reprovado";
    }
    else{
        echo "Por favor:informe sua nota";
    }
}