<?php
class Visi_misi extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
		};
		$this->load->model('m_visi_misi');
        $this->load->library('form_validation');
		$this->load->library('upload');
	}
	function index(){
		$x['visimisi'] = $this->m_visi_misi->get_all_visi_misi();
		$this->load->view('admin/v_header');
		$this->load->view('admin/v_sidebar');
		$this->load->view('admin/v_visi_misi', $x);
		$this->load->view('admin/v_footer');
	}


    public function tambah(){
        $jenis = $this->input->post('xjenis');
        $konten = $this->input->post('xkonten');

        $this->m_visi_misi->tambah($jenis, $konten);
        echo $this->session->set_flashdata('msg','success');
		redirect('admin/visi_misi');
    }

    public function update(){
        $kode = $this->input->post('kode');
        $jenis = $this->input->post('xjenis');
        $konten = $this->input->post('xkonten');

        $this->m_visi_misi->update($kode,$jenis, $konten);
        echo $this->session->set_flashdata('msg','info');
		redirect('admin/visi_misi');

    }

    public function hapus(){
        $kode = $this->input->post('kode');
        $this->m_visi_misi->hapus($kode);
        echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/visi_misi');
    }

    

	
}