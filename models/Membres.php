<?php

require_once('Database.php');

class Membre{

	public function SearchMembre($db, $postData) {
		$sql = "SELECT * FROM fiche_personne WHERE nom LIKE :searchName OR prenom LIKE :searchName";
		$stmt = $db->prepare($sql);
		$stmt->bindValue(':searchName', $postData . '%', PDO::PARAM_STR);
		$stmt -> execute();

		return $stmt->fetchAll(PDO::FETCH_ASSOC);

	}

	public function FilmMembre($db, $id_membre) {
		$sql = "SELECT film.titre, historique_membre.date AS Datefilm FROM film LEFT JOIN historique_membre ON historique_membre.id_film = film.id_film LEFT JOIN membre ON membre.id_membre = historique_membre.id_membre LEFT JOIN abonnement ON abonnement.id_abo = membre.id_abo LEFT JOIN fiche_personne ON fiche_personne.id_perso = membre.id_fiche_perso WHERE fiche_personne.id_perso =" .$id_membre. "ORDER BY Datefilm";
		$stmt = $db->prepare($sql);
		$stmt->execute();
		$row = $stmt->fetchAll(PDO::FETCH_ASSOC);

		return $row; 
	}

	public function ListeMembre($db) {
		$sql = "SELECT * FROM fiche_personne ORDER BY nom";
		$stmt = $db->prepare($sql);
		$stmt->execute();
		$row = $stmt->fetchAll(PDO::FETCH_ASSOC);

		return $row;
	}
}