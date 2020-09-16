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

<?php
include 'navbar.php';
?>

<body>

	<div class="container-fluid">
		<div calss="row">
			<div class="col-md-12">
				<img src="images/bar.jpg" class="background-img">
			</div>
		</div>
		<div id="our_drinks" class="row">
			<div class="col-md-12">
				our drinks
			</div>
		</div>
		<div id="ueber" class="row">
			<div class="col-md-12">
				<p style="height:400px">über</p>
			</div>
		</div>
		<div id="galerie" class="row">
			<div class="col-md-12">
				<p style="height:400px">galerie</p>
			</div>
		</div>
		<div id="mixology_events" class="row">
			<div class="col-md-12">
				<p style="height:400px">mixology_events </p>
			</div>
		</div>
		<div id="kontakt" class="row">
			<div class="col-md-12">
				kontakt
			</div>
		</div>
	</div>

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
		window.onscroll = function() {
			scrollFunction()
		};

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