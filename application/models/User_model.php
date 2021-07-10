<?php 

class User_model extends CI_Model
{
    public function logged_id(){
        return $this->session->userdata('id');
    }

    public function login($username, $password)
    {
        $query = $this->db->get_where('user', array('username' => $username));
        if ($query->num_rows() != 0) {
            $hash = $query->row('password');
            if (password_verify($password,$hash)){
             return $query->result();
            } else {
             echo "Wrong Password. Try again.";
            }
           } else {
            echo "Account is not existed.";
           }
    }

    public function daftar($nama, $username, $password, $role = "admin")
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
}


?>