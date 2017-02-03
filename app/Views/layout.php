<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title><?= $this->e($title) ?></title>

	<link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">
</head>
<body>
	<div class="container">
		<header>

			<nav class="lateral_menu">
				<ul>
					<li><a href="<?= $this->url('accueil') ?>">Presentation</a></li>
					<li><a href="<?= $this->url('cv') ?>">CV</a></li>
					<li><a href="#">Réalisation</a></li>
					<li><a href="#">Contact</a></li>
					<li><a href="#">Réseaux sociaux</a></li>
				</ul>
			</nav>

		</header>

		<section class="page_content">
			<?= $this->section('main_content') ?>
		</section>

		<footer>
		</footer>
	</div>
</body>
</html>
