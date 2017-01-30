<?php
    echo "
        <!DOCTYPE html>
        <html lang='en'>
            <head>
                <meta name='viewport' content='width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0'>
                <meta charset='UTF-8'>
                <meta name='description' content='Mattias Söderström - Portfolio'>
                <title>Mattias Söderström</title>
                <link rel='stylesheet' href='style/style.css'>
                <link rel='stylesheet' href='style/glow.css'>
                <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
        ";

    if (is_admin()) {
        echo "<link rel='stylesheet' src='./style/admin.css' />";
    }

    echo "
                <link rel='stylesheet' href='style/font-awesome/css/font-awesome.min.css'>
                <link rel='shortcut icon' href='favicon.ico' />
                <script src='script/jquery-3.1.1.min.js'></script>
            </head>
        ";

        if(is_admin()) {
            echo "<body style='background-color: darkred;'>";
        }
        else {
            echo "<body>";
        }

    echo "
            <div class='page-container'>
        ";
