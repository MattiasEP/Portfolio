<?php
    include('head.php');
    include('header.php');
    if (isset($_GET['page'])) {
        switch($_GET['page']) {
            case 'start':       include('start.php'); break;
            case 'cv':          include('cv.php'); break;
            case 'portfolio':   include('portfolio.php'); break;
            case 'kontakt':     include('kontakt.php'); break;
        }
    }
    else {
        include('start.php');
    }
    include('footer.php');
 ?>
