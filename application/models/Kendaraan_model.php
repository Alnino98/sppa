<?php

class Kendaraan_model extends CI_Model
{

    public function	create($data){
	    $this->db->insert('sppa_kendaraan', $data);
	}
    public function	create2($data2){
        return $this->db->insert_batch('merk', $data2);
	}
    function search_staff($staff){
        $this->db->like('nama_staff', $staff , 'both');
        $this->db->order_by('nama_staff', 'ASC');
        $this->db->limit(10);
        return $this->db->get('staff')->result();
    }

    function search_unit($asset){
        $this->db->like('nama_asset', $asset , 'both');
        $this->db->order_by('nama_asset', 'ASC');
        $this->db->limit(10);
        return $this->db->get('asset')->result();
    }    
    
    public function getDataId()
    {
        // return $this->db->get_where('sppa_kendaraan',['id_kendaraan'])->row_array(); 
        // return $this->db->get_where('sppa_kendaraan',array('id_kendaraan'=>14))->result_array();    
        // $this->db->get_where('sppa_kendaraan',array('id_kendaraan'))
        // return $this->db->last_query(); // Return Last Query
        // $this->db->select('*');
        // $this->db->from('sppa_kendaraan');
        // $this->db->order_by('id_kendaraan', 'desc');
        // $this->db->limit(1);
        // $query = $this->db->get();
        $sql = "SELECT * FROM sppa_kendaraan ORDER BY id_kendaraan DESC LIMIT 1";
		$query = $this->db->query($sql);
		return $query->result_array();
    }

    public function getDataMerk($idn){


        $sql = "SELECT * FROM merk where id_kendaraan = '$idn'";
		$query = $this->db->query($sql);
		return $query->result_array();
    }

    // public function editBerita($id)
    // {
    //     $data['berita'] = $this->db->get_where('berita',['id' => $id])->row_array();
       
        
    //     // cek jika ada gambar yang di upload
    //     $upload_image = $_FILES['image'];

    //     if($upload_image) {
    //         $config['allowed_types'] = 'jpg|jpeg|png';
    //         $config['max_size'] = '1048';
    //         $config['upload_path'] = './assets/img/berita';
    //         $config['encrypt_name'] = TRUE;

           
          
    //         $this->load->library('upload', $config);
            
    //        if($this->upload->do_upload('image')) {
    //            $old_image = $data['berita']['gambar'];
    //            $path = './assets/img/berita/';

    //            if($old_image != 'default.jpeg') {
    //                unlink(FCPATH.$path.$old_image);
    //            } 
               
    //            $new_image = $this->upload->data('file_name');
    //            $this->db->set('gambar',$new_image);

    //         } else {
    //                $this->upload->display_errors();                
                   
    //            }
    //        }
    //        $data = [
    //                 "judul" => $this->input->post('judul', true),
    //                 "isi" => $this->input->post('isi',  true),
    //                 "kategori" => $this->input->post('kategori', true),
    //                 "tanggal" => $this->input->post('tanggal', true),
    //                 "status" => $this->input->post('status', true),
    //                 "user" => $this->input->post('user', true)
    //        ];
    //        $this->db->where('id', $this->input->post('id'));
    //        $this->db->update('berita', $data);
    // }

    public function deleteData($id)
    {
        $this->db->where($id);
        return $this->db->delete('berita');
    }
}

   
