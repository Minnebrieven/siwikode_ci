<?php

class Jenis_model extends CI_Model{

    // Model Jenis Wisata

    public function getAll()
    {
        $result = $this->db->get('jenis_wisata');
        return $result;
    }

    function get_jenis_wisata($id)
    {
        $query = $this->db->get_where('jenis_wisata', array('id' => $id));
        return $query;
    }

    function save($nama){
        $data = array(
          'nama' => $nama
        );
        $this->db->insert('jenis_wisata',$data);
    }

    function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('jenis_wisata');
    }

    function update($id,$nama){
        $data = array(
          'nama' => $nama
        );
        $this->db->where('id', $id);
        $this->db->update('jenis_wisata', $data);
    }
}