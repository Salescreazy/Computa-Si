<?php
/* STARTAR UMA SESSION */
session_start();

// Se a variavel de SESSION "TentativaDeLogin" não existir, 
// Apresentar mensagem ao usuário: Login Obrigatório
// Redirecionar para index.php
// $_SESSION["TentativaDeLogin"] = true;

if (!isset($_SESSION["TentativaDeLogin"]) or ($_SESSION["TentativaDeLogin"] == false)) {

?>

    <script>
        alert("Login Obrigatório.");
        window.location.href = "index.php";
    </script>

<?php
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
                <li class="nav-item active">
                    <a class="nav-link" href="principal.php">Principal<span class="sr-only">(Página principal)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="laboratorios.php">Laboratórios</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="computadores.php">Computadores</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="tiposdeusuarios.php">Tipos de Usuários</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="usuarios.php">Usúarios</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="chamados.php">Chamados</a>
                </li>
            </ul>
            <!-- Fim do Itens do Menu de Navegação -->
            <!-- Inicio do botão sair -->
            <a href="fazerlogout.php">
                <button type="button" class="btn btn-danger">Sair</button>
            </a>
            <!-- Fim do botão sair -->
        </div>


    </nav>
    <!-- Fim da Barra de Navegação -->

    <!-- Início da entrada de dados -->
    <div class="meu-container">
        <h1>Tipos De Usuarios</h1>

        <!-- INICIO DO BOTÃO -->
        <a href="tipodeusuario.php">
            <button type="button" class="btn btn-success">
                Novo
            </button>
        </a>
        <!-- FIM DO BOTÃO -->

        <br><br>

        <!-- INICIO CONEXÃO COM O BANCO DE DADOS E REALIZAÇÃO DA CONSULTA NA TABELA TIPOS DE USUARIOS -->
        <?php
        require("conexaobd.php");
        $consulta = "select IDTIPODEUSUARIO as idTipodeusuario, NOME as nomeTipodeusuario from tipodeusuario order by NOME;";
        // OUTRA FORMA DE SELEC QUE DÁ CERTO (É SÓ MUDAR OS PADRÕES DEPOIS)
        // select IDTIPODEUSUARIO, NOME from tipodeusuario order by NOME;
        $stmt = $pdo->prepare($consulta);
        $stmt->execute();
        ?>
        <!-- FIM DA CONEXÃO COM O BANCO DE DADOS -->


        <!-- INICIO DA TABELA -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Código / ID - Usuário</th>
                    <th scope="col">Nome do Usuário</th>
                    <th scope="col">Alterar</th>
                    <th scope="col">Excluir</th>
                </tr>
            </thead>

            <!-- INICIO da Construção das linhas da tabela apartir da consulta SQL realizada -->
            <tbody>
                <?php
                foreach ($stmt as $registro) {
                    $idTipodeusuario = $registro["idTipodeusuario"];
                    $nomeTipodeusuario = $registro["nomeTipodeusuario"];
                ?>
                    <tr>
                        <th scope="row">
                            <?php echo $idTipodeusuario; ?>
                        </th>
                        <td>
                            <?php echo $nomeTipodeusuario; ?>
                        </td>

                        <!-- INICIO DO BOTÃO ALTERAR -->
                        <td>
                            <a href="tipodeusuario.php?idTipodeusuario=<?php echo $idTipodeusuario; ?>">
                                <button type="button" class="btn btn-info">Alterar</button>
                            </a>
                        </td>
                        <!-- FIM DO BOTÃO ALTERAR -->
                        <!--///////////////////// -->
                        <!-- INICIO DO BOTÃO EXCLUIR -->
                        <td>
                            <a href="excluirtipodeusuario.php?idTipodeusuario=<?php echo $idTipodeusuario; ?>">
                                <button type="button" class="btn btn-danger">Excluir</button>
                            </a>
                        </td>
                        <!-- FIM DO BOTÃO EXCLUIR -->
                    </tr>
                <?php
                }
                ?>
                <!-- Fim da Construção das linhas da tabela apartir da consulta SQL realizada -->
            </tbody>
        </table>
        <!-- FIM DA TABELA -->

        <!-- INICIO DO BOTÃO -->
        <br>
        <a href="tipodeusuario.php">
            <button type="button" class="btn btn-success">
                Novo
            </button>
        </a>
        <!-- FIM DO BOTÃO -->

    </div>
    <!-- Fim da entrada de dados -->




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