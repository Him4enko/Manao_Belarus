<?php
require_once 'core/database.php';
$db = new Database();
$data = $db->get();
foreach ($data['users'] as $key) {
    if ($key['password'] == md5($_POST['password'])){
        session_start();
        $_SESSION['name'] = $key['name'];
        $_SESSION['status'] = True;
        echo(json_encode(['status' => 'Вы успешно зарегистрировались', 'code'=>'ok']));
    } else {
        echo(json_encode(['status' => 'Проверьте правильность логина или пароля', 'code'=>'error']));
    }
}

//if ($db->search($_POST['login'])) {
//
//}
?>