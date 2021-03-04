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

	$Kino_model = new Kino_model();
	$form = $Kino_model->findAll();	

	if ( $this->ionAuth->loggedIn() ) {

		echo view('layout/header_login');
		echo view('content/form');
		echo view('layout/footer');
	}
	else 
		
	throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();

}
}
