<?php
class Struktur_organisasi extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
		};
		$this->load->model('m_struktur_organisasi');
		$this->load->library('upload');
	}
	function index(){
		$x['data'] = $this->m_struktur_organisasi->getStruktur();
		$this->load->view('admin/v_header');
		$this->load->view('admin/v_sidebar');
		$this->load->view('admin/v_struktur_organisasi', $x);
		
	}

    function edit(){

        $config['upload_path'] = './assets/images/struktur/'; //path folder
	    $config['allowed_types'] = 'jpg|png|jpeg'; //type yang dapat diakses bisa anda sesuaikan
	    $config['encrypt_name'] = TRUE; //nama yang terupload nantinya


        $this->upload->initialize($config);
	            if(!empty($_FILES['filefoto']['name']))
	            {
	                if ($this->upload->do_upload('filefoto'))
	                {
	                        $gbr = $this->upload->data();
	                        //Compress Image
	                        $config['image_library']='gd2';
	                        $config['source_image']='./assets/images/struktur/'.$gbr['file_name'];
	                        $config['create_thumb']= FALSE;
	                        $config['maintain_ratio']= TRUE;
	                        
                            // $config['max_size']             = 1000;
                            // $config['max_width']            = 1500;
                            // $config['max_height']           = 1500;
	                        $config['new_image']= './assets/images/struktur/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();

	                        $struktur_gambar=$gbr['file_name'];
	                        $kode=$this->input->post('kode');
                            $struktur_nama=$this->input->post('xjudul');
							$images=$this->input->post('gambar');
							$path='./assets/images/struktur/'.$images;
							unlink($path);
							
							
							$this->m_struktur_organisasi->edit($kode,$struktur_nama,$struktur_gambar);
							echo $this->session->set_flashdata('msg','info');
							redirect('admin/struktur_organisasi');
	                    
	                }else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/struktur_organisasi');
	                }
	                
	            }else{

                    $kode=$this->input->post('kode');
                    $struktur_nama=$this->input->post('xjudul');
                    $this->m_struktur_organisasi->edit_tanpa_img($kode,$struktur_nama);
                    echo $this->session->set_flashdata('msg','info');
                    redirect('admin/struktur_organisasi');
                }
    }

}