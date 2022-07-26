 function initMap(){
    var location = {lat:0.3237607,lng:32.6197929};
    var map = new google.maps.Map(document.getElementById("map"),{
        zoom: 8,
        center: location

    });
    let maker = new google.maps.Marker({
        position: location,
        map: map
    });

    var markerlocations = [
      [0.390752, 32.584440, 'komamboga HC III'],
      [0.369893, 32.597774, 'Kisaasi Church of Uganda'],
      [0.399063, 32.575003, 'St. Stephen'],
      [0.362100, 32.561294, 'kawempe NRH'],
      [0.329655, 32.605824, 'Naguru Ug, China Hospital'],
      [0.321058, 32.617501, 'Kiswa HC III'],
      [0.349956, 32.603355, 'UMC VHB'],
      [0.306602, 32.611803, 'KKisugu HC III'],
      [0.247600, 32.613040, 'Kiruddu NRH'],
      [0.309479, 32.595419, 'Kibuli hospital'],
      [0.300913, 32.586958, 'St. Francis hospital'],
      [0.303823, 32.553215, 'Lubaga Hospital'],
      [0.281130, 32.545405, 'Kitebi HC III'],

      [0.313744, 32.558732,'Mengo Hospital'],
      [0.340890, 32.553712, 'Kawaala HC III'],
      [0.317160, 32.571030, 'Vine medical clinic'],
      [0.307592, 32.569265, 'Kisenyi HC IV'],
      [0.315562, 32.586062, 'City Hall clinic'],
      [0.315562, 32.586062, 'Kamwokya Christian caring center'],
  ];
  for(i  = 0;  i < markerlocations.length; i++) {
      var marker = new google.maps.Marker({
              position: new google.maps.LatLng(markerlocations[i][0], markerlocations[i][1]),
              map: map
              
      });
      var address = '<div><p><b>markerlocations[i][2]</b></p></div>';
      var infowindow = new google.maps.InfoWindow({
        content: address
      });
      marker.addEventListener('click', function() {
        infowindow.open(map, marker);
      });
  }
    



}
let aside = document.querySelector(".aside");
let toggle = document.querySelector(".hamburger-div");
let backdrop = document.querySelector(".back-drop");
let li = document.querySelector(".li");
let lii = document.querySelector(".lii");
let logo = document.querySelector(".log");

toggle.addEventListener("click", function(){
  if (aside.style.display === 'block'){
    li.style.display = 'none';
    lii.style.display = 'none';
    aside.style.display = 'none';
    backdrop.style.display = 'none';
    

    
  }else{
    li.style.display = 'inline-block';
    lii.style.display = 'inline-block';
    backdrop.style.display = 'block';
    aside.style.display = 'block';
    logo.style.display = 'none';
  }
});
backdrop.addEventListener("click", function (){
  if (aside.style.display === 'block'){
    aside.style.display = 'none';
    backdrop.style.display = 'none';
    
  }else{
    backdrop.style.display = 'block';
    aside.style.display = 'block';
  }
});
