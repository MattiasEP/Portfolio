<?php
    if( isset($_POST['message']) && isset($_POST['name']) ) {

            $name    = cleaner($_POST['name']);
            $message = cleaner($_POST['message']);
            $phone   = cleaner($_POST['phone']);
            $mail    = cleaner($_POST['mail']);

            $query = "INSERT INTO messages (date, name, phone, mail, message) VALUES (NOW(), '$name', '$phone', '$mail', '$message')";

            mysqli_query($db, $query);

            echo "
                <div class='container'>
                    <div class='inner-content'>
                        <div class='content-box'>
                            Tack! Meddelandet är skickat!
                        </div>
                    </div>
                </div>
                ";
        }
?>


<div class="container footfix">
    <div class="inner-content">
        <div class="content-box relative">
            <i class="fa fa-phone fa-2x fa-icon"></i>
            <h2>Ring mig</h2>
            <p class="contact-p"><a href="tel:+46707663598">+46 70-766 35 98</a></p>
        </div>
        <div class="content-box">
            <i class="fa fa-envelope fa-2x fa-icon open"></i>
            <h2>Maila mig</h2>
            <p class="contact-p"><a href="mailto:mattias.ep@gmail.com">mattias.ep@gmail.com</a></p>
        </div>
        <div class="content-box">
            <i class="fa fa-binoculars fa-2x fa-icon"></i>
            <h2>Stalka mig</h2>
            <div class="gmaps" id="map">
            </div>
        </div>
        <div class="content-box">
            <i class="fa fa-envelope fa-2x fa-icon open"></i>
            <h2>Skicka ett meddelande till mig</h2>
            <form action='' method='POST' class='center'>
                <fieldset>
                    <div>
                        <label for='name'>Namn</label>
                        <input id='name' type='text' name='name' required />
                    </div>
                    <div>
                        <label for='phone'>Telefonnummer</label>
                        <input id='phone' type='text' name='phone' required />
                    </div>
                    <div>
                        <label for='mail'>E-mail</label>
                        <input id='mail' type='text' name='mail' required />
                    </div>
                    <div>
                        <label for='message'>Meddelande</label>
                        <textarea id='message type='textarea' name='message' required /></textarea>
                    </div>
                    <input type='submit' class='margin-top' value='SKICKA' />
                </fieldset>
            </form>
        </div>
    </div>
</div>
<footer>
    <div class="links">
        <div class="fb-share-button" data-href="http://www.mattiassoderstrom.se/portfolio/kontakt.html" data-layout="button" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.mattiassoderstrom.se%2Fportfolio%2Fkontakt.html&amp;src=sdkpreparse">Share</a></div>
        <div><a class="twitter-share-button" href="https://twitter.com/intent/tweet">Tweet</a></div>
    </div>
    <div class="copy"><h5>© 2K16 - MATTIAS SÖDERSTRÖM</h5></div>
    <a href="http://www.aikfotboll.se" target="_blank">
        <img class="aik" src="img/aik.png" target="_blank" />
    </a>
</footer>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC-1FsZ2HAOTz4bvYa9D9fN2DIkvWp4WX0&callback=initMap"></script>
<script src="script/map.js"></script>
<script src="script/fb.js"></script>
<script src="script/tweet.js"></script>
