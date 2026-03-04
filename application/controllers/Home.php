<?php
class Home extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_tulisan');
		$this->load->model('m_galeri');
		$this->load->model('m_pengumuman');
		$this->load->model('m_agenda');
		$this->load->model('m_files');
		$this->load->model('m_tentang');
		$this->load->model('m_guru');
	}
	function index()
	{
		$x['judul'] = 'TK Kasih Karunia - Selamat Datang di TK Kasih Karunia';


		$x['berita'] = $this->m_tulisan->get_berita_home();
		$x['pengumuman'] = $this->m_pengumuman->get_pengumuman_home();
		$x['agenda'] = $this->m_agenda->get_agenda_home();
		$x['tot_guru'] = $this->db->get('tbl_guru')->num_rows();
		$x['tot_files'] = $this->db->get('tbl_files')->num_rows();
		$x['tot_agenda'] = $this->db->get('tbl_agenda')->num_rows();

		$x['data'] = $this->m_guru->getKepsek();
		$x['konfig'] = $this->m_tentang->getKontak();

		$x['menu'] = 'beranda';
		$this->load->view('depan/v_navbar', $x);
		$this->load->view('depan/v_home', $x);
		$this->load->view('depan/v_footer', $x);
	}
}
