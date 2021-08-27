
var x = document.getElementById("demo");
function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else {
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  x.innerHTML = "Latitude: " + position.coords.latitude +
  "<br>Longitude: " + position.coords.longitude;
}
document
  .getElementById('target')
  .addEventListener('change', function () {
    'use strict';
    var vis = document.querySelector('.vis'),   
      target = document.getElementById(this.value);
    if (vis !== null) {
      vis.className = 'inv';
    }
    if (target !== null ) {
      target.className = 'vis';
    }
})