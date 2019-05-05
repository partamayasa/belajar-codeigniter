<?php
class Mahasiswa extends CI_controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mahasiswa_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['judul'] = 'Data Mahasiswa';
		$data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswa();
		if($this->input->post('keyword'))
		{
			$data['mahasiswa'] = $this->Mahasiswa_model->cariDataMahasiswa();
		}
		$this->load->view('tempelates/header', $data);
		$this->load->view('mahasiswa/index', $data);
		$this->load->view('tempelates/footer');
	}

	public function tambah()
	{
		$data['judul'] = 'Form Tambah Data Mahasiswa';
		$data['jurusan'] = ['Matematika','Fisika','Kimia','Biologi','Farmasi','Ilmu Komputer'];
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('nim','Nomor Induk Mahasiswa','required|numeric');
		$this->form_validation->set_rules('email','email','required|valid_email');
		if ($this->form_validation->run() == FALSE)
        {
			$this->load->view('tempelates/header', $data);
			$this->load->view('mahasiswa/tambah', $data);
			$this->load->view('tempelates/footer');
        }
        else
        {
			$this->Mahasiswa_model->tambahDataMahasiswa();
			$this->session->set_flashdata('flash',' ditambahkan');
			redirect('mahasiswa');
        }
	}

	public function hapus($id)
	{
		$this->Mahasiswa_model->hapusDataMahasiswa($id);
		$this->session->set_flashdata('flash',' dihapus');
		redirect('mahasiswa');
	}

	public function detail($id)
	{
		$data['judul'] = 'Detail Data Mahasiswa';
		$data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);
		$this->load->view('tempelates/header', $data);
		$this->load->view('mahasiswa/detail', $data);
		$this->load->view('tempelates/footer');
	}

	public function ubah($id)
	{
		$data['judul'] = 'Form Ubah Data Mahasiswa';
		$data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);
		$data['jurusan'] = ['Matematika','Fisika','Kimia','Biologi','Farmasi','Ilmu Komputer'];
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('nim','Nomor Induk Mahasiswa','required|numeric');
		$this->form_validation->set_rules('email','email','required|valid_email');
		if ($this->form_validation->run() == FALSE)
        {
			$this->load->view('tempelates/header', $data);
			$this->load->view('mahasiswa/ubah',$data);
			$this->load->view('tempelates/footer');
        }
        else
        {
			$this->Mahasiswa_model->ubahDataMahasiswa();
			$this->session->set_flashdata('flash',' diubah');
			redirect('mahasiswa');
        }
	}
}
?>