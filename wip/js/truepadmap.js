
var base_wlanowski = L.tileLayer('http://localhost/tiles/tilesneu/{z}/{x}/{y}.png', {
    //  Attribution ist ausgeschaltet
    //  attribution: 'Daten: OSM, Design: John Nitzsche (Wlanowski)'
});

weltgrenzen = new L.LatLngBounds(new L.LatLng(50.73758,13.92636), new L.LatLng(51.12673,13.57839));


var mymap = L.map('mapid', {
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



//mymap.on('click',onMapClick);




/*
$(window).on("resize", function () {
    $("#mapid").height($(window).height() - 150);
    mymap.invalidateSize();
    //console.log(mymap.zoom);
}).trigger("resize");
*/