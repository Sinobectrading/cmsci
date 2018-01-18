function initMap() {
    var montreal = {lat: 45.487791, lng: -73.695902};
    var map = new google.maps.Map(document.getElementById('surabaya'), {
      zoom: 11,
      center: montreal
    });
    var marker = new google.maps.Marker({
      position: montreal,
      map: map
    });
  }