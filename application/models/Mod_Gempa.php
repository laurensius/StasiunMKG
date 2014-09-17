<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mod_Gempa extends CI_Controller {

    public function index(){
        echo "Forbiden";
    }
    
    public function fetch_gempa(){
        $xmlfile = "http://data.bmkg.go.id/gempaterkini.xml";
        $data = simplexml_load_file($xmlfile);
        $ArrayGempa = array();
        $ArrayGempaAll = array();
        $d = 0;
        foreach($data->children() as $row_gempa){
            $c = 0;
            foreach($row_gempa->children() as $gempa){
                //echo $gempa->getName(). " : " .$gempa. "<br>";
                $ArrayGempa[$c] = array($gempa->getName()=>"$gempa");
                $c++;
            }
            $ArrayGempaAll[$d] = array("current_gempa" => $ArrayGempa);
            $d++;
        }
        return json_encode(array("data_gempa"=>$ArrayGempaAll));
    }
}
