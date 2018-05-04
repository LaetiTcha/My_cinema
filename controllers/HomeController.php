<?php

require_once('controllers/Controller.php');
require_once('models/Search.php');
require_once('models/Database.php');

class HomeController extends Controller {

	public function index () {
		$db = new Database();
		$pdo = $db->getConnection();

		$film = new Search();
		$resultFilm = $film->ListFilm($pdo);

		$search = '';

		if(!empty($_POST['search'])) {
			$search = $_POST['search'];
		}

		if(isset($_POST['search'])) {
			$resultNameFilm = $film->SearchNameFilm($pdo, $_POST['search'], $_POST['genre'], $_POST['distrib']);

			return $this->view('home', [
				'nameFilm' => $resultNameFilm,
				'genre' => $film->ListGenre($pdo),
				'distrib' => $film->ListeDistrib($pdo)
			]);
		}
		

		return $this->view('home', [
			'film' => $resultFilm,
			'genre' => $film->ListGenre($pdo),
			'distrib' => $film->ListeDistrib($pdo)
		]);



	}
}