<?php
    if(!isset($_SESSION)) {
        session_start();
    } else {
        session_destroy();
        header("Location: login.php");
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<?php include_once 'includes/headCadastro.php';?>
<?php include_once 'includes/header.php';?>

<main>    
<div class="container">
        <h1>Logout executado com sucesso!</h1>
    <form method="POST" action="includes/config/cadastro.php">
        <div>
            <div class="container-input-group">
                <a href="login.php" >Clique para Voltar</a>
            </div>
            
        </div>
    </form>
</div>
    
</main>



</body>
<?php include_once 'includes/footer.php';?>
</html>