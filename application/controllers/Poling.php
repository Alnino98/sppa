<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Poling extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kendaraan_model');    
        
    }

    public function index(){
          $data['title'] = 'SPPA BUS/TRUK';
    
          $this->load->view('templates/header', $data);
          $this->load->view('templates/sidebar', $data);
          $this->load->view('templates/topbar', $data);
          $this->load->view('poling/index');
        //   $this->load->view('templates/footer');
      }

    public function create() {

        function randomString($length)
        {
            $str        = "";
            $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz123456789';
            $max        = strlen($characters) - 1;
            for ($i = 0; $i < $length; $i++) {
                $rand = mt_rand(0, $max);
                $str .= $characters[$rand];
            }
            return $str;
        }
    
        // $response = array();
        //header
        // $this->form_validation->set_rules('kepada', 'kepada', 'trim|required');
        // $this->form_validation->set_rules('tanggal', 'tanggal', 'trim|required');
        // $this->form_validation->set_rules('staff', 'staff', 'trim|required');
        // $this->form_validation->set_rules('tipe', 'tipe', 'trim|required');
        // //debitur
        // $this->form_validation->set_rules('qq', 'qq', 'trim|required');
        // $this->form_validation->set_rules('zona', 'zona', 'trim|required');
        // $this->form_validation->set_rules('plat_no', 'plat_no', 'trim|required');
        // $this->form_validation->set_rules('jenis_plat', 'jenis_plat', 'trim|required');
        // $this->form_validation->set_rules('dari', 'dari', 'trim|required');
        // $this->form_validation->set_rules('sampai', 'sampai', 'trim|required');
        // $this->form_validation->set_rules('ob_pertanggungan', 'ob_pertanggungan', 'trim|required');
        // $this->form_validation->set_rules('metode', 'metode', 'trim|required');
        // $this->form_validation->set_rules('yearly', 'yearly', 'trim|required');
        // //suku premi
        // $this->form_validation->set_rules('rate', 'rate', 'trim|required');
        // $this->form_validation->set_rules('jml_rate', 'jml_rate', 'trim|required');
        // $this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required');
        // $this->form_validation->set_rules('nominal', 'nominal', 'trim|required');
        // $this->form_validation->set_rules('pertanggungan', 'pertanggungan', 'trim|required');
        // //data kendaraan
        // $this->form_validation->set_rules('unit', 'unit', 'trim|required');
        // $this->form_validation->set_rules('tahun', 'tahun', 'trim|required');
        // $this->form_validation->set_rules('harga', 'harga', 'trim|required');
        // $this->form_validation->set_rules('no_pol', 'no_pol', 'trim|required');
        // $this->form_validation->set_rules('warna', 'warna', 'trim|required');
        // $this->form_validation->set_rules('no_rang', 'no_rang', 'trim|required');
        // $this->form_validation->set_rules('no_mesin', 'no_mesin', 'trim|required');
        // $this->form_validation->set_rules('no_seri', 'no_seri', 'trim|required');
  
        // $this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');
        $rndm= randomString(7);
        // if ($this->form_validation->run() == TRUE) {
          $staff=$_SESSION['staff'];
           $tgl=$_SESSION['login_time'] = date('Y-m-d');
            $data = array(
                //header
                'kd_transaksi'=>$rndm,
                'kepada'=> $this->input->post('kepada'),
                'tanggal'=> $tgl,
                'staff'=> $staff,
                'tipe'=> $this->input->post('tipe'),
                //debitur
                'qq'=> $this->input->post('qq'),
                'zona_wilayah'=> $this->input->post('zona'),
                'plat_no'=> $this->input->post('plat_no'),
                'jenis_plat'=> $this->input->post('jenis_plat'),
                // 'periode'=> $this->input->post('dari'),
                // 'sampai'=> $this->input->post('sampai'),
                'objek_pertanggungan'=> $this->input->post('ob_pertanggungan'),
                'metode_bayar'=> $this->input->post('metode'), 
                'yearly'=> $this->input->post('yearly'),
                //suku premi
                'rate'=> $this->input->post('rate'),
                'jml_rate'=> $this->input->post('jml_rate'),
                'rate_lain'=> $this->input->post('rate_lain'),
                'ket_rate'=> $this->input->post('ket_rate'),
                'pa'=> $this->input->post('pa'),
                'nominal'=> $this->input->post('nominal'),
                // 'nilai_pertanggungan'=> $this->input->post('pertanggungan'),
                //data kendaraan
                // 'jml_unit'=> $this->input->post('jml_unit'),
                // 'nama_unit'=> $this->input->post('unit'),
                // 'tahun_unit'=> $this->input->post('tahun'),
                // 'harga_unit'=> $this->input->post('harga'),

                'kondisi_aset'=> $this->input->post('ktp'),
                'no_pol'=> $this->input->post('no_pol'),
                'warna'=> $this->input->post('warna'),
                'no_rangka'=> $this->input->post('no_rang'),
                'no_mesin'=> $this->input->post('no_mesin'),
                'no_seri'=> $this->input->post('no_seri'),
            );	

            $s = $data['metode_bayar']; 
              
            if ($s == 'Full Term'){
                
            $data = array(
                //header
                'kd_transaksi'=>$rndm,
                'kepada'=> $this->input->post('kepada'),
                'tanggal'=> $tgl,
                'staff'=> $staff,
                'tipe'=> $this->input->post('tipe'),
                //debitur
                'qq'=> $this->input->post('qq'),
                'zona_wilayah'=> $this->input->post('zona'),
                'plat_no'=> $this->input->post('plat_no'),
                'jenis_plat'=> $this->input->post('jenis_plat'),
                'objek_pertanggungan'=> $this->input->post('ob_pertanggungan'),
                'metode_bayar'=> $this->input->post('metode'), 
                'yearly'=> $this->input->post('cok'),
                //suku premi
                'rate'=> $this->input->post('rate'),
                'jml_rate'=> $this->input->post('jml_rate'),
                'rate_lain'=> $this->input->post('rate_lain'),
                'ket_rate'=> $this->input->post('ket_rate'),
                'pa'=> $this->input->post('pa'),
                'nominal'=> $this->input->post('nominal'),
                // 'nilai_pertanggungan'=> $this->input->post('pertanggungan'),
                //data kendaraan

                'kondisi_aset'=> $this->input->post('ktp'),
                'no_pol'=> $this->input->post('no_pol'),
                'warna'=> $this->input->post('warna'),
                'no_rangka'=> $this->input->post('no_rang'),
                'no_mesin'=> $this->input->post('no_mesin'),
                'no_seri'=> $this->input->post('no_seri'),
            );
            }
            $create = $this->Kendaraan_model->create($data);

            $id = $data['kd_transaksi'];
            $sq = $this->db->query("SELECT * FROM sppa_kendaraan where kd_transaksi = '$id'")->row_array();
          
            // $index = 0;
            // foreach($nis as $datanis){ 
            // $data2 = array(
            //     'id_kendaraan'=>$sq['id_kendaraan'],
            //     'qty'=> $this->input->post('jml_unit[]'),
            //     'unit'=> $this->input->post('unit[]'),
            //     'thn_merk'=> $this->input->post('tahun[]'),
            //     'harga'=> $this->input->post('harga[]'),
            // );
            // $index++;
            // }
        
            $id_kendaraan = $sq['id_kendaraan']; // Ambil data nis dan masukkan ke variabel nis
            $jml_unit = $_POST['jml_unit']; // Ambil data nama dan masukkan ke variabel nama
            $unit = $_POST['unit']; // Ambil data telp dan masukkan ke variabel telp
            $tahun = $_POST['tahun']; // Ambil data alamat dan masukkan ke variabel alamat
            $harga = $_POST['harga'];
            $data2 = array();
            
            $index = 0; // Set index array awal dengan 0
            foreach($unit as $sa){ // Kita buat perulangan berdasarkan nis sampai data terakhir
              array_push($data2, array(
                'id_kendaraan'=>$id_kendaraan,
                'qty'=>$jml_unit[$index],  // Ambil dan set data nama sesuai index array dari $index
                'unit'=>$sa,  // Ambindexl dan set data telepon sesuaindex indexndex array darindex $indexndex
                'thn_merk'=>$tahun[$index],
                'harga'=>$harga[$index], // Ambil dan set data alamat sesuai index array dari $index
              ));   
                $index++;           
            }
            $create2 = $this->Kendaraan_model->create2($data2);

            $idn = $sq['id_kendaraan'];
            $data['sppa_kendaraan'] = $this->Kendaraan_model->getDataId();

            $data['merk'] = $this->Kendaraan_model->getDataMerk($idn);
            $this->load->view('laporan/index',$data);
    }
//    function tes(){
//         $data['sppa_kendaraan'] = $this->Kendaraan_model->getDataId();
//         $data2['merk'] = $this->Kendaraan_model->getDataMerk($sq);
//         $this->load->view('laporan/index',$data,$data2);
//     }
    function get_autocomplete(){
        if (isset($_GET['term'])) {
            $result = $this->Kendaraan_model->search_staff($_GET['term']);
            if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = $row->nama_staff;
                echo json_encode($arr_result);
            }
        }
    }

    function get_unit(){
        if (isset($_GET['term'])) {
            $result = $this->Kendaraan_model->search_unit($_GET['term']);
            if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = $row->nama_asset;
                echo json_encode($arr_result);
            }
        }
    }

}