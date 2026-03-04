<?php
class Pendaftaran extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_pendaftaran');
		$this->load->model('m_tentang');
	}
	function index()
	{
		$x['judul'] = 'Pendaftaran - TK Kasih Karunia';
		$x['data'] = $this->m_pendaftaran->getpendaftaran();
		$x['konfig'] = $this->m_tentang->getKontak();
		$this->load->view('depan/v_navbar', $x);
		$this->load->view('depan/v_pendaftaran', $x);
		$this->load->view('depan/v_footer', $x);
	}
}
