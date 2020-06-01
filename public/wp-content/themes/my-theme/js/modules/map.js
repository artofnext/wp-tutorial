const MAPDIV = 'mapid';

if (document.getElementById(MAPDIV)) {

    let markersArr = [];

    let markerNodeArr = document.getElementsByClassName('marker');

    let centerLat = 0;
    let centerLon = 0;

    for (let i = 0; i < markerNodeArr.length; i++) {
        let marker = new Object;
        marker.lat = markerNodeArr[i].getAttribute('data-lat');
        centerLat += +marker.lat;
        marker.lon = markerNodeArr[i].getAttribute('data-lon');
        centerLon += +marker.lon;
        markersArr.push(marker);
    }

    centerLat /= markerNodeArr.length;
    centerLon /= markerNodeArr.length;

    var mymap = L.map(MAPDIV).setView([centerLat, centerLon], 13);

    // pk.eyJ1Ijoibm92YWxleCIsImEiOiJjazN1YWV6djMwNGFhM2x0ZDl4c2t6aXNwIn0.ullCD-2nWnR-RegQ_fi0vg

    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        maxZoom: 18,
        id: 'mapbox/streets-v11',
        tileSize: 512,
        zoomOffset: -1,
        accessToken: 'pk.eyJ1Ijoibm92YWxleCIsImEiOiJjazN1YWV6djMwNGFhM2x0ZDl4c2t6aXNwIn0.ullCD-2nWnR-RegQ_fi0vg'
    }).addTo(mymap);

    
    for (let i = 0; i < markersArr.length; i++) {
    
        let marker = L.marker([markersArr[i].lat, markersArr[i].lon]).addTo(mymap);
    }

}