<?php $this->layout('layout', ['title' => 'Mon CV']) ?>

<?php $this->start('main_content') ?>
	<h1>Mon CV</h1>
	<p>Page en construction.</p>

	<ul>
		<li><a href="<?= $this->url('accueil') ?>">Presentation</a></li>
		<li><a href="<?= $this->url('cv') ?>">CV</a></li>
		<li><a href="#">Réalisation</a></li>
		<li><a href="#">Contact</a></li>
		<li><a href="#">Réseaux sociaux</a></li>
	</ul>

<?php $this->stop('main_content') ?>
