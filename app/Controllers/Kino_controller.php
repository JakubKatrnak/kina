<?php namespace App\Controllers;

use \App\Models\Kino_model;
use \App\Models\Nazev_model;

class Kino_controller extends BaseController
{
 public function home()
 {
	$this->ionAuth = new \IonAuth\Libraries\IonAuth(); 

	if ( $this->ionAuth->loggedIn() ) {

			echo view('layout/header_loggedIn');
			echo view('content/home');
			echo view('layout/footer');
		}
	else 

	echo view('layout/header');
	echo view('content/home');
	echo view('layout/footer');

}

public function form()
{

	$this->ionAuth = new \IonAuth\Libraries\IonAuth(); 

	if ( $this->ionAuth->loggedIn() ) {

		$nazev_model = new Nazev_model();
		$film_model = new Kino_model();

		if ($this->request->getMethod() === 'post' && $this->validate([
				'nazev_filmu' => 'required|min_length[3]|max_length[255]',
				'delka'  => 'required',
				'jazyk'  => 'required',
			]))
		{
			$film_data = [
				
				'delka'  			=> $this->request->getPost('delka'),
				'id_typ'			=> $this->request->getPost('typ'),
				'id_zanr' 			=> $this->request->getPost('druh'),
			];

			$og_nazev_data = [			
				
				'nazev' 			=> $this->request->getPost('nazev_filmu'),
				'jazyk'				=> $this->request->getPost('jazyk'),
				'originalni'		=> 1,

			];

			if($this->request->getPost('alt_nazev') != null)
			{
				$alt_nazev_data = [			
				
					'nazev' 		=> $this->request->getPost('alt_nazev'),
					'jazyk'			=> $this->request->getPost('jazyk_alt'),
					'originalni'	=> 0,
				];
				
				$nazev_model->insert($alt_nazev_data);
			}
			else


			$film_model->insert($film_data);
			$nazev_model->insert($og_nazev_data);

			echo view('layout/header_loggedIn', ['title' => 'Položka přidáná!']);
			echo view('content/form');
			echo view('layout/footer');
	
		}
		else
		{
				echo view('layout/header_loggedIn', ['title' => 'Něco je špatně']);
				echo view('content/form');
				echo view('layout/footer');

		}	
	}
	else 
		
	
	throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        
    }
}

