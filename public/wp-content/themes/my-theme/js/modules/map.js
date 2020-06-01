if (document.getElementById('mapid')) {

    var mymap = L.map('mapid').setView([51.505, -0.09], 13);

    // pk.eyJ1Ijoibm92YWxleCIsImEiOiJjazN1YWV6djMwNGFhM2x0ZDl4c2t6aXNwIn0.ullCD-2nWnR-RegQ_fi0vg

    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        maxZoom: 18,
        id: 'mapbox/streets-v11',
        tileSize: 512,
        zoomOffset: -1,
        accessToken: 'pk.eyJ1Ijoibm92YWxleCIsImEiOiJjazN1YWV6djMwNGFhM2x0ZDl4c2t6aXNwIn0.ullCD-2nWnR-RegQ_fi0vg'
    }).addTo(mymap);
}