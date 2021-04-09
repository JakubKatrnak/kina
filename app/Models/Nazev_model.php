<?php namespace App\Models;

use CodeIgniter\Model;

class Nazev_model extends Model
{
	protected $table      = 'nazev';
    protected $primaryKey = 'id_jazyk';
    protected $allowedFields = ['nazev', 'jazyk', 'originalni'];
}