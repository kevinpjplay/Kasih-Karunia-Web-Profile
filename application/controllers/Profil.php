<?php
class Profil extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_pengunjung');
		$this->load->model('m_tentang');
		$this->m_pengunjung->count_visitor();
	}
	function index()
	{
		$x['judul'] = 'Sejarah Sekolah - TK Kasih Karunia';
		$x['data'] = $this->m_tentang->getIdentitas();
		$x['tot_guru'] = $this->db->get('tbl_guru')->num_rows();
		$x['tot_files'] = $this->db->get('tbl_files')->num_rows();
		$x['tot_agenda'] = $this->db->get('tbl_agenda')->num_rows();
		$x['konfig'] = $this->m_tentang->getKontak();
		$this->load->view('depan/v_navbar', $x);
		$this->load->view('depan/v_profil', $x);
		$this->load->view('depan/v_footer', $x);
	}
}
