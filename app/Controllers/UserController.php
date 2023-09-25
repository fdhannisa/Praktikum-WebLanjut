<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use CodeIgniter\Validation\StrictRules\Rules;

class UserController extends BaseController
{
    public function index()
    {
        //
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
        $kelas = [
            
            [
                'id'=>1,
                'nama_kelas'=>'A'
            ],
            [
                'id'=>2,
                'nama_kelas'=>'B'
            ],
            [
                'id'=>3,
                'nama_kelas'=>'C'
            ],
            [
                'id'=>4,
                'nama_kelas'=>'D'
            ],
        ];

    
    $data=[
        
            'kelas'=>$kelas
        ];
        return view('create_user',$data);
    }



    public function store()
    {    
        if (!$this->validate([
            'nama' => 'required|is_unique[user.nama]',
            'npm' => 'required|is_unique[user.npm]'
        ])){
            return redirect()->to('/user/create');
        }
        $userModel = new UserModel();

        $userModel->saveUser([
            'nama' => $this->request->getVar('nama'),
            'id_kelas' => $this->request->getVar('kelas'),
            'npm' => $this->request->getVar('npm'),
        ]);

        $data = [
            'nama' => $this->request->getVar('nama'),
            'id_kelas' => $this->request->getVar('kelas'),
            'npm' => $this->request->getVar('npm'),
        ];
        return view('profile', $data);
    }
}