<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KelasModel;
use CodeIgniter\HTTP\Request;
use Config\Validation;

class Kelas extends BaseController
{
    public function __construct()
    {
        $this->kelasku = new KelasModel();
    }

    public function index()
    {
        $query = $this->kelasku->findAll();
        $data = [
            'title' => 'SIMS | Kelas',
            'kelas' => $query
        ];
        return view('kelas', $data);
    }

    public function formadd()
    {
        $validation = \Config\Services::validation();
        $data = [
            'title' => 'SIMS | New Data kelas',
            'validation' => $validation
        ];
        return view('addkelas', $data);
    }

    public function save()
    {
        helper(['form', 'url']);

        $validasi = $this->validate([
            'kelas' => [
                'rules' => 'required|is_unique[tb_kelas.kelas,id,{id}]',
                'errors' => [
                    'required' => '{field} tidak boleh dikosongkan',
                    'is_unique' =>  'Data Kelas Sudah Ada'
                ]
            ]
        ]);

        $kelas = new KelasModel();

        if (!$validasi) {
            echo view('addkelas', [
                'validation' => $this->validator,
                'title' => 'SIMS | Add Kelas'
            ]);
            return redirect()->back()->withInput();
        } else {
            $kelas->save([
                'kelas' => $this->request->getVar('kelas'),
            ]);
            session()->setFlashdata('sukses', 'Data Berhasil di input');
            return $this->response->redirect('/kelasIndex');
        }
    }

    public function editkelas($kelas)
    {
        $data = [
            'title' => 'SIMS | Edit Data Kelas',
            'validation' => \Config\Services::validation(),
            'kelas' => $this->kelasku->getDetailKelas($kelas)
        ];
        return view('editkelas', $data);
    }
}
