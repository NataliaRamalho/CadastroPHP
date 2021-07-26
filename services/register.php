<?php
 session_start();
 include_once("connection.php");

 function fieldsNotEmpty($name, $email, $cpf){
     if(strlen($name) < 2){
        return false;
     }
    if(strlen($email) < 3){
       return false;
    }
    if(strlen($cpf) <10){
       return false;
    }
    return true;
}

 function validateCPF($cpf) {
    $cpf = preg_replace( '/[^0-9]/is', '', $cpf );
     
    if (preg_match('/(\d)\1{10}/', $cpf)) {
        return false;
    }
    for ($i = 9; $i < 11; $i++) {
        for ($d = 0, $j = 0; $j < $i; $j++) {
            $d += $cpf[$j] * (($i + 1) - $j);
        }
        $d = ((10 * $d) % 11) % 10;
        if ($cpf[$j] != $d) {
            return false;
        }
    }
    return true;
 }
 

 $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
 $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
 $cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
 


 if(fieldsNotEmpty($name,$email,$cpf)){
    if(validateCPF($cpf)){
        $query_create = "INSERT INTO users (name, email, cpf) VALUES ('$name', '$email', '$cpf')";
        $result_user = mysqli_query($connection, $query_create);

        if(mysqli_insert_id($connection)){
            header("Location: ../main.php");
        }
        else{
            $_SESSION['msg'] = "Erro ao cadastrar usuário";
            header("Location: ../index.php");
        }
    }
    else{
        $_SESSION['msg'] = "CPF inválido";
        header("Location: ../index.php");
    }
 }

else{
    $_SESSION['msg'] = "Todos os campos precisam estar preenchidos corretamente";
    header("Location: ../index.php");
}

