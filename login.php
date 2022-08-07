<?php
require_once 'core/database.php';
$db = new Database();
$data = $db->get();
foreach ($data['users'] as $key => $val) {
    if ($val['login'] == $_POST['login']) {
        if ($val['password'] == md5($_POST['password'])) {
            echo(json_encode(['status' => 'Вы успешно зарегистрировались', 'code'=>'ok']));
            session_start();
            $_SESSION['name'] = $val['name'];
            $_SESSION['status'] = True;
        } else {
            echo(json_encode(['status' => 'Проверьте правильность логина или пароля', 'code'=>'error']));
        }

    }
}

//if ($db->search($_POST['login'])) {
//
//}
?>