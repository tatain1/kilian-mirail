<?php

namespace Controller;

use \W\Controller\Controller;

class DefaultController extends Controller
{

	/**
	* Page d'accueil par défaut
	*/
	public function home()
	{
		$this->show('default/home');
	}

	/**
	*	Affichage de la page CV
	*/
	public function cv()
	{
		$this->show('default/cv');
	}


}
