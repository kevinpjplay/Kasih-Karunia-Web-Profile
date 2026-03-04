<?php
class Pendaftaran extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_pendaftaran');
		$this->load->model('m_pengguna');
		$this->load->library('upload');
	}


	function index(){
		$x['data']=$this->m_pendaftaran->getpendaftaran();
		$this->load->view('admin/v_header');
		$this->load->view('admin/v_sidebar');
		$this->load->view('admin/v_pendaftaran',$x);
		
	}

    function tambah(){

        $pendaftaran_konten=$this->input->post('xkonten');
        $this->m_pendaftaran->tambah($pendaftaran_konten);
        echo $this->session->set_flashdata('msg','success');
		redirect('admin/pendaftaran');
    }

    function update(){

        $kode=$this->input->post('kode');
        $pendaftaran_konten=$this->input->post('xkonten');
        $this->m_pendaftaran->update($kode, $pendaftaran_konten);
        echo $this->session->set_flashdata('msg','info');
		redirect('admin/pendaftaran');
    }

    function hapus(){
        $kode=$this->input->post('kode');
        $this->m_pendaftaran->hapus($kode);
        echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/pendaftaran');
    }

}