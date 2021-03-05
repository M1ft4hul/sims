<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\GuruModel;
use CodeIgniter\HTTP\Request;

class Guru extends BaseController
{
	public function __construct()
	{
		$this->detailguru = new GuruModel();
	}
	public function index()
	{
		$query = $this->detailguru->findAll();
		$data  = [
			'title' => 'SIMS | Data Guru',
			'tampil' => $query,
		];
		return view('guru', $data);
	}

	public function detail($nip)
	{
		$data = [
			'title' => 'SIMS | Detail Guru',
			'detail' =>  $this->detailguru->getDetail($nip)
		];
		return view('detailguru', $data);
	}

	public function formadd()
	{
		$validation = \Config\Services::validation();
		$data = [
			'title' => 'SIMS | Add Guru',
			'validation' => $validation,
		];
		return view('addguru', $data);
	}

	public function save()
	{
		helper(['form', 'url']);

		$validasi = $this->validate([
			'nip' => [
				'rules' => 'required|numeric|is_unique[tb_guru.nip,id,{id}]',
				'errors' => [
					'required' => '{field} tidak boleh dikosongkan',
					'numeric' => 'yang diinputkan harus angka',
					'is_unique' =>  'Data nip sudah ada'
				]
			],
			'nama_lengkap' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} tidak boleh dikosongkan'
				]
			],
			'gelar_blkng' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} tidak boleh dikosongkan'
				]
			],
			'tempat_lahir' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} tidak boleh dikosongkan'
				]
			],
			'tanggal_lahir' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} tidak boleh dikosongkan'
				]
			],
			'no_hp' => [
				'rules' => 'required|max_length[12]',
				'errors' => [
					'required' => '{field} tidak boleh dikosongkan',
					'max_length' => 'maximal 12 digit'
				]
			],
			'username' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} tidak boleh dikosongkan'
				]
			],
			'email' => [
				'rules' => 'required|valid_email',
				'errors' => [
					'required' => '{field} tidak boleh dikosongkan',
					'valid_email' => 'Anda lupa menambahkan @,.com'
				]
			],
			'password' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} tidak boleh dikosongkan'
				]
			],
			'ulangi_password' => [
				'rules' => 'required|matches[password]',
				'errors' => [
					'required' => '{field} tidak boleh dikosongkan',
					'matches' => 'password yang anda ketikan tidak sama'
				]
			],
			'alamat' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} tidak boleh dikosongkan'
				]
			],
			'kecamatan' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} tidak boleh dikosongkan'
				]
			],
			'kelurahan' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} tidak boleh dikosongkan'
				]
			],
			'kabupaten' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} tidak boleh dikosongkan'
				]
			],
			'kodepos' => [
				'rules' => 'required|max_length[5]|numeric',
				'errors' => [
					'required' => '{field} tidak boleh dikosongkan',
					'max_length' => 'maximal 5 digit',
					'numeric' => 'yang di inputkan harus angka'
				]
			]
		]);
		$session = session();
		$guru = new GuruModel();

		if (!$validasi) {
			echo view('addguru', [
				'validation' => $this->validator,
				'title' => 'SIMS | Add Guru'
			]);
			return redirect()->back()->withInput();
		} else {
			$guru->save([
				'nip'  => $this->request->getVar('nip'),
				'nama_lengkap' => $this->request->getVar('nama_lengkap'),
				'gelar_blkng' => $this->request->getVar('gelar_blkng'),
				'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
				'tempat_lahir' => $this->request->getVar('tempat_lahir'),
				'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
				'mata_pelajaran' => $this->request->getVar('mata_pelajaran'),
				'no_hp' => $this->request->getVar('no_hp'),
				'username' => $this->request->getVar('username'),
				'email' => $this->request->getVar('email'),
				'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
				'alamat' => $this->request->getVar('alamat'),
				'kecamatan' => $this->request->getVar('kecamatan'),
				'kelurahan' => $this->request->getVar('kelurahan'),
				'kabupaten' => $this->request->getVar('kabupaten'),
				'kodepos' => $this->request->getVar('kodepos'),
			]);
			session()->setFlashdata('sukses', 'Data Berhasil Di Input');
			return $this->response->redirect('/guruIndex');
		}
	}
	public function Delete($id)
	{
		$this->detailguru->delete($id);
		session()->setFlashdata('sukses', 'Data Guru Terhapus');
		return redirect()->to('/guruIndex');
	}
}
