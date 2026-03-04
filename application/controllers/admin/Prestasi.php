<?php
class Prestasi extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('masuk') != TRUE) {
			$url = base_url('administrator');
			redirect($url);
		};
		$this->load->model('m_prestasi');
		$this->load->library('upload');
	}
	function index()
	{
		$x['data'] = $this->m_prestasi->getPrestasi();
		$this->load->view('admin/v_header');
		$this->load->view('admin/v_sidebar');
		$this->load->view('admin/v_prestasi', $x);
	}

	function tambah()
	{
		$config['upload_path'] = './assets/images/prestasi/'; //path folder
		$config['allowed_types'] = 'jpg|png|jpeg'; //type yang dapat diakses bisa anda sesuaikan
		$config['encrypt_name'] = TRUE; //nama yang terupload nantinya

		$this->upload->initialize($config);
		if (!empty($_FILES['filefoto']['name'])) {
			if ($this->upload->do_upload('filefoto')) {
				$gbr = $this->upload->data();
				//Compress Image
				$config['image_library'] = 'gd2';
				$config['source_image'] = './assets/images/prestasi/' . $gbr['file_name'];
				$config['create_thumb'] = FALSE;
				$config['maintain_ratio'] = FALSE;
				$config['quality'] = '60%';
				$config['width'] = 300;
				$config['height'] = 300;
				$config['new_image'] = './assets/images/prestasi/' . $gbr['file_name'];
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();

				$prestasi_foto = $gbr['file_name'];
				$prestasi_judul = $this->input->post('xjudul');
				$prestasi_oleh = $this->input->post('xperaih');
				$prestasi_peringkat = $this->input->post('xperingkat');
				$prestasi_tingkat = $this->input->post('xtingkat');
				$prestasi_tgl = $this->input->post('xtgl_diraih');

				$this->m_prestasi->tambah($prestasi_judul, $prestasi_oleh, $prestasi_peringkat, $prestasi_tingkat, $prestasi_tgl, $prestasi_foto);
				echo $this->session->set_flashdata('msg', 'success');
				redirect('admin/prestasi');
			} else {
				echo $this->session->set_flashdata('msg', 'warning');
				redirect('admin/prestasi');
			}
		} else {
			$prestasi_judul = $this->input->post('xjudul');
			$prestasi_oleh = $this->input->post('xperaih');
			$prestasi_peringkat = $this->input->post('xperingkat');
			$prestasi_tingkat = $this->input->post('xtingkat');
			$prestasi_tgl = $this->input->post('xtgl_diraih');

			$this->m_prestasi->tambah_tanpa_img($prestasi_judul, $prestasi_oleh, $prestasi_peringkat, $prestasi_tingkat, $prestasi_tgl);
			echo $this->session->set_flashdata('msg', 'success');
			redirect('admin/prestasi');
		}
	}

	function update()
	{

		$config['upload_path'] = './assets/images/prestasi/'; //path folder
		$config['allowed_types'] = 'jpg|png|jpeg'; //type yang dapat diakses bisa anda sesuaikan
		$config['encrypt_name'] = TRUE; //nama yang terupload nantinya

		$this->upload->initialize($config);
		if (!empty($_FILES['filefoto']['name'])) {
			if ($this->upload->do_upload('filefoto')) {
				$gbr = $this->upload->data();
				//Compress Image
				$config['image_library'] = 'gd2';
				$config['source_image'] = './assets/images/prestasi/' . $gbr['file_name'];
				$config['create_thumb'] = FALSE;
				$config['maintain_ratio'] = FALSE;
				$config['quality'] = '60%';
				$config['width'] = 300;
				$config['height'] = 300;
				$config['new_image'] = './assets/images/prestasi/' . $gbr['file_name'];
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();


				$prestasi_foto = $gbr['file_name'];
				$kode = $this->input->post('kode');
				$prestasi_judul = $this->input->post('xjudul');
				$prestasi_oleh = $this->input->post('xperaih');
				$prestasi_peringkat = $this->input->post('xperingkat');
				$prestasi_tingkat = $this->input->post('xtingkat');
				$prestasi_tgl = $this->input->post('xtgl_diraih');
				$foto = $this->input->post('foto');
				$path = './assets/images/prestasi/' . $foto;
				unlink($path);

				$this->m_prestasi->update($kode, $prestasi_judul, $prestasi_oleh, $prestasi_peringkat, $prestasi_tingkat, $prestasi_tgl, $prestasi_foto);
				echo $this->session->set_flashdata('msg', 'success');
				redirect('admin/prestasi');
			} else {
				echo $this->session->set_flashdata('msg', 'warning');
				redirect('admin/prestasi');
			}
		} else {
			$kode = $this->input->post('kode');
			$prestasi_judul = $this->input->post('xjudul');
			$prestasi_oleh = $this->input->post('xperaih');
			$prestasi_peringkat = $this->input->post('xperingkat');
			$prestasi_tingkat = $this->input->post('xtingkat');
			$prestasi_tgl = $this->input->post('xtgl_diraih');

			$this->m_prestasi->update_tanpa_img($kode, $prestasi_judul, $prestasi_oleh, $prestasi_peringkat, $prestasi_tingkat, $prestasi_tgl);
			echo $this->session->set_flashdata('msg', 'success');
			redirect('admin/prestasi');
		}
	}

	function hapus()
	{

		$kode = $this->input->post('kode');
		$foto = $this->input->post('foto');
		$path = './assets/images/prestasi/' . $foto;
		unlink($path);
		$this->m_prestasi->hapus($kode);
		echo $this->session->set_flashdata('msg', 'success-hapus');
		redirect('admin/prestasi');
	}
}
