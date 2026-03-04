<?php
class M_Sarana extends CI_Model
{
    public function getSarana()
    {

        $hsl = $this->db->query("SELECT * FROM tbl_sarana");
        return $hsl;
    }

    function tambah($sarana_judul, $sarana_keterangan, $sarana_kondisi, $sarana_foto)
    {
        $hsl = $this->db->query("INSERT INTO tbl_sarana(sarana_judul, sarana_keterangan, sarana_kondisi, sarana_foto) VALUES ('$sarana_judul', '$sarana_keterangan', '$sarana_kondisi', '$sarana_foto')");
        return $hsl;
    }
    function tambah_tanpa_img($sarana_judul, $sarana_keterangan, $sarana_kondisi)
    {
        $hsl = $this->db->query("INSERT INTO tbl_sarana(sarana_judul, sarana_keterangan, sarana_kondisi) VALUES ('$sarana_judul', '$sarana_keterangan', '$sarana_kondisi')");
        return $hsl;
    }
    function update($kode, $sarana_judul, $sarana_keterangan, $sarana_kondisi, $sarana_foto)
    {

        $hs1 = $this->db->query("UPDATE tbl_sarana SET sarana_judul='$sarana_judul', sarana_keterangan='$sarana_keterangan', sarana_kondisi='$sarana_kondisi', sarana_foto='$sarana_foto' WHERE sarana_id='$kode'");
        return $hs1;
    }
    function update_tanpa_img($kode, $sarana_judul, $sarana_keterangan, $sarana_kondisi)
    {

        $hs1 = $this->db->query("UPDATE tbl_sarana SET sarana_judul='$sarana_judul', sarana_keterangan='$sarana_keterangan', sarana_kondisi='$sarana_kondisi' WHERE sarana_id='$kode'");
        return $hs1;
    }
    function hapus($kode)
    {

        $hs1 = $this->db->query("DELETE FROM tbl_sarana WHERE sarana_id='$kode'");
        return $hs1;
    }
    public function hitungJumlahAsset()
    {
        $query = $this->db->get('tbl_sarana');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    function sarana()
    {
        $hsl = $this->db->query("SELECT * FROM tbl_sarana");
        return $hsl;
    }
    function sarana_perpage($offset, $limit)
    {
        $hsl = $this->db->query("SELECT * FROM tbl_sarana limit $offset, $limit");
        return $hsl;
    }
}
