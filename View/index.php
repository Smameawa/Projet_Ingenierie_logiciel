<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Actualités Polytechniciennes</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
	
	<div id="contenu">
		<?php if (!empty($articles)): ?>
			<?php foreach ($articles as $article): ?>
				<div class="article">
					<h1><a href="index.php?action=article&id=<?= $article->id ?>"><?= $article->titre ?></a></h1>
					<p><?= substr($article->contenu, 0, 300) . '...' ?></p>
				</div>
			<?php endforeach ?>
		<?php else: ?>
			<div class="message">Aucun article trouvé</div>
		<?php endif ?>
	</div>
</body>
</html>