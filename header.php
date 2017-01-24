<?php
if(is_admin()) {
    echo '
        <header class="container">
            <h1 class="center">
                <span class="h1">Mattias Söderström</span>
                <a href="index.php"><img class="logga" src="img/nya.png"/></a>
            </h1>
            <nav class="navbar inner-content">
                <ul>
                    <li><a href="?page=cvadmin"><div class="li-button">CV</div></a></li>
                    <li><a href="?page=msg"><div class="li-button">MEDDELANDEN</div></a></li>
                    <li><a href="?page=text"><div class="li-button">TEXT</div></a></li>
                    <li><a href="?page=logout"><div class="li-button">LOGGA UT</div></a></li>
                </ul>
            </nav>
        </header>
        ';
}
else {
    echo '
        <header class="container">
            <h1 class="center">
                <span class="h1">Mattias Söderström</span>
                <a href="index.php"><img class="logga" src="img/nya.png"/></a>
            </h1>
            <nav class="navbar inner-content">
                <ul>
                    <li><a href="?page=cv"><div class="li-button">CV</div></a></li>
                    <li><a href="?page=portfolio"><div class="li-button">PORTFOLIO</div></a></li>
                    <li><a href="?page=kontakt"><div class="li-button">KONTAKT</div></a></li>
                </ul>
            </nav>
        </header>
        ';
}
