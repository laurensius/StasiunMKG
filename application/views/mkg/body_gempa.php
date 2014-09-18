<div class="container-fluid" style="margin-top: 60px;">
    <div class="row">
        <div class="col-lg-3" style="height: 575px; overflow-y: scroll">
            <div class="list-group" id="navi"></div>
            <div id="isi"></div>
            <script type="text/javascript">
                var data_gempa = <?php echo "$respon";?>;
                var str_gempa = "";
                var str_active = "";
                //alert(data_gempa.length);
                for(var c=0;c<data_gempa.length;c++){
                    if(data_gempa[c].id === <?php echo $this->uri->segment(3);?>){
                        str_active = "active";
                        console.log(data_gempa[c].id);
                    }else{
                        str_active = "";
                    }
                    str_gempa += '<a href="<?php echo site_url();?>/mkg/gempa/' + data_gempa[c].id + '"'+
                                 'class="list-group-item '+str_active+'">' + data_gempa[c].current_gempa[8].Wilayah + '</a>';
                }
                document.getElementById("navi").innerHTML = str_gempa; 
            </script>
        </div>
        <div class="col-lg-9" style="height: 600px;">   
            <?php // echo "<pre>$respon</pre>";?>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCprEkmn5_AWMYHETXDgLD2sBlipH8jZWo"></script>
            <script type="text/javascript">
                function initialize() {
                    for(var c=0;c<data_gempa.length;c++){
                        if(data_gempa[c].id === <?php echo $this->uri->segment(3);?>){
                            var tanggal = data_gempa[c].current_gempa[0].Tanggal;
                            var jam = data_gempa[c].current_gempa[1].Jam;
                            var koordinat = data_gempa[c].current_gempa[2].point;
                            var lintang = data_gempa[c].current_gempa[3].Lintang;
                            var bujur = data_gempa[c].current_gempa[4].Bujur;
                            var magnitude = data_gempa[c].current_gempa[5].Magnitude;
                            var kedalaman = data_gempa[c].current_gempa[6].Kedalaman;
                            var wilayah = data_gempa[c].current_gempa[8].Wilayah;
                        }
                    }
                    
                    var ketemu = 0;
                    var hasil_l = "";
                    var hasil_b = "";
                    for(var c=0;c<koordinat.length;c++){
                        if(ketemu===0 && koordinat[c]!=','){
                            hasil_b += koordinat[c];
                        }else
                        if(ketemu===1 && koordinat[c]!=','){
                            hasil_l += koordinat[c];
                        }else
                        if(ketemu===0 && koordinat[c]===','){
                            ketemu++;
                        }
                    }
                    
                    var isi = '';
                    isi += '<table class="table table-hover">';
                    isi += '<thead>';
                    isi += '<tr><th colspan="3"><label><b>Keterangan</b></label></th></tr>';
                    isi += '</thead>';
                    isi += '<tbody>';
                    isi += '<tr>';
                    isi += '<td colspan="2">Lokasi</td>';
                    isi += '<td colspan="2">:</td>';
                    isi += '<td colspan="2">' + wilayah + '</td>';
                    isi += '</tr>';
                    isi += '<tr>';
                    isi += '<td colspan="2">Koordinat</td>';
                    isi += '<td colspan="2">:</td>';
                    isi += '<td colspan="2">' + lintang + ',' + bujur +'</td>';
                    isi += '</tr>';
                    isi += '<tr>';
                    isi += '<td colspan="2">Waktu</td>';
                    isi += '<td colspan="2">:</td>';
                    isi += '<td colspan="2">' + tanggal + ' pukul ' + jam +'</td>';
                    isi += '</tr>';
                    isi += '<tr>';
                    isi += '<td colspan="2">Magnitude</td>';
                    isi += '<td colspan="2">:</td>';
                    isi += '<td colspan="2">' + magnitude + '</td>';
                    isi += '</tr>';
                    isi += '<tr>';
                    isi += '<td colspan="2">Kedalaman</td>';
                    isi += '<td colspan="2">:</td>';
                    isi += '<td colspan="2">' + kedalaman + '</td>';
                    isi += '</tr>';
                    isi += '</tbody>';
                    isi += '</table>';
                    
                    var myLatlng = new google.maps.LatLng(hasil_l , hasil_b);
                    
                    var mapOptions = {
                      zoom: 6,
                      center: myLatlng,
                      mapTypeId: 'satellite'
                    };
                    
                    var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

                    var marker = new google.maps.Marker({
                        position: myLatlng,
                        map: map
                    });
                    
                    var infowindow = new google.maps.InfoWindow({
                        content: isi,
                        maxWidth : 500 
                    });
                    
                    google.maps.event.addListener(marker, 'click', function() {
                        infowindow.open(map,marker);
                   });
                  }
                  google.maps.event.addDomListener(window, 'load', initialize);
            </script>
            <div id="map-canvas"  style="height: 575px;width:100%;"></div>
        </div>
    </div>
</div>