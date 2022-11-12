<?php
?>
<!DOCTYPE html>
<html lang="pt-br">
<?php include_once 'includes/headCadastro.php';?>
<?php include_once 'includes/header.php';?>

<main>    
<div class="container">
        <h1>Cadastre-se</h1>
    <form method="POST" action="includes/config/cadastro.php">
        <div>
            <div class="container-input-group">
                <div class="container-input">
                    <input type="text" aria-label="Nome" placeholder="Primeiro Nome" name="name" maxlength="20">
                    <br>
                    <input type="text" aria-label="Sobrenome" placeholder="Segundo Nome" name="lastName" maxlength="20">
                    <br>
                    <input type="text" aria-label="Cpf/Cnpj" placeholder="Cpf/Cnpj Sem Pontos ou Hífen" name="identify" maxlength="14">
                    <br>
                    <input type="password" aria-label="Senha" placeholder="Senha"  name="password" maxlength="12">
                    
                </div>
                <div class="container-input">
                    <input type="text" aria-label="Usuário" placeholder="Usuário" name="userName" maxlength="30">
                    <br>
                    <input type="tel" aria-label="Telefone/Celular" placeholder="Telefone/Celular"  name="tel" maxlength="12">
                    <br>
                    <input type="email" aria-label="Email" placeholder="Email" name="email" maxlength="100">
                    
                </div>
            </div>
            <button class="btn-entrar" type="submit">Entrar</button>
        </div>
    </form>
</div>
    
</main>



</body>
<?php include_once 'includes/footer.php';?>
</html>