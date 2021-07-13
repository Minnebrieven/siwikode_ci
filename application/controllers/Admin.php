<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{

    function __construct()
  {
    parent::__construct();
    $this->load->model('testimoni_model');
    $this->load->model('wisata_model');
    $this->load->model('jenis_model');
    $this->load->model('kuliner_model');
    $this->load->model('profesi_model');
    $this->load->model('user_model');
    $this->load->helper(array('form', 'url'));
    
    if ($this->session->role != "admin") {
      redirect('home');
    }
  }

    function index(){
        $this->load->view('admin/index');
    }

    // Testimoni Section

	function testimoni()
	{
    $data['testimoni'] = $this->testimoni_model->getAll();
    $this->load->view('admin/testimoni/index', $data);
	}

  function add_new_testimoni()
  {
    $data['wisata'] = $this->wisata_model->getAll();
    $data['profesi'] = $this->profesi_model->getAll();
    $this->load->view('admin/testimoni/add_testimoni_view', $data);
  }

  function save_testimoni(){
    $nama = $this->input->post('nama');
    $email = $this->input->post('email');
    $wisata_id = $this->input->post('wisata_id');
    $profesi_id = $this->input->post('profesi_id');
    $rating = $this->input->post('rating');
    $komentar = $this->input->post('komentar');
    $insert_id = $this->testimoni_model->save($nama,$email,$wisata_id,$profesi_id,$rating,$komentar);

    $data['id'] = $insert_id;
    $data['path'] = "avatar";

    $this->load->view('admin/upload_foto', $data);
  }

  function delete_testimoni()
  {
    $testimoni_id = $this->uri->segment('3');
    $this->testimoni_model->delete($testimoni_id);
    redirect('admin/testimoni');
  }

  function get_edit_testimoni()
  {
    $testimoni_id = $this->uri->segment('3');
    $wisata = $this->wisata_model->getAll();
    $profesi = $this->profesi_model->getAll();
    $result = $this->testimoni_model->get_testimoni($testimoni_id);
    
    if($result->num_rows() > 0)
    {
      $i = $result->row_array();
      $data = array
      (
        'id' => $i['id'],
        'nama' => $i['nama'],
        'email' => $i['email'],
        'wisata_id' => $i['wisata_id'],
        'profesi_id' => $i['profesi_id'],
        'rating' => $i['rating'],
        'komentar' => $i['komentar'],
        'wisata' => $wisata,
        'profesi' => $profesi,
        'image' => $i['image'],
      );
      $this->load->view('admin/testimoni/edit_testimoni_view', $data);
    }
    else
    {
      echo "Data Was Not Found";
    }
  }

  function update_testimoni()
  {
    $id = $this->input->post('id');
    $nama = $this->input->post('nama');
    $email = $this->input->post('email');
    $wisata_id = $this->input->post('wisata_id');
    $profesi_id = $this->input->post('profesi_id');
    $rating = $this->input->post('rating');
    $komentar = $this->input->post('komentar');
    $image = $this->input->post('image');
    if ($image=="") {
      $image = "default.jpg";
    }
    $this->testimoni_model->update($id,$nama,$email,$wisata_id,$profesi_id,$rating,$komentar);
    
    $data['id'] = $id;
    $data['path'] = "testimoni";
    $data['old_image'] = $image;

    $this->load->view('admin/upload_foto', $data);
  }

  function detail_testimoni()
  {
    $testimoni_id = $this->uri->segment('3');
    $result = $this->testimoni_model->get_testimoni($testimoni_id);
    if($result->num_rows() > 0)
    {
      $i = $result->row_array();
      $data = array
      (
        'id' => $i['id'],
        'nama' => $i['nama'],
        'email' => $i['email'],
        'wisata_id' => $i['wisata_id'],
        'profesi_id' => $i['profesi_id'],
        'rating' => $i['rating'],
        'komentar' => $i['komentar']
      );
      $this->load->view('admin/testimoni/detail_testimoni_view', $data);
    }
    else
    {
      echo "Data Was Not Found";
    }
  }

//   End of Testimoni Section

//   Wisata Section
  function wisata()
	{
    $data['wisata'] = $this->wisata_model->getAll();
    $this->load->view('admin/wisata/index', $data);  
	}

  function detail_wisata()
  {
    $wisata_id = $this->uri->segment('3');
    $result = $this->wisata_model->get_wisata($wisata_id);
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
        'jenis_kuliner_id' => $i['jenis_kuliner_id']
      );
      $this->load->view('admin/wisata/detail_wisata_view', $data);
    }
    else
    {
      echo "Data Was Not Found";
    }
  }

  function add_new_wisata()
  {
    $data['jenis_wisata'] = $this->jenis_model->getAll();
    $data['jenis_kuliner'] = $this->kuliner_model->getAll();
    $this->load->view('admin/wisata/add_wisata_view', $data);
  }

  function save_wisata(){
    $nama = $this->input->post('nama');
    $deskripsi = $this->input->post('deskripsi');
    $jenis_wisata_id = $this->input->post('jenis_wisata_id');
    $fasilitas = $this->input->post('fasilitas');
    $bintang = $this->input->post('bintang');
    $kontak = $this->input->post('kontak');
    $alamat = $this->input->post('alamat');
    $latlong = $this->input->post('latlong');
    $email = $this->input->post('email');
    $web = $this->input->post('web');
    $jenis_kuliner_id = $this->input->post('jenis_kuliner_id');
    $insert_id = $this->wisata_model->save($nama,$deskripsi,$jenis_wisata_id,$fasilitas,$bintang,$kontak,$alamat,$latlong,$email,$web,$jenis_kuliner_id);

    $data['id'] = $insert_id;
    $data['path'] = "wisata";

    $this->load->view('admin/upload_foto', $data);
  }

  function delete_wisata()
  {
    $wisata_id = $this->uri->segment('3');
    $this->wisata_model->delete($wisata_id);
    redirect('admin/wisata');
  }

  function get_edit_wisata()
  {
    $wisata_id = $this->uri->segment('3');
    $result = $this->wisata_model->get_wisata($wisata_id);
    $jenis_wisata = $this->jenis_model->getAll();
    $jenis_kuliner = $this->kuliner_model->getAll();
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
        'jenis_wisata' => $jenis_wisata,
        'jenis_kuliner' => $jenis_kuliner
      );
      $this->load->view('admin/wisata/edit_wisata_view', $data);
    }
    else
    {
      echo "Data Was Not Found";
    }
  }

  function update_wisata()
  {
    $id = $this->input->post('id');
    $nama = $this->input->post('nama');
    $deskripsi = $this->input->post('deskripsi');
    $jenis_wisata_id = $this->input->post('jenis_wisata_id');
    $fasilitas = $this->input->post('fasilitas');
    $bintang = $this->input->post('bintang');
    $kontak = $this->input->post('kontak');
    $alamat = $this->input->post('alamat');
    $latlong = $this->input->post('latlong');
    $email = $this->input->post('email');
    $web = $this->input->post('web');
    $jenis_kuliner_id = $this->input->post('jenis_kuliner_id');
    $image = $this->input->post('image');
    if ($image=="") {
      $image = "default.jpg";
    }
    $this->wisata_model->update($id,$nama,$deskripsi,$jenis_wisata_id,$fasilitas,$bintang,$kontak,$alamat,$latlong,$email,$web,$jenis_kuliner_id,$image);
    
    $data['id'] = $id;
    $data['path'] = "wisata";
    $data['old_image'] = $image;

    $this->load->view('admin/upload_foto', $data);
  }


// End of Wisata Section

// start of user section
function user(){
  $data['user'] = $this->user_model->getAll();
  $this->load->view('admin/user/index', $data);
}

function add_new_user()
{
  $this->load->view('admin/user/add_user_view');
}

function save_user(){
$nama = $this->input->post('nama');
$username = $this->input->post('username');
$password = $this->input->post('password');
$role = $this->input->post('role');
$this->user_model->daftar($nama,$username,$password,$role);
redirect('admin/user');
}

function delete_user()
{
$user_id = $this->uri->segment('3');
$this->user_model->delete($user_id);
redirect('admin/user');
}

function get_edit_user()
{
$user_id = $this->uri->segment('3');
$result = $this->user_model->get_user($user_id);
if($result->num_rows() > 0)
{
  $i = $result->row_array();
  $data = array
  (
    'id' => $i['id'],
    'nama' => $i['nama'],
    'username' => $i['username'],
    'role' => $i['role']
  );
  $this->load->view('admin/user/edit_user_view', $data);
}
else
{
  echo "Data Was Not Found";
}
}

function update_user()
{
$id = $this->input->post('id');
$nama = $this->input->post('nama');
$username = $this->input->post('username');
$role = $this->input->post('role');
$this->user_model->update($id,$nama,$username,$role);
redirect('admin/user');
}
// end of user section

// start of Master section
// start of Profesi section
function profesi(){
  $data['profesi'] = $this->profesi_model->getAll();
  $this->load->view('admin/profesi/index', $data);
}

function add_new_profesi()
{
  $this->load->view('admin/profesi/add_profesi_view');
}

function save_profesi(){
$nama = $this->input->post('nama');
$this->profesi_model->save($nama);
redirect('admin/profesi');
}

function delete_profesi()
{
$profesi_id = $this->uri->segment('3');
$this->profesi_model->delete($profesi_id);
redirect('admin/profesi');
}

function get_edit_profesi()
{
$profesi_id = $this->uri->segment('3');
$result = $this->profesi_model->get_profesi($profesi_id);
if($result->num_rows() > 0)
{
  $i = $result->row_array();
  $data = array
  (
    'id' => $i['id'],
    'nama' => $i['nama']
  );
  $this->load->view('admin/profesi/edit_profesi_view', $data);
}
else
{
  echo "Data Was Not Found";
}
}

function update_profesi()
{
$id = $this->input->post('id');
$nama = $this->input->post('nama');
$this->profesi_model->update($id,$nama);
redirect('admin/profesi');
}
// end of Profesi section

// start of jenis_wisata section
function jenis_wisata(){
  $data['jenis_wisata'] = $this->jenis_model->getAll();
  $this->load->view('admin/jenis_wisata/index', $data);
}

function add_new_jenis_wisata()
{
  $this->load->view('admin/jenis_wisata/add_jenis_wisata_view');
}

function save_jenis_wisata(){
$nama = $this->input->post('nama');
$this->jenis_model->save($nama);
redirect('admin/jenis_wisata');
}

function delete_jenis_wisata()
{
$jenis_wisata_id = $this->uri->segment('3');
$this->jenis_model->delete($jenis_wisata_id);
redirect('admin/jenis_wisata');
}

function get_edit_jenis_wisata()
{
$jenis_wisata_id = $this->uri->segment('3');
$result = $this->jenis_model->get_jenis_wisata($jenis_wisata_id);
if($result->num_rows() > 0)
{
  $i = $result->row_array();
  $data = array
  (
    'id' => $i['id'],
    'nama' => $i['nama']
  );
  $this->load->view('admin/jenis_wisata/edit_jenis_wisata_view', $data);
}
else
{
  echo "Data Was Not Found";
}
}

function update_jenis_wisata()
{
$id = $this->input->post('id');
$nama = $this->input->post('nama');
$this->jenis_model->update($id,$nama);
redirect('admin/jenis_wisata');
}
// end of Profesi section

// start of jenis_kuliner section
function jenis_kuliner(){
  $data['jenis_kuliner'] = $this->kuliner_model->getAll();
  $this->load->view('admin/jenis_kuliner/index', $data);
}

function add_new_jenis_kuliner()
{
  $this->load->view('admin/jenis_kuliner/add_jenis_kuliner_view');
}

function save_jenis_kuliner(){
$nama = $this->input->post('nama');
$this->kuliner_model->save($nama);
redirect('admin/jenis_kuliner');
}

function delete_jenis_kuliner()
{
$jenis_kuliner_id = $this->uri->segment('3');
$this->kuliner_model->delete($jenis_kuliner_id);
redirect('admin/jenis_kuliner');
}

function get_edit_jenis_kuliner()
{
$jenis_kuliner_id = $this->uri->segment('3');
$result = $this->kuliner_model->get_jenis_kuliner($jenis_kuliner_id);
if($result->num_rows() > 0)
{
  $i = $result->row_array();
  $data = array
  (
    'id' => $i['id'],
    'nama' => $i['nama']
  );
  $this->load->view('admin/jenis_kuliner/edit_jenis_kuliner_view', $data);
}
else
{
  echo "Data Was Not Found";
}
}

function update_jenis_kuliner()
{
$id = $this->input->post('id');
$nama = $this->input->post('nama');
$this->kuliner_model->update($id,$nama);
redirect('admin/jenis_kuliner');
}
// end of Profesi section

public function do_upload()
{
  $id = $this->input->post('id');
  $path = $this->input->post('path');
  if ($path == "wisata") {
    $config['upload_path']          = './upload/wisata';
  }else{
    $config['upload_path']          = './upload/avatar';
  }
  
  $config['allowed_types']        = 'gif|jpg|png';
  $config['max_size']             = 1024;
  // $config['max_width']            = 1024;
  // $config['max_height']           = 768;
  $config['file_name']            = $id;

  $this->load->library('upload', $config);
  if (empty($_FILES["foto"]["name"])) {
    if ($path == "wisata") {
      $this->wisata_model->setImage($id, $old_image);
    }
    elseif ($path == "testimoni"){
      $this->testimoni_model->setImage($id, $old_image);
    }
    redirect('admin/wisata/index');
  }
  else if ( ! $this->upload->do_upload('foto'))
  {
    $error = array('error' => $this->upload->display_errors());
    $data['error'] = $this->upload->display_errors();
    $data['id'] = $id;
    $data['path'] = $path;
    $this->load->view('admin/upload_foto', $data);
  }
  else
  {
    $data = array('upload_data' => $this->upload->data());
    if ($path == "wisata") {
      $this->wisata_model->setImage($id, $this->upload->data("file_name"));
    }
    elseif ($path == "testimoni"){
      $this->testimoni_model->setImage($id, $this->upload->data("file_name"));
    }
    redirect('admin/'.$path.'/index');
}
}

}
?>