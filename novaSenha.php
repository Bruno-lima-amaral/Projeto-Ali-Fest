<?php

include_once "includes/header.php";
include_once "includes/headLogin.php";
include_once 'includes/config/connect.php';

if (isset($_POST['user_name'])) {

    $user_name = $_POST['user_name'];

    $consultSql = "SELECT * FROM usuario WHERE user_name = '$user_name'";
    if (($result = $connect->query($consultSql)) == TRUE) {
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_row($result)) {
                if($user_name == TRUE){
                   echo "USUARIO ENCONTRADO |";
                    //Fazendo Update
                   if (isset($_POST['newPassword'])) {
                    $newPassword = $_POST['newPassword'];
                    $salt = "BGKL23GROW45J19a";
                    $custo = '12';
                    $hash = crypt($newPassword, $salt);
                    $securePassword = $hash . '$2a$' . $custo . '$' . $salt . '$';
                    $securePassword = crypt($newPassword, $securePassword);
                    
                    $UpdateSenha = "UPDATE `usuario` SET `password` = '$securePassword' WHERE `user_name` = '$user_name' ";
            
                    $query = mysqli_query($connect, $UpdateSenha);
                    if($query == TRUE){
                                echo '| Senha Alterada com Sucesso';
                            } else {
                                echo 'VIXI';
                            }
                } else {
                    echo 'Erro Isset Pass';
                }


                } else {
                    echo 'Usuario Incorreto';
                };
            };
        } else {
            echo 'Usuario Incorreto';
        }
    } else {
        echo 'erro conexão';
    };

    

    


    

}


?>

<!DOCTYPE html>
<html lang="pt-br">

<body>

    <main>
        <div class="container">
            <h1>Digite Sua Nova Senha</h1>
            <div class="container-input-group">
                <div class="container-input">

                    <!-- <h1>Olá "USUARIO"</h1> -->

                    <form method="POST">
                        <h2>Confirme seu Usuário</h2>
                        <input type="text" aria-label="user_name" placeholder="Usuário" name="user_name">
                        <br>
                        <h2>Digite sua Nova <br> Senha</h2>
                        <input type="password" aria-label="newPassword" placeholder="Nova Senha: " name="newPassword">
                        <br>
                        <input class="btn-light btn-entrar" type="submit" name="enviar" value="enviar"> <br>
                        <br>
                    </form>

                </div>
            </div>
        </div>
    </main>
</body>
<?php include_once 'includes/footer.php'; ?>

</html>

