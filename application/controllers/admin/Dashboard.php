<?php
class Dashboard extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('masuk') != TRUE) {
			$url = base_url('administrator');
			redirect($url);
		};
		$this->load->model('m_pengunjung');
		$this->load->model('m_sarana');
		$this->load->model('m_prestasi');
		$this->load->model('m_struktur_organisasi');
		$this->load->model('m_guru');
		$this->load->model('m_agenda');
		$this->load->model('m_pengumuman');
		$this->load->model('m_files');
		$this->load->model('m_kategori');
		$this->load->model('m_tulisan');
		$this->load->model('m_album');
		$this->load->model('m_galeri');
		$this->load->model('m_pendaftaran');
		$this->load->model('m_kontak');
		$this->load->model('m_pengguna');
	}
	function index()
	{
		if ($this->session->userdata('akses') == '1') {
			$x['visitor'] = $this->m_pengunjung->statistik_pengujung();
			$x['sarana'] = $this->m_sarana->hitungJumlahAsset();
			$x['prestasi'] = $this->m_prestasi->hitungJumlahAsset();
			$x['struktur_organisasi'] = $this->m_struktur_organisasi->hitungJumlahAsset();
			$x['guru'] = $this->m_guru->hitungJumlahAsset();
			$x['agenda'] = $this->m_agenda->hitungJumlahAsset();
			$x['pengumuman'] = $this->m_pengumuman->hitungJumlahAsset();
			$x['files'] = $this->m_files->hitungJumlahAsset();
			$x['berita'] = $this->m_tulisan->hitungJumlahAsset();
			$x['kategori'] = $this->m_kategori->hitungJumlahAsset();
			$x['album'] = $this->m_album->hitungJumlahAsset();
			$x['galerifoto'] = $this->m_galeri->hitungJumlahAsset();
			$x['pendaftaran'] = $this->m_pendaftaran->hitungJumlahAsset();
			$x['buku_tamu'] = $this->m_kontak->hitungJumlahAsset();
			$x['konfadmin'] = $this->m_pengguna->hitungJumlahAsset();
			$x['namauser'] = $this->m_pengguna->get_all_pengguna();



			$this->load->view('admin/v_header');
			$this->load->view('admin/v_sidebar');
			$this->load->view('admin/v_dashboard', $x);
		} else {
			redirect('administrator');
		}
	}
}
