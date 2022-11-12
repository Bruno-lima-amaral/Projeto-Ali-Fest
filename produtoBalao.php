<?php
?>

<!DOCTYPE html>
<html lang="pt-br">


<?php include_once 'includes/headProdutos.php'; ?>
<?php include_once 'includes/header.php'; ?>


<main>
  <div class="div-filtro">
    <ul class="listaProdutos">
      <li id="corante">
        <div class="dropdown">
          <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
            Corantes
          </a>

          <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <li><a class="dropdown-item" href="#">Azul</a></li>
            <li><a class="dropdown-item" href="#">Vermelho</a></li>
            <li><a class="dropdown-item" href="#">Verde</a></li>
          </ul>
        </div>
      </li>
      <li id="baloes">
        <div class="dropdown">
          <a class="btn btn-warning dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false" disabled aria-label="Close">
            Balões
          </a>

          <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <li><a class="dropdown-item" href="#">Azul</a></li>
            <li><a class="dropdown-item" href="#">Vermelho</a></li>
            <li><a class="dropdown-item" href="#">Verde</a></li>
          </ul>
        </div>
      </li>
      <li id="descartaveis">
        <div class="dropdown">
          <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
            Descartáveis
          </a>

          <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <li><a class="dropdown-item" href="#">Copos</a></li>
            <li><a class="dropdown-item" href="#">Garfos</a></li>
            <li><a class="dropdown-item" href="#">Facas</a></li>
          </ul>
        </div>
      </li>
      <li id="formas">
        <div class="dropdown">
          <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
            Formas
          </a>

          <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <li><a class="dropdown-item" href="#">Tamanho 23</a></li>
            <li><a class="dropdown-item" href="#">Tamanho 34</a></li>
            <li><a class="dropdown-item" href="#">Tamanho 55</a></li>
          </ul>
        </div>
      </li>
      <li id="velas">
        <div class="dropdown">
          <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
            Velas
          </a>

          <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <li><a class="dropdown-item" href="#">Parafina</a></li>
            <li><a class="dropdown-item" href="#">Tralálá</a></li>
            <li><a class="dropdown-item" href="#">Tralala </a></li>
          </ul>
        </div>
      </li>
      <li id="brinquedos">
        <div class="dropdown">
          <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
            Brinquedos
          </a>

          <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <li><a class="dropdown-item" href="#">Carro</a></li>
            <li><a class="dropdown-item" href="#">Dentadura</a></li>
            <li><a class="dropdown-item" href="#">Lingua de Sogra</a></li>
          </ul>
        </div>
      </li>
    </ul>
    <div id="menu">
      <h1 id="filtrar">Filtrar</h1>
      <ul id="lista-filtro">
        <li id="filtro-cor"><b>Cores</b></li>
        <li>Amarelo</li>
        <li>Vermelho</li>
        <li>Dourado</li>
        <li>Prata</li>
        <li id="filtro-tipo"><b>Tipo</b></li>
        <li>Número</li>
        <li>Ilustrados</li>
        <li>Unicor</li>
        <li>Comum</li>
      </ul>
    </div>
  </div>

</main>

<?php include_once 'includes/footer.php'; ?>
</body>

</html>