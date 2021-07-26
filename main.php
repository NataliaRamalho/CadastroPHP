<?php
  session_start();
  include_once("./services/connection.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Usuarios cadastrados</title>
    <meta charset="utf-8">
    <link rel='stylesheet' type='text/css' media='screen' href='./styles/main.css'>
  </head>
  <body>
    <h1>Parabéns o cadastro do usuário foi realizado com sucesso</h1>
    <div>
      <h2>Usuários cadastrados até o momento </h2>
      <p>
        <?php
          $query_select = "SELECT * FROM users ";
          $result_user = mysqli_query($connection, $query_select);
          while($row_user = mysqli_fetch_assoc($result_user)){
            echo "<br> Id: " . $row_user['id'] . "<br>";
            echo "Nome: " . $row_user['name'] . "<br>";
            echo "Email: " . $row_user['email'] . "<br>";
            echo "CPF: " . $row_user['cpf'] . "<br><br>";
          
          }
        ?>
      </p>
    </div>
  </body>
</html>
