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
		<div class="container-fluid">
			<div class="row">
				<div class="col-m-center">
					<form class="form-inline" method="post" action="">
						<div class="form-group ">
							<input type="text" class="form-control" name="searchName" placeholder="Entrez votre recherche..." id="searchName" value="<?php $searchMembre ?>">

							<button type="submit" class="btn">Rechercher</button>
						</div>
					</form>
				</div>
			</div>
		</div>	
	</div>

	
	<div class="container">
		<div class="container-fluid">
			<div class="row">
				<table>
					<thead>
						<?php if(!empty($membre)) {

							echo '<tr class="unread">
							<th class="view-message dont-show">Nom :</th>
							<th class="view-message firstname">Prénom :</th>
							<th class="view-message birth">Date de naissance : </th>
							<th class="view-message mail">Email : </th>
							<th class="view-message cp">Code postal : </th> 
							<th class="view-message ville">Ville : </th>
							</tr>';
						}
						else {

						} ?>
					</thead>

					<tbody>
						<?php 
						if(isset($membre)) {
							for($i=0; $i<count($membre); $i++) { ?>
							<tr>
								<td><a href=""><?= ucfirst($membre[$i]['nom']) ?></a></td>
								<td><a><?= ucfirst($membre[$i]['prenom']) ?></a></td>
								<td><?= $membre[$i]['date_naissance'] ?></td>
								<td><?= $membre[$i]['email'] ?></td>
								<td><?= $membre[$i]['cpostal'] ?></td>
								<td><?= $membre[$i]['ville'] ?></td>

								<?php }
							
						}
							else {} ?> 
						</tr>  
					</tbody>
				</table>
			</div>
		</div>
	</div>

<!--
	<div class="container">
		<div class="container-fluid">
			 <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >

          <div class="panel panel-info">
            <div class="panel-heading">
              <?php while($membre){
              	if(isset($_GET['id_membre'])) {
              	for($i=0; $i<count($membre); $i++) {
               ?>
               <h3><?php echo ucfirst($membre[$i]['prenom']);?> <?php echo ucfirst($membre[$i]['nom']);?></h3>
             </div>

             <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img src="http://pingendo.github.io/pingendo-bootstrap/assets/user_placeholder.png" class="img-circle" width="60"> </div>
                
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">

                    <tbody>
                      <tr>
                        <th>Nom :</th>
                        <td><?php echo $membre[$i]['nom'];?></td>
                      </tr>

                      <tr>
                        <th>Prénom :</th>
                        <td><?php echo $membre[$i]['prenom'];?></td>
                      </tr>

                      <tr>
                        <th>Date de Naissance :</th>
                        <td><?php echo $membre[$i]['date_naissance'];?></td>
                      </tr>

                      <tr>
                        <th>Email</th>
                        <td><a href="mailto:"><?php echo $membre[$i]['email'];?></a></td>
                      </tr>

                      <tr>
                        <th>Code postal :</th>
                        <td><?php echo $membre[$i]['cpostal'];?></td>
                      </tr>

                      <tr>
                        <th>Ville :</th>
                        <td><?php echo $membre[$i]['ville'];?></td>
                      </tr>

                    </tbody>

                    <?php
                  }
              }
          }
                  ?>
                </table>
              </div>
            </div>
          </div>

          <div class="panel-footer">
            <div class="btn-group">
              <a href="ajout.php" class="btn btn-primary"><span class="glyphicon glyphicon-cog"> Ajouter/Modifier</span></a>
              <a href="#" class="btn btn-primary"><i class="glyphicon glyphicon-remove"> Supprimer</i></a> 
            </div>
          </div>

        </div>
      </div>
    </div>
			
		</div>
		
	</div> 
-->
</body>
</html>