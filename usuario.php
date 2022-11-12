<?php
    include('protect.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<?php include_once 'includes/headCadastro.php';?>
<?php include_once 'includes/header.php';?>

<main>    
<div class="container">
        <h1>Usuario logado <?php echo $_SESSION['name']; ?> | <a href="logout.php">Sair</a></h1>
</div>

</main>



</body>
<?php include_once 'includes/footer.php';?>
</html>