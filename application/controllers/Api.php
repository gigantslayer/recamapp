<?php

use LDAP\Result;

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Api extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_api');
        date_default_timezone_set("Asia/Jakarta");
    }

    public function index()
    {
        echo 'Api Request';
    }

    public function Login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $result = $this->Model_api->Login($username, $password);

        if (!$result) {
            $send = [
                "status" => "error",
                "message" => "Login Failed",
                "data" => $result
            ];
            echo json_encode($send);
        } else {
            $send = [
                "status" => "success",
                "message" => "Login Berhasil",
                "data" => $result
            ];
            echo json_encode($send);
        }
    }

    public function Register()
    {
        $nama = htmlspecialchars($this->input->post('nama', true));
        $username = htmlspecialchars($this->input->post('username', true));
        $role  = htmlspecialchars($this->input->post('role', true));
        $password = $this->input->post('password');

        $result = $this->Model_api->Register($nama, $username, $password, $role);
        if (!$result) {
            $send = [
                "status" => "error",
                "message" => "Gagal register",
                "data" => $result
            ];
            echo json_encode($send);
        } else {
            $send = [
                "status" => "success",
                "message" => "Register Berhasil",
                "data" => $result
            ];
            echo json_encode($send);
        }
    }

    public function edituser()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $role = $this->input->post('role');
        $password = $this->input->post('password');

        $user = $this->m->Get_Where('user', ['username' => $username, 'id_user !=' => $id]);

        if ($user) {
            $send = [
                "status" => "error",
                "message" => "Username sudah ada",
            ];
        } else {
            // Check if the user with the given ID exists
            $user = $this->db->get_where('user', ['id_user' => $id])->row();

            if (!$user) {
                $send = [
                    "status" => "error",
                    "message" => "User not found",
                ];
            } else {
                // Update user profile based on the provided type and column
                $update_data = [
                    "nama" => $nama,
                    "username" => $username,
                    "role" => $role,
                ];
                $this->db->where('id_user', $id);
                $this->db->update('user', $update_data);

                if ($password != "") {
                    $update_data = [
                        "password" => $password,
                    ];
                    $this->db->update('user', $update_data);
                }

                $send = [
                    "status" => "success",
                    "message" => "Profile updated successfully",
                ];
            }
        }

        echo json_encode($send);
    }

    public function deleteuser()
    {
        $id = $this->input->post("id");
        $where = array(
            "id_user" => $id
        );
        $this->m->Delete("user", $where);
        $send = [
            "status" => "success",
            "message" => "Siswa berhasil dihapus"
        ];
        echo json_encode($send);
    }

    public function datauser()
    {
        $type = $this->input->get("type");
        if ($type != "ALL") {
            $this->db->where("role", $type);
        }
        $select = "";
        $this->db->select("*, user.id_user as id");
        $this->db->where("role !=", "ADMIN");
        $result = $this->m->Get_All('user', $select);
        $send = [
            "status" => "success",
            "message" => "Berhasil",
            "data" => $result
        ];
        echo json_encode($send);
    }

    public function addsiswa()
    {
        $nama = $this->input->post('nama', true);
        $panggilan = $this->input->post('panggilan', true);
        $jenis_kelamin = $this->input->post('jenis_kelamin', true);
        $nik  = $this->input->post('nik', true);
        $tanggal_lahir = $this->input->post('tanggal_lahir');
        $usia = $this->input->post('usia');
        $tinggal_di = $this->input->post('tinggal_di');
        $status = $this->input->post('status');
        $diagnosa = $this->input->post('diagnosa');
        $alamat = $this->input->post('alamat');
        $tanggal_masuk = $this->input->post('tanggal_masuk');
        $nama_ibu = $this->input->post('nama_ibu');
        $nama_ayah = $this->input->post('nama_ayah');
        $telepon_orangtua = $this->input->post('telepon_orangtua');
        $kelas = $this->input->post('kelas');
        $semester = $this->input->post('semester');
        $id_orangtua = $this->input->post('id_orangtua');

        $data = [
            'nama' => $nama,
            'panggilan' => $panggilan,
            'jenis_kelamin' => $jenis_kelamin,
            'nik' => $nik,
            'tanggal_lahir' => $tanggal_lahir,
            'usia' => $usia,
            'tinggal_di' => $tinggal_di,
            'status' => $status,
            'diagnosa' => $diagnosa,
            'alamat' => $alamat,
            'tanggal_masuk' => $tanggal_masuk,
            'nama_ibu' => $nama_ibu,
            'nama_ayah' => $nama_ayah,
            'telepon_orangtua' => $telepon_orangtua,
            'kelas' => $kelas,
            'semester' => $semester,
            'id_orangtua' => $id_orangtua,
        ];
        $this->db->insert('siswa', $data);

        $insertId = $this->db->insert_id();

        if ($insertId) {
            $send = [
                "status" => "success",
                "message" => "Berhasil",
                "insert_id" => $insertId
            ];

            echo json_encode($send);
        } else {
            $send = [
                "status" => "error",
                "message" => "Gagal menyimpan data",
                "insert_id" => null
            ];

            echo json_encode($send);
        }
    }

    public function editsiswa()
    {
        $id = $this->input->post('id', true);
        $nama = $this->input->post('nama', true);
        $panggilan = $this->input->post('panggilan', true);
        $jenis_kelamin = $this->input->post('jenis_kelamin', true);
        $nik  = $this->input->post('nik', true);
        $tanggal_lahir = $this->input->post('tanggal_lahir');
        $usia = $this->input->post('usia');
        $tinggal_di = $this->input->post('tinggal_di');
        $status = $this->input->post('status');
        $diagnosa = $this->input->post('diagnosa');
        $alamat = $this->input->post('alamat');
        $tanggal_masuk = $this->input->post('tanggal_masuk');
        $nama_ibu = $this->input->post('nama_ibu');
        $nama_ayah = $this->input->post('nama_ayah');
        $telepon_orangtua = $this->input->post('telepon_orangtua');
        $kelas = $this->input->post('kelas');
        $semester = $this->input->post('semester');

        $data = [
            'nama' => $nama,
            'panggilan' => $panggilan,
            'jenis_kelamin' => $jenis_kelamin,
            'nik' => $nik,
            'tanggal_lahir' => $tanggal_lahir,
            'usia' => $usia,
            'tinggal_di' => $tinggal_di,
            'status' => $status,
            'diagnosa' => $diagnosa,
            'alamat' => $alamat,
            'tanggal_masuk' => $tanggal_masuk,
            'nama_ibu' => $nama_ibu,
            'nama_ayah' => $nama_ayah,
            'telepon_orangtua' => $telepon_orangtua,
            'kelas' => $kelas,
            'semester' => $semester
        ];
        $this->db->where('id_siswa', $id);

        if ($this->db->update('siswa', $data)) {
            $send = [
                "status" => "success",
                "message" => "Berhasil",
                "insert_id" => $id
            ];

            echo json_encode($send);
        } else {
            $send = [
                "status" => "error",
                "message" => "Gagal menyimpan data",
                "insert_id" => null
            ];

            echo json_encode($send);
        }
    }

    public function deletesiswa()
    {
        $id = $this->input->post("id");
        $where = array(
            "id_siswa" => $id
        );
        $this->m->Delete("siswa", $where);
        $send = [
            "status" => "success",
            "message" => "Siswa berhasil dihapus"
        ];
        echo json_encode($send);
    }

    public function datasiswa()
    {
        $select = "";
        $this->db->select("*, siswa.id_siswa as id");
        $result = $this->m->Get_All('siswa', $select);
        $send = [
            "status" => "success",
            "message" => "Berhasil",
            "data" => $result
        ];
        echo json_encode($send);
    }

    public function addsemester()
    {
        $semester = $this->input->post('semester', true);

        $data = [
            'semester' => $semester,
        ];
        $this->db->insert('semester', $data);

        $insertId = $this->db->insert_id();

        if ($insertId) {
            $send = [
                "status" => "success",
                "message" => "Berhasil",
                "insert_id" => $insertId
            ];

            echo json_encode($send);
        } else {
            $send = [
                "status" => "error",
                "message" => "Gagal menyimpan data",
                "insert_id" => null
            ];

            echo json_encode($send);
        }
    }

    public function editsemester()
    {
        $id = $this->input->post('id', true);
        $semester = $this->input->post('semester', true);

        $data = [
            'semester' => $semester,
        ];
        $this->db->where('id_semester', $id);

        if ($this->db->update('semester', $data)) {
            $send = [
                "status" => "success",
                "message" => "Berhasil",
                "insert_id" => $id
            ];

            echo json_encode($send);
        } else {
            $send = [
                "status" => "error",
                "message" => "Gagal menyimpan data",
                "insert_id" => null
            ];

            echo json_encode($send);
        }
    }

    public function deletesemester()
    {
        $id = $this->input->post("id");
        $where = array(
            "id_semester" => $id
        );
        $this->m->Delete("semester", $where);
        $send = [
            "status" => "success",
            "message" => "Semester berhasil dihapus"
        ];
        echo json_encode($send);
    }

    public function datasemester()
    {
        $select = "";
        $this->db->select("*, semester.id_semester as id");
        $this->db->order_by('semester');
        $result = $this->m->Get_All('semester', $select);
        $send = [
            "status" => "success",
            "message" => "Berhasil",
            "data" => $result
        ];
        echo json_encode($send);
    }

    public function homedatacount()
    {
        $select = "";
        // Menghitung jumlah siswa
        $resultSiswa = $this->m->Get_All('siswa', $select);
        $totalSiswa = count($resultSiswa);

        // Menghitung jumlah user dengan role Guru
        $this->db->where("role", "GURU_TERAPI");
        $resultUser = $this->m->Get_All('user', $select);
        $totalGuru = count($resultUser);

        // Menghitung jumlah user dengan role orangtua
        $this->db->where("role", "ORANGTUA");
        $resultUser = $this->m->Get_All('user', $select);
        $totalOrangtua = count($resultUser);

        $send = [
            "status" => "success",
            "message" => "Berhasil",
            "data" => [
                "guru" => $totalGuru,
                'siswa' => $totalSiswa,
                'orangtua' => $totalOrangtua,
            ]
        ];
        echo json_encode($send);
    }

    public function addnilai()
    {
        $id = $this->input->post('id', true);
        $type = $this->input->post('type', true);
        $id_user = $this->input->post('id_user', true);
        $id_siswa = $this->input->post('id_siswa', true);
        $minggu  = $this->input->post('minggu', true);
        $semester = $this->input->post('semester');
        $nilai = $this->input->post('nilai');
        $note = $this->input->post('note');

        $table = "";
        if ($type == "terapi") {
            $table = "terapi";

            $data = [
                'id_guru_terapi' => $id_user,
                'id_siswa' => $id_siswa,
                'hasil' => $nilai,
                'minggu' => $minggu,
                'semester' => $semester,
                'note' => $note,
            ];


            $dokument = "";
            if (!empty($_FILES['photo']['name'])) {
                $config['upload_path']          = 'assets/img/nilai/';
                $config['allowed_types']        = 'jpg|jpeg|png|';
                $config['max_size']             = 500000; //set max size allowed in Kilobyte
                $config['max_width']            = 500000; // set max width image allowed
                $config['max_height']           = 500000; // set max height allowed 
                $config['encrypt_name']           = true; // set max height allowed 
                $this->load->library('upload', $config);
                $this->upload->do_upload('photo');
                $data1 = $this->upload->data();
                $dokument = $data1['file_name'];
                $data['photo'] =  $dokument;
            }
        } else {
            $table = "penilaian";

            $data = [
                'id_wali_kelas' => $id_user,
                'id_siswa' => $id_siswa,
                'hasil' => $nilai,
                'minggu' => $minggu,
                'semester' => $semester,
            ];
        }

        $select = "";
        $this->db->where("semester", $semester);
        $this->db->where("minggu", $minggu);
        $this->db->where("id_siswa", $id_siswa);

        $result = $this->m->Get_All($table, $select);

        if (count($result) > 0) {
            $this->db->where('id_terapi', $id);
            if ($this->db->update($table, $data)) {
                $send = [
                    "status" => "success",
                    "message" => "Berhasil",
                    "insert_id" => $id
                ];

                echo json_encode($send);
            } else {
                $send = [
                    "status" => "error",
                    "message" => "Gagal menyimpan data",
                    "insert_id" => null
                ];

                echo json_encode($send);
            }
        } else {
            $this->db->insert($table, $data);

            $insertId = $this->db->insert_id();

            if ($insertId) {
                $send = [
                    "status" => "success",
                    "message" => "Berhasil",
                    "insert_id" => $insertId
                ];

                echo json_encode($send);
            } else {
                $send = [
                    "status" => "error",
                    "message" => "Gagal menyimpan data",
                    "insert_id" => null
                ];

                echo json_encode($send);
            }
        }
    }

    public function deletenilai()
    {
        $id = $this->input->post("id");
        $type = $this->input->post("type");
        $where = array(
            "id_terapi" => $id
        );

        $table = "";
        if ($type == "terapi") {
            $table = "terapi";
        } else {
            $table = "penilaian";
        }

        $this->m->Delete($table, $where);
        $send = [
            "status" => "success",
            "message" => "Nilai berhasil dihapus"
        ];
        echo json_encode($send);
    }

    public function checkNilaiMingguIni()
    {
        $type = $this->input->post('type', true);
        $minggu = $this->input->post('minggu', true);
        $semester = $this->input->post('semester', true);
        $id_siswa = $this->input->post('id_siswa', true);

        $table = "";
        if ($type == "terapi") {
            $table = "terapi";
        } else {
            $table = "penilaian";
        }

        $select = "";
        $this->db->select("*, terapi.id_terapi as id");
        $this->db->where("minggu", $minggu);
        $this->db->where("semester", $semester);
        $this->db->where("id_siswa", $id_siswa);

        $result = $this->m->Get_All($table, $select);

        if (count($result) > 0) {
            $send = [
                "status" => "success",
                "message" => "Berhasil",
                "data" => $result[0]
            ];
        } else {
            $send = [
                "status" => "error",
                "message" => "Belum ada data",
            ];
        }
        echo json_encode($send);
    }

    public function getLastMinggu()
    {
        $type = $this->input->post('type', true);
        $semester = $this->input->post('semester', true);
        $id_siswa = $this->input->post('id_siswa', true);

        $table = "";
        if ($type == "terapi") {
            $table = "terapi";
        } else {
            $table = "penilaian";
        }

        $select = "";
        $this->db->select("*, terapi.id_terapi as id");
        $this->db->where("semester", $semester);
        $this->db->where("id_siswa", $id_siswa);

        $result = $this->m->Get_All($table, $select);

        if (count($result) > 0) {
            $send = [
                "status" => "success",
                "message" => "Berhasil",
                "data" => count($result)
            ];
        } else {
            $send = [
                "status" => "error",
                "message" => "Belum ada data",
            ];
        }
        echo json_encode($send);
    }

    public function getNilaiSiswa()
    {
        $type = $this->input->post('type', true);
        $semester = $this->input->post('semester', true);
        $id_siswa = $this->input->post('id_siswa', true);

        $table = "";
        if ($type == "terapi") {
            $table = "terapi";
        } else {
            $table = "penilaian";
        }

        $select = "";
        $this->db->select("*, terapi.id_terapi as id");
        $this->db->where("semester", $semester);
        $this->db->where("id_siswa", $id_siswa);
        $this->db->order_by("minggu");

        $result = $this->m->Get_All($table, $select);

        $send = [
            "status" => "success",
            "message" => "Berhasil",
            "data" => $result
        ];
        echo json_encode($send);
    }

    function updateProfile()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $username = $this->input->post('username');

        $user = $this->m->Get_Where('user', ['username' => $username, 'id_user !=' => $id]);

        if ($user) {
            $send = [
                "status" => "error",
                "message" => "Username sudah ada",
            ];
        } else {
            $table = "user";
            $where = array(
                'id_user'        =>   $id
            );
            $data = array(
                'nama' =>    $nama,
                'username' => $username
            );

            $this->m->Update($where, $data, $table);

            if (!empty($_FILES['photo']['name'])) {
                $config['upload_path']          = 'assets/img/user/';
                $config['allowed_types']        = 'jpg|jpeg|png|';
                $config['max_size']             = 500000; //set max size allowed in Kilobyte
                $config['max_width']            = 500000; // set max width image allowed
                $config['max_height']           = 500000; // set max height allowed 
                $config['encrypt_name']           = true; // set max height allowed 
                $this->load->library('upload', $config);
                $this->upload->do_upload('photo');
                $data1 = $this->upload->data();
                $dokumen = $data1['file_name'];
                $data = array(
                    'photo' =>    $dokumen
                );
                $this->m->Update($where, $data, $table);

                $send = [
                    "status" => "success",
                    "message" => "Profile updated successfully",
                    "data" => $dokumen
                ];
            }else {
                $send = [
                    "status" => "success",
                    "message" => "Profile updated successfully",
                    "data" => ""
                ];
            }
        }

        echo json_encode($send);
    }

    function updatePassword()
    {
        $id = $this->input->post('id');
        $password = $this->input->post('password');

        $table = "user";
        $where = array(
            'id_user'        =>   $id
        );
        $data = array(
            'password' => $password
        );

        $this->m->Update($where, $data, $table);

        $send = [
            "status" => "success",
            "message" => "Password berhasil diubah",
            "data" => ""
        ];

        echo json_encode($send);
    }
}
