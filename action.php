<?php

$email = $_POST['email'];
$password = $_POST['password'];

$correctEmail = 'lucasmatheus2021@gmail.com';
$correctPassword = '1913960900';

if ($email != $correctEmail || $password != $correctPassword) {
    header('Location: index.php?erro=1');
}
else{
    header('Location: dashboard.php?success=1');
}
?>