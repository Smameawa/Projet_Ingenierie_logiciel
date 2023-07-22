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
	<div class="container">
		<div class="actualites">
            <h2>Les dernières actualités</h2>
        </div>
		<?php if (!empty($articles)): ?>
			<?php foreach ($articles as $article): ?>
				<div class="container-child">
					<h1><a href="index.php?action=article&id=<?= $article->id ?>"><?= $article->titre ?></a></h1>
					<p><?= substr($article->contenu, 0, 300) . '...' ?></p>
				</div>
			<?php endforeach ?>
		<?php else: ?>
			<div class="container-child">
				<p>Aucun article trouvé</p>
			</div>
		<?php endif ?>
	</div>
</body>
</html>