<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mod_Cuaca extends CI_Controller {

    public function index(){
        echo "Forbiden";
    }
    
    public function cuaca_jawabarat(){
        $xmlfile = "http://data.bmkg.go.id/propinsi_13_2.xml";
        $data = simplexml_load_file($xmlfile);
        $ArrayTanggal = array();
        $ArrayRow = array();
        $ArrayKota = array();
        foreach($data->children() as $child_level_1){
            if($child_level_1->getName()=="Tanggal"){ //fetch "Tanggal"
                $c = 0;
                foreach($child_level_1->children() as $tgl){
                    $ArrayTanggal[$c] = array($tgl->getName()=>"$tgl");
                    $c++;
                }
            }else    
            if($child_level_1->getName()=="Isi"){ //fetch "Isi"
                $c = 0;
                foreach($child_level_1->children() as $row){
                    $cc = 0;
                    foreach($row->children() as $current_kota){
                        $ArrayKota[$cc] = array($current_kota->getName()=>"$current_kota");
                        $cc++;
                    }    
                    $ArrayRow[$c] = $ArrayKota;
                    $c++;
                }
            }
        }
        return json_encode(array("tanggal_berlaku"=>$ArrayTanggal,"kota"=>$ArrayRow));
    }
    
    public function cuaca_jawatengah(){
        $xmlfile = "http://data.bmkg.go.id/propinsi_14_1.xml";
        $data = simplexml_load_file($xmlfile);
        $ArrayTanggal = array();
        $ArrayRow = array();
        $ArrayKota = array();
        foreach($data->children() as $child_level_1){
            if($child_level_1->getName()=="Tanggal"){ //fetch "Tanggal"
                $c = 0;
                foreach($child_level_1->children() as $tgl){
                    $ArrayTanggal[$c] = array($tgl->getName()=>"$tgl");
                    $c++;
                }
            }else    
            if($child_level_1->getName()=="Isi"){ //fetch "Isi"
                $c = 0;
                foreach($child_level_1->children() as $row){
                    $cc = 0;
                    foreach($row->children() as $current_kota){
                        $ArrayKota[$cc] = array($current_kota->getName()=>"$current_kota");
                        $cc++;
                    }    
                    $ArrayRow[$c] = $ArrayKota;
                    $c++;
                }
            }
        }
        return json_encode(array("tanggal_berlaku"=>$ArrayTanggal,"kota"=>$ArrayRow));
    }
    
    public function cuaca_diy(){
        $xmlfile = "http://data.bmkg.go.id/propinsi_15_1.xml";
        $data = simplexml_load_file($xmlfile);
        $ArrayTanggal = array();
        $ArrayRow = array();
        $ArrayKota = array();
        foreach($data->children() as $child_level_1){
            if($child_level_1->getName()=="Tanggal"){ //fetch "Tanggal"
                $c = 0;
                foreach($child_level_1->children() as $tgl){
                    $ArrayTanggal[$c] = array($tgl->getName()=>"$tgl");
                    $c++;
                }
            }else    
            if($child_level_1->getName()=="Isi"){ //fetch "Isi"
                $c = 0;
                foreach($child_level_1->children() as $row){
                    $cc = 0;
                    foreach($row->children() as $current_kota){
                        $ArrayKota[$cc] = array($current_kota->getName()=>"$current_kota");
                        $cc++;
                    }    
                    $ArrayRow[$c] = $ArrayKota;
                    $c++;
                }
            }
        }
        return json_encode(array("tanggal_berlaku"=>$ArrayTanggal,"kota"=>$ArrayRow));
    }
    
     public function cuaca_jawatimur(){
        $xmlfile = "http://data.bmkg.go.id/propinsi_16_1.xml";
        $data = simplexml_load_file($xmlfile);
        $ArrayTanggal = array();
        $ArrayRow = array();
        $ArrayKota = array();
        foreach($data->children() as $child_level_1){
            if($child_level_1->getName()=="Tanggal"){ //fetch "Tanggal"
                $c = 0;
                foreach($child_level_1->children() as $tgl){
                    $ArrayTanggal[$c] = array($tgl->getName()=>"$tgl");
                    $c++;
                }
            }else    
            if($child_level_1->getName()=="Isi"){ //fetch "Isi"
                $c = 0;
                foreach($child_level_1->children() as $row){
                    $cc = 0;
                    foreach($row->children() as $current_kota){
                        $ArrayKota[$cc] = array($current_kota->getName()=>"$current_kota");
                        $cc++;
                    }    
                    $ArrayRow[$c] = $ArrayKota;
                    $c++;
                }
            }
        }
        return json_encode(array("tanggal_berlaku"=>$ArrayTanggal,"kota"=>$ArrayRow));
    }
}
