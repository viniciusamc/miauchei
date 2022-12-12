<?php

session_start();

include("../php/connection.php");

if(isset($_POST['heart_btn'])){

    $user_id = $_SESSION['id'];
    $post_id = $_POST['post_id'];


    //associar usuario com os posts 
    $stmt = $conn->prepare("INSERT INTO guards (user_id,post_id) VALUES (?,?)");
    $stmt->bind_param("ii",$user_id,$post_id);


    //aumentar o número de guards desse post
    $stmt1 = $conn->prepare("UPDATE posts_animais_adocao SET guards=guards+1 WHERE id = ?");
    $stmt1->bind_param("i",$post_id);


    $stmt->execute();
    $stmt1->execute();
   



    header("location: other_user_profile.php?success_message=You Guard this post");




}else{
    header("location: other_user_profile.php");
    exit;
}

?>