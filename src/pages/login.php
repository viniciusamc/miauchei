<?php 
  include("../php/connection.php");

  if(isset($_POST['email']) || isset($_POST['senha'])){
    if(strlen($_POST['email']) == 0){
      echo "<script>alert('Preencha seu email!')</script>";
  } else if(strlen($_POST['senha']) == 0){
    echo "<script>alert('Preencha sua senha!')</script>";
  } else {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql_code = 'SELECT * FROM usuario WHERE email = "'.$email.'" AND senha = "'.$senha.'";';
    $sql_query = mysqli_query($conexao ,$sql_code) or die("Falha na query");
    $quantidade = mysqli_num_rows($sql_query);

    if($quantidade == 1){
      $usuario = $sql_query->fetch_assoc();

      if(!isset($_SESSION)){
        session_start();
      }

      $_SESSION['id'] = $usuario['id'];
      $_SESSION['nome'] = $usuario['nome'];

      header("location: ../../index.html");

    } else {
      echo "<script>alert('Erro, email ou senha incorretos!')</script>";
    }
  }}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MiAuchei - Login</title>

  <link rel="shortcut icon" href="../../favicon.ico" type="image/x-icon">
  
  <link rel="stylesheet" href="../../global.css">
  <link rel="stylesheet" href="../styles/login/style.css">
</head>
<body>
  <div class="decoration">
    <img src="../images/backgroundDecoration.svg" alt="">
  </div>

  <div class="bottom-decoration">
    <img src="../images/backgroundDecorationBottom.svg" alt="">
  </div>
  <main>
    <div class="decorations">
      <div class="dog"><img src="../images/iconsBackground/paw.svg" alt=""></div>
      <div class="bowl"><img src="../images/iconsBackground/bowl.svg" alt=""></div>
      <div class="cat"><img src="../images/iconsBackground/cat.svg" alt=""></div>
    </div>
      <form action="#" method="post">


      <legend>
        <img src="../images/svglogo.svg" alt="Logo Marca">
      </legend>
      <fieldset class="line">
        <div class="input">

          <div class="input-wrapper">
            <label for="name" class="sr-only">-Email</label>
            <input type="text" id="name" name="email" placeholder="Email" required>
          </div>
          
          <div class="input-wrapper">
            <label for="password" class="sr-only">Senha</label>
            <input type="password" id="password" name="senha" placeholder="Senha" required>
          </div>
        </div>
        <a href="#" class="forgot-password">Esqueceu a senha?</a>
        
        <div class="interaction">
          <button type="submit" class="btn-submit">Entrar</button>
          
          <a href="register.html" class="register">Ainda não cadastrado?</a>
        </div>
      </fieldset>

      <fieldset class="second">
        <legend>Ou entre com</legend>
        <div class="col-2">
          <button>
            <img src="../images/facebookWhite.svg" alt="Logo Facebook">
          </button>
          
          <button>
            <img src="../images/googleWhite.svg" alt="Logo Google">
          </button>
        </div>
      </fieldset>

    </form>
  </main>
</body>
</html>