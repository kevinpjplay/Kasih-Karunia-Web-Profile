<?php
class Profil extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('masuk') != TRUE) {
			$url = base_url('administrator');
			redirect($url);
		};
		$this->load->model('m_tentang');

		$this->load->library('upload');
	}
	function index()
	{
		$x['data'] = $this->m_tentang->getIdentitas();
		$x['konfig'] = $this->m_tentang->getKontak();

		$this->load->view('admin/v_header');
		$this->load->view('admin/v_sidebar');
		$this->load->view('admin/v_profil', $x);
	}
	function tambah()
	{
		$profil_judul = $this->input->post('xjudul');
		$profil_konten = $this->input->post('xkonten');
		$this->m_tentang->tambah($profil_judul, $profil_konten);
		echo $this->session->set_flashdata('msg', 'success');
		redirect('admin/profil');
	}
	function edit()
	{

		$kode = $this->input->post('kode');
		$profil_judul = $this->input->post('xjudul');
		$profil_konten = $this->input->post('xkonten');
		$this->m_tentang->edit($kode, $profil_judul, $profil_konten);
		echo $this->session->set_flashdata('msg', 'info');
		redirect('admin/profil');
	}
	function hapus()
	{
		$kode = $this->input->post('kode');
		$this->m_tentang->hapus($kode);
		echo $this->session->set_flashdata('msg', 'success-hapus');
		redirect('admin/profil');
	}
	function editkonfig()
	{

		$kode = $this->input->post('kode');
		$konfig_alamat = $this->input->post('xalamat');
		$konfig_email = $this->input->post('xemail');
		$konfig_telepon = $this->input->post('xtelepon');
		$konfig_ktsambutan = $this->input->post('xktsambutan');

		$this->m_tentang->editkonfig($kode, $konfig_alamat, $konfig_email, $konfig_telepon, $konfig_ktsambutan);
		echo $this->session->set_flashdata('msg', 'info2');
		redirect('admin/profil');
	}
}
