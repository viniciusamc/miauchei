<?php

session_start();

include("../php/connection.php");

if(isset($_POST['heart_btn'])){

    $user_id = $_SESSION['id'];
    $post_id = $_POST['post_id'];


    //disassociar usuario com posts 
    $stmt = $conn->prepare("DELETE FROM guards WHERE user_id = ? AND post_id = ?");
    $stmt->bind_param("ii",$user_id,$post_id);


    //dimnuir o número de guards desse post
    $stmt1 = $conn->prepare("UPDATE posts_animais_adocao SET guards=guards-1 WHERE id = ?");
    $stmt1->bind_param("i",$post_id);


    $stmt->execute();
    $stmt1->execute();
   



    header("location: other_user_profile.php?success_message=You Unguard this post");




}else{
    header("location: other_user_profile.php");
    exit;
}

?>