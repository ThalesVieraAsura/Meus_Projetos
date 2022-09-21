<?php
    /*Faça isso para arquivos single, exemplo arquivos de requisição 
    ajax*/
    session_start();
    if(isset($_SESSION['login'])){
        $data['info'] = 'Somente para quem estiver logado no sistema';
        die(json_encode($data));
    }else{
        die('Erro, vc não pode acessar esse arquivo');
    }

?>