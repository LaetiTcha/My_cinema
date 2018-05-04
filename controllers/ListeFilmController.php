<?php

require_once('controllers/Controller.php');
require_once('models/Search.php');
require_once('models/Database.php');

class ListeFilmController extends Controller {

	public function index () {
		$db = new Database();
		$pdo = $db->getConnection();

		$film = new Search();
		$resultFilm = $film->ListFilm($pdo);


		return $this->view('listeFilm', [
			'film' => $resultFilm
		]);

	}
}