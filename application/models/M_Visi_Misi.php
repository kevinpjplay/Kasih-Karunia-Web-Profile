<?php
class M_Visi_Misi extends CI_Model{
    public function getVisi(){
       
         $hsl = $this->db->query("SELECT * FROM tbl_visi_misi WHERE jenis = 'visi'");
        return $hsl;
    
    }
    public function getMisi(){
       
         $hsl = $this->db->query("SELECT * FROM tbl_visi_misi WHERE jenis = 'misi'");
        return $hsl;
    
    }
    public function getTujuan(){
       
        $hsl = $this->db->query("SELECT * FROM tbl_visi_misi WHERE jenis = 'tujuan'");
       return $hsl;
   
   }


    function get_all_visi_misi(){
        $hs1=$this->db->query("select * from tbl_visi_misi");
        return $hs1;
    }

    // function tambah($konten, $jenis){

    //     $hs1=$this->db->query("INSERT INTO tbl_visi_misi(konten,jenis) VALUES ('$konten','$jenis')");
    //     return $hs1;
    // }

    // function update($kode, $jenis, $konten){

    //     $hs1=$this->db->query("update tbl_visi_misi set jenis='$jenis', konten='$konten' where id='$kode'");
    //     return $hs1;
    // }
    
    // function hapus($kode){
    //     $hs1=$this->db->query("delete from tbl_visi_misi where id='$kode'");
    //     return $hs1;
    // }

    // function get_visimisi_byiClassd($id){
    //     $hs1=$this->db->query("select * from tbl_visi_misi where id='$id'");
    //     return $hs1;
    // }


}