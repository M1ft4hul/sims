<?php

namespace App\Models;

use CodeIgniter\Model;

class KelasModel extends Model
{
	protected $table      = 'tb_kelas';
	protected $primaryKey = 'id';
	protected $useAutoIncrement = true;

	protected $insertID = 0;
	protected $DBGroup  = 'default';

	protected $returnType     = 'array';
	protected $useSoftDeletes = false;
	protected $allowedFields  = ['kelas'];

	public function getDetailKelas($kelas = false)
	{
		if ($kelas == false) {
			return $this->findAll();
		}

		return $this->where(['kelas' => $kelas])->first();
	}
}
