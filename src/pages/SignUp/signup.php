<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Miauchei - Registro</title>
  
  <link rel="shortcut icon" href="../../favicon.ico" type="image/x-icon">
  
  <link rel="stylesheet" href="../../../global.css">
  <link rel="stylesheet" href="./style.css">
</head>
<body>
  <section class="decoration">
    <img src="../../../images/backgroundDecoration.svg" alt="">
  </section>

  <section class="bottom-decoration">
    <img src="../../../images/backgroundDecorationBottom.svg" alt="">
  </section>
  <main>

    <section class="content-text">
      <section class="logo">
        <img src="../../images/iconsMiauchei/miauchei.svg" alt="">
        <h1>Miauchei</h1>
      </section>
        <p>
          Registre-se na plataforma miauchei.
        </p>
    </section>

    <form action="./php/process_signup.php" method="POST">
      <legend>
        <img src="../../images/svglogo.svg" alt="Logo Marca">
      </legend>

      <fieldset>
        
        <section class="input">
          
        <section class="input-wrapper">
            <label for="email" class="sr-only">Email</label>
            <input type="email" id="email" name="email" placeholder="Email">
          </section>

            <section class="input-wrapper">
              <label for="username" class="sr-only">Nome</label>
              <input type="text" id="username" name="username" placeholder="Nome">
            </section>
            
            <section class="input-wrapper">
              <label for="idade" class="sr-only">Data de nascimento</label>
              <input type="date" id="idade" name="data_nascimento">
            </section>

            <section class="input-wrapper">
              <label for="tel" class="sr-only">Telefone</label>
              <input type="tel" id="telefone" name="telefone" placeholder="Número Telefone" onkeypress="mascara(this)">
            </section>
                <script type="text/javascript">
                  function mascara(telefone){ 
                      if(telefone.value.length >= 15){
                        telefone.value = telefone.value.slice(0, -1)
                      }
                      if(telefone.value.length == 0)
                          telefone.value = '(' + telefone.value;
                      if(telefone.value.length == 3)
                          telefone.value = telefone.value + ') ';
                      if(telefone.value.length == 10)
                          telefone.value = telefone.value + '-';
                  }
                </script>

          <section class="col-2">

            <section class="input-wrapper">
              <label for="Password" class="sr-only">Senha</label>
              <input type="password" id="password" placeholder="Senha" name="password">
            </section>
            
            <section class="input-wrapper">
              <label for="confirmPassword" class="sr-only">Confirmar senha</label>
              <input type="password" id="password_confirm" placeholder="Confirmar senha" name="password_confirm">
            </section>
            
          </section>
          <?php  if(isset($_GET['error_message'])){  ?>
            <p id="error_message" class="text-center alert-danger"> <?php  echo $_GET['error_message']; ?> </p>
          <?php } ?>  
        </section>
        
        <section class="interaction">
          <button type="button" name="signup_btn" class="btn-submit" onclick="verifyForm()">Cadastrar</button>
        </section>
        <p>Já possui uma conta?<a href="login.php"> Logar</a></p>
      </fieldset>
    </form>
  </main>

    <script>
            function verifyForm(){
                let btnForm = document.querySelector(".btn-submit")
                 var password = document.getElementById('password').value;
                 var confirm_password = document.getElementById('password_confirm').value;

                 let email = document.querySelector("#email").value
                 let nome = document.querySelector("#username").value
                 let tel = document.querySelector("#telefone").value
                 
                btnForm.addEventListener("click", () => {
                  btnForm.preventDefault();
                })
                
                if(password.length == 0 || confirm_password == 0 || email.length == 0 || nome.length == 0 || tel.length == 14){
                  alert("Preencha todos os campos corretamente!")
                }

                if(password.length < 6 && password.length > 0){
                  alert("A Senha é muito curta!")
                } else if (password.length >= 72) {
                  alert("O Máximo de caracteres para uma senha é de 72.")
                }
                 if(password !== confirm_password){
                  alert("As Senhas são diferentes")
                }
            }      
    </script>


    
</body>
</html>