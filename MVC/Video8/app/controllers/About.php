<?php 

class About extends Controller{
	public function index($nama = 'Irsan', $pekerjaan = 'Mahasiswa', $umur = '20'){
		$data['nama'] = $nama;
		$data['pekerjaan'] = $pekerjaan;
		$data['umur'] = $umur;
		$data['judul'] = 'About Me';
		$this->view('tamplates/header', $data);
		$this->view('about/index', $data);
		$this->view('tamplates/footer');
	}

	public function page(){
		$data['judul'] = 'Page';
		$this->view('tamplates/header', $data);
		$this->view('about/page');
		$this->view('tamplates/footer');
	}
}