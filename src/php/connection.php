<?php

     $dbHost = 'localhost';
     $dbUsername = 'root';
     $dbPassword = '';
     $dbName = 'db_miauchei';

     $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

     if($conexao->connect_errno){
         echo "Erro Conexão banco de dados";
     } else {
         echo "<script>console.log('conectado com sucesso');</script>";
     }

    // try{
    //     $conexao = new PDO('mysql:host=localhost;dbname=db_miauchei','root','');
    // }catch(PDOException $pe){
    //     echo('Erro de conexao:' .$pe->getMessage());
    // }catch(Exception $e){
    //     echo('Erro generico:' .$e->getMessage());
    // } 

?>