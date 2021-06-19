$(function () {

    function initMap() {

        var location = new google.maps.LatLng(33.53563560777481, 73.17449748516084);

        var mapCanvas = document.getElementById('map');
        var mapOptions = {
            center: location,
            zoom: 16,
            panControl: false,
            scrollwheel: false,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(mapCanvas, mapOptions);

        var markerImage = 'js/maps/location.png';

        var marker = new google.maps.Marker({
            position: location,
            map: map,
            icon: markerImage
        });

        var contentString = '<div class="info-window">' +
                '<h5>Our Address</h5>' +
                '<div class="info-content">' +
                '<p>DHA Phase II, Rawalpindi, F.C.T., Pakistan</p>' +
                '</div>' +
                '</div>';

        var infowindow = new google.maps.InfoWindow({
            content: contentString,
            maxWidth: 400
        });

        marker.addListener('click', function () {
            infowindow.open(map, marker);
        });




    }

    google.maps.event.addDomListener(window, 'load', initMap);
});