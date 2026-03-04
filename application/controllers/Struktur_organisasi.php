<?php
class Struktur_organisasi extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_tentang');
		$this->load->model('m_struktur_organisasi');
	}
	function index()
	{
		$x['judul'] = 'Struktur Organisasi - TK Kasih Karunia';
		$x['data'] = $this->m_struktur_organisasi->getStruktur();
		$x['konfig'] = $this->m_tentang->getKontak();

		$this->load->view('depan/v_navbar', $x);
		$this->load->view('depan/v_struktur_organisasi', $x);
		$this->load->view('depan/v_footer', $x);
	}
}
