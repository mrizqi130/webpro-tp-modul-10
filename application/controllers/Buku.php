<?php
 // write your name and student id here
class Buku extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		//load model "Buku_model"
		$this->load->model('Buku_model');
		//load library form validation
		$this->load->library('form_validation');
	}


	public function index()
	{

		$data['judul'] = 'Data Buku';
		$data['buku'] = $this->Buku_model->getAllBuku();

		$this->load->view('templates/header', $data);
		$this->load->view('buku/index', $data);
		// $this->load->view('templates/footer');

		$this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->helper('url');
	}

	public function tambah()
	{
		$data['judul'] = 'Form Tambah Data Buku';
		$data = [
			"kode" => $this->input->post('kode', true),
			"judul" => $this->input->post('judul', true),
			"penulis" => $this->input->post('penulis', true),
			"penerbit" => $this->input->post('penerbit', true),
			"tahun" => $this->input->post('tahun', true),
		];
		//from library form_validation, set rules for kode, judul, penulis, pengarang, tahun = required
		// $this->form_validation->set_rules('username', 'Username', 'required');



		//conditon in form_validation, if user input form = true,
		//call method "tambahDataBuku" in Buku_model
		//use flashdata to to show alert "added success"
		//back to controller buku
		

		$cek = $this->Buku_model->tambahDataBuku($data);
		if ($cek) $this->session->set_flashdata('info', 'berhasil insert');
		else $this->session->set_flashdata('info','Gagal insert');
		redirect('buku');
		
	}

	public function hapus($kode)
	{
		//call method hapusDataBuku with parameter kode from buku_model
		//use flashdata to show alert "dihapus"
		//back to controller buku

	}

	public function ubah()
	{
		$data['judul'] = 'Form Ubah Data Buku';

		//from library form_validation, set rules for kode, judul, penulis, pengarang, tahun = required


		//conditon in form_validation, if user input form = true
		//call method "ubahDataBuku" in Buku_model
		//use flashdata to to show alert "data changed successfully"
		//back to controller buku


	}
}
