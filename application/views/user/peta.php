<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view("user/_partials/head.php") ?>
    <link rel="stylesheet" href="<?= base_url()?>assets/leaflet/Control.Geocoder.css" />
    <script src="<?= base_url()?>assets/leaflet/Control.Geocoder.js"></script>
    <style>
        .info { 
            padding: 6px 8px; font: 14px/16px Arial, Helvetica, sans-serif; 
            background: white; background: rgba(255,255,255,0.8); 
            box-shadow: 0 0 15px rgba(0,0,0,0.2); border-radius: 5px; 
        } 
            .info h4 { 
                margin: 0 0 5px; color: #777; 
            }

            .legend {
                line-height: 18px;
                color: #555;
            }

            .legend i {
                width: 18px;
                height: 18px;
                float: left;
                margin-right: 8px;
                opacity: 0.7;
            }
        .leaflet-tooltip.no-background{
            background: transparent;
            border: none;
            box-shadow: none;
            color: black;
            font-family: "Open Sans", "sans serif";
            font-weight: bold; 
        }      
    </style>

</head>
<body id="page-top">
    <?php $this->load->view("user/_partials/navbar.php") ?>
    
  <div id="wrapper">
      <?php $this->load->view("user/_partials/sidebar.php") ?>    

      <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                  <i class="fas fa-map-marker-alt"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Jumlah Kecamatan</h4>
                  </div>
                  <div class="card-body">
                    <?php echo number_format($jumlah_kecamatan) ?>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                  <i class="fas fa-home"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Jumlah Ruta</h4>
                  </div>
                  <div class="card-body">
                    <?php echo number_format($jumlah_ruta) ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                  <i class="far fa-file"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Jumlah KK</h4>
                  </div>
                  <div class="card-body">
                    <?php echo number_format($jumlah_kk) ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="fas fa-users"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Jumlah Jiwa</h4>
                  </div>
                  <div class="card-body">
                    <?php echo number_format($jumlah_jiwa) ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
        <script src="<?= base_url()?>assets/leaflet/jquery-3.3.1.min.js"></script>
            <div id="map" style="height: 600px;"></div>
                <script>
                    var map = L.map('map').setView([-7.3251145,107.7943317,13], 10);
                    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                    maxZoom: 18,
                    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
                                'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                    id: 'mapbox/streets-v11',
                    tileSize: 512,
                    zoomOffset: -1
             }).addTo(map);

            L.Control.geocoder({
            position: 'topleft'
            }).addTo(map);
            
        function getColor(d) {
	        return d >= 80000  ? '#3e8005' :
                  d >= 60000  ? '#4c9c06' :
                  d >= 40000   ? '#5fcc00' :
                  d >= 20000   ? '#80e329' :
                                '#99e05a';
                }

        var legend = L.control({position: 'bottomright'});
        legend.onAdd = function (map) {

        var div = L.DomUtil.create('div', 'info legend'),
        grades = [0, 20000, 40000, 60000, 80000],
        labels = [],
        from, to;

        for (var i = 0; i < grades.length; i++) {
        from = grades[i];
        to = grades[i + 1];

        labels.push(
            '<i style="background:' + getColor(from + 1) + '"></i> ' +
            from + (to ? '&ndash;' + to : '+'));
        }

        div.innerHTML = labels.join('<br>');
        return div;
        };
        legend.addTo(map);

            <?php foreach ($index as $key => $value) {?>
                $.getJSON("<?= base_url('assets/geo_kecamatan/'. $value->geojson_kecamatan )?>", function(data) {
                   var geoLayer = L.geoJson(data, {
                        style: function(feature) {
                            return {
                                weight: 2,
                                opacity: 1,
                                color: 'white',
                                dashArray: '3',
                                fillOpacity: 1,
                                fillColor: getColor('<?= $value->jumlah_dtks ?>'),
                            }
                        },
                    }).addTo(map);

                    geoLayer.eachLayer(function(layer) {
                        layer.bindPopup("Nama Kecamatan : <?= $value->nama_kecamatan ?><br>" +
                                        "Jumlah Ruta : <?= $value->jumlah_ruta ?><br>" +
                                        "Jumlah KK : <?= $value->jumlah_kk ?><br>" +
                                        "Jumlah Jiwa : <?= $value->jumlah_dtks ?><br>"),
                        layer.bindTooltip("<?= $value->nama_kecamatan ?><br>",{
                            permanent:true,
                            direction:"center",
                            className:"no-background"
                        });

                        layer.on({
                          // mouseover: function(e) {
                          //   e.target.setStyle({
                          //     fillOpacity: 0.8,
                          //     dashArray: '',
                          //     weight: 2,
                          //     opacity: 1
                          //   });
                          //   if (!L.Browser.ie && !L.Browser.opera && !L.Browser.edge) {
                          //     e.target.bringToFront();
                          //     }
                          //   },
                          click: function(e) {
                            map.fitBounds(e.target.getBounds());
                          }
                        });
                    });
                });
            <?php } ?>
        </script>
  </div>

  <?php $this->load->view("user/_partials/footer.php")?>
  <?php $this->load->view("user/_partials/js.php")?>
</body>
</html>





