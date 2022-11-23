
<?php 
session_start();
include("../php/connection.php");
include('../php/get_latest_posts_adocao.php'); ?>

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
        <li><a href="#">Home</a></li>
        <li><a href="animais_perdidos.php">Animais Perdidos</a></li>
        <li><a href="animais_adocao.php">Adoção</a></li>
        <li><a href="#">Sobre nós</a></li>
      </ul>
    </nav>

    <nav class="menuDesktop hide">
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="animais_perdidos.php">Animais Perdidos</a></li>
        <li><a href="animais_adocao.php">Adoção</a></li>
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
        
        <form action="create_post_animais_adocao.php" method="POST" enctype="multipart/form-data">
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

      <?php foreach($posts as $post){ ?>

    <section class="feed">   

      <section class="pet-card">
        <section class="image-card">
          <img src="<?php echo "../../img/imagens_posts/". $post['image'];?>" class="post-image"/>
          
         <div class="tags"><span class="pet-tag">
          <?php echo "Nome do Pet: ".$post['nome_pet']; ?> 
         </span> 
           <span class="situacao-tag">Adoção</span> 
         </div>
          
          <div class="desc-pet">
            <h1>
              <?php echo "Descrição: ".$post['descricao'];?>
            </h1>
            <p class="endereco-pet">
              Endereço - a fazer
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