
<?php 
session_start();
include("../php/connection.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Animais Perdidos - Miauchei</title>

  <link rel="shortcut icon" href="../../favicon.ico" type="image/x-icon">
  
  <link rel="stylesheet" href="../../global.css">
  <link rel="stylesheet" href="../styles/animais_perdidos/styles.css">
  <link rel="stylesheet" href="../styles/components/header/styles.css">
</head>
<body>

  <header class="">
    <div class="logoHeader">
      <img src="../images/iconsMiauchei/miauchei.svg" alt="LOGO MIAUCHEI">
    </div>
    
    <nav class="menuMobile hide">
      <ul>
        <li><a href="./../../index2.html">Home</a></li>
        <li><a href="#">Animais Perdidos</a></li>
        <li><a href="#">Adoção</a></li>
        <li><a href="#">Sobre nós</a></li>
      </ul>
    </nav>

    <nav class="menuDesktop hide">
      <ul>
        <li><a href="./../../index2.html">Home</a></li>
        <li><a href="#">Animais Perdidos</a></li>
        <li><a href="#">Adoção</a></li>
        <li><a href="#">Sobre nós</a></li>
      </ul>
    </nav>
    
    <div class="menuBar">
      <img src="../images/svg/menubar.svg" alt="LOGO MIAUCHEI GATO E CACHORRO">
    </div>

    <div class="icon">
      <a href="src/pages/login.html"><img src="https://github.com/viiniciusgm.png" alt="Foto do usuário"></a>
    </div>
  </header>

  <main>
    <section id="anuncio">
      <h1>Perder seu pet? <br> Gostaria de anunciá-lo?</h1>

      <button href="#" class="anunciar">Anunciar</button>

      <dialog class="pop-dialog">
        
        <form action="create_post_animais_perdidos.php" method="POST">
          <h1>
              Anuncie seu pet perdido!
          </h1>
          <fieldset>
            <title>Anunciar o pet perdido</title>
          
            <div class="input-wrapper">
              <label for="nome">Nome*</label>
              <input type="text" name="nome_pet" id="nome_pet" placeholder="Nome" required>
            </div>
       
            <div class="input-wrapper">
              <label for="raca">Raça</label>
              <input type="text" name="raca" id="raca" placeholder="Raça">
            </div>

            <div class="input-wrapper">
              <label for="sexo">Sexo*</label>
              <input type="text" name="sexo" id="sexo" placeholder="Sexo" required>
            </div>

            <div class="input-wrapper">
              <label for="idade">Idade*</label>
              <input type="number" name="idade" id="idade" placeholder="Idade" required>
            </div>

            <div class="input-wrapper">
                <label for="data_perdeu">Data que perdeu:</label>
                <input type="date" id="data_perdeu" name="data_perdeu" required>
                </font>
            </div>

            <div class="input-wrapper">
              <label for="descricao">Descrição</label>
              <textarea name="descricao" id="descricao" cols="30" rows="10" placeholder="Descrição"></textarea>
            </div>

            <div class="input-wrapper">
              <label for="nome">Foto*</label>
              <input type="file" name="image" id="image" placeholder="Foto" accept="image/*" required>
            </div>

            <button type="submit" class="send-form" name="upload_image_btn">Enviar</button>

            <span class="close-window"><img src="../images/svg/arrowLeft.svg" alt=""></span>
          </fieldset>
        </form>
      </dialog>
    </section>

          <?php include('../php/get_latest_posts_perdidos.php'); ?>
           
           <?php foreach($posts as $post){ ?>

                    <!--Post-->
                    <section class="post">
                        <section class="info">
                            <section class="user">
                                <section class="profile-pic"><img src="<?php echo "assets/imgs/". $post['profile_image'];?>"/></section>
                                <p class="username"><?php echo $post['username']; ?></p>
                            </section>
                             <a style="color:#000" href="single_post_animais_perdidos.php?post_id=<?php echo $post['id']; ?>"><i class="fas fa-ellipsis-h options"></i></a>
                        </section>
                        <!--POST-->
                        <img src="<?php echo "imagens_posts/". $post['image']; ?>" class="post-image"/>
                        <section class="post-content">
                            <section class="reaction-wrapper">

                            
                            <?php include('check_if_user_guard_this_post.php'); ?>

                            <?php if($user_guard_this_post){ ?>

                                <form action="unguard_this_post_animais_perdidos.php" method="POST">
                                     <input type="hidden" name="post_id" value="<?php echo $post['id'];?>">
                                     <button style="color:blueviolet;" class="heart" type="submit" name="heart_btn">
                                        <i class="icon fas fa-star"></i>
                                     </button>
                                 </form> 


                            <?php } else { ?>    
                                 <form action="guard_this_post_animais_perdidos.php" method="POST">
                                     <input type="hidden" name="post_id" value="<?php echo $post['id'];?>">
                                     <button class="heart" type="submit" name="heart_btn">
                                        <i class="icon fas fa-star"></i>
                                     </button>
                                 </form> 
                             
                            <?php } ?>     


                            </section>

                            <p class="guards"><?php echo $post['guards']; ?> Guard</p>

                            <p class="description">
                                <?php echo "Nome do Pet: ".$post['nome_pet']; ?> 
                            <p> <?php echo "Raça: ".$post['raca'];?></p>
                            <p> <?php echo "Idade: ".$post['idade_pet'];?></p>
                            <p> <?php echo "Sexo: ".$post['sexo'];?></p>
                            <p> <?php echo "Descrição: ".$post['descricao'];?></p>
                            <p> <?php echo "Data do desaparecimento: ".date("D, M, Y", strtotime($post['data_que_perdeu']));?></p>
                            </p>

                            <p class="post-time"><?php echo date("M, Y", strtotime($post['date']));  ?></p>


                        </section>
                    </section> 
                    
                 <?php } ?>    
    </section>
  </main>

  <script src="../js/main.js"></script>
</body>
</html>