<?php

class Testimoni_model extends CI_Model{

    public function getAll()
    {
        $result = $this->db->get('testimoni');
        return $result;
    }

    function get_testimoni($id)
    {
        $query = $this->db->get_where('testimoni', array('id' => $id));
        return $query;
    }

    function detail_wisata($id)
    {
        $query = $this->db->get_where('testimoni', array('wisata_id' => $id));
        return $query;
    }

    function save($nama,$email,$wisata_id,$profesi_id,$rating,$komentar){
        $data = array(
          'nama' => $nama,
          'email' => $email,
          'wisata_id' => $wisata_id,
          'profesi_id' => $profesi_id,
          'rating' => $rating,
          'komentar' => $komentar,
        );
        $this->db->insert('testimoni',$data);
        $insert_id = $this->db->insert_id();
        
        return $insert_id;
    }

    function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('testimoni');
    }

    function update($id,$nama,$email,$wisata_id,$profesi_id,$rating,$komentar){
        $data = array(
          'nama' => $nama,
          'email' => $email,
          'wisata_id' => $wisata_id,
          'profesi_id' => $profesi_id,
          'rating' => $rating,
          'komentar' => $komentar
        );
        $this->db->where('id', $id);
        $this->db->update('testimoni', $data);
    }

    public function setImage($id, $image)
    {
        $data = array(
            'image' => $image
        );
        $this->db->where('id', $id);
        $this->db->update('testimoni', $data);
    }
}