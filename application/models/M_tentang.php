<?php
class M_tentang extends CI_Model
{

    public function getIdentitas()
    {

        $hs1 = $this->db->query("SELECT * FROM tbl_profil");
        return $hs1;
    }
    public function getKontak()
    {

        $hs1 = $this->db->query("SELECT * FROM tbl_konfig");
        return $hs1;
    }

    function tambah($profil_judul, $profil_konten)
    {
        $hs1 = $this->db->query("INSERT INTO tbl_profil(profil_judul, profil_konten) VALUES ('$profil_judul', '$profil_konten')");
        return $hs1;
    }


    function edit($kode, $profil_judul, $profil_konten)
    {

        $hs1 = $this->db->query("UPDATE tbl_profil SET profil_judul='$profil_judul',
        profil_konten='$profil_konten' WHERE profil_id='$kode'
        ");
        return $hs1;
    }
    function hapus($kode)
    {
        $hs1 = $this->db->query("DELETE FROM tbl_profil WHERE profil_id='$kode'");
        return $hs1;
    }
    function editkonfig($kode, $konfig_alamat, $konfig_email, $konfig_telepon, $konfig_ktsambutan)
    {

        $hs1 = $this->db->query("UPDATE tbl_konfig SET konfig_alamat='$konfig_alamat',
        konfig_email='$konfig_email', konfig_telepon='$konfig_telepon', konfig_ktsambutan='$konfig_ktsambutan' WHERE konfig_id='$kode'
        ");
        return $hs1;
    }
}
