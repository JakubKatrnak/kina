<?php namespace App\Models;

use CodeIgniter\Model;

class Kino_model extends Model
{
	protected $table      = 'filmy';
    protected $primaryKey = 'id_filmy';
    protected $allowedFields = ['delka','id_filmy','id_zanr','id_typ'];
}