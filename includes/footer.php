<style>
  .copyright {
    display: flex;
    justify-content: center;
    height: 25.5%;
    background-color: #fff;
  }

  .rodape {
    display: flex;
    background-color: #8A8A88;
    color: #f5f5f5;

  }

  .footer-contato {
    display: grid;
    grid-template-columns: repeat(1, 1fr);
    width: 50%;
  }

  .container-footer-menu {
    display: flex;
    align-items: center;
    margin-left: 3vw;
    margin-right: 10vw;
  }

  .footer-menu {
    width: 50%;
    margin-top: 10vh;
  }

  .footer-menu p a {
    text-decoration: none;
    color: #f5f5f5;
  }

  .footer-logo {
    margin-top: 3%;
    margin-left: 15%;
    width: 25vh;
  }

  .h1-1 {
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    margin-top: 1%;
    margin-left: 15%;
    font-size: 3vh;
  }

  .h1-1 a {
    text-decoration: none;
    color: #f5f5f5;
  }

  .p-2 {
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    padding: 0px;
    margin: 0px;
    margin-top: 2%;
    margin-left: 15%;


  }

  .p-3 {
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    margin-left: 15%;
  }

  .p-4 {
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    margin-left: 15%;
  }

  .p-5 {
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    margin-left: 12%;
  }

  .inp-search {
    width: 15vw;
  }
</style>




<footer>
  <div class="rodape">
    <div class="footer-contato">
      <img src="Assets/img/AliFest.logo.png" alt="alifest.logo" class="footer-logo">
      <div>
        <p class="h1-1">Fale Conosco <br> <a href="#">Central de Atendimento:</a></p>
      </div>

      <p class="h1-1">contato@alifest.com.br</p>
      <p class="h1-1">(11) 3971-4603</p>
      <p class="h1-1">Endereço: R. Manoel José de Almeida,<br>360 - Vila Cruz das Almas - São Paulo</p>
    </div>
    <div class="container-footer-menu">
      <div class="footer-menu">
        <h3>Menu: </h3>
        <p> <a href="#">Página Principal</a></p>
        <p> <a href="#">Sobre a Ali Fest</a></p>
        <p> <a href="#"> Produtos</a></p>
        <p> <a href="#">Catálogo</a></p>
        <p> <a href="#">Trabalhe Conosco</a></p>
      </div>


    </div>
    <nav class="navbar">
      <div class="container-fluid">
        <form class="d-flex">
          <input class="form-control me-2 inp-search" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-light btn-warning" type="submit">Pesquisar</button>
        </form>
      </div>
    </nav>
  </div>

  <div class="copyright">
    <p>Todos os Direitos reservados á &copy;Bruno Lima</p>
  </div>

  <script src="../Assets/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/a714c506ab.js" crossorigin="anonymous"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="../Assets/js/sweetalert2.js"></script>
  <script src="../Assets/js/logout.js"></script>
</footer>