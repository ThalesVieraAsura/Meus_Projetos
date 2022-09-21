<?php
    const host = 'localhost';
    const dbname = 'painel_site';
    const user = 'root';
    const senha = '';

    try {
        $pdo = new PDO('mysql:host='.host.';dbname='.dbname, user, senha);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //vai mostrar todos os erros caso surjam, deixe isso enquanto estiver com o site em desenvolvimento
    } catch (Exception $e) {
        echo 'Erro ao conectar';
    }
        
        
?>