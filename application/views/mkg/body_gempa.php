
<div class="container-fluid" style="margin-top: 60px;">
    <div class="row">
        <div class="col-lg-3">
            <div class="list-group">
                <a href="<?php echo site_url(); ?>/mkg/cuaca/jawabarat" class="list-group-item <?php if($this->uri->segment(3)==="jawabarat"){echo "active";}; ?>">
                  Prakiraan Cuaca Jawa Barat
                </a>
                <a href="<?php echo site_url(); ?>/mkg/cuaca/jawatengah" class="list-group-item <?php if($this->uri->segment(3)==="jawatengah"){echo "active";}; ?>">Prakiraan Cuaca Jawa Tengah</a>
                <a href="<?php echo site_url(); ?>/mkg/cuaca/diy" class="list-group-item <?php if($this->uri->segment(3)==="diy"){echo "active";}; ?>">Prakiraan Cuaca DI Yogyakarta</a>
                <a href="<?php echo site_url(); ?>/mkg/cuaca/jawatimur" class="list-group-item <?php if($this->uri->segment(3)==="jawatimur"){echo "active";}; ?>">Prakiraan Cuaca Jawa Timur</a>
            </div>
            <i>Sumber data : <a href="http://data.bmkg.go.id/" target="_blank">B M K G</a></i>
        </div>
        <div class="col-lg-9">
            <?php echo "<pre>$respon</pre>";?>
            <div id="tanggal"></div>
            <div id="isi"></div>
            <script type="text/javascript">
//                0<Kota>
//                1<point>
//                      <coordinates>
//                2<Lintang>
//                3<Bujur>
//                4<Balai>
//                5<Propinsi>
//                6<Cuaca>
//                7<_symbol>
//                8<SuhuMin>
//                9<SuhuMax>
//                10<KelembapanMin>
//                11<KelembapanMax>
//                12<KecepatanAngin>
//                13<ArahAngin>
//                var data = <?php echo "$respon";?>;
//                var str_kota = "";
//                for(var c=0;c<data.kota.length;c++){
//                    str_kota += '<div class="col-lg-3">';
//                    str_kota += '<div class="panel panel-default">';
//                    str_kota += '<div class="panel-heading">';
//                    str_kota += '<div class="panel-title">' + data.kota[c][0].Kota + '</div>';
//                    str_kota += '</div>';
//                    str_kota += '<div class=panel-body>';
//                    str_kota += '<center>';
//                    str_kota += '<img src="http://www.bmkg.go.id/imagesStatus/Cuaca/' + data.kota[c][6].Cuaca + '.gif"><br>';
//                    str_kota += '</center>';
//                    str_kota +=  "Suhu minimum  : " + data.kota[c][8].SuhuMin + "<br>";
//                    str_kota +=  "Suhu maksimum : " + data.kota[c][9].SuhuMax + "<br>" ;
//                    str_kota +=  "Kelembapan minimum  : " + data.kota[c][10].KelembapanMin + "<br>";
//                    str_kota +=  "Kelembapan maksimum : " + data.kota[c][11].KelembapanMax + "<br>";
//                    str_kota +=  "Kecepatan angin : " + data.kota[c][12].KecepatanAngin + "<br>";
//                    str_kota +=  "Arah angin : " + data.kota[c][13].ArahAngin + "<br>";
//                    str_kota += '</div>';
//                    str_kota += '</div>';
//                    str_kota += '</div>';
//                }
//                document.getElementById("tanggal").innerHTML = str_kota; 
            </script>
            
        </div>
    </div>
</div>