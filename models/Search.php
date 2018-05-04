<?php
require_once('Database.php');

class Search {

	public function ListFilm($db) {

		$sql = "SELECT * FROM film ORDER BY titre";
		$stmt = $db->prepare($sql);
		$stmt -> execute();
		$row = $stmt->fetchAll(PDO::FETCH_ASSOC);

		return $row;

	}

	public function ListGenre($db) {
		$sql = "SELECT * FROM genre ORDER BY nom";
		$stmt = $db->prepare($sql);
		$stmt -> execute();
		$row = $stmt->fetchAll(PDO::FETCH_ASSOC);

		return $row;
	}

	public function GenreFilm($db, $id_genre) {
		$sql = "SELECT genre.nom, film.titre FROM film JOIN genre ON genre.id_genre = film.id_genre WHERE genre.id_genre =" . $id_genre;
		$stmt = $db->prepare($sql);
		$stmt -> execute();
		$row = $stmt->fetchAll(PDO::FETCH_ASSOC);

		return $row;
	}

	public function ListeDistrib($db) {
		$sql = "SELECT * FROM distrib ORDER BY nom";
		$stmt = $db->prepare($sql);
		$stmt -> execute();
		$row = $stmt->fetchAll(PDO::FETCH_ASSOC);

		return $row;
	}

	public function FilmDistrib($db, $id_distrib) {
		$sql = "SELECT distrib.nom, film.titre FROM film JOIN distrib ON distrib.id_distrib = film.id_distrib WHERE distrib.id_distrib = " .$id_distrib;
		$stmt = $db->prepare($sql);
		$stmt -> execute();
		$row = $stmt->fetchAll(PDO::FETCH_ASSOC);

		return $row;
	}

	public function SearchNameFilm($db, $postData, $postGenre, $postDistrib) {
		$genreSelect = '';

		if($postGenre != 'default') {
			$genreSelect = "AND id_genre =".$postGenre;
		}

		$distribSelect = '';

		if($postDistrib != 'default') {
			$distribSelect = "AND id_distrib =".$postDistrib;
		}
		
		$sql = "SELECT * FROM film WHERE titre LIKE '".$postData."%' " .$genreSelect. $distribSelect;

		$stmt = $db->prepare($sql);
		$stmt->execute();

		return $stmt->fetchAll(PDO::FETCH_ASSOC);		
		
	}

}  