<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title><?= $this->e($title) ?></title>

	<link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/icons/css/font-awesome.min.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/bootstrap.css') ?>">

</head>
<body>
	<div class="container">
		<header>

			<nav class="lateral_menu hidden-xs">
				<ul class="nav">
					<li><a class="white" href="<?= $this->url('accueil') ?>"><i class="fa fa-user"></i> Presentation</a></li>
					<li><a class="white" href="<?= $this->url('cv') ?>"><i class="fa fa-user"></i> CV</a></li>
					<li><a class="white" href="<?= $this->url('realisations') ?>">Réalisation</a></li>
					<li><a class="white" href="<?= $this->url('contact') ?>"><i class="fa fa-envelope"></i> Contact</a></li>
					<li><a class="white" href="#">Réseaux sociaux</a></li>
				</ul>
			</nav>

			<nav class="up_menu hidden-sm hidden-md hidden-lg">
				<div class="container-fluid">
  				<ul class="nav nav-pills nav-justified">
						<li><a class="white" href="<?= $this->url('accueil') ?>" title="Presentation"><i class="fa fa-user"></i></a></li>
						<li><a class="white" href="<?= $this->url('cv') ?>">CV</a></li>
						<li><a class="white" href="<?= $this->url('realisations') ?>">Réalisation</a></li>
						<li><a class="white" href="<?= $this->url('contact') ?>">Contact</a></li>
						<li><a class="white" href="#">Réseaux sociaux</a></li>
					</ul>
				</div>
			</nav>

		</header>

		<section>
			<?= $this->section('main_content') ?>
		</section>

		<footer>
		</footer>
	</div>
</body>
</html>
