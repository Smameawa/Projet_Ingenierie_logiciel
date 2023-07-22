<div id="menu" class="navbar-links">
	<ul>
		<li><a href="index.php">Accueil</a></li>
		<?php foreach ($categories as $categorie): ?>
			<li><a  href="index.php?action=categorie&id=<?= $categorie->id ?>"><?= $categorie->libelle ?></a></li>
		<?php endforeach ?>
	</ul>
</div>