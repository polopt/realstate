/*------------------------------------------------------------------*/
/*	Google Map Contact Page	*/
/*------------------------------------------------------------------*/	
function initialize_contact_map()
{
    if(contact_location.lat)
    {
        var geocoder  = new google.maps.Geocoder();
        var latlng = new google.maps.LatLng(contact_location.lat,contact_location.lng);
        var myOptions = {
                        zoom: 15,
                        mapTypeId: google.maps.MapTypeId.ROADMAP,
                        scrollwheel: true,
						panControl:true,
						zoomControl:true,
						mapTypeControl:true,
						scaleControl:true,
						streetViewControl:true,
						overviewMapControl:true,
                    };
        var map = new google.maps.Map(document.getElementById("contact_map"), myOptions);

        geocoder.geocode( { 'location': latlng }, function(results, status){
            if (status == google.maps.GeocoderStatus.OK){
                map.setCenter(results[0].geometry.location);
                var marker = new google.maps.Marker({
                    map: map,
					animation:google.maps.Animation.DROP,
                    position: results[0].geometry.location
                });
				
				//	Add Info Window
				var infowindow = new google.maps.InfoWindow({
				  content:contact_location.add,
				});
				
				//	Open Window When Marker Click
				google.maps.event.addListener(marker, 'click', function() {
				  infowindow.open(map,marker);
				});
				infowindow.open(map,marker);
            }
            else{
                alert("Geocode was not successful for the following reason: " + status);
            }
        });
    }
}

window.onload = initialize_contact_map();