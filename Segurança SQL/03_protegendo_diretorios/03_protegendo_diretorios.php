<?php
    //Protegendo diretórios
    /* Deixe assim no htaccess
    RewriteEngine On
    RewriteCond %{SCRIPT_FILENAME} !-f
    RewriteCond %{SCRIPT_FILENAME} !-d
    RewriteRule ^(.*)$ index.php?url=$1 [QSA,L]

    //A linha abaixo protege diretórios
    Options -Indexes
    */
?>