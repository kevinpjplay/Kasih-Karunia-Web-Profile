<?php
class Visi_misi extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_visi_misi');
		$this->load->model('m_tentang');
	}
	function index()
	{
		$x['judul'] = 'Visi Misi dan Tujuan - TK Kasih Karunia';
		$x['visi'] = $this->m_visi_misi->getVisi();
		$x['misi'] = $this->m_visi_misi->getMisi();
		$x['tujuan'] = $this->m_visi_misi->getTujuan();
		$x['konfig'] = $this->m_tentang->getKontak();
		$this->load->view('depan/v_navbar', $x);
		$this->load->view('depan/v_visi_misi', $x);
		$this->load->view('depan/v_footer', $x);
	}
}
