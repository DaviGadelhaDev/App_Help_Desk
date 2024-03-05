<?php
session_start();
    //remover indices do array de sessão
    //unset()

    //destruir a variável de sessão
    //session_destroy() é necessário forçar um redirecionamento após destruir a sessão
    session_destroy();
    header('Location: index.php');
?>