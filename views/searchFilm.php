<?php require_once('controllers/HomeController.php') ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>My Cinéma</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link rel="stylesheet" type="text/css" href="css/home.css">

	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


</head>
<body>

	<div class="container">
		<div class="row">
			<table>
				<thead>
					<?php if(!empty($stmt)) {

						echo '<tr class="unread">
                              <th class="view-message dont-show">Titre :</th>
                              <th class="view-message cat">Genre :</th>
                              <th class="view-message resu">Résumé : </th>
                              <th class="view-message an">Année : </th>
                              <th class="view-message min">Durée en min : </th> 
                            </tr>';
					}
					else {

					} ?>
				</thead>

				<tbody>
					<?php while(isset($stmt)): ?>
                    <tr>
                      <td><?= $film['titre'] ?></td>
                      <td><?= $film['nom'] ?></td>
                      <td><?= $film['resum'] ?></td>
                      <td><?= $film['annee_prod'] ?></td>
                      <td><?= $film['duree_min'] ?></td>

                        <?php endwhile; ?> 
                    </tr>  
				</tbody>
			</table>
		</div>
	</div>

	
</body>
</html>