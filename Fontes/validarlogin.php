<?php
    /* STARTAR UMA SESSION */
    session_start();
    /* CAPTURAR OS VALORES ENVIADOS PELO MÉTODO 'POST'*/ 
    $codigoDigitado = $_POST["campoCodigo"]; 
    $senhaDigitada  = $_POST["campoSenha"];
    
    /* FAZER CONEXÃO COM O BANCO DE DADOS*/
    require("conexaobd.php");
    
    /*ELABORAR A CONSULTA QUE SERÁ REALIZADA JUNTO À TABEÇA USUARIO */
    $consulta="SELECT * FROM usuario WHERE (IDUSUARIO = :cod) AND (SENHA = :sen);";
    
    /* PREPARAR PARA EXECUTAR A CONSULTA*/
    $stmt = $pdo->prepare($consulta);

    /* DEFINIR OS PARÂMETROS DA CONSULTA */
    $stmt->bindParam(":cod",$codigoDigitado);
    $stmt->bindParam(":sen",$senhaDigitada);
    
    /* EXECUTAR O COMANDO 'SELECT' */
    $stmt->execute();
    
    /* EXIBIR A CONSULTA QUE FOI EXECUTADA */
    // echo $stmt->debugDumpParams();
    
    /* VERIFICAR SE O USUARIO FOI ENCONTRADO */
    if($stmt->rowCount()==1){
       // echo " USUÁRIO ENCONTRADO! ";
       $_SESSION["TentativaDeLogin"]=true;
       header("Location:principal.php");
    } else {
       // echo " USUÁRIO NÃO ENCONTRADO! ";
       $_SESSION["TentativaDeLogin"]=false;
       header("Location:index.php");
    };

