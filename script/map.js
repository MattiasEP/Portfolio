function initMap() {
    var uluru = {lat: 59.240259, lng: 17.997856};
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 10,
        center: uluru
    });
    var marker = new google.maps.Marker({
        position: uluru,
        map: map
    });
}

/*  Denna funktion är hämtad från nätet så att jag kan använda google maps på min sida.
    Jag har skrivit in longitud och latitud så att kartan centreras på min adress.
 */