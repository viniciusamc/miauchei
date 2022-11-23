
<?php 
session_start();
include("../php/connection.php");
include('../php/get_latest_posts_perdidos.php'); ?>

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

<header>
    <div class="header-content">
      <nav>
        <a href="../../index2.html" id="logo"><img src="../images/iconsMiauchei/miauchei.svg" alt="Logo Miauchei"></a>
        <button id="btn-mobile"><img src="src/images/svg/menubar.svg" alt=""></button>
        <ul id="menu-header">
          <li><a href="../../index2.html">Início</a></li>
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
          <h3>Olá, Vinícius</h3>
          <ul>
            <li><a href="">Meu Perfil<img src="../images/svg/nameInput.svg" alt=""></a></li>  
            <li><a href="">Editar Perfil <img src="../images/svg/gear-solid.svg" alt=""></a></li>
            <li><a href="">Posts Salvos <img src="../images/svg/star-regular.svg" alt=""></a></li>
            <li><a href="">Ajuda <img src="../images/svg/circle-question-regular.svg" alt=""></a></li>
            <li><a href="">Sair <img src="../images/svg/right-from-bracket-solid.svg" alt=""></a></li>
          </ul>
        </div>

      </div>
    </div>
  </header>

  <main>

    <section id="anuncio">
      <h1>Perder seu pet? <br> Gostaria de anunciá-lo?</h1>

      <button href="#" class="anunciar">Anunciar</button>

      <dialog class="pop-dialog">
        
        <form action="create_post_animais_perdidos.php" method="POST" enctype="multipart/form-data">
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
          
         <div class="tags"><span class="pet-tag">
          <?php echo $post['raca']; ?> 
         </span> 
           <span class="situacao-tag">Perdido</span> 
           <span class="data-tag"><?php echo date("D, M, Y", strtotime($post['data_que_perdeu']));?></span>
         </div>
          
          <div class="desc-pet">
            <h1>
              <?php echo $post['nome_pet'];?>
            </h1>
            <p class="<?php echo $post['descricao']; ?>">
              Endereço - à fazer
            </p>

            <button>
              <a href="petprofile_perdidos.php?post_id=<?php echo $post['id']; ?>">Ver detalhes...</a>
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