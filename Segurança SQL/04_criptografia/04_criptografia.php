<?php
    //Criptografia
    if(isset($_POST['acao'])){
        $senha = md5($_POST['senha']);
        echo 'A senha criptografada é: ' .$senha;
    }
    
    
?>
<form method="post">
    <input type="text" name="usuario">
    <input type="password" name="senha">
    <input type="submit" value="Entrar" name="acao">
</form>