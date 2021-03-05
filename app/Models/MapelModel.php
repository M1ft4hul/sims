<?php

namespace App\Models;

use CodeIgniter\Model;

class MapelModel extends Model
{
	protected $table      = 'tb_pelajaran';
	protected $primaryKey = 'id';
	protected $useAutoIncrement = true;

	protected $insertID = 0;
	protected $DBGroup  = 'default';

	protected $returnType     = 'array';
	protected $useSoftDeletes = false;
	protected $allowedFields  = ['mata_pelajaran'];

	public function getDetailMapel($mapel = false)
	{
		if ($mapel == false) {
			return $this->findAll();
		}

		return $this->where(['mata_pelajaran' => $mapel])->first();
	}
}
