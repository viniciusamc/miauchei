<?php
include("../php/connection.php");
session_start();

?>





<!DOCTYPE html>
<html lang="en">
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
      <form action="process_login.php" method="POST">
            <?php if(isset($_GET['error_message'])){  ?>
              <p id="error_message" class="text-center alert-danger"> <?php echo $_GET['error_message']; ?> </p>
            <?php } ?>

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
            <input type="password" id="password" name="password" placeholder="Senha" required>
          </div>
        </div>
        
        <div class="interaction">
          <button type="submit" class="btn-submit" name="login_btn">Entrar</button>
          
          <a href="signup.php" class="register">Ainda não cadastrado?</a>
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
    <script>


            function verifyForm(){

                var password = document.getElementById('password').value;
                var error_message = document.getElementById('error_message');


                if(password.length < 6){
                    error_message.innerHTML = "Senha é muito curta";
                    return false;
                }

                

                return true;

            }


    </script>
</body>
</html>