<?php

session_start();

$db = mysqli_connect("portfolio-219296.mysql.binero.se", "219296_cq93102", "portfolioDB", "219296-portfolio");
mysqli_query($db, "SET NAMES utf8");

function is_admin() {
    if (isset( $_SESSION['admin']) && $_SESSION['admin'] === true) {
        return true;
    }
    else {
        return false;
    }
}
