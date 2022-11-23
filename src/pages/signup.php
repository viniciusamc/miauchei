<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Miauchei - Registro</title>
  
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

    <div class="content-text">
      <div class="logo">
        <img src="../images/iconsMiauchei/miauchei.svg" alt="">
        <h1>Miauchei</h1>
      </div>
        <p>
          Registre-se na plataforma miauchei.
        </p>
    </div>

    <form action="process_signup.php" method="POST">
          <?php  if(isset($_GET['error_message'])){  ?>
            <p id="error_message" class="text-center alert-danger"> <?php  echo $_GET['error_message']; ?> </p>
          <?php } ?>  
      <legend>
        <img src="../images/svglogo.svg" alt="Logo Marca">
      </legend>

      <fieldset>
        <div class="input">

        <div class="input-wrapper">
            <label for="email" class="sr-only">Email</label>
            <input type="email" id="email" name="email" placeholder="Email">
          </div>

            <div class="input-wrapper">
              <label for="username" class="sr-only">Nome</label>
              <input type="text" id="username" name="username" placeholder="Nome">
            </div>

            <div class="input-wrapper">
              <label for="idade" class="sr-only">Idade</label>
              <input type="date" id="idade" name="idade" placeholder="Idade" min="1900-01-01" max="2025-01-01">
            </div>


            <div class="input-wrapper">
              <label for="tel" class="sr-only">Telefone</label>
              <input type="tel" id="tel" name="tel" placeholder="Número Telefone">
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


          <div class="col-2">

            <div class="input-wrapper">
              <label for="Password" class="sr-only">Senha</label>
              <input type="password" id="password" placeholder="Senha" name="password">
            </div>
            
            <div class="input-wrapper">
              <label for="confirmPassword" class="sr-only">Confirmar senha</label>
              <input type="password" id="password_confirm" placeholder="Confirmar senha" name="password_confirm">
            </div>
            
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
          <button type="submit" name="signup_btn" class="btn-submit">Cadastrar</button>
        </div>
        <p>Já possui uma conta?<a href="login.php"> Logar</a></p>
      </fieldset>
    </form>
  </main>

    <script>
            function verifyForm(){

                 var password = document.getElementById('password').value;
                 var confirm_password = document.getElementById('confirm_password').value;
                 var error_message = document.getElementById('error_message');


                 if(password.length < 6){
                     error_message.innerHTML = "Senha é muito curta";
                     return false;
                 }

                 if(password !== confirm_password){
                    error_message.innerHTML = "Senhas não batem";
                    return false;
                 }

                 return true;

            }      

    </script>


    
</body>
</html>