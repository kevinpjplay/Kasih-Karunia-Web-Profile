<?php 
class M_guru extends CI_Model{

	function get_all_guru(){
		$hsl=$this->db->query("SELECT * FROM tbl_guru");
		return $hsl;
	}

	function simpan_guru($nip,$nama,$jenkel,$tmp_lahir,$tgl_lahir,$jabatan,$photo){
		$hsl=$this->db->query("INSERT INTO tbl_guru (guru_nip,guru_nama,guru_jenkel,guru_tmp_lahir,guru_tgl_lahir,guru_jabatan,guru_photo) VALUES ('$nip','$nama','$jenkel','$tmp_lahir','$tgl_lahir','$jabatan','$photo')");
		return $hsl;
	}
	function simpan_guru_tanpa_img($nip,$nama,$jenkel,$tmp_lahir,$tgl_lahir,$jabatan){
		$hsl=$this->db->query("INSERT INTO tbl_guru (guru_nip,guru_nama,guru_jenkel,guru_tmp_lahir,guru_tgl_lahir,guru_jabatan) VALUES ('$nip','$nama','$jenkel','$tmp_lahir','$tgl_lahir','$jabatan')");
		return $hsl;
	}

	function update_guru($kode,$nip,$nama,$jenkel,$tmp_lahir,$tgl_lahir,$jabatan,$photo){
		$hsl=$this->db->query("UPDATE tbl_guru SET guru_nip='$nip',guru_nama='$nama',guru_jenkel='$jenkel',guru_tmp_lahir='$tmp_lahir',guru_tgl_lahir='$tgl_lahir',guru_jabatan='$jabatan',guru_photo='$photo' WHERE guru_id='$kode'");
		return $hsl;
	}
	function update_guru_tanpa_img($kode,$nip,$nama,$jenkel,$tmp_lahir,$tgl_lahir,$jabatan){
		$hsl=$this->db->query("UPDATE tbl_guru SET guru_nip='$nip',guru_nama='$nama',guru_jenkel='$jenkel',guru_tmp_lahir='$tmp_lahir',guru_tgl_lahir='$tgl_lahir',guru_jabatan='$jabatan' WHERE guru_id='$kode'");
		return $hsl;
	}
	function hapus_guru($kode){
		$hsl=$this->db->query("DELETE FROM tbl_guru WHERE guru_id='$kode'");
		return $hsl;
	}

	public function hitungJumlahAsset(){   
        $query = $this->db->get('tbl_guru');
        if($query->num_rows()>0)
        {
        return $query->num_rows();
        }
        else
        {
        return 0;
        }
    }

	function getKepsek(){

		$hsl=$this->db->query("SELECT * FROM tbl_guru WHERE guru_jabatan='Kepala Sekolah'");
		return $hsl;
	}

	//front-end
	function guru(){
		$hsl=$this->db->query("SELECT * FROM tbl_guru");
		return $hsl;
	}
	function guru_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT * FROM tbl_guru limit $offset,$limit");
		return $hsl;
	}

}