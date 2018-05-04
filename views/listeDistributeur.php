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

	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Menu</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php">My Cinéma</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li><a href="http://localhost/Projets/W2_alternatif/My_cinema/?controller=listeFilm"><span class="glyphicon glyphicon-film"></span> Films</a></li>
					<li><a href="http://localhost/Projets/W2_alternatif/My_cinema/?controller=listeGenre"><span class="glyphicon glyphicon-play-circle"></span> Catégorie</a></li>
					<li><a href="http://localhost/Projets/W2_alternatif/My_cinema/?controller=listeDistributeur"><span class="glyphicon glyphicon-facetime-video"></span> Distributeur</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="http://localhost/Projets/W2_alternatif/My_cinema/?controller=membre">Membres</a></li>
					<li><a href="#">Abonnements</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container-fluid">
		<div class="row">
			<img src="images/cine.jpg"/>

		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="container tableGenre">
				
				<h1>Distributeur : </h1>	
				<?php for($i=0; $i<count($distrib); $i++) { ?>
				<a href="http://localhost/Projets/W2_alternatif/My_cinema/?controller=listeDistributeur&id_distrib=<?php echo $distrib[$i]['id_distrib']; ?>"><strong>&nbsp<?php echo ucfirst($distrib[$i]['nom']); ?></strong>&nbsp
				</a>

				<?php } ?>

				<?php if(isset($_GET['id_distrib'])) {

					

					for($i=0; $i<count($distribFilm); $i++) {
						if($i==0)
							echo "<h3>" .ucfirst($distribFilm[$i]['nom']). " : </h3>";

						echo "<li>".$distribFilm[$i]['titre']."</li>";
					}

				}  ?>

			</div>
		</div>
	</div>
	
</body>
</html>