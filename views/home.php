
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

	<div class="container carousel">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div id="Carousel" class="carousel slide">
						<ol class="carousel-indicators">
							<li data-target="#Carousel" data-slide-to="0" class="active"></li>
							<li data-target="#Carousel" data-slide-to="1"></li>
							<li data-target="#Carousel" data-slide-to="2"></li>
						</ol>

						<!-- Carousel items -->
						<div class="carousel-inner">

							<div class="item active">
								<div class="row">
									<div class="col-md-3"><a href="#" class="thumbnail"><img src=https://images-na.ssl-images-amazon.com/images/M/MV5BMjI1MDg5NzAyMV5BMl5BanBnXkFtZTgwNzU5Mzk4NjE@._V1_SX300.jpg alt="Image" style="max-width:100%;"></a></div>
									<div class="col-md-3"><a href="#" class="thumbnail"><img src="https://images-na.ssl-images-amazon.com/images/M/MV5BNjk2ODQzNDYxNV5BMl5BanBnXkFtZTgwMTcyNDg4NjE@._V1_SX300.jpg"" alt="Image" style="max-width:100%;"></a></div>
									<div class="col-md-3"><a href="#" class="thumbnail"><img src="https://images-na.ssl-images-amazon.com/images/M/MV5BOTlhYTVkMDktYzIyNC00NzlkLTlmN2ItOGEyMWQ4OTA2NDdmXkEyXkFqcGdeQXVyNTAyODkwOQ@@._V1_SX300.jpg" alt="Image" style="max-width:100%;"></a></div>
									<div class="col-md-3"><a href="#" class="thumbnail"><img src="https://images-na.ssl-images-amazon.com/images/M/MV5BZGE3MTA3OWQtYzVjYi00MjkwLThlZTQtNWUzOGVlYjEwMzBhXkEyXkFqcGdeQXVyNTAyODkwOQ@@._V1_SX300.jpg" alt="Image" style="max-width:100%;"></a></div>
								</div><!--.row-->
							</div><!--.item-->

							<div class="item">
								<div class="row">
									<div class="col-md-3"><a href="#" class="thumbnail"><img src="https://images-na.ssl-images-amazon.com/images/M/MV5BOGZmYzVkMmItM2NiOS00MDI3LWI4ZWQtMTg0YWZkODRkMmViXkEyXkFqcGdeQXVyODY0NzcxNw@@._V1_SX300.jpg" alt="Image" style="max-width:100%;"></a></div>
									<div class="col-md-3"><a href="#" class="thumbnail"><img src="https://images-na.ssl-images-amazon.com/images/M/MV5BNmE3MjdmMGMtOThhMS00OGRhLTllNDItMmJmN2QxMjA4ZTI2XkEyXkFqcGdeQXVyNTUyMzE4Mzg@._V1_SX300.jpg" alt="Image" style="max-width:100%;"></a></div>
									<div class="col-md-3"><a href="#" class="thumbnail"><img src="https://images-na.ssl-images-amazon.com/images/M/MV5BNmJkODczNjItNDI5Yy00MGI1LTkyOWItZDNmNjM4ZGI1ZDVlL2ltYWdlL2ltYWdlXkEyXkFqcGdeQXVyMDI2NDg0NQ@@._V1_SX300.jpg"" alt="Image" style="max-width:100%;"></a></div>
									<div class="col-md-3"><a href="#" class="thumbnail"><img src="https://images-na.ssl-images-amazon.com/images/M/MV5BMGQwNDNkMmItYWY1Yy00YTZmLWE5OTAtODU0MGZmMzQ1NDdkXkEyXkFqcGdeQXVyMTQxNzMzNDI@._V1_SX300.jpg" alt="Image" style="max-width:100%;"></a></div>
								</div><!--.row-->
							</div><!--.item-->

							<div class="item">
								<div class="row">
									<div class="col-md-3"><a href="#" class="thumbnail"><img src="https://images-na.ssl-images-amazon.com/images/M/MV5BM2YxYmFjYWMtMzBmMC00MTVmLThhMjUtYWU5Yzg2OGQwZjE3XkEyXkFqcGdeQXVyMTQxNzMzNDI@._V1_SX300.jpg" alt="Image" style="max-width:100%;"></a></div>
									<div class="col-md-3"><a href="#" class="thumbnail"><img src="https://images-na.ssl-images-amazon.com/images/M/MV5BMDNlM2E2OTUtZTRhZi00ZDU1LWIxODAtN2E5OGZiNmIwMDIwXkEyXkFqcGdeQXVyMTQxNzMzNDI@._V1_SX300.jpg" alt="Image" style="max-width:100%;"></a></div>
									<div class="col-md-3"><a href="#" class="thumbnail"><img src="https://images-na.ssl-images-amazon.com/images/M/MV5BZDYwMDBiYWUtMDU0YS00YzEzLWJhYTctNGU0MDhmMzI4NWUxXkEyXkFqcGdeQXVyNzQ1ODk3MTQ@._V1_SX300.jpg" alt="Image" style="max-width:100%;"></a></div>
									<div class="col-md-3"><a href="#" class="thumbnail"><img src="https://images-na.ssl-images-amazon.com/images/M/MV5BMTMzODU0NTkxMF5BMl5BanBnXkFtZTcwMjQ4MzMzMw@@._V1_SX300.jpg" alt="Image" style="max-width:100%;"></a></div>
								</div><!--.row-->
							</div><!--.item-->

						</div><!--.carousel-inner-->
						<a data-slide="prev" href="#Carousel" class="left carousel-control">‹</a>
						<a data-slide="next" href="#Carousel" class="right carousel-control">›</a>
					</div><!--.Carousel-->

				</div>
			</div>
		</div>
	</div><!--.container-->



	<div class="container">
		<div class="container-fluid">
			<div class="row">
				<div class="col-m-center">
					<form class="form-inline" method="post" action="">
						<div class="form-group ">

							<input type="text" class="form-control" name="search" placeholder="Entrez votre recherche..." id="search" value="<?php $search ?>">

							<button type="submit" class="btn">Rechercher</button>
						</div>
						<div class="select">
							<label class="form-check-label">Par Catégorie</label>

							<select name="genre">
								<option value="default">Selectioner</option>
								<?php for($i=0; $i<count($genre); $i++) { ?>
								<option value="<?php echo $genre[$i]['id_genre'] ?>"> <?php echo $genre[$i]['nom']?></option>
								<?php } ?>
							</select>

							<label class="form-check-label">Par Distributeur</label>
							<select name="distrib">
								<option value="default">Selectionner</option>
								<?php for($i=0; $i<count($distrib); $i++) { ?>
								<option value="<?php echo $distrib[$i]['id_distrib'] ?>"><?php echo $distrib[$i]['nom'] ?></option>
								<?php } ?>
							</select>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>


	<div class="container">
		<div class="container-fluid">
			<div class="row table-film">
				<table>
					<thead>
						<?php if(!empty($nameFilm)) {

							echo '<tr class="unread">
							<th class="view-message dont-show">Titre :</th>
							<th class="view-message resu">Résumé : </th>
							<th class="view-message an">Année : </th>
							<th class="view-message min">Durée : </th> 
							</tr>';
						}
						else {

						} ?>
					</thead>

					<tbody>
						<?php 
						if(isset($nameFilm)) {
							for($i=0; $i<count($nameFilm); $i++) { ?>
							<tr>
								<td><?= $nameFilm[$i]['titre'] ?></td>
								<td><?= $nameFilm[$i]['resum'] ?></td>
								<td><?= $nameFilm[$i]['annee_prod'] ?></td>
								<td><?= $nameFilm[$i]['duree_min'] ?></td>

								<?php }
							}
							else {

							} ?> 
						</tr>  
					</tbody>
				</table>
			</div>
		</div>
	</div>

	

	<!-- jquery -->
	<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<!-- [/] jquery -->

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>




</body>
</html>