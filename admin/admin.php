<?php
session_start();

if (isset($_POST['username']) && isset($_POST['password'])) {
    if($_POST['username'] == "mattias" && $_POST['password'] == "saittam") {
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