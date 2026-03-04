<?php
Class M_Pendaftaran extends CI_Model{
    public function getpendaftaran(){

        $hs1 = $this->db->query("SELECT * FROM tbl_pendaftaran");
        return $hs1;
    }

    function tambah($pendaftaran_konten){

        $hs1=$this->db->query("INSERT INTO tbl_pendaftaran(pendaftaran_konten) VALUES ('$pendaftaran_konten')");
        return $hs1;
    }
    function update($kode, $pendaftaran_konten){

        $hs1=$this->db->query("UPDATE tbl_pendaftaran SET pendaftaran_konten = '$pendaftaran_konten' WHERE pendaftaran_id = '$kode'");
        return $hs1;
    }
    function hapus($kode){

        $hs1=$this->db->query("DELETE FROM tbl_pendaftaran WHERE pendaftaran_id = '$kode'");
        return $hs1;
    }

    public function hitungJumlahAsset(){   
        $query = $this->db->get('tbl_pendaftaran');
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