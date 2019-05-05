<?php
class Home extends CI_controller
{
	public function index($nama = '')
	{
		$data['judul'] = 'Beranda';
		$data['nama'] = $nama;
		$this->load->view('tempelates/header', $data);
		$this->load->view('home/index', $data);
		$this->load->view('tempelates/footer');
	}
}
?>