<?php

namespace Controller;

use \W\Controller\Controller;
use \Services\Tools\Tools;
use \Services\Tools\ValidationTools;




class DefaultController extends Controller
{
	private $tools;
	private $valid;

	public function __construct()
	{
		$this->tools = new Tools();
		$this->valid = new ValidationTools();
	}
	
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

	/**
	*	Affichage de la page realisations
	*/
	public function realisations()
	{
		$this->show('default/realisations');
	}

	/**
	*	Affichage de la page contact
	*/
	public function contact()
	{
		$this->show('default/contact');
	}

	/**
	* Page de contact - Traintement de l'envoi du mail
	*/
	public function sendMailContact()
	{
		$error = array();
		$email = (!empty($_POST['email'])) ? trim(strip_tags($_POST['email'])) : null;
		$objet = (!empty($_POST['objet'])) ? trim(strip_tags($_POST['objet'])) : null;
		$content = (!empty($_POST['content'])) ? trim(strip_tags($_POST['content'])) : null;

		$error['email'] = $this->valid->emailValid($email,'email', 3, 50);
		$error['objet'] = $this->valid->textValid($objet,'objet', 3, 50);
		$error['content'] = $this->valid->textValid($content,'contenu', 3, 2000);

		if ($this->valid->IsValid($error)) {

			$mailEncode = urlencode($email);
			$mail = new PHPMailer();
			$mail->CharSet = "utf8";
			$mail->From = $email;
			$mail->FromName = $email;
			$mail->Subject = 'Mail depuis mon site perso : ' .$objet;
			$mail->Body = $content;
			$mail->AddAddress('tatain1@hotmail.com');
			$mail->send();

			$this->redirectToRoute('accueil');

		} else {
			$this->show('default/contact', array(
				'error' => $error,
			));
		}

	}
}
