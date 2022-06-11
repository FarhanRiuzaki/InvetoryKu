<?php

namespace App\Models;

use App\Database\Migrations\Mastercvskills;
use CodeIgniter\Model;

class Mastercv extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'master_cvs';
	protected $primaryKey           = 'id';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDelete        = false;
	protected $protectFields        = true;
	protected $allowedFields        = [
		'name',
		'title',
		'description',
		'email',
		'phone',
		'address',
		'photo',
	];

	public function cv_educations()
	{
		return $this->hasMany(new Mastercveducation());
	}

	public function cv_experiences()
	{
		return $this->hasMany(new Mastercvexperience());
	}

	public function cv_skills()
	{
		return $this->hasMany(new Mastercvskills());
	}
}
