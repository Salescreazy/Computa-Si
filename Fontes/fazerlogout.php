<?php 
    /* Startar a SESSION */
    session_start();
    /* Remover a variavel "TentativaDeLogin" da SESSION */
    unset($_SESSION["TetativaDeLogin"]);
    /* Redirecionar para index.php usando PHP:" header("Location:index.php"); " */
?>
<script>
    alert("Obrigado por ter usado o TechLab.");
    window.location.href = "index.php";
</script>