<?php


session_start();

include("../php/connection.php");

// Se o id do usuario não está na session, ele não vai estar logado
if(!isset($_SESSION['id'])){
    header("location: login.php");
    exit;
}

		if(isset($_GET['post_id'])){

		    $post_id = $_GET['post_id'];
		    $stmt = $conn->prepare("SELECT * FROM posts_animais_perdidos WHERE id = ?");
		    $stmt->bind_param('i',$post_id); 
		    $stmt->execute();
		    $post_array = $stmt->get_result();


		}else{
		    header("location: index.php");
		    exit;
		}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar Post - Miauchei</title>

  <link rel="shortcut icon" href="../../favicon.ico" type="image/x-icon">
  
  <link rel="stylesheet" href="../../global.css">

  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

  <style>
.text-center{
    font-size:3rem;
}
form {
  display: flex;
  flex-direction: column;
  gap: 2.4rem;
  margin: 0 auto;
  width: 90%;
  max-width: 70rem;
}
label{
    font-size:1.5rem;
}
form h1 {
  font-size: 3.6rem;
  font-weight: 300;
  text-align: center;
}
input{
  width: 100%;
  display: flex;
  flex-direction: column;
  gap: .6rem;
  font-size: 2rem;
  padding: 1rem;
  height: 5rem;
}
#sexo{
  display:flex;
  font-size:2rem;  
}
.input:focus {
  border: 2px solid #000;  
}
.update-profile-btn{
    align-items:center;
    padding: 1.2rem 0;
    font-size: 2rem;
    border: none;
    border-radius: 0.8rem;
    cursor: pointer;
    background-color: #67B8E5;
}
  
  </style>
</head>
<body>
 
<h3 class="text-center">Editar Post</h3>
 

   <section class="camera-container">


      <?php foreach($post_array as $post){ ?>

       <section class="camera">
           <section class="camera-image">

               <form action="update_post_animais_perdidos.php" method="POST" enctype="multipart/form-data" class="camera-form">
                  <section class="form-group">
                       <label>Nova Foto do Pet:</label><input type="file" name="new_image" class="form-control" >
                        <input type="hidden" name="old_image_name" value="<?php echo $post['image']?>">
                        <input type="hidden" name="post_id" value="<?php echo $post['id'];?>">
                   </section>

                   <section class="form-group">
                       <label>Nome:</label><input type="text" name="nome_pet" class="form-control" placeholder="type nome_pet..." value="<?php echo $post['nome_pet']?>">
                   </section>

                   <section class="form-group">
                   <label>Raça:</label><input type="text" name="raca" class="form-control" placeholder="type raça..." value="<?php echo $post['raca']?>">
                   </section>

                   <section class="form-group">
                       <label for="sexo">Sexo*</label>
                        <select name="sexo" id="sexo" placeholder="Sexo" value="<?php echo $post['sexo']?>">
                        <option value="Macho">Macho</option>
                        <option value="Macho">Fêmea</option>
                    </select>
                   </section>

                    <section class="form-group">
                        <label for="data_perdeu">Data do desaparecimento:</label>
                        <input type="text" id="data_perdeu" name="data_perdeu" value="<?php echo $post['data_que_perdeu']?>">
                   </section>

                   <section class="form-group">
                   <label>Idade:</label><input type="number" name="idade" class="form-control" placeholder="type idade..." value="<?php echo $post['idade_pet']?>">
                   </section>

                   <section class="form-group">
                   <label>Descrição:</label><input type="text" name="descricao" class="form-control" placeholder="type descricao..." value="<?php echo $post['descricao']?>">
                   </section>

                   <section class="form-group">
                       <button type="submit" style="width: 100%;" name="update_post_btn" class="update-profile-btn">Atualizar Post</button>
                   </section>

               </form>
           </section>
       </section>


     <?php } ?>


   </section>





</body>
</html>