<?php
session_start();

include("../php/connection.php");


if(isset($_POST['signup_btn'])){


    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];


    //fazer as senhas baterem
    if($password != $password_confirm){
        header('location: signup.php?error_message=passwords dont match');
        exit;
    }

    //checar se o usuario existe
    $stmt = $conn->prepare("SELECT cod_usuario FROM usuario WHERE username = ? OR email = ?");
    $stmt->bind_param("ss",$username,$email);
    $stmt->execute();
    $stmt->store_result();

    if($stmt->num_rows() > 0){
        header("location: signup.php?error_message=User already exists");
        exit;
    }else{
        $stmt = $conn->prepare("INSERT INTO usuario (username,email,senha) VALUES (?,?,?)");
        $stmt->bind_param("sss",$username,$email,md5($password));

        //se o usuario for criado com sucesso, retornar info do usuario
        if($stmt->execute()){
        $stmt = $conn->prepare("SELECT cod_usuario,username,email,image,posts,bio FROM usuario WHERE username = ?");
        $stmt->bind_param("s",$username);
        $stmt->execute();
        $stmt->bind_result($id,$username,$email,$image,$posts,$bio);
        $stmt->fetch();

        $_SESSION['id']=$id;
        $_SESSION['username']=$username;
        $_SESSION['email']=$email;
        $_SESSION['image']=$image;
        $_SESSION['posts']=$posts;
        $_SESSION['bio']=$bio;

        header("location: animais_perdidos.php");

        }else{
            header('location: signup.php?error_message=error occured');
            exit;
        }
    }




       


}else{

  header("location: signup.php?error_message=error occured");

}




?>