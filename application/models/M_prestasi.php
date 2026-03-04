<?php
class M_Prestasi extends CI_Model
{
    public function getPrestasi()
    {

        $hsl = $this->db->query("SELECT * FROM tbl_prestasi");
        return $hsl;
    }
    function tambah($prestasi_judul, $prestasi_oleh, $prestasi_peringkat, $prestasi_tingkat, $prestasi_tgl, $prestasi_foto)
    {

        $hs1 = $this->db->query("INSERT INTO tbl_prestasi(prestasi_judul, prestasi_oleh, prestasi_peringkat, prestasi_tingkat, prestasi_tgl, prestasi_foto) VALUES ('$prestasi_judul', '$prestasi_oleh','$prestasi_peringkat','$prestasi_tingkat','$prestasi_tgl','$prestasi_foto')");
        return $hs1;
    }

    function tambah_tanpa_img($prestasi_judul, $prestasi_oleh, $prestasi_peringkat, $prestasi_tingkat, $prestasi_tgl)
    {

        $hs1 = $this->db->query("INSERT INTO tbl_prestasi(prestasi_judul, prestasi_oleh, prestasi_peringkat, prestasi_tingkat, prestasi_tgl) VALUES ('$prestasi_judul', '$prestasi_oleh','$prestasi_peringkat','$prestasi_tingkat','$prestasi_tgl')");
        return $hs1;
    }
    function update($kode, $prestasi_judul, $prestasi_oleh, $prestasi_peringkat, $prestasi_tingkat, $prestasi_tgl, $prestasi_foto)
    {

        $hs1 = $this->db->query("UPDATE tbl_prestasi SET prestasi_judul='$prestasi_judul', prestasi_oleh='$prestasi_oleh', prestasi_peringkat='$prestasi_peringkat', prestasi_tingkat='$prestasi_tingkat',prestasi_tgl='$prestasi_tgl', prestasi_foto='$prestasi_foto' WHERE prestasi_id='$kode'");
        return $hs1;
    }
    function update_tanpa_img($kode, $prestasi_judul, $prestasi_oleh, $prestasi_peringkat, $prestasi_tingkat, $prestasi_tgl)
    {

        $hs1 = $this->db->query("UPDATE tbl_prestasi SET prestasi_judul='$prestasi_judul', prestasi_oleh='$prestasi_oleh', prestasi_peringkat='$prestasi_peringkat', prestasi_tingkat='$prestasi_tingkat',prestasi_tgl='$prestasi_tgl' WHERE prestasi_id='$kode'");
        return $hs1;
    }
    function hapus($kode)
    {

        $hs1 = $this->db->query("DELETE FROM tbl_prestasi WHERE prestasi_id='$kode'");
        return $hs1;
    }

    public function hitungJumlahAsset()
    {
        $query = $this->db->get('tbl_prestasi');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    function prestasi()
    {
        $hsl = $this->db->query("SELECT * FROM tbl_prestasi ORDER BY prestasi_tgl ASC");
        return $hsl;
    }
    function prestasi_perpage($offset, $limit)
    {
        $hsl = $this->db->query("SELECT * FROM tbl_prestasi ORDER BY prestasi_tgl ASC limit $offset, $limit");
        return $hsl;
    }
}
