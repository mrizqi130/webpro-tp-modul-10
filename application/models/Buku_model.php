<?php
 // write your name and student id here
class Buku_model extends CI_model
{

	public function getAllBuku()
	{
		//use query builder to get data table "buku"
		// $query = $this->db->get('buku');
		return $this->db->get('buku')->result_array();
	}

	public function tambahDataBuku($data)
	{
		// $data = [
		// 	"kode" => $this->input->post('kode', true),
		// 	"judul" => $this->input->post('judul', true),
		// 	"penulis" => $this->input->post('penulis', true),
		// 	"penerbit" => $this->input->post('penerbit', true),
		// 	"tahun" => $this->input->post('tahun', true),
		// ];

		//use query builder to insert $data to table "buku"
		return $this->db->insert('buku',$data);
	}

	public function hapusDataBuku($kode)
	{
		//use query builder to delete data based on kode 
		
	}

	public function ubahDataBuku()
	{
		$data = [
			"kode" => $this->input->post('kode', true),
			"judul" => $this->input->post('judul', true),
			"penulis" => $this->input->post('penulis', true),
			"penerbit" => $this->input->post('penerbit', true),
			"tahun" => $this->input->post('tahun', true),
		];
		//use query builder class to update data buku based on kode
		
	}

}
