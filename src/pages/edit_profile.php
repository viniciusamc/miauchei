<?php  

session_start();

// Se o id do usuario não está na session, ele não vai estar logado
if(!isset($_SESSION['id'])){
    header("location: login.php");
    exit;
}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar Perfil - Miauchei</title>

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
#bio{
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
   <section class="main" style="margin-top: 0;">
       <section class="wrapper">
        <section class="left-col">

            <h3 class="text-center">Editar Perfil</h3>

            <?php if(isset($_GET['error_message'])){ ?>
                <p class="text-center alert-danger"><?php echo $_GET['error_message'];?></p>
            <?php } ?>    

            <form action="update_profile.php" method="POST" enctype="multipart/form-data">
                <section class="mb-3">
                    <label for="image">Foto de Perfil</label>
                    <img src="<?php echo "assets/imgs/".$_SESSION['image']; ?>" class="edit-profile-image" alt="">
                    <input type="file" name="image" class="form-control">
                </section>
                <section class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" name="email" id="email" placeholder="email" 
                    value="<?php echo $_SESSION['email'] ?>"/>
                </section>
                <section class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" name="username" id="username" placeholder="username" 
                          value="<?php echo $_SESSION['username'] ?>"/> 
                </section>
                <section class="mb-3">
                    <label for="data_nascimento" class="form-label">Data de nascimento</label>
                    <input type="text" class="form-control" name="data_nascimento" id="data_nascimento" placeholder="data_nascimento" 
                          value="<?php echo $_SESSION['data_nascimento'] ?>"/> 
                </section>
                <section class="mb-3">
                    <label for="telefone" class="form-label">Telefone</label>
                    <input type="text" class="form-control" name="telefone" id="telefone" placeholder="telefone" 
                          value="<?php echo $_SESSION['telefone'] ?>" onkeypress="mascara(this)"/>
                          <script type="text/javascript">
                  function mascara(telefone){ 
                      if(telefone.value.length == 0)
                          telefone.value = '(' + telefone.value; //quando começamos a digitar, o script irá inserir um parênteses no começo do campo.
                      if(telefone.value.length == 3)
                          telefone.value = telefone.value + ') '; //quando o campo já tiver 3 caracteres (um parênteses e 2 números) o script irá inserir mais um parênteses, fechando assim o código de área.

                      if(telefone.value.length == 10)
                          telefone.value = telefone.value + '-'; //quando o campo já tiver 8 caracteres, o script irá inserir um tracinho, para melhor visualização do telefone.

                }
                </script> 
                </section>
                <section class="mb-3">
                    <label for="bio" class="form-label">Bio</label>
                    <textarea name="bio" id="bio" class="form-control" cols="30" rows="3"><?php echo $_SESSION['bio']; ?>
                    </textarea>
                </section>
                <section class="mb-3">
                    <input name="update_profile_btn" id="update_profile_btn" type="submit" class="update-profile-btn" value="Atualizar">
                </section>
            </form>
            
        </section>
        
       </section>
   </section>







</body>
</html>