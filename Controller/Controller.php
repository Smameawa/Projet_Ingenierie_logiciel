<?php
	require_once 'Model/Article.php';
	require_once 'Model/Categorie.php';
	require_once 'Model/ConnexionManager.php';

	/**
	 * Classe représentant notre controleur principal
	 */
	class Controller
	{
		
		function __construct()
		{
			
		}

		public function showAccueil()
		{
			$articles = Article::getList();
			$categories = Categorie::getList();

			require_once 'View/accueil.php';
		}

		public function showArticle($id)
		{
			$article = Article::getById($id);
			$categories = Categorie::getList();
			
			require_once 'View/article.php';
		}

		public function showCategorie($id)
		{
			$articles = Article::getByCategoryId($id);
			$categories = Categorie::getList();
			
			require_once 'View/articleByCategorie.php';
		}
	}
?>