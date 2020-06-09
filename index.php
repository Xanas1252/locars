


<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta charset="UTF-8">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="main.css">

	<title>Accueil</title>

	<style type="text/css">
		.locars {
			border-radius: 10px;
		}
	</style>
</head>

<body>

	<header id="header" id="home">
		<div class="container">
			<div class="row align-items-center justify-content-between d-flex">
				<div id="logo">
					<a href="index.php"><img class="locars" src="outils/img/logo.png" alt="" title="" width=160px /></a>
				</div>
				<nav id="nav-menu-container">
					<ul class="nav-menu">
						
						<li class="menu-active"><a href="index.php">accueil</a></li>
						<li><a href="src/about.php">À propos de nous</a></li>
						<li><a href="src/gestion.php">Ma voiture</a></li>

						<li><a href="src/team.php">notre équipe </a></li>

						<li><a href="src/contact.php">Contact</a></li>

						<li><a href="src/login/deconnexion.php">Deconnexion</a></li>
					</ul>
				</nav>
				<!-- #nav-menu-container -->
			</div>
		</div>
	</header><!-- #header -->


	<!-- start banner Area -->
	<section class="banner-area relative" id="home">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row fullscreen d-flex align-items-center justify-content-center">
				<div class="banner-content col-lg-7 col-md-6 ">

					<h1 class="text-white text-uppercase">
						Une prestation de qualité pour votre location de véhicule
					</h1>
					<p class="pt-20 pb-20 text-white">
						Louer un véhicule avec Locars ce n’est pas simplement trouver le meilleur moyen de se rendre d’un point A à un point B. C’est une invitation au voyage, au volant d’un véhicule qui saura seconder toutes vos envies, vous permettant ainsi de profiter d’une expérience mémorable
					</p>

				</div>
				<div class="col-lg-5  col-md-6 header-right">

					<form class="form" role="form" action="src/cars.php" method="get" autocomplete="off">

						<div class="from-group">
                            <div class="default-select" id="default-select">
								    <select class="form-control" name="ville" >
									
								<option value="">ville</option>
                            <?php
                           $sql = "SELECT DISTINCT ville FROM voiture";
                            $result = mysqli_query($db, $sql);
                            while($colonne = mysqli_fetch_array($result)){
                            ?>
                                <option value="<?php echo($colonne['ville']); ?>" ><?php echo($colonne['ville']); ?></option> 
                            <?php
                            }
                              ?>
                                </select>
                            </div><br>
						</div>
						<div class="form-group row">
							<div class="col-md-6 wrap-left">
								<div class="default-select" id="default-select">
								   <select name="prixj" class="form-control">
									<option value="" disabled selected hidden="prix">Prix</option>
									<option value="1">0 €-50 €</option>
									<option value="2">50 €-100 €</option>
									<option value="3">100 €-150 €</option>
									<option value="4">150 €-200 €</option>
                                    <option value="5">+200 €</option>
									</select>
								</div>
							</div>
							<div class="col-md-6 wrap-right">
								<div class="input-group dates-wrap">
                                    
                                    
									<input id="datepicker" name="dispo_debut" class="dates form-control" id="exampleAmount"  type="date" >
                                  
									<div class="input-group-prepend">
										<span class="input-group-text"><span class="lnr lnr-calendar-full"></span></span>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<div class="col-md-6 wrap-left">
								<div class="default-select" id="default-select">
											<select name="boite_vitesse" class=" form-control">
                                                <option value="">boite vitesse</option>
                                                 <?php
                           $sql = "SELECT DISTINCT boite_vitesse FROM voiture";
                            $result = mysqli_query($db, $sql);
                            while($colonne = mysqli_fetch_array($result)){
                            ?>
									<option value="<?php echo($colonne['boite_vitesse']); ?>" ><?php echo($colonne['boite_vitesse']); ?></option>
									<?php
                            }
                              ?>

									</select>
								</div>
							</div>
							<div class="col-md-6 wrap-right">
								<div class="input-group dates-wrap">
									<input id="datepicker2" class="dates form-control" name="dispo_fin"  id="exampleAmount" placeholder="Fin" type="date">
									<div class="input-group-prepend">
										<span class="input-group-text"><span class="lnr lnr-calendar-full"></span></span>
									</div>
								</div>
							</div>
						</div>
						<div class="from-group">
                            <select name="marque"class=" form-control">
                                <option value="">marque</option>
                             <?php
                           $sql = "SELECT DISTINCT marque FROM voiture";
                            $result = mysqli_query($db, $sql);
                            while($colonne = mysqli_fetch_array($result)){
                            ?>
							<option value="<?php echo($colonne['marque']); ?>" ><?php echo($colonne['marque']); ?></option>
									<?php
                            }
                              ?>
                            </select><br>
                           
							<select name="couleur" class=" form-control">
                                <option value="">couleur</option>
                             <?php
                           $sql = "SELECT DISTINCT couleur FROM voiture";
                            $result = mysqli_query($db, $sql);
                            while($colonne = mysqli_fetch_array($result)){
                            ?>
							<option value="<?php echo($colonne['couleur']); ?>" ><?php echo($colonne['couleur']); ?></option>
									<?php
                            }
                              ?>
                            </select><br>
                            
                            <select name="model" class=" form-control">
                                <option value="">model</option>
                             <?php
                           $sql = "SELECT DISTINCT model FROM voiture";
                            $result = mysqli_query($db, $sql);
                            while($colonne = mysqli_fetch_array($result)){
                            ?>
							<option value="<?php echo($colonne['model']); ?>" ><?php echo($colonne['model']); ?></option>
									<?php
                            }
                              ?>
                            </select><br>
						</div>
						<div class="form-group row">
							<div class="col-md-12">
								<button type="submit" class="btn btn-default btn-lg btn-block text-center text-uppercase" name="rechercher">Rechercher</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->
 <section class="our-cars">
 	
 	<div class="cards">

 		<div class="c1 card">
 			<div class="pic1"></div>
 			<p>Dacia Sandero</p>
 			<div class="price">
 				<ul>
 					<li class="nopr">Notre prix:</li>
 					<li class="numb">400dh</li>
 				</ul>
 			</div>
 			<div class="buttt"><a href="#" class="offer">Voir the offer</a></div>
 		</div>
 		<div class="c2 card">
 			<div class="pic2"></div>
 			<p>Dacia Logan</p>
 			<div class="price">
 				<ul>
 					<li class="nopr">Notre prix:</li>
 					<li class="numb">400dh</li>
 				</ul>
 			</div>
 			<div class="buttt"><a href="#" class="offer">Voir the offer</a></div>
 		</div>
 		<div class="c3 card">
 			<div class="pic3"></div>
 			<p>Dacia Dokker</p>
 			<div class="price">
 				<ul>
 					<li class="nopr">Notre prix:</li>
 					<li class="numb">400dh</li>
 				</ul>
 			</div>
 			<div class="buttt"><a href="#" class="offer">Voir the offer</a></div>
 		</div>
 		<div class="c4 card">
 			<div class="pic4"></div>
 			<p>Peugeot 208</p>
 			<div class="price">
 				<ul>
 					<li class="nopr">Notre prix:</li>
 					<li class="numb">400dh</li>
 				</ul>
 			</div>
 			<div class="buttt"><a href="#" class="offer" >Voir the offer</a></div>
 		</div>
 	</div>
 </section>
	<?php include 'src/footer.html'; ?>

	<!-- START INCLUDE SCRIPT -->
	<script src="outils/js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="./outils/js/vendor/bootstrap.min.js"></script>
	<script src="./outils/js/main.js"></script>
	<!-- END SCRIPT -->
</body>

</html>