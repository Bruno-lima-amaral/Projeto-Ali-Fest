<?php
include_once "includes/header.php";
include_once "includes/headLogin.php";
include_once 'includes/config/connect.php';

if (isset($_POST['email']) && isset($_POST['user_name'])) {

    $user_name = $_POST['user_name'];
    $password = '';
    $email = $_POST['email'];

    //consulta
    $consultSql = "SELECT * FROM usuario WHERE email = '$email' AND user_name = '$user_name'";
    if (($result = $connect->query($consultSql)) == TRUE) {
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_row($result)) {
                if($email == TRUE){
                    header("location: novaSenha.php");
                } else {
                    echo 'Usuario Ou Email Incorretos';
                };
            };
        } else {
            echo 'Usuario Ou Email Incorretos';
        }
    } else {
        echo 'erro conexão';
    };
};

?>

<!DOCTYPE html>
<html lang="pt-br">

<body>

    <main>
        <div class="container">
            <h1>Esqueceu Senha</h1>
            <div class="container-input-group">
                <div class="container-input">

                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                        <h2>Digite seu Email</h2>
                        <input type="text" aria-label="Email" placeholder="Email" name="email">
                        <br>
                        <h2>Digite seu Usuário</h2>
                        <input type="text" aria-label="user_name" placeholder="Usuário" name="user_name">
                        <br>
                        <input class="btn-light btn-entrar" type="submit" name="enviar" value="enviar"> <br><br>
                        <br>
                    </form>

                </div>
            </div>
        </div>
    </main>
</body>
<?php include_once 'includes/footer.php'; ?>

</html>