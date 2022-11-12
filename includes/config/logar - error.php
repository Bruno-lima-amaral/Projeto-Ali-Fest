<?php

if(isset($_POST['email']) && isset($_POST['password'])) {
    if(strlen($_POST['email']) == 0) {
        echo "Digite seu e-mail";
    } else if (strlen($_POST['password']) == 0) {
        echo "Digite sua senha";
    }
}

    include_once('connect.php');

    $email = filter_input(INPUT_POST, 'email');
    $password = filter_input(INPUT_POST, 'password');
    
    $consult_partners = "SELECT * FROM partners WHERE email = '$email' AND password = '$password'";

    if($resultSQL = mysqli_query($connect, $consult_partners)) {
        $resposta = "Usuario logado";    
        } else {
            $resposta = "Usuario não encontrado";
        }
    echo $resposta;
?>