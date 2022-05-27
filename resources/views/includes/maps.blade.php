        {{-- leaflet js dan jquery --}}
        <script src="{{ url('leaflet/package/dist/leaflet.js') }}"></script>
        <script src="{{ url('https://code.jquery.com/jquery-3.6.0.min.js') }}"></script>
        {{-- Geocoder Plugins --}}
        <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v5.0.0/mapbox-gl-geocoder.min.js"></script>
        <link rel="stylesheet"
            href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v5.0.0/mapbox-gl-geocoder.css"
            type="text/css">
        <script>
            // Penentuan koordinat dan zoom level

            var map = L.map('map').setView([-0.0353949, 109.3315505], 13);

            // Memanggil layer yang digunakan pada peta
            var osm = L.tileLayer(
                'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoidXJheWZhc2hhc3R1ZGVudCIsImEiOiJjbDJlcHkzOHMwMzE5M2R0N3U4OXM1bnphIn0.ESLd7MR8YlkNTlONTe3LXw', {
                    maxZoom: 18,
                    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
                        'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                    id: 'mapbox/streets-v11',
                    tileSize: 512,
                    zoomOffset: -1
                })
            osm.addTo(map);




            // Kustomisasi Icon pada peta dan optionsnya
            var icon_a = L.icon({
                iconUrl: '{{ url('assets/icons/icon_a.png') }}',

                iconSize: [25, 25], // size of the icon
                iconAnchor: [10, 25], // point of the icon which will correspond to marker's location
                popupAnchor: [-3, -76] // point from which the popup should open relative to the iconAnchor
            });
            var icon_b = L.icon({
                iconUrl: '{{ url('assets/icons/icon_b.png') }}',

                iconSize: [25, 25], // size of the icon
                iconAnchor: [10, 25], // point of the icon which will correspond to marker's location
                popupAnchor: [-3, -76] // point from which the popup should open relative to the iconAnchor
            });
            var icon_c = L.icon({
                iconUrl: '{{ url('assets/icons/icon_c.png') }}',

                iconSize: [25, 25], // size of the icon
                iconAnchor: [10, 25], // point of the icon which will correspond to marker's location
                popupAnchor: [-3, -76] // point from which the popup should open relative to the iconAnchor
            });
            var icon_d = L.icon({
                iconUrl: '{{ url('assets/icons/icon_d.png') }}',

                iconSize: [25, 25], // size of the icon
                iconAnchor: [10, 25], // point of the icon which will correspond to marker's location
                popupAnchor: [-3, -76] // point from which the popup should open relative to the iconAnchor
            });
            var icon_null = L.icon({
                iconUrl: '{{ url('assets/icons/icon_null.png') }}',

                iconSize: [25, 25], // size of the icon
                iconAnchor: [10, 25], // point of the icon which will correspond to marker's location
                popupAnchor: [-3, -76] // point from which the popup should open relative to the iconAnchor
            });

            // Pemanggilan titik yang telah tersimpan di database ke dalam peta (parseFloat untuk mengconvert coordinate menjadi float)
            // GeoJSON
            $(document).ready(function() {
                $.getJSON('titik/json', function(data) {
                    $.each(data, function(index) {
                        var longitude = parseFloat(data[index].longitude);
                        var latitude = parseFloat(data[index].latitude);
                        var mutu = (data[index].mutu_air);
                        var searchLayer = L.geoJson().addTo(map);
                        var detIcon;

                        if ((data[index].mutu_air) == "1") {
                            detIcon = icon_a;
                        } else if ((data[index].mutu_air) == "2") {
                            detIcon = icon_b;
                        } else if ((data[index].mutu_air) == "3") {
                            detIcon = icon_c;
                        } else if ((data[index].mutu_air) == "4") {
                            detIcon = icon_d;
                        } else {
                            detIcon = icon_null;
                        }

                        var marker = L.marker([latitude, longitude], {
                            icon: detIcon,
                            title: (data[index].nama)
                        })
                        marker.addTo(map);

                        marker.on('click', (e) => {
                            // alert("ini titik");
                            $.getJSON('titik/info/' + data[index].id, function(data) {

                                $.each(data, function(index) {
                                    // alert(data[index].id);

                                    var html =
                                        '<table class="table table-hover table-sm" width="50%">' +
                                        '<tr class="table-success"><th scope = "row">Nama Titik</th><td>' +
                                        data[index].nama + '</td></tr>';
                                    html +=
                                        '<tr class="table-info">         <th scope = "row">Latitude     </th>   <td>' +
                                        data[index].latitude +
                                        '     </td>    </tr>';
                                    html +=
                                        '<tr class="table-info">      <th scope = "row">Longitude    </th>   <td>' +
                                        data[index].longitude +
                                        '    </td>    </tr>';
                                    html +=
                                        '<tr class="table-secondary"> <th scope = "row">Nama Sungai  </th>   <td>' +
                                        data[index].nama_sungai +
                                        '  </td> </tr>';
                                    html +=
                                        '<tr class="table-secondary"> <th scope = "row">Kecamatan    </th>   <td>' +
                                        data[index].kecamatan +
                                        '    </td>   </tr>';
                                    html +=
                                        '<tr class="table-primary"><th scope = "row">Mutu Air</th><td>' +
                                        data[index].mutu_air +
                                        '</td></tr></table>';

                                    marker.bindPopup(html).openPopup();
                                });
                            });
                        })

                    })
                })
                L.Control.geocoder().addTo(map);
            })

            var legend = L.control({
                position: "bottomright"
            });

            legend.onAdd = function(map) {
                var div = L.DomUtil.create("div", "legend");
                div.innerHTML += "<h4>Keterangan</h4>";
                div.innerHTML +=
                    '<img src="{{ url('assets/icons/icon_a.png') }}"><span>Kelas A - Tidak Tercemar</span><br>';
                div.innerHTML +=
                    '<img src="{{ url('assets/icons/icon_b.png') }}"><span>Kelas B - Tercemar Ringan</span><br>';
                div.innerHTML +=
                    '<img src="{{ url('assets/icons/icon_c.png') }}"><span>Kelas C - Tercemar Sedang</span><br>';
                div.innerHTML +=
                    '<img src="{{ url('assets/icons/icon_d.png') }}"><span>Kelas D - Tercemar Berat</span><br>';

                return div;
                L.map('map', {
                    searchControl: {
                        layer: searchLayer
                    }
                });
            };

            legend.addTo(map);
        </script>
