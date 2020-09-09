<?php
include 'db_connection.php';
session_start();
?>

<html lang="de-CH">

<head>
	<title>myBar | Drinks und Events</title>
	<meta charset="utf-8">
	<meta name="description" content="myBar Drinks und Events, Eine Cocktailbar der Extraklasse. Wir sind Spezialisten in molecular mixology, Drinks und Cocktails. Das Spektakel für alle Sinne.">
	<meta name="keywords" content="Drinks,Bar,Nightlife,Bartending,Events,Cocktails, Cocktailbar, Lounge, Rum, Gin, Whisky,Dübendorf">
	<meta name="author" content="Daniela Carolina Altorfer">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" href="styles.css">
	<link rel="icon" sizes="76x76" href="images/logo_mybar.png">
</head>

<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="#">
			<img src="images/logo_mybar.png" height="50">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item"> <a class="nav-link" href="#">Home</a> </li>
				<li class="nav-item"> <a class="nav-link" href="#our_drinks.html">Our Drinks</a> </li>
				<li class="nav-item"> <a class="nav-link" href="#ueber">Über</a></li>
				<li class="nav-item"> <a class="nav-link" href="#galerie">Galerie</a></li>
				<li class="nav-item"> <a class="nav-link" href="#mixology_events">Mixology &amp Events</a></li>
				<li class="nav-item"> <a class="nav-link" href="#kontakt">Kontakt</a></li>
			</ul>
			<ul class="navbar-nav">
				<li class="nav-item"> <a class="nav-link" href="login.php">Login</a></li>
				<li class="nav-item"> <a class="nav-link" href="register.php">Registrieren</a></li>
			</ul>
		</div>
	</nav>

	<div class="container-fluid">
		<div calss="row">
			<div class="col-md-12">
				<img src="images/bar.jpg" class="background-img">
			</div>
		</div>
	</div>

	<?php
	if (isset($_GET['loginfailed'])) {
		echo '<div class="alert alert-primary" role="alert">
				dum dum
			</div>';
	}

	if (isset($_GET['registered'])) {
		echo '<div class="alert alert-primary" role="alert">
				A simple primary alert—check it out!
			</div>';
	}


	?>

	<form action="login.php" method="POST">
		Login:
		<input name="username" />
		<input name="password" type="password" />
		<input type="submit" />
	</form>

	<form action="register.php" method="POST">
		Register:
		<input name="username" />
		<input name="password" type="password" />
		<input type="submit" />
	</form>


	<form action="logout.php" method="POST">
		<input type="submit" />
	</form>


	<?php

	if (isset($_SESSION['user'])) {
		$result = $conn->query("SELECT * FROM course");

		if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
				echo "<div><span>" . $row['name'] . "</span><span>" . $row['id'] . "</span><form action='signup.php?id=" . $row['id'] . "' method='POST'><input type='submit'/></form></div>";
			}
		}
	}


	?>

<button onclick="topFunction()" id="TopButton" title="Nach oben gehen">Nach oben</button>
<script>
var mybutton = document.getElementById("TopButton");
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 15 || document.documentElement.scrollTop > 15) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>