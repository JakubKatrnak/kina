<?php namespace App\Models;

use CodeIgniter\Model;

class Kino_model extends Model
{
	protected $table      = 'filmy';
    protected $primaryKey = 'id_filmy';
    protected $allowedFields = ['delka'];
}