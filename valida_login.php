<?php
$user_authenticate = false;

$users_app = [
    ['email' => 'admin@teste.com', 'senha' => '123'],
    ['email' => 'user@teste.com', 'senha' => '1234'],
];

foreach($users_app as $user){
    if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
        $user_authenticate = true;
    }
}

session_start();

if($user_authenticate){
    $_SESSION['autenticado'] = 'sim';
    header('Location: home.php');
}

else{
    $_SESSION['autenticado'] = 'nao';
    header('Location: index.php?login=erro');
}


?>