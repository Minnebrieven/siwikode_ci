<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wisata extends CI_Controller {

	function __construct()
  {
    parent::__construct();
    $this->load->model('testimoni_model');
    $this->load->model('wisata_model');
    $this->load->model('jenis_model');
    $this->load->model('kuliner_model');
    $this->load->model('profesi_model');
  }

	public function index()
	{
        $data['wisata'] = $this->wisata_model->getAll();
		$this->load->view('list', $data);
	}

	public function rekreasi()
	{
		$data['wisata'] = $this->wisata_model->getbyJenis("rekreasi");
		$this->load->view('list',$data);
	}

    public function kuliner()
	{
		$data['wisata'] = $this->wisata_model->getbyJenis("kuliner");
		$this->load->view('list',$data);
	}

    public function detail()
    {
    $id = $this->uri->segment('3');
    $result = $this->wisata_model->get_wisata($id);
    $testimoni = $this->testimoni_model->detail_wisata($id);
    if($result->num_rows() > 0)
    {
      $i = $result->row_array();
      $data = array
      (
        'id' => $i['id'],
        'nama' => $i['nama'],
        'deskripsi' => $i['deskripsi'],
        'jenis_wisata_id' => $i['jenis_wisata_id'],
        'fasilitas' => $i['fasilitas'],
        'bintang' => $i['bintang'],
        'kontak' => $i['kontak'],
        'alamat' => $i['alamat'],
        'latlong' => $i['latlong'],
        'email' => $i['email'],
        'web' => $i['web'],
        'jenis_kuliner_id' => $i['jenis_kuliner_id'],
        'image' => $i['image'],
        'testimoni' => $testimoni
      );
      $this->load->view('detail', $data);
    }
    else
    {
      echo "Data Was Not Found";
    }
    }
}
