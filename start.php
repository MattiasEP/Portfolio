<?php
    $query = "SELECT * FROM texts";
    $result = mysqli_query($db, $query);

    echo "
        <div class='container'>
            <div class='inner-content'>
        ";

    while($row = mysqli_fetch_assoc($result)) {
        echo "
            <div class='content-box'>
                <h2>{$row['heading']}</h2>
                <section>{$row['content']}</section>
            </div>
            ";
    }

    echo "
            </div>
        </div>
        <div class='container'>
            <div class='inner-content'>
                <div class='content-box counters'>
                    <div class='countdown-box'>
                        <h2>Tid kvar till LIA:</h2>
                        <span id='countdown-lia'></span>
                    </div>
                    <br>
                    <div class='countdown-box'>
                        <h2>Tid kvar till examen:</h2>
                        <span id='countdown-exam'></span>
                    </div>
                </div>
            </div>
        </div>
        <div class='container footfix'>
            <div class='inner-content'>
                <div class='content-box'>
                <div class='video-container'>
                    <iframe class='video' src='https://www.youtube.com/embed/XB2ejEpAoPA' frameborder='0' allowfullscreen></iframe>
                </div>
                </div>
            </div>
        </div>
    <script src='script/jquery.countdown.min.js'></script>
    <script src='script/countdown.js'></script>
    ";
