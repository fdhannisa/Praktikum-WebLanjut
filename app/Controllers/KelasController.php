<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KelasModel;

class KelasController extends BaseController
{
    public $kelasModel;

    public function __construct()
    {
        $this->kelasModel = new KelasModel();
    }
    public function index()
    {
         $data = [
            'title' => 'List Kelas',
            'kelas' => $this->kelasModel->getkelas(),
        ];
        return view('list_kelas', $data); //
    }

    public function create(){

        $kelas = $this->kelasModel->getKelas();

        $data = [
            'title' => 'Create Kelas',
            'kelas' => $kelas,
        ];

        return view('create_kelas',$data);
    }

    public function store()
    {
            
        $this->kelasModel->saveKelas([
            'nama_kelas' => $this->request->getVar('nama_kelas'),
        ]);
        return redirect()->to('/kelas');

    }

    public function edit($id){    
        $kelas = $this->kelasModel->getKelas($id);

        $data = [
            'title' => 'Edit Kelas',
            'kelas' => $kelas,
        ];

        return view ('edit_kelas', $data);
    }

    public function update($id){
        

        $data = [
            'nama_kelas' => $this->request->getVar('nama_kelas'),
        ];
    

        $result = $this->kelasModel->updatekelas($data, $id);

        if(!$result){
            return redirect()->back()->withInput()
                ->with('error', 'Gagal menyimpan data' );
        }

        return redirect()->to(base_url('/kelas'));
    }

    public function destroy($id){
        $result = $this->kelasModel->deleteKelas($id);
        if(!$result){
            return redirect()->back()->with('error', 'Gagal menghapus data' );
        }

        return redirect()->to(base_url('/kelas'))
            ->with('success', 'Berhasil menghapus data');
    }
}