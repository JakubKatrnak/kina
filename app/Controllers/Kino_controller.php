<?php namespace App\Controllers;

use \App\Models\Kino_model;

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

		$model = new Kino_model();

		if ($this->request->getMethod() === 'post' && $this->validate([
				'nazev_filmu' => 'required|min_length[3]|max_length[255]',
				'delka'  => 'required',
			]))
		{
			$model->save([
				'nazev_filmu' => $this->request->getPost('nazev_filmu'),

				'alternativni_filmu'  => $this->request->getPost('alternativni_filmu'),
				'delka'  => $this->request->getPost('delka'),
				'typ' => $this->request->getPost('typ'),
				'druh' => $this->request->getPost('druh'),
			]);
	
			echo view('layout/header_loggedIn', ['title' => 'Položka přidáná!']);
			echo view('content/form');
			echo view('layout/footer');
	
		}
		else
		{
				echo view('layout/header_loggedIn', ['title' => 'Přidej položku']);
				echo view('content/form');
				echo view('layout/footer');

		}	
	}
	else 
		
	
	throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        
    }
}

