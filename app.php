<?php
require_once './core/database.php';
require_once './core/Auth.php';
require_once './core/verification.php';
$verification = new verification();
$database = new Database();

if (!$verification->password($_POST['password'])) {
    echo (json_encode(['password' => 'Пароль должен состоять из 6 и более символов, включать в себя только цифры и буквы']));
} else if (!$verification->login($_POST['login'])) {
    echo (json_encode(['login' => 'Логин должен состоять из минимум 6 символов']));
} else if (!$verification->name($_POST['name'])) {
    echo (json_encode(['name' => 'Имя состоит минимум из 2 символов и содержит только буквы']));
}  else if (!$verification->verpass($_POST['password'], $_POST['password_2'])) {
    echo (json_encode(['verpass' => 'Пароли не совпадают']));
}
if ($verification->password($_POST['password'])
    || $verification->login($_POST['login'])
    || $verification->name($_POST['name'])
    || $verification->verpass($_POST['password'], $_POST['password_2'])
    || !$database->search($_POST['login'])) {
    $temp = [
        'login' => $_POST['login'],
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'password' => md5($_POST['password'])
    ];
    $database->insert($temp);
    echo (json_encode(['success' => 'Вы успешно зарегистрировались']));
    var_dump($temp);
}

?>

