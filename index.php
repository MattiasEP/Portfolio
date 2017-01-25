<?php
    include('config.php');
    include('head.php');
    include('header.php');
    if (isset($_GET['page'])) {
        switch($_GET['page']) {

            // PAGE
            case 'start':       include('start.php');           break;
            case 'cv':          include('cv.php');              break;
            case 'portfolio':   include('portfolio.php');       break;
            case 'kontakt':     include('kontakt.php');         break;

            // GAME
            case 'hm':          include('./hangman/hm.php');    break;

            // ADMIN
            case 'admin':       include('./admin/admin.php');   break;
            case 'logout':      include('./admin/logout.php');  break;
            case 'msg':         include('./admin/msg.php');     break;
            case 'text':        include('./admin/text.php');    break;
            case 'cvadmin':     include('./admin/cvadmin.php'); break;
            case 'hangman':     include('./admin/hangman.php'); break;

            // DEFAULT
            default:            include('start.php');           break;

        }
    }
    else {
        include('start.php');
    }
    include('footer.php');
 ?>
