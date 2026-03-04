<?php
class Galeri extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_galeri');
		$this->load->model('m_tentang');
		$this->load->model('m_album');
		$this->load->model('m_pengunjung');
		$this->m_pengunjung->count_visitor();
	}
	function index()
	{
		$x['judul'] = 'Galeri - TK Kasih Karunia';
		$x['alb'] = $this->m_album->get_all_album();
		$x['all_galeri'] = $this->m_galeri->get_all_galeri();
		$x['konfig'] = $this->m_tentang->getKontak();

		$this->load->view('depan/v_navbar', $x);
		$this->load->view('depan/v_galeri', $x);
		$this->load->view('depan/v_footer', $x);
	}
	function album()
	{
		$idalbum = $this->uri->segment(3);
		$x['alb'] = $this->m_album->get_all_album();
		$x['data'] = $this->m_galeri->get_galeri_by_album_id($idalbum);
		$this->load->view('depan/v_galeri_per_album', $x);
	}
}
