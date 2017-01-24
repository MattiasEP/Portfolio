<?php
    if(is_admin()) {
        echo "
            <div class='container'>
                <div class='inner-content'>
                    <div class='content-box'>
                        Här ska man kunna redigera CV
                    </div>
                </div>
            </div>
            ";
    }
    else {
        include('start.php');
    }
