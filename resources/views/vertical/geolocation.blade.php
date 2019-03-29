<!doctype html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Demo</title>
<style>
    #map {
        height: 100%;
    }
    html, body {
        height: 100%;
        margin: 0;
        padding: 0;
    }
</style>
<script src="https://www.gstatic.com/firebasejs/5.8.4/firebase.js"></script>
<script>
    // Initialize Firebase
    // TODO: Replace with your project's customized code snippet
    var config = {
        apiKey: "AIzaSyAD-B_bCo7e95XHBPpNkRvhc4I8xHwUKpE",
        authDomain: "agil-aee92.firebaseapp.com",
        databaseURL: "https://agil-aee92.firebaseio.com",
        projectId: "agil-aee92",
        storageBucket: ".appspot.com",
        messagingSenderId: "",
    };
    firebase.initializeApp(config);
</script>
<div id="map"></div>
<script>
    firebase.database().ref('/positions_camions').on('value', function(snapshot) {
        var val = snapshot.val();
        var myLatLng = {
            lat: val.Latitude,
            lng: val.Longitude,
        };
    });
    function initMap() {
        var latlng = new google.maps.LatLng(9.682796, 21.473007);
        var myOptions = { zoom: 9, center: latlng, mapTypeId: google.maps.MapTypeId.ROADMAP };
        var map = new google.maps.Map(document.getElementById("map"), myOptions);
        firebase.database().ref('gps').on('value', function() {
            var val = snapshot.val();
            var marker = new google.maps.Marker({
                position: {
                    lat: val.lat,
                    lng: val.lng,
                },
                map: map,
                title: 'gps'
            });
        });
    }
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBRNBQ4cQmoc4Ei6yrn3tagZPLyduMTh1M&callback=initMap">
</script>
