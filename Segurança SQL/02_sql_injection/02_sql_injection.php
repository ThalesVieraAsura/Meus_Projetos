<?php
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
    
    //Maneira correta pra evitar sql injection
    if(isset($_POST['acao'])){
        $usuario = 'usuario';
        $senha = 'senha';
        $sql = $pdo->prepare("SELECT * FROM usuarios WHERE usuario = ? AND senha = ?");
        $sql->execute([$usuario, $senha]);
        if($sql->rowCount() == 1){
            echo 'acesso permitido';
        }else{
            echo 'acesso negado';
        }
    }
?>

<form method="post">
    <input type="text" name="usuario">
    <input type="password" name="senha">
    <input type="submit" value="Entrar" name="acao">
</form>