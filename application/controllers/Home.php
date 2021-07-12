<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
		$this->load->view('index');
	}

	public function wisata()
	{
		$data['wisata'] = $this->wisata_model->getAll();
		$this->load->view('wisata',$data);
	}

	public function team()
	{
		$this->load->view('our_team');
	}
}
