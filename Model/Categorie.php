<?php
	/**
	 * Classe métier représentant une catégorie
	 */
	class Categorie
	{
		public $id;
		public $libelle;

		public static function getList()
		{
			$bdd = ConnexionManager::getInstance();
			$reponse = $bdd->query('SELECT * FROM Categorie');
			$data = $reponse->fetchAll(PDO::FETCH_CLASS, 'Categorie');
			$reponse->closeCursor();
			return $data;
		}
	}
?>