<?php
  session_start()
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Cadastro</title>
    <meta charset="utf-8">
    <link rel='stylesheet' type='text/css' media='screen' href='./styles/index.css'>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
  </head>
  <body>
   
    <form method="POST" action="./services/register.php">
        <h1>Cadastro</h1>
        <h3>Digite seu nome: </h3>
        <input
            placeholder="Digite seu nome"
            type="text"
            name="name"
        >
        <h3>Digite seu e-mail: </h3>
        <input
            placeholder="Ex: email@gmail.com"
            type="email"
            name="email"
        >
        <h3>Digite seu CPF: </h3>
        <input 
            type="text" 
            placeholder="Digite seu CPF"
            name="cpf" 
            onkeypress="$(this).mask('00.000-000')">
        <p>
        <?php 
          if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset ($_SESSION['msg']);
          }
        ?>
        </p>
        <input type="submit" value="Cadastrar" class="button"/>
    </form>
  </body>
</html>
