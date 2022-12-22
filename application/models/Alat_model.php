<?php

class Alat_model extends CI_Model
{

    public function	create($data){
	    $this->db->insert('sppa_alat_berat', $data);
	}
    public function	create3($data3){
        return $this->db->insert_batch('kondisi', $data3);
	}

    function search_asuransi($asuransi){
        $this->db->like('nama_asuransi', $asuransi , 'both');
        $this->db->order_by('nama_asuransi', 'ASC');
        $this->db->limit(10);
        return $this->db->get('asuransi')->result();
    }

    public function getDataId()
    {
        $sql = "SELECT * FROM sppa_alat_berat ORDER BY id_alat DESC LIMIT 1";
		$query = $this->db->query($sql);
		return $query->result_array();
    }

    public function getDataKondisi($idn){
        $sql = "SELECT * FROM kondisi where id_kendaraan = '$idn'";
		$query = $this->db->query($sql);
		return $query->result_array();
    }

    public function deleteData($id)
    {
        $this->db->where($id);
        return $this->db->delete('berita');
    }
}

   
