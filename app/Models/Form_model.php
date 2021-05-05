<?php namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;

class Form_model
{
	
    protected $db;
    public function __construct(ConnectionInterface &$db){
        $this->db =& $db;
    }


    function getPuzzle()
    {
       $builder= $this->db->table('puzzle');
        $builder->select('*');

       $films =  $builder->get()->getResult();
       return $films;
    }

    function save($n, $v, $pd, $svn)
    {

        
        $puzzle= $this->db->table('puzzle');

        $puzzle->set('nazev', $n);
        $puzzle->set('vyrobce', $v);
        $puzzle->set('pocet_dilku', $pd);
        $puzzle->set('sviti_v_noci', $svn);
        $puzzle->insert(); 
    }
}