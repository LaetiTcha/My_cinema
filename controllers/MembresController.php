<?php
require_once('controllers/Controller.php');
require_once('models/Membres.php');
require_once('models/Database.php');

class MembreController extends Controller {

	public function index () {
		$db = new Database();
		$pdo = $db->getConnection();

		$membre = new Membre();
		$resultMembre = $membre->ListeMembre($pdo); 


		$SearchMembre = '';

		if(!empty($_POST['searchName'])) {
			$SearchMembre = $_POST['searchName'];
		}

		if(isset($_POST['searchName'])) {
			$resultSearch = $membre->SearchMembre($pdo, $_POST['searchName']);
				
			return $this->view('membre', [
				'membre' => $resultSearch
			]);
		}

		/*

		if(isset($_GET['id_membre']) || isset($_POST['searchName'])) {
			$resultFilmMembre = $membre->FilmMembre($pdo, $_GET['id_membre']);
			$resultSearch = $membre->SearchMembre($pdo, $_POST['searchName']);

			return $this->view('membre', [
				'membre' => $resultSearch,
				'filmMembre' => $resultFilmMembre
			]);

			return $this->view('membre', [
				'filmMembre' => $resultFilmMembre
			]);
		} 
		else {
			return $this->view('membre', [
				'membre' => $resultSearch
			]);
		}*/

		return $this->view('membre');

		
	}
}