<!DOCTYPE html>



<?php
include "db-conn.php";

if(isset($_POST['submit'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
	$last_name = $_POST['mobile'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];

    $sql = "INSERT INTO 'crud'('id', 'first_name', 'last_name', 'mobile', 'email', 'gender')
    VALUES (NULL, '$first_name', '$last_name','$mobile', '$email', '$gender)";

       $result = mysqli_query($conn, $sql);

    if($result) {
        header("Location: add_new.php?msg=New record  created successfully");
    }
    else{
        echo "Failed: " . mysqli_error($conn);
    }


}

?>



<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cardio: Free One Page Template by Luka Cvetinovic</title>
	<meta name="description" content="Cardio is a free one page template made exclusively for Codrops by Luka Cvetinovic" />
	<meta name="keywords" content="html template, css, free, one page, gym, fitness, web design" />
	<meta name="author" content="Luka Cvetinovic for Codrops" />
	<!-- Favicons (created with http://realfavicongenerator.net/)-->
	<link rel="apple-touch-icon" sizes="57x57" href="img/favicons/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="img/favicons/apple-touch-icon-60x60.png">
	<link rel="icon" type="image/png" href="img/favicons/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="img/favicons/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="img/favicons/manifest.json">
	<link rel="shortcut icon" href="img/favicons/favicon.ico">
	<meta name="msapplication-TileColor" content="#00a8ff">
	<meta name="msapplication-config" content="img/favicons/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">
	<!-- Normalize -->
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<!-- Owl -->
	<link rel="stylesheet" type="text/css" href="css/owl.css">
	<!-- Animate.css -->
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.1.0/css/font-awesome.min.css">
	<!-- Elegant Icons -->
	<link rel="stylesheet" type="text/css" href="fonts/eleganticons/et-icons.css">
	<!-- Main style -->
	<link rel="stylesheet" type="text/css" href="css/cardio.css">
</head>

<body>
	<div class="preloader">
		<img src="img/loader.gif" alt="Preloader image">
	</div>
	<nav class="navbar">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><img src="img/logosimplon.png" data-active-url="img/logo-active.png" alt=""></a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right main-nav">
					<li><a href="#intro">Bienvenue</a></li>
					<li><a href="#inscription">inscription</a></li>
					<li><a href="#services">Evènements</a></li>
					<li><a href="#team">Equipe</a></li>
					<li><a href="add_new.php" class="btn btn-blue">Visitez la liste</a></li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav><br><br>
	<header id="intro">
		<div class="container">
			<div class="table">
				<div class="header-text">
					<div class="row">
						<div class="col-md-12 text-center">
							<h2 class="white typed">BIENVENUE SUR LA PLATEFORME DE FORMATION LA PLUS EFFICACE</h2>
							<h3 class="light white"> ENREGISTREMENTS DES PARTICIPANTS</h3>
							<span class="typed-cursor">|</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

<!-- INSCRIPTION DES PARTICIPANTS -->

	<section>
	<div class="container">
        <div class="text-center mb-4">
            <h3> ENREGISTREMENTS </h3>
            <p class="text-muted">Inscrire toi mainteneant pour participer</p> 
        </div>
         <div class="container d-flex justify-content-center">
           <form action="" .method="post" style="width:50vw; min-width:300px;">
             <div class="row">

                <div class="col">
                    <label class="form-label">NOM</label>
                    <input type="text" class="form-control" name="fisrt_name" placeholder="Alber">
                </div>

                <div class="col">
                    <label class="form-label">PRENOMS</label>
                    <input type="text" class="form-control" name="fisrt_name" placeholder="KOUASSI">
                </div>

				<div class="mb-3">
                    <label class="form-label">CONTACT</label>
                    <input type="number" class="form-control" name="email" placeholder="07 78 25 42 86">
                </div>
             </div>
        
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="name@exemple.com">
                </div>
             </div>
            
             <div class="form-group mb-3">
                <label>Genre</label>
                <input type="radio" class="form-check-input" name="gender" id="male" value="male">
                <label for="male" class="form-input-label">Homme</label><br>

                <input type="radio" class="form-check-input" name="gender" id="female" value="female">
                <label for="female" class="form-input-label">Femme</label>
             </div>
            
            <div>
                <button type="submit" class="btn btn-success" name="submit">Saugarder</button>
                <a href="index.php" class="btn btn-danger">Supprimer</a>
            </div>

           </form>
         </div>

    </div>
	</section>


	<section id="services" class="section section-padded">
		<div class="container">
			<div class="row text-center title">
				<h2>Evènements</h2>
				<h4 class="light muted">Faite le choix de l'evenements qui vous amène!</h4>
			</div>
			<div class="row services">
				<div class="col-md-4">
					<div class="service">
						<div class="icon-holder">
							<img src="img/icons/heart-blue.png" alt="" class="icon">
						</div>
						<h4 class="heading">Communication Digitale</h4>
						<p class="description">A elementum ligula lacus ac quam ultrices a scelerisque praesent vel suspendisse scelerisque a aenean hac montes.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="service">
						<div class="icon-holder">
							<img src="img/icons/guru-blue.png" alt="" class="icon">
						</div>
						<h4 class="heading">Certificat AWS</h4>
						<p class="description">A elementum ligula lacus ac quam ultrices a scelerisque praesent vel suspendisse scelerisque a aenean hac montes.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="service">
						<div class="icon-holder">
							<img src="img/icons/weight-blue.png" alt="" class="icon">
						</div>
						<h4 class="heading">Developpeur Web&Mobile</h4>
						<p class="description">A elementum ligula lacus ac quam ultrices a scelerisque praesent vel suspendisse scelerisque a aenean hac montes.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="cut cut-bottom"></div>
	</section>


	
	<section id="team" class="section gray-bg">
		<div class="container">
			<div class="row title text-center">
				<h2 class="margin-top">Equipe</h2>
				<h4 class="light muted">L'equipe de rève!</h4>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="team text-center">
						<div class="cover" style="background:url('img/team/team-cover1.jpg'); background-size:cover;">
							<div class="overlay text-center">
								<h3 class="white"></h3>
								<h5 class="light light-white"></h5>
							</div>
						</div>
						<img src="img/team/team3.jpg" alt="Team Image" class="avatar">
						<div class="title">
							<h4>EMBEU PHARES</h4>
							<h5 class="muted regular">Manager Specialist</h5>
						</div>
						<button data-toggle="modal" data-target="#modal1" class="btn btn-blue-fill">Sign Up Now</button>
					</div>
				</div>
				<div class="col-md-4">
					<div class="team text-center">
						<div class="cover" style="background:url('img/team/team-cover2.jpg'); background-size:cover;">
							<div class="overlay text-center">
								<h3 class="white"></h3>
								<h5 class="light light-white"></h5>
							</div>
						</div>
						<img src="img/team/team1.jpg" alt="Team Image" class="avatar">
						<div class="title">
							<h4>BANYORO RAISSA</h4>
							<h5 class="muted regular">Directrice Generale</h5>
						</div>
						<a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-blue-fill ripple">Sign Up Now</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="team text-center">
						<div class="cover" style="background:url('img/team/team-cover3.jpg'); background-size:cover;">
							<div class="overlay text-center">
								<h3 class="white"></h3>
								<h5 class="light light-white"></h5>
							</div>
						</div>
						<img src="img/team/team2.jpg" alt="Team Image" class="avatar">
						<div class="title">
							<h4>Abdoul AZIZ N'DIAYE</h4>
							<h5 class="muted regular">Data Analist IA</h5>
						</div>
						<a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-blue-fill ripple">Sign Up Now</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	
	<!-- Holder for mobile navigation -->
	<div class="mobile-nav">
		<ul>
		</ul>
		<a href="#" class="close-link"><i class="arrow_up"></i></a>
	</div>
	<!-- Scripts -->
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/typewriter.js"></script>
	<script src="js/jquery.onepagenav.js"></script>
	<script src="js/main.js"></script>
</body>

</html>
