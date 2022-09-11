<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BloodBank Map</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <style type="text/css">
        #map {
            width: 100%;
            height: 570px;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h2 style="text-align:center">Blood Donation Centers</h2>
        <div id="map">
        </div>
    </div>
    <script type="text/javascript">
        //define variables and init map
        let map, infoWindow;
        let $nearest;
            function initMap() {
            map = new google.maps.Map(document.getElementById("map"), {
                center: {
                    lat: 33.8547,
                    lng: 35.8623
                },
                zoom: 6,
            });
            infoWindow = new google.maps.InfoWindow();
            //here to get current location
            const locationButton = document.createElement("button");
            locationButton.textContent = "Click to Get Your Current Location";
            locationButton.classList.add("custom-map-control-button");
            map.controls[google.maps.ControlPosition.TOP_CENTER].push(locationButton);
            //Event Listenser
            locationButton.addEventListener("click", () => {
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(
                        (position) => {
                            const pos = {//current location position
                                lat: position.coords.latitude,
                                lng: position.coords.longitude,
                            };
                            infoWindow.setPosition(pos);
                            //start of ajax to request data to show-cuurent then to googlemap
                            $.ajax({
                                url: 'http://127.0.0.1:8000/show-current-location',
                                type: 'get',
                                data: {
                                    latitude: pos.lat,
                                    longitude: pos.lng
                                },
                                //Function to get Nearest Distance by javascript
                                success: function(data) {

                                    $nearest = data;
                                    $.each($nearest, function(index, near) { //show distance by KM
                                        $("#locationID-" + near.id).html('<span>' + (near
                                            .distance).toFixed(2) + 'KM</span>');
                                    });
                                }
                                //end here
                            });//POP up to my current location
                            infoWindow.setContent("<h6>Location found  'You are here'</h6> ");
                            infoWindow.open(map);
                            map.setCenter(pos);
                        },
                        () => {
                            handleLocationError(true, infoWindow, map.getCenter());
                        }
                    );
                } else {
                    // Browser doesn't support Geolocation
                    handleLocationError(false, infoWindow, map.getCenter());
                }

                //here to get mutliple pins
                let locations = {{ Js::from($locations) }};
                let infowindow = new google.maps.InfoWindow();
                let marker, i;
                for (i = 0; i < locations.length; i++) {
                    marker = new google.maps.Marker({
                        position: new google.maps.LatLng(locations[i]['latitude'], locations[i][
                            'longitude'
                        ]),
                        map: map,
                    });
                    //POPUP
                    google.maps.event.addListener(marker, 'click', (function(marker, i) {

                        var pop_obj = `<center><img width="250" height"300" src="../images/` +
                            locations[i]['path'] + `"<center>
                                       <center><h5>` + locations[i]['name'] + `
                                       <center><h6>` + locations[i]['address'] + `
                              <center><a href="tel:` + locations[i]['phone'] + `">` + locations[i]['phone'] +
                            `</a><center>`
                        return function() {
                            infowindow.setContent(pop_obj);
                            infowindow.open(map, marker);
                        }
                    })(marker, i));
                }
            });
        }//end of Map
        window.initMap = initMap;
    </script>
    <script type="text/javascript"></script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCdXoRwKALQcuY36VYDE5cjLiVSSuEpd8Q&callback=initMap"></script>
    {{-- display them as a list --}}
    </br>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title" style="text-align:center">List of Donation Centers</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="text-primary">
                                <th>Name</th>
                                <th>Address</th>
                                <th>Phone</th>
                                <th>Distance</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </thead>
                            <tbody>
                           {{--  loop to get data with distance  --}}
                               @foreach ($locations as $index => $location)
                                    <tr>
                                        <td>{{ $location->name }}</td>
                                        <td>{{ $location->address }}</td>
                                        <td>{{ $location->phone }}</td>
                                        <td id={{ 'locationID-' . $location->id }} class="distances"></td>
                                        <td>
                                            <a href="#" class="btn btn-success">EDIT</a>
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-danger">DELTETE</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
