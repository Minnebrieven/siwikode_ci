<?php 

class User_model extends CI_Model
{
    public function logged_id(){
        return $this->session->userdata('id');
    }

    public function count()
    {
        $count = $this->db->query('SELECT COUNT(id) from user');
        return $count;
    }

    public function login($username, $password)
    {
        $query = $this->db->get_where('user', array('username' => $username));
        if ($query->num_rows() != 0) {
            $hash = $query->row('password');
            if (password_verify($password,$hash)){
             return $query->result();
            } else {
             echo FALSE;
            }
           } else {
            echo FALSE;
           }
    }

    public function daftar($nama, $username, $password, $role = "user")
    {
        $data = array(
            'nama' => $nama,
            'username' => $username,
            'password' => $this->hash_password($password),
            'role' => $role,
            'created_at' => date('Y-m-j H:i:s')
        );
        return $this->db->insert('user', $data);
    }

    private function hash_password($password) {
        return password_hash($password, PASSWORD_BCRYPT);
       }

    public function getAll()
    {
        $result = $this->db->get('user');
        return $result;
    }

    function get_user($id)
    {
        $query = $this->db->get_where('user', array('id' => $id));
        return $query;
    }

    function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user');
    }

    function update($id,$nama,$username,$role){
        $data = array(
            'nama' => $nama,
            'username' => $username,
            'role' => $role,
        );
        $this->db->where('id', $id);
        $this->db->update('user', $data);
    }
}


?>