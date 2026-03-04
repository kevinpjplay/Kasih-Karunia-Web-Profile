<?php
class Footer extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_pengunjung');
		$this->load->model('m_tentang');
		$this->m_pengunjung->count_visitor();
	}
	function index(){
		$x['footer'] = $this->m_tentang->getKontak();
		$x['tot_guru']=$this->db->get('tbl_guru')->num_rows();
		$x['tot_siswa']=$this->db->get('tbl_siswa')->num_rows();
		$x['tot_files']=$this->db->get('tbl_files')->num_rows();
		$x['tot_agenda']=$this->db->get('tbl_agenda')->num_rows();
		$this->load->view('depan/v_footer',$x);
	}
}