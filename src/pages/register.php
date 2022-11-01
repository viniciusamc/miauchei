<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>miauchei</title>
  
  <link rel="shortcut icon" href="../../favicon.ico" type="image/x-icon">
  
  <link rel="stylesheet" href="../../global.css">
  <link rel="stylesheet" href="../styles/register/style.css">
</head>
<body>
  <div class="decoration">
    <img src="../images/backgroundDecoration.svg" alt="">
  </div>

  <div class="bottom-decoration">
    <img src="../images/backgroundDecorationBottom.svg" alt="">
  </div>
  <main>

    <form action="#" method="post">
      <legend>
        <img src="../images/svglogo.svg" alt="Logo Marca">
      </legend>

      <fieldset>
        <div class="input">
            <div class="input-wrapper">
              <label for="name" class="sr-only">Nome</label>
              <input type="text" id="name" name="nome" placeholder="Nome">
            </div>
<!-- 
          <div class="input-wrapper">
            <label for="email" class="sr-only">Telefone</label>
            <input type="phone" id="telefone" name="telefone" placeholder="Telefone">
          </div>

          <div class="input-wrapper">
            <label for="password" class="sr-only">CPF</label>
            <input type="number" id="cpf" name="cpf" placeholder="CPF">
          </div> -->

          <div class="input-wrapper">
            <label for="email" class="sr-only">Email</label>
            <input type="email" id="email" name="email" placeholder="Email">
          </div>

          <div class="input-wrapper">
            <label for="confirmPassword" class="sr-only">Senha</label>
            <input type="password" id="password" placeholder="Senha" name="senha">
          </div>

        </div>

        <!-- <div class="checkbox">
          <div class="checkbox-wrapper">
            <input type="checkbox" name="" id="termoUso">
            <label for="termoUso">Termos de uso</label>
          </div>

          <div class="checkbox-wrapper">
            <input type="checkbox" name="" id="emailNewsletter">
            <label for="emailNewsletter">Novidades no e-mail</label>
          </div>
        </div> -->
        
        <div class="interaction">
          <button type="submit" name="cadastrar" class="btn-submit">Cadastrar</button>
        </div>
      </fieldset>
    </form>
  </main>

  <?php 
    include ('../php/connection.php');

    if(isset($_POST['cadastrar'])){
      date_default_timezone_set('America/Sao_Paulo');
      $date = date('d/m/Y');

      $nome = $_POST['nome'];
      $email = $_POST['email'];
      $telefone = $_POST['telefone'];
      $cpf = $_POST['cpf'];
      $senha = $_POST['senha'];

      $query_select = "SELECT email FROM usuario WHERE email = '$email'";
      $select = mysqli_query($conexao, $query_select);
      $array = mysqli_fetch_array($select);
      $logarray = $array['email'];

      if($logarray == $email){
        echo"<script>
              alert('E-mail já está sendo usado em outra conta');window.location.
              href='register.php'</script>";
            die();
        } else {
        $query = "INSERT into `usuario` (nome, email, senha, telefone, cpf, data_criacao) VALUES ('$nome', '$email', '$senha', '$telefone', '$cpf', '$date')";
        $result = mysqli_query($conexao, $query);
        if($result){
            echo "<script>alert('Cadastrado com sucesso!');window.location.href='login.php'</script>";
        } else {
          echo "<script>alert('ERROR');</script>";
        }}}
  ?>
</body>
</html>