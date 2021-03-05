<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MapelModel;
use CodeIgniter\HTTP\Request;
use Config\Validation;

class Mapel extends BaseController
{
    public function __construct()
    {
        $this->mapelku = new MapelModel();
    }

    public function index()
    {
        $query = $this->mapelku->findAll();
        $data  = [
            'title' => 'SIMS | Data Mapel',
            'mapel' => $query
        ];
        return view('mapel', $data);
    }

    public function formadd()
    {
        $validation = \Config\Services::validation();
        $data = [
            'title' => 'SIMS | Add Mapel',
            'validation' => $validation
        ];
        return view('addmapel', $data);
    }

    public function save()
    {
        helper(['form', 'url']);

        $validasi = $this->validate([
            'mata_pelajaran' => [
                'rules' => 'required|is_unique[tb_pelajaran.mata_pelajaran,id,{id}]',
                'errors' => [
                    'required' => '{field} tidak boleh dikosongkan',
                    'is_unique' =>  'Data Mapel Sudah Ada -SILAHKAN INPUT DATA BARU-'
                ]
            ]
        ]);

        $mapel = new MapelModel();

        if (!$validasi) {
            echo view('addmapel', [
                'validation' => $this->validator,
                'title' => 'SIMS | Add Mapel'
            ]);
            return redirect()->back()->withInput();
        } else {
            $mapel->save([
                'mata_pelajaran' => $this->request->getVar('mata_pelajaran'),
            ]);
            session()->setFlashdata('sukses', 'Data Berhasil Di Input');
            return $this->response->redirect('/MapelView');
        }
    }

    public function editform($mapel)
    {
        $data = [
            'title' => 'SIMS | Edit Mapel',
            'validation' =>  \Config\Services::validation(),
            'mapel' => $this->mapelku->getDetailMapel($mapel)
        ];
        return view('editmapel', $data);
    }

    public function update($mapel)
    {

        if (!$this->validate([
            'mata_pelajaran' => [
                'rules' => 'required|is_unique[tb_pelajaran.mata_pelajaran,id,{id}]',
                'errors' => [
                    'required' => '{field} tidak boleh dikosongkan',
                    'is_unique' =>  'Data Mapel Sudah Ada -SILAHKAN ISI YANG LAIN-'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/formEdit/Mapel/' . $this->request->getVar('mapel'))->withInput()->with('validation', $validation);
        }

        $this->mapelku->save([
            'id' => $mapel,
            'mata_pelajaran' => $this->request->getVar('mata_pelajaran')
        ]);
        session()->setFlashdata('sukses', 'Data Berhasil Di Ubah');
        return $this->response->redirect('/MapelView');
    }

    public function delete($id)
    {
        $this->mapelku->delete($id);
        session()->setFlashdata('sukses', 'Data Terhapus!');
        return redirect()->to('/MapelView');
    }
}
