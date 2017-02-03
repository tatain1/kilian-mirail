<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>
	<h1>Kilian-Mirail.fr</h1>
	<p>Site en construction.</p>

	<ul>
		<li><a href="<?= $this->url('accueil') ?>">Presentation</a></li>
		<li><a href="<?= $this->url('cv') ?>">CV</a></li>
		<li><a href="#">Réalisation</a></li>
		<li><a href="#">Contact</a></li>
		<li><a href="#">Réseaux sociaux</a></li>
	</ul>

<?php $this->stop('main_content') ?>
