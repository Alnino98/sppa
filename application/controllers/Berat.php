<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berat extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Alat_model');    
        $this->load->model('Kendaraan_model');
        
    }

    public function index(){
          $data['title'] = 'SPPA ALAT BERAT';
    
          $this->load->view('templates/header', $data);
          $this->load->view('templates/sidebar', $data);
          $this->load->view('templates/topbar', $data);
          $this->load->view('berat/index');
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
  
        // if ($this->form_validation->run() == TRUE) {
            $rndm= randomString(7);
            $staff=$_SESSION['staff'];
            $tgl=$_SESSION['login_time'] = date('Y-m-d');
        
        $data = array(
                //header
                'kd_transaksi'=>$rndm,
                'kepada'=> $this->input->post('kepada'),
                'tanggal'=> $tgl,
                'staff'=> $staff,    
                //debitur
                'qq'=> $this->input->post('qq'),
                'okupasi'=> $this->input->post('okupasi'),
                'lokasi'=> $this->input->post('lokasi'),

                // 'nilai_pertanggungan'=> $this->input->post('nilai_pertanggungan'),
                'objek_pertanggungan'=> $this->input->post('obj_pertanggungan'),
                'metode_bayar'=> $this->input->post('metode_bayar'),
                'yearly'=> $this->input->post('yearly'),
                //suku premi
                'rate'=> $this->input->post('rate'),
                'jml_rate'=> $this->input->post('jml_rate'),
                // 'risk'=> $this->input->post('risk'),

                //data kendaraan
            );	
            $s = $data['metode_bayar']; 
              
            if ($s == 'Full Term'){
                
            $data = array(
                            //header
                //header
                'kd_transaksi'=>$rndm,
                'kepada'=> $this->input->post('kepada'),
                'tanggal'=> $tgl,
                'staff'=> $staff,    
                //debitur
                'qq'=> $this->input->post('qq'),
                'okupasi'=> $this->input->post('okupasi'),
                'lokasi'=> $this->input->post('lokasi'),

                // 'nilai_pertanggungan'=> $this->input->post('nilai_pertanggungan'),
                'objek_pertanggungan'=> $this->input->post('obj_pertanggungan'),
                'metode_bayar'=> $this->input->post('metode_bayar'),
                'yearly'=> $this->input->post('cok'),
                //suku premi
                'rate'=> $this->input->post('rate'),
                'jml_rate'=> $this->input->post('jml_rate'),
                // 'risk'=> $this->input->post('risk'),

                     //data kendaraan
                        );	
                    }

            $create = $this->Alat_model->create($data);

            $id = $data['kd_transaksi'];
            $sq = $this->db->query("SELECT * FROM sppa_alat_berat where kd_transaksi = '$id'")->row_array();

            $id_kendaraan = $sq['id_alat']; // Ambil data nis dan masukkan ke variabel nis
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

            //push kondisi
            // $kondisi = $_POST['kondisi']; // Ambil data nama dan masukkan ke variabel nama
            // $resiko = $_POST['resiko']; // Ambil data telp dan masukkan ke variabel telp
            // $data3 = array();
            
            // $index1 = 0; // Set index array awal dengan 0
            // foreach($kondisi as $ok){ // Kita buat perulangan berdasarkan nis sampai data terakhir
            //   array_push($data3, array(
            //     'id_kendaraan'=>$id_kendaraan,
            //     'resiko'=>$resiko[$index1],  // Ambil dan set data nama sesuai index array dari $index
            //     'kondisi'=>$ok,  // Ambindexl dan set data telepon sesuaindex indexndex array darinde // Ambil dan set data alamat sesuai index array dari $index
            //   ));   
            //     $index1++;           
            // }
            // $create3 = $this->Alat_model->create3($data3);

            //get ke view
            $idn = $sq['id_alat'];
            $data['sppa_alat_berat'] = $this->Alat_model->getDataId();
            $data['merk'] = $this->Kendaraan_model->getDataMerk($idn);
            // $data['kondisi'] = $this->Alat_model->getDataKondisi($idn);

            $this->load->view('laporan/alat_berat_report',$data);

    }

    function get_autocomplete(){
        if (isset($_GET['term'])) {
            $result = $this->Alat_model->search_asuransi($_GET['term']);
            if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = $row->nama_asuransi;
                echo json_encode($arr_result);
            }
        }
    }
}
