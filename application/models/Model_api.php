<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Model_api extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Models', 'm');
    }

    function Login($username, $password)
    {
        $user = [
            $username,
            $password
        ];

        $this->db->select("user.*, siswa.id_siswa as id_siswa");
        $this->db->join("siswa", "siswa.id_orangtua = user.id_user", "left");
        $user = $this->m->Get_Where('user', ['username' => $username, 'password' => $password]);

        if ($user) {
            $data = [
                'id' => $user->id_user,
                'username' => $user->username,
                'id_siswa' => $user->id_siswa,
                'nama' => $user->nama,
                'photo' => $user->photo,
                'role' => $user->role,
            ];
            return $data;
        }
        return null;
    }

    function Register($nama, $username, $password, $role)
    {
        $user = $this->m->Get_Where('user', ['username' => $username]);
        if (!$user) {
            $data = array(
                'nama'       => $nama,
                'username'          => $username,
                'role'        => $role,
                'password'       => $password,
            );
            $result = $this->m->Save($data, 'user');
            if ($result) {
                return $result;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    
}
