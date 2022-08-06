<?php
session_start();
if ($_SESSION['status']) {

    echo "Hello, ".$_SESSION['name'];
    echo '<form action="">
          <input type="submit" value="Выход">
          </form>';
} else {
    echo 'Вы не авторизованы!';
}
session_destroy();
?>

