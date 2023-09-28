// Inicializa el mapa en una ubicación y nivel de zoom específicos
var mymap = L.map('map').setView([51.505, -0.09], 13);

// Agrega un mapa base (puedes utilizar diferentes proveedores de mapas)
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
}).addTo(mymap);

// Crea marcadores para los activos fijos y añádelos al mapa
var activo1 = L.marker([51.5, -0.09]).addTo(mymap);
activo1.bindPopup('Activo 1');

var activo2 = L.marker([51.51, -0.1]).addTo(mymap);
activo2.bindPopup('Activo 2');
