<?php

namespace App\Models;

use CodeIgniter\Model;

class GuruModel extends Model
{
	protected $table      = 'tb_guru';
	protected $primaryKey = 'id';
	protected $useAutoIncrement = true;

	protected $insertID = 0;
	protected $DBGroup  = 'default';

	protected $returnType     = 'array';
	protected $useSoftDeletes = false;
	protected $allowedFields  = ['nip', 'jenis_kelamin', 'nama_lengkap', 'gelar_blkng', 'tempat_lahir', 'tanggal_lahir', 'mata_pelajaran', 'no_hp', 'username', 'email', 'password', 'alamat', 'kecamatan', 'kelurahan', 'kabupaten', 'kodepos'];

	// // Dates
	// protected $useTimestamps = false;
	// protected $dateFormat    = 'datetime';
	// protected $createdField  = 'created_at';
	// protected $updatedField  = 'updated_at';
	// protected $deletedField  = 'deleted_at';
	// protected $protectFields = true;

	// // Validation
	// protected $validationRules      = [];
	// protected $validationMessages   = [];
	// protected $skipValidation       = false;
	// protected $cleanValidationRules = true;

	// // Callbacks
	// protected $allowCallbacks = true;
	// protected $beforeInsert   = [];
	// protected $afterInsert    = [];
	// protected $beforeUpdate   = [];
	// protected $afterUpdate    = [];
	// protected $beforeFind     = [];
	// protected $afterFind      = [];
	// protected $beforeDelete   = [];
	// protected $afterDelete    = [];

	// public function saveProduct($data)
	// {
	// 	$query = $this->db->table($this->table)->insert($data);
	// 	return $query;
	// }

	public function getDetail($nip = false)
	{
		if ($nip == false) {
			return $this->findAll();
		}

		return $this->where(['nip' => $nip])->first();
	}
}
