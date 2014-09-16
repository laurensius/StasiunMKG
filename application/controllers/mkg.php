<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mkg extends CI_Controller {

public function __construct() {
        parent::__construct();
        $this->load->model('mod_cuaca');
    }

        public function index(){
        $this->load->view('mkg/header');
        $this->load->view('mkg/navigation');
        $this->load->view('mkg/footer');
    }
    
    public function cuaca(){
        $this->load->view('mkg/header');
        $this->load->view('mkg/navigation');
        if($this->uri->segment(3)=="jawabarat"){
            $paket["respon"] = $this->mod_cuaca->cuaca_jawabarat();
        }else
        if($this->uri->segment(3)=="jawatengah"){
            $paket["respon"] = $this->mod_cuaca->cuaca_jawatengah();
        }else
        if($this->uri->segment(3)=="diy"){
            $paket["respon"] = $this->mod_cuaca->cuaca_diy();
        }else
        if($this->uri->segment(3)=="jawatimur"){
            $paket["respon"] = $this->mod_cuaca->cuaca_jawatimur();
        }else{
            $paket["respon"] = "ERROR";
        }
        $this->load->view('mkg/body_cuaca',$paket);
        $this->load->view('mkg/footer');
    }
    
    public function gempa(){
        $this->load->view('mkg/header');
        $this->load->view('mkg/navigation');
        $this->load->view('mkg/footer');
    }
}

/* End of file mkg.php */
/* Location: ./application/controllers/mkg.php */