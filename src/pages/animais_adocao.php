<?php


session_start();

// Se o id do usuario não está na session, ele não vai estar logado
if(!isset($_SESSION['id'])){
    header("location: login.php");
    exit;
}


?>
<?php 
session_start();
include("../php/connection.php");
include('../php/get_latest_posts_adocao.php'); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Animais Adoção - Miauchei</title>

  <link rel="shortcut icon" href="../../favicon.ico" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  
  <link rel="stylesheet" href="../../global.css">
  <link rel="stylesheet" href="../styles/animais_perdidos/styles.css">
  <link rel="stylesheet" href="../styles/components/header/styles.css">
</head>
<body>

<header>
    <div class="header-content">
      <nav>
        <a href="../../index.html" id="logo"><img src="../images/iconsMiauchei/miauchei.svg" alt="Logo Miauchei"></a>
        <button id="btn-mobile"><img src="src/images/svg/menubar.svg" alt=""></button>
        <ul id="menu-header">
          <li><a href="../../index.html">Início</a></li>
          <li><a href="animais_perdidos.php">Animais Perdidos</a></li>
          <li><a href="animais_adocao.php">Adoção</a></li>
          <li><a href="#">Sobre nós</a></li>
        </ul>
      </nav>
    

      <div class="action">
        <div class="profile">
          <img src="https://github.com/viniciusamc.png" alt="">
        </div>

        <div class="menu">
          <h3>Olá, User</h3>
          <ul>
            <li><a href="profile.php">Meu Perfil<img src="../images/svg/nameInput.svg" alt=""></a></li>  
            <li><a href="update_profile.php">Editar Perfil <img src="../images/svg/gear-solid.svg" alt=""></a></li>
            <li><a href="guard_posts_animais_perdidos.php">Posts Salvos Perdidos <img src="../images/svg/star-regular.svg" alt=""></a></li>
            <li><a href="guard_posts_animais_adocao.php">Posts Salvos Adoção <img src="../images/svg/star-regular.svg" alt=""></a></li>
            <li><a href="">Ajuda <img src="../images/svg/circle-question-regular.svg" alt=""></a></li>
            <li><a href="logout.php">Sair <img src="../images/svg/right-from-bracket-solid.svg" alt=""></a></li>
          </ul>
        </div>

      </div>
    </div>
  </header>

  <main>

    <section id="anuncio">
      <h1>Adoção? <br> Gostaria de anunciá-lo?</h1>

      <button href="#" class="anunciar">Anunciar</button>

      <dialog class="pop-dialog">
        
        <form action="create_post_animais_adocao.php" method="POST" enctype="multipart/form-data">
          <h1>
              Anuncie seu pet para adoção!
          </h1>
          <fieldset>
            <title>Anunciar o pet para adoção</title>
          
            <div class="input-wrapper">
              <label for="nome">Nome*</label>
              <input type="text" name="nome_pet" placeholder="Doguin_S2" required>
            </div>
       
            <div class="input-wrapper">
              <label for="raca">Raça</label>
              <input type="text" name="raca" placeholder="Raça">
            </div>

            <div class="input-wrapper">
              <label for="sexo">Sexo*</label>
              <select name="sexo" id="sexo" placeholder="Sexo">
                <option value="Macho">Macho</option>
                <option value="Fêmea">Fêmea</option>
              </select>
            </div>

            <div class="input-wrapper">
              <label for="idade">Idade*</label>
              <input type="number" name="idade" placeholder="Idade" required>
            </div>

            <div class="input-wrapper">
              <label for="descricao">Descrição</label>
              <textarea type="text" name="descricao" cols="30" rows="10" placeholder="Descrição"></textarea>
            </div>

            <div class="input-wrapper">
              <label for="nome">Foto*</label>
              <input type="file" name="image" required>
            </div>

            <button type="submit" class="send-form" name="upload_image_btn">Enviar</button>

            <span class="close-window"><img src="../images/svg/arrowLeft.svg" alt=""></span>
          </fieldset>
        </form>
      </dialog>
    </section>
    
    <section class="feed"> 
      <?php foreach($posts as $post){ ?>  
      <section class="pet-card">
        <section class="image-card">
          <img src="<?php echo "../../img/imagens_posts/". $post['image'];?>" class="post-image"/>

                          <?php include('check_if_user_guard_this_post.php'); ?>

                            <?php if($user_guard_this_post){ ?>

                                <form action="unguard_this_post_animais_adocao.php" method="POST">
                                     <input type="hidden" name="post_id" value="<?php echo $post['id'];?>">
                                     <button style="color:green;" class="heart" type="submit" name="heart_btn">
                                        <i class="icon fas fa-star"></i>
                                     </button>
                                 </form> 


                            <?php } else { ?>    
                                 <form action="guard_this_post_animais_adocao.php" method="POST">
                                     <input type="hidden" name="post_id" value="<?php echo $post['id'];?>">
                                     <button class="heart" type="submit" name="heart_btn">
                                        <i class="icon fas fa-star"></i>
                                     </button>
                                 </form> 
                             
                            <?php } ?> 
          
         <div class="tags"><span class="pet-tag">
          <?php echo $post['raca']; ?> 
         </span> 
           <span class="situacao-tag1">Adoção</span> 
         </div>
          
          <div class="desc-pet">
            <h1>
              <?php echo $post['nome_pet'];?>
            </h1>
            <p class="<?php echo $post['descricao']; ?>">
            </p>

            <button>
              <a href="petprofile_adocao.php?post_id=<?php echo $post['id']; ?>">Ver detalhes...</a>
            </button>

          </div>
          </section>
      </section>      
      <?php } ?>    
    </section>
  </main>

  <script src="../js/main.js"></script>
</body>
</html>