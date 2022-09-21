<?php
    //Evitando login simultâneo
    session_start();
    const host = 'localhost';
    const dbname = 'crud_simples';
    const user = 'root';
    const senha = '';

    try {
        $pdo = new PDO('mysql:host='.host.';dbname='.dbname, user, senha);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //vai mostrar todos os erros caso surjam, deixe isso enquanto estiver com o site em desenvolvimento
    } catch (Exception $e) {
        echo 'Erro ao conectar';
    }    
    if(isset($_POST['acao']) && !isset($_SESSION['login'])){
        $_SESSION['login'] = $_POST['usuario'];
        $_SESSION['token'] = uniqid();
        /*esse uniqid() é único, significa que nunca vai se repetir*/
        $sql = $pdo->prepare("DELETE FROM entrar WHERE usuario = ?");
        $sql->execute([$_SESSION['login']]);
        $sql = $pdo->prepare("INSERT INTO entrar VALUES (null, ?, ?)");
        $sql->execute([$_SESSION['login'], $_SESSION['token']]);
    }

    if(!isset($_SESSION['login'])){
        //deslogado
        echo '<form method="post">
            <input name="usuario" type="text">
            <input name="acao" type="submit" value="Entrar">
        </form>';
    }else{
        //logado
        //Verificar se não existe outra sessão em progresso
        $login = $_SESSION['login'];
        $token = $_SESSION['token'];
        $check = $pdo->prepare("SELECT * FROM entrar WHERE usuario = ? AND token = ?");
        $check->execute([$login, $token]);
        if($check->rowCount() == 1){
            echo 'logado '.$_SESSION['login'];;
        }else{
            echo 'Você precisa fazer o login novamente.';
            session_destroy();
        }
    }
?>