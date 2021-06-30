<?php

class Profesi_model extends CI_Model{

    // Model Profesi

    public function getAll()
    {
        $result = $this->db->get('profesi');
        return $result;
    }

    function get_profesi($id)
    {
        $query = $this->db->get_where('profesi', array('id' => $id));
        return $query;
    }

    function save($nama){
        $data = array(
          'nama' => $nama
        );
        $this->db->insert('profesi',$data);
    }

    function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('profesi');
    }

    function update($id,$nama){
        $data = array(
          'nama' => $nama
        );
        $this->db->where('id', $id);
        $this->db->update('profesi', $data);
    }
}