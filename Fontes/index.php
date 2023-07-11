<?php
/* STARTAR UMA SESSION */
session_start();
// SE A VARIAVEL DE SESSION TentativaDeLogin NÃO EXISTIR, VAMOS CRIAR COM O VALOR TRUE.
if (!isset($_SESSION["TentativaDeLogin"])) {
  $_SESSION["TentativaDeLogin"] = true;
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- Meta tags Obrigatórias -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Techlab</title>
</head>

<body class="meu-body">

  <!-- Inicio da Barra de Navegação-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

    <a class="navbar-brand" href="https://etecribeiraopreto.com.br" target="_blank">#VemPraEtec</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Alterna navegação">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <!-- Início do Itens do Menu de Navegação -->
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

        <li class="nav-item disabled">
          <a class="nav-link" href="#">Principal<span class="sr-only">(Página principal)</span></a>
        </li>

        <li class="nav-item disabled">
          <a class="nav-link" href="#">Laboratórios</a>
        </li>

        <li class="nav-item disabled">
          <a class="nav-link" href="#">Computadores</a>
        </li>

        <li class="nav-item disabled">
          <a class="nav-link" href="#">Tipos de Usuários</a>
        </li>

        <li class="nav-item disabled">
          <a class="nav-link" href="#">Usúarios</a>
        </li>

        <li class="nav-item disabled">
          <a class="nav-link" href="#">Chamados</a>
        </li>
      </ul>
      <!-- Fim do Itens do Menu de Navegação -->

      <!-- Início do Formulário para Login -->
      <form class="form-inline my-2 my-lg-0" action="validarlogin.php" method="POST">
        <input class="form-control mr-sm-2" type="text" name="campoCodigo" placeholder="Código" aria-label="Pesquisar" required="true">
        <input class="form-control mr-sm-2" type="password" name="campoSenha" placeholder="Senha" aria-label="Pesquisar" required="true">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Entrar</button>
      </form>
      <!-- Fim do Formulário para Login -->
    </div>
  </nav>
  <!-- Fim da Barra de Navegação -->

  <!-- Inicio do Alert Login inválido -->
  <?php
  if ($_SESSION["TentativaDeLogin"] == false) {
  ?>
    <!-- Alert Login -->
    <div class="alert alert-danger meu-alert-login-incorreto" role="alert">
      Tentativa de Login inválida: <b>Código</b> ou <b>Senha</b> incorretos! Tente novamente.
    </div>
    <!-- Fim Alert Login -->
  <?php
  }
  ?>
  <!-- Fim do Alert Login inválido -->

  <!-- Início do Carousel -->
  <div class="container_fluid">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="img/slide01.jpg" alt="Primeiro Slide" style="height: 500px;">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="img/slide02.jpg" alt="Segundo Slide" style="height: 500px;">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="img/slide03.jpg" alt="Terceiro Slide" style="height: 500px;">
        </div>
      </div>
    </div>
  </div>
  <!-- Fim do Carousel -->

  <!-- Início do Rodapé -->
  <footer class="bg-dark text-white py-3">
    <div class="container">

      <div class="row">

        <div class="col-md-8">
          <h4>Contato</h4>
          <ul class="list-unstyled">
            
            <li>Telefone: <a href="tel:+55016997140484" style="text-decoration: none; color:white;"> (16) 9 9714-0484</a></li>
            <li style="text-decoration: none;">Email: <a class="link-meu-email" style="text-decoration: none; color:white;" href="mailto:joaochavessales3236@gmail.com">joaochavessales3236@gmail.com</a></li>
            <li><a href="https://wa.me/qr/SIVNAHJM56RFC1" style="text-decoration: none; color:white;">Meu WhatsApp</a></li>
            <li>Endereço: Rua Espitiro Santo - Ipiranga - Ribeirão Preto/SP</li>
          </ul>
        </div>

        <div class="col-md-4">
          <h4>Redes Sociais</h4>
          <ul class="list-unstyled">
            <li><a href="https://www.facebook.com/EtecRP/" target="_blank"><i class="fab fa-facebook"></i>Facebook</a></li>
            <li><a href="https://twitter.com/"><i class="fab fa-twitter" target="_blank"></i>Twitter</a></li>
            <li><a href="https://www.instagram.com"><i class="fab fa-instagram" target="_blank"></i>Instagram</a></li>
          </ul>
        </div>

      </div>
      <hr>
      <p class="text-muted small">Produzido por João Vítor Chaves Sales 2023 - etectechlab.com.br - Site Portifólio.</p>
    </div>
  </footer>
  <!-- Fim do Rodapé -->
</body>

</html>


<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="css/meuestilo.css">
<!-- JavaScript (Opcional) -->
<!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
