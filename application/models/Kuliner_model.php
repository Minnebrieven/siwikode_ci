<?php

class Kuliner_model extends CI_Model{

    // Model Jenis Kuliner

    public function getAll()
    {
        $result = $this->db->get('jenis_kuliner');
        return $result;
    }

    function get_jenis_kuliner($id)
    {
        $query = $this->db->get_where('jenis_kuliner', array('id' => $id));
        return $query;
    }

    function save($nama){
        $data = array(
          'nama' => $nama
        );
        $this->db->insert('jenis_kuliner',$data);
    }

    function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('jenis_kuliner');
    }

    function update($id,$nama){
        $data = array(
          'nama' => $nama
        );
        $this->db->where('id', $id);
        $this->db->update('jenis_kuliner', $data);
    }
}