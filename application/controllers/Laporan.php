<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kendaraan_model');    
        $this->load->model('Alat_model');    
        
    }

    // public function index(){
    //       $data['title'] = 'SPPA BUS/TRUK';
    //       $this->load->view('laporan/index');
    //     //   $this->load->view('templates/footer');
    //   }
    
    public function index(){
        $data['sppa_kendaraan'] = $this->Kendaraan_model->getDataId();
        $data['merk'] = $this->Kendaraan_model->getDataMerk($idn);
        $this->load->view('laporan/index', $data);
    }

    public function berat(){
        $data['sppa_alat_berat'] = $this->Alat_model->getDataId();
        $this->load->view('laporan/alat_berat_report', $data);

    }

}