<?php
    session_start();
    if(isset($_POST['acao'])){
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['token'] = uniqid();

?>
    Clique <a href="2-recuperar.php?token=<?php echo $_SESSION['token']; ?>">aqui</a> para redefinir sua senha.
<?php
    }else if($_GET['token']){
        $token = $_GET['token'];
            if($token != $_SESSION['token']){
                die('O token não corresponde');
            }else{
                //Pode redefinir a senha
                echo 'Redefinir senha para o email '.$_SESSION['email'];
                echo '<form method="post">
                    <input type="password" name="senha">
                    <input type="submit" name="redefinir" value="Enviar">
                </form>';
            }

?>
<?php
    }
?>
<?php
   if(isset($_POST['redefinir'])){
       echo 'A senha foi redefinida com sucesso!';
   } 
?>