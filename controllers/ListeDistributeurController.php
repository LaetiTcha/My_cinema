<?php
require_once('controllers/Controller.php');
require_once('models/Search.php');
require_once('models/Database.php');

class ListeDistributeurController extends Controller {

	public function index () {
		$db = new Database();
		$pdo = $db->getConnection();

		$distrib = new Search();
		$resultDistrib = $distrib->ListeDistrib($pdo);

		if(isset($_GET['id_distrib'])) {

			$resultDistribFilm = $distrib->FilmDistrib($pdo, $_GET['id_distrib']);

			return $this->view('listeDistributeur', [
				'distrib' => $resultDistrib,
				'distribFilm' => $resultDistribFilm

			]);
		}
		else {
			return $this->view('listeDistributeur', [
				'distrib' => $resultDistrib,

			]);
		}
		
			
		
	}
}