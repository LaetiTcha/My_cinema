<?php
require_once('controllers/Controller.php');
require_once('models/Search.php');
require_once('models/Database.php');

class ListeGenreController extends Controller {

	public function index () {
		$db = new Database();
		$pdo = $db->getConnection();

		$genre = new Search();
		$resultGenre = $genre->ListGenre($pdo);

		if(isset($_GET['id_genre'])) {
			$resultGenreFilm = $genre->GenreFilm($pdo, $_GET['id_genre']);

			return $this->view('listeGenre', [
				'genre' => $resultGenre,
				'genreFilm' => $resultGenreFilm

			]);

			return $this->view('home', [
				'genreFilm' => $resultGenreFilm
			]);
		}
		else {
			return $this->view('listeGenre', [
				'genre' => $resultGenre,

			]);
		}
	}
}