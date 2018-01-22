var base_wlanowski = L.tileLayer('http://localhost/tiles/tilesneu/{z}/{x}/{y}.png', {
    //  Attribution ist ausgeschaltet
    //  attribution: 'Daten: OSM, Design: John Nitzsche (Wlanowski)'
});

weltgrenzen = new L.LatLngBounds(new L.LatLng(50.73758, 13.92636), new L.LatLng(51.12673, 13.57839));


var mymap = L.map('admin_mapid', {
    attributionControl: false,
    center: [50.90167, 13.67050],
    zoom: 13,
    layers: [base_wlanowski],
    maxBounds: weltgrenzen,
    maxBoundsViscosity: 0.95,
    minZoom: 13
});

// Zeichne Weltgrenze als Rechteck ein
// var grenze = L.rectangle(weltgrenzen).getLatLngs();
// L.polyline(grenze[0].concat(grenze[0][0])).addTo(mymap);


var marker = L.marker([0, 0],{
    draggable : true
}).addTo(mymap);

mymap.on('click', function (e) {
    marker.setLatLng(e.latlng);
    document.getElementById('input_neu_lat').value = marker.getLatLng().lat;
    document.getElementById('input_neu_lng').value = marker.getLatLng().lng;
    document.getElementById('modal_neu_lat').value = marker.getLatLng().lat;
    document.getElementById('modal_neu_lng').value = marker.getLatLng().lng;

    // Setze Button erst an, wenn eine Koordinate gesetzt ist...
    document.getElementById("submit_position").disabled = false;
    document.getElementById("button_neuerpoi").disabled = false;
});

marker.on('dragend', function (e) {
    document.getElementById('input_neu_lat').value = marker.getLatLng().lat;
    document.getElementById('input_neu_lng').value = marker.getLatLng().lng;
    document.getElementById('modal_neu_lat').value = marker.getLatLng().lat;
    document.getElementById('modal_neu_lng').value = marker.getLatLng().lng;
});

/*
$(window).on("resize", function () {
    $("#mapid").height($(window).height() - 150);
    mymap.invalidateSize();
    //console.log(mymap.zoom);
}).trigger("resize");
*/