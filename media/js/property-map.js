// Google Map
function initialize_property_map()
{
    if(property_location.lat)
    {
        var geocoder  = new google.maps.Geocoder();
        var latlng = new google.maps.LatLng(property_location.lat,property_location.lng);
        var myOptions = {
                        zoom: 15,
                        mapTypeId: google.maps.MapTypeId.ROADMAP,
                        scrollwheel: false
                    };
        var map = new google.maps.Map(document.getElementById("property_map"), myOptions);

        geocoder.geocode( { 'location': latlng }, function(results, status){
            if (status == google.maps.GeocoderStatus.OK){
                map.setCenter(results[0].geometry.location);
                var marker = new google.maps.Marker({
                    map: map,
                    position: results[0].geometry.location
                });
            }
            else{
                alert("Geocode was not successful for the following reason: " + status);
            }
        });
    }
}

window.onload = initialize_property_map();