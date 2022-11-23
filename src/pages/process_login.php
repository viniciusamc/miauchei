<?php

session_start();

include("../php/connection.php");


if(isset($_POST['login_btn'])){

    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $stmt = $conn->prepare("SELECT cod_usuario, username, email, image, posts, bio
                            FROM usuario WHERE email = ? AND senha = ?");

    $stmt->bind_param("ss",$email, $password);
    
    $stmt->execute();

    $stmt->store_result();

    //se tiver um usuario com esse email e essa senha
    if($stmt->num_rows() > 0){
        $stmt->bind_result($id,$username,$email,$image,$posts,$bio);
        $stmt->fetch();

        $_SESSION['id']=$id;
        $_SESSION['username']=$username;
        $_SESSION['email']=$email;
        $_SESSION['image']=$image;
        $_SESSION['posts']=$posts;
        $_SESSION['bio']=$bio;

        header('location: animais_perdidos.php');

    }else{

        header('location: login.php?error_message=Email/pasword incorrect');
        exit;

    }


}else{

    header('location: login.php?error_message=Error happened, try again');
    exit;


}



?>