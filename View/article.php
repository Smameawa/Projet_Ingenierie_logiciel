<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Actualités Polytechniciennes</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
	<div class="navbar">
		<h1 class="navbar-title" >Actualités Polytechniciennes</h1>
		<div class="navbar-links">
			<?php 
				require_once 'menu.php'; 
			?>
		</div>
	</div>
	<?php if (!empty($article)): ?>
		<br>
		<div class="container-child">
			<h1><?= $article->titre ?></h1>
			<span>Publié le <?= $article->dateCreation ?></span><br>
			<span>Date de derniere Modification <?= $article->dateModification ?></span>
			<p><?= $article->contenu ?></p>
		</div>
	<?php else: ?>
		<div class="container-child">
				<p>Aucun article trouvé</p>
			</div>
	<?php endif ?>
</body>
</html>