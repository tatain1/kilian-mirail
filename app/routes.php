<?php

	$w_routes = array(
		['GET', '/', 'Default#home', 'accueil'],
		['GET', '/cv', 'Default#cv', 'cv'],
		['GET', '/realisations', 'default#realisations', 'realisations'],
		['GET', '/reseaux-sociaux', 'default#social', 'social'],

		['GET', '/contact', 'default#contact', 'contact'],
		['POST', '/contact', 'default#sendMailContact', 'send_mail_contact'],
	);
