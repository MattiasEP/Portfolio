<?php
session_start();

if (isset($_POST['username']) && isset($_POST['password'])) {

    $usr = cleaner($_POST['username']);
    $psw = cleaner($_POST['password']);

    if($usr == "mattias" && $psw == "saittam") {
        $_SESSION['admin'] = TRUE;
        header('Location: ?page=admin');
    }
}

echo '<link rel="stylesheet" href="../style/admin.css">';

if (is_admin()) {
    include('loggedin.php');
}
else {
    include('login.php');
}
