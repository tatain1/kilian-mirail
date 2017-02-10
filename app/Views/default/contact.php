<?php $this->layout('layout', ['title' => 'Contact']) ?>

<?php $this->start('main_content') ?>

<div class="container col-xs-12 col-md-10 col-md-offset-2 col-sm-9 col-sm-offset-3">


		<form class="" action="" method="POST">
			<h1>Contact</h1>
			<div class="field">
				<label for="email" class="field-label">Votre e-mail</label>
				<input type="email" name="email" class="field-input" value="<?php if(!empty($_POST['email'])) { echo $_POST['email']; } ?>">
				<span class="errorMessage"><?php if(!empty($error['email'])) { echo($error['email']);} ?></span>
			</div>
			<div class="field">
				<label for="objet" class="field-label">Objet</label>
				<input type="text" name="objet" class="field-input" value="<?php if(!empty($_POST['objet'])) { echo $_POST['objet']; } ?>">
				<span class="errorMessage"><?php if(!empty($error['objet'])) { echo($error['objet']);} ?></span>
			</div>
			<div class="textfield field" style="margin-bottom: 60px;">
				<label for="content" class="field-label">Message</label>
				<textarea name="content"  class="materialize-textarea field-input"><?php if(!empty($_POST['content'])) { echo $_POST['content']; } ?></textarea>
				<span class="errorMessage"><?php if(!empty($error['content'])) { echo($error['content']);} ?></span>
			</div>
			<div class="center">
				<!-- <input type="submit"> -->
				<p>Contact via formulaire impossible pour le moment.<br>
				Vous pouvez m'envoyer un mail à : tatain1@hotmail.com</p>
			</div>
		</form>

</div>



<?php $this->stop('main_content') ?>
