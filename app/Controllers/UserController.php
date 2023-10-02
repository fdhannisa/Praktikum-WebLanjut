<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KelasModel;
use App\Models\UserModel;
use CodeIgniter\Validation\StrictRules\Rules;

class UserController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'List User',
            'user' => $this->userModel->getUser(),
        ];
        return view('list_user', $data); //
    }

    public $userModel;
    public $kelasModel;

    public function __construct(){
        $this->userModel = new UserModel();
        $this->kelasModel = new KelasModel();
    }
    public function profile($nama = "", $kelas = "", $npm = "")
    {
        $data = [
            'nama' => $nama,
            'kelas' => $kelas,
            'npm' => $npm,
        ];
        return view('profile', $data);
    }

    public function create()
    {
        $kelasModel = new KelasModel();

        $kelas = $this->kelasModel->getKelas();

        $data = [
            'title'    => 'create User',
            'kelas' => $kelas,
        ];

        return view('create_user', $data);
        
    }



    public function store()
    {
        $this->userModel->saveUser([
            'nama' => $this->request->getVar('nama'),
            'id_kelas' => $this->request->getVar('kelas'),
            'npm' => $this->request->getVar('npm'),
        ]);
        return redirect()->to('/user');
    }

    public function delete($npm){
        $this->userModel->delete($npm);
        return redirect()->to('/list_user');
    }
}