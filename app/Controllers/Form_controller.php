<?php namespace App\Controllers;

use \App\Models\Form_model;
use CodeIgniter\HTTP\RequestInterface;

class Form_controller extends BaseController
{
	public function home()
 {

	echo view('layout/header');
	echo view('content/home');
	echo view('layout/footer');

}

public function form()
{

		$error = $this->validate([
			'nazev'			=>	'required|min_length[3]',
			'vyrobce'		=>	'required|min_length[3]',
			'pocet_dilku'	=>	'required|numeric|min_length[10]'
		]);
		
		if(!$error)
		{
			echo view('layout/header');
			echo view('content/form', ['error' 	=> $this->validator]);
			echo view('layout/footer');
		}
		else{
			
			$db = db_connect();
			$form_model = new Form_model($db);

			$form_model->save(
				$n = $this->request->getVar('nazev'),
				$v = $this->request->getVar('vyrobce'),
				$pd = $this->request->getVar('pocet_dilku'),
				$svn = $this->request->getVar('sviti_v_noci'),
			);

			echo view('layout/header');
			echo view('content/form');
			echo view('layout/footer');
		}
        
    }


	public function vypis()
	{
	   
		$db = db_connect();
	   $form_model = new Form_model($db);
   

				$data['vypis'] = $form_model->getPuzzle();
				
			   echo view('layout/header');
			   echo view('content/vypis', $data);
			   echo view('layout/footer');

   
   }

   public function calendar()
   {
		$db      = \Config\Database::connect();
		$builder = $db->table('events');   
		$query = $builder->select('*')
					->limit(10)->get();

		$data = $query->getResult();

	foreach ($data as $key => $value) {
			$data['data'][$key]['title'] = $value->title;
			$data['data'][$key]['start'] = $value->start_date;
			$data['data'][$key]['end'] = $value->end_date;
			$data['data'][$key]['backgroundColor'] = "#00a65a";
		}   
		echo view('layout/header');     
		echo view('content/calendar',['data'=>$data]);
		echo view('layout/footer');
	}
}

