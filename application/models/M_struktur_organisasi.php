<?php
class M_struktur_organisasi extends CI_Model{

    public function getStruktur(){

        $hs1= $this->db->query("SELECT * FROM tbl_struktur");
        return $hs1;
    }

    function edit($kode,$struktur_nama,$struktur_gambar){

        $hs1=$this->db->query("UPDATE tbl_struktur SET struktur_nama='$struktur_nama',struktur_gambar='$struktur_gambar' WHERE struktur_id='$kode'");
        return $hs1;
    }
    function edit_tanpa_img($kode,$struktur_nama){

        $hs1=$this->db->query("UPDATE tbl_struktur SET struktur_nama='$struktur_nama' WHERE struktur_id='$kode'");
        return $hs1;
    }

    public function hitungJumlahAsset(){   
        $query = $this->db->get('tbl_struktur');
        if($query->num_rows()>0)
        {
        return $query->num_rows();
        }
        else
        {
        return 0;
        }
    }



    
}