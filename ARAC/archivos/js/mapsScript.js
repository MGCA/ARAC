/* global google */

// MOSTRAR LA GEOLOCALIZACION EN GOOGLE MAPS *********************************
var miCajaMapa = document.getElementById("map");

function dibujarMapa()
{
    var miLatLon = new google.maps.LatLng(10.632061,-85.440142);
    var miLatLon2 = new google.maps.LatLng(10.627851,-85.436869);
    var centrar = new google.maps.LatLng(10.630212,-85.438270);
    
    var mapOptions = {
          zoom: 17,
          center: centrar,
          mapTypeId: 'roadmap'
      };
      
    var map = new google.maps.Map(document.getElementById("map"), mapOptions);
    
    var image = 'archivos/imagenes/frankicon.jpg';
    var marker = new google.maps.Marker({
                                            position: miLatLon,
                                            animation: google.maps.Animation.BOUNCE,
                                            title: "Ciclo Taller Frank2",
                                            icon: image
                                        });
    var marker2 = new google.maps.Marker({
                                            position: miLatLon2,
                                            animation: google.maps.Animation.BOUNCE,
                                            title: "Ciclo Taller Frank1",
                                            icon: image
                                        });
    marker.setMap(map);
    marker2.setMap(map);
}


window.addEventListener('load', dibujarMapa, false);
//****************************************************************************