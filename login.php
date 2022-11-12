<?php

include_once "includes/header.php";
include_once "includes/headLogin.php";
include_once('includes/config/connect.php');



if (
    isset($_POST['email'])  &&
    isset($_POST['password'])
) {
    $email = addslashes($_POST['email']);
    $password = addslashes($_POST['password']);
    $salt = "BGKL23GROW45J19a";
    $custo = '12';
    $hash = crypt($password, $salt);
    $securePassword = $hash . '$2a$' . $custo . '$' . $salt . '$';
    $securePassword = crypt($password, $securePassword);

    $consulta = "SELECT * FROM usuario WHERE email = '$email' AND password = '$securePassword'";
    

    $login = mysqli_query($connect, $consulta);

    $login = mysqli_fetch_assoc($login);

    if ($login > 0) {

        if (!isset($_SESSION)) {
            session_start();
        }
        $_SESSION['name'] = $login['name'];
        $_SESSION['id'] = $login['id_usuario'];

        var_dump($email);
        var_dump($password);

         header("location: usuario.php");
    } else {
        echo ('Email ou Senha Incorretos');
    }
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<body>

    <main>
        <div class="container">
            <h1>Login</h1>
            <div class="container-input-group">
                <div class="container-input">
                    <form method="post">
                        <h2>Entre com seus dados de acesso</h2>
                        <input type="text" aria-label="Email" placeholder="Email" name="email">
                        <br>
                        <input type="password" aria-label="Senha" placeholder="Senha" name="password">
                        <br>
                        <button class="btn-light btn-entrar" type="submit">Entrar</button> <br><br>
                        <br>
                        
                        <!-- <div class="form-group">
                        <label for="remember">Lembre meu usuario:</label>
                        <input id="remember" name="remember" type="checkbox">
                    </div> -->
                    </form>
                    <div>
                        <p><a href="forgot.php">Esqueceu senha</a></p>

                    </div>
                </div>

                <div class="vl container-input">
                    <h2>Cadastre-se</h2>
                    <a href="cadastro.php"><button class="btn-light btn-cadastrar" type="submit">Cadastrar</button></a>
                </div>



            </div>

        </div>
    </main>

</body>
<?php include_once 'includes/footer.php'; ?>

</html>