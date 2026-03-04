<?php
class Sarana extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('masuk') != TRUE) {
			$url = base_url('administrator');
			redirect($url);
		};
		$this->load->model('m_sarana');
		$this->load->library('upload');
	}
	function index()
	{
		$x['data'] = $this->m_sarana->getSarana();
		$this->load->view('admin/v_header');
		$this->load->view('admin/v_sidebar');
		$this->load->view('admin/v_sarana', $x);
	}

	function tambah()
	{
		$config['upload_path'] = './assets/images/sarana/'; //path folder
		$config['allowed_types'] = 'jpg|png|jpeg'; //type yang dapat diakses bisa anda sesuaikan
		$config['encrypt_name'] = TRUE; //nama yang terupload nantinya

		$this->upload->initialize($config);
		if (!empty($_FILES['filefoto']['name'])) {
			if ($this->upload->do_upload('filefoto')) {
				$gbr = $this->upload->data();
				//Compress Image
				$config['image_library'] = 'gd2';
				$config['source_image'] = './assets/images/sarana/' . $gbr['file_name'];
				$config['create_thumb'] = FALSE;
				$config['maintain_ratio'] = FALSE;
				$config['quality'] = '60%';
				$config['width'] = 300;
				$config['height'] = 300;
				$config['new_image'] = './assets/images/sarana/' . $gbr['file_name'];
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();

				$sarana_foto = $gbr['file_name'];
				$sarana_judul = $this->input->post('xjudul');
				$sarana_keterangan = $this->input->post('xdeskripsi');
				$sarana_kondisi = $this->input->post('xkondisi');

				$this->m_sarana->tambah($sarana_judul, $sarana_keterangan, $sarana_kondisi, $sarana_foto);
				echo $this->session->set_flashdata('msg', 'success');
				redirect('admin/sarana');
			} else {
				echo $this->session->set_flashdata('msg', 'warning');
				redirect('admin/sarana');
			}
		} else {
			$sarana_judul = $this->input->post('xjudul');
			$sarana_keterangan = $this->input->post('xdeskripsi');
			$sarana_kondisi = $this->input->post('xkondisi');

			$this->m_sarana->tambah_tanpa_img($sarana_judul, $sarana_keterangan, $sarana_kondisi);
			echo $this->session->set_flashdata('msg', 'success');
			redirect('admin/sarana');
		}
	}

	function update()
	{

		$config['upload_path'] = './assets/images/sarana/'; //path folder
		$config['allowed_types'] = 'jpg|png|jpeg'; //type yang dapat diakses bisa anda sesuaikan
		$config['encrypt_name'] = TRUE; //nama yang terupload nantinya

		$this->upload->initialize($config);
		if (!empty($_FILES['filefoto']['name'])) {
			if ($this->upload->do_upload('filefoto')) {
				$gbr = $this->upload->data();
				//Compress Image
				$config['image_library'] = 'gd2';
				$config['source_image'] = './assets/images/sarana/' . $gbr['file_name'];
				$config['create_thumb'] = FALSE;
				$config['maintain_ratio'] = FALSE;
				$config['quality'] = '60%';
				$config['width'] = 300;
				$config['height'] = 300;
				$config['new_image'] = './assets/images/sarana/' . $gbr['file_name'];
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();
				$foto = $this->input->post('foto');
				$path = './assets/images/sarana/' . $foto;
				unlink($path);

				$sarana_foto = $gbr['file_name'];
				$kode = $this->input->post('kode');
				$sarana_judul = $this->input->post('xjudul');
				$sarana_keterangan = $this->input->post('xdeskripsi');
				$sarana_kondisi = $this->input->post('xkondisi');

				$this->m_sarana->update($kode, $sarana_judul, $sarana_keterangan, $sarana_kondisi, $sarana_foto);
				echo $this->session->set_flashdata('msg', 'info');
				redirect('admin/sarana');
			} else {
				echo $this->session->set_flashdata('msg', 'error');
				redirect('admin/sarana');
			}
		} else {
			$kode = $this->input->post('kode');
			$sarana_judul = $this->input->post('xjudul');
			$sarana_keterangan = $this->input->post('xdeskripsi');
			$sarana_kondisi = $this->input->post('xkondisi');

			$this->m_sarana->update_tanpa_img($kode, $sarana_judul, $sarana_keterangan, $sarana_kondisi);
			echo $this->session->set_flashdata('msg', 'info');
			redirect('admin/sarana');
		}
	}

	function hapus()
	{
		$kode = $this->input->post('kode');
		$foto = $this->input->post('foto');
		$path = './assets/images/sarana/' . $foto;
		unlink($path);
		$this->m_sarana->hapus($kode);
		echo $this->session->set_flashdata('msg', 'success-hapus');
		redirect('admin/sarana');
	}
}
