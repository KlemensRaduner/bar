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
	<link rel="icon" sizes="76x76" href="images/logo_mybar_brown.png">
</head>

<?php
include 'navbar.php';
?>

<body>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<img src="images/bar.jpg" class="background-img">
			</div>
		</div>

		<div class="row">
			<div id="ueber" class="anchor"></div>
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<h1>Willkommen</h1>
				<p>Die myBar ist ein Ort der Begegnung, ein Ord des Genusses und der Erholung. Hinter unserer Bar werden Cocktails leidenschaftlich, künstlerisch und manchmal völlig ... neu erfunden. Hier ist der Ort an dem die Uhren nicht ganz so schnell ticken und die Nacht zum leben erwacht.<br>
					<br>Lassen Sie den Stress vom Alltag vor der Tür und treten Sie ein in unsere einzigartige Gaststube. Damit unsere Gäste sich besonders wohl fühlen können, fördert die myBar einen aktiven Austausch zwischen Bartender und Abnehmer. Unser Mixologen-Team freut sich, Ihnen auch Ihrem persönlichen Gusto entsprechend einen Drink zu zaubern. <br>
					<br>Stay unique.
				</p>
			</div>
		</div>
		<div class="row">
			<div id="our_drinks" class="anchor"></div>
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<h1>Galerie</h1>
				<p>Lassen Sie sich von den Impressionen aus unserer Galerie inspirieren.</p>
				<p><a href="Speisekarte_Download.pdf" download>Download</a></p>
			</div>
			<div class="col-md-12">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
					</ol>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img class="d-block w-100" src="images/drink1.jpg" alt="Bild von einem Martini Cocktail">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="images/drink9.jpg" alt="Bild von einem Dark n Stormy Cocktail">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="images/drink3.jpg" alt="Bild von einem Old Fashioned Burbon Cocktail">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="images/drink4.jpg" alt="Bild von einem hazy Rum Cocktail">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="images/drink5.jpg" alt="Bild von einem Mojito Cocktail">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="images/drink6.jpg" alt="Bild von einem Wild Berry Margarita Cocktail">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="images/drink7.jpg" alt="Bild von drei Cocktail Variatioinen">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="images/drink8.jpg" alt="Bild von einem white Cosmopolitan Cocktail">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="images/drink2.jpg" alt="Bild von einem Sandstorm Vermouth Cocktail">
						</div>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Vorheriges</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Nächstes</span>
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div id="mixology_events" class="anchor"></div>
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<h1>Mixkurse</h1>
			<p>Ist Ihr Traum das Mixen und Servieren von selbstgemachten Drinks? Wir als myBar bieten für motivierte Anfänger oder Fortgeschrittene Teilnehmer unter fachkundiger Anleitung diverse Mixkurse. Im Kurs erhalten Sie alle Informationen rund um den Job des Bartenders (Barutensilien, Arbeitstechniken, etc.).<br>
				<br>Feiern Sie Ihren Team-Event, Geburtstag oder Polterabend bei uns! Ein Besuch in der "myBar" lohnt sich und macht Ihren Event zum unvergesslichen Erlebnis. Weiterhin wird für das Wohl unserer Gäste natürlich tüchtig gesorgt, durstig verlässt uns Keiner. Sie können ganz einfach einen Termin bei uns vereinbaren. Die Mindestanzahl Teilnehmer beträgt 6 Personen, wobei der Preis pro Person CHF 100.- ist.<br>
				<?php
				if (!isset($_SESSION['user'])) {
					echo "<a href='login.php'>Login</a> <br>";
					echo "<a href='register.php'>Registrieren</a>";
				}
				?>
			</p>
			<table class="table">
				<thead>
					<tr>
						<th>Name</th>
						<th>Beschreibung</th>
						<th>Teilnehmer</th>
						<?php
						if (isset($_SESSION['user'])) {
							echo "<th>anmelden</th>";
						}
						?>
					</tr>
				</thead>
				<tbody>
					<?php
					$result = $conn->query("SELECT * FROM course");
					if ($result->num_rows > 0) {
						while ($row = $result->fetch_assoc()) {
							echo "<tr><td>" . $row['name'] . "</td><td>" . $row['description'] . "<td>0/20</td>";
							if (isset($_SESSION['user'])) {
								echo "<td>button</td>";
							}
							echo "</tr>";
						}
					}
					?>
				</tbody>

			</table>
		</div>
	</div>

	<div class="row">
		<div id="kontakt" class="anchor"></div>
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<h1>Kontakt</h1>
			<p>Telefon: +41 44 340 25 65</p>
			<p>Email: <a href="mailto:daniela@altorfer.org">daniela@altorfer.org</a></p>
			<p>Adresse: Im Obstgarten 18c 8602 Wangen bei Dübendorf"</p>
			<p>Ansicht auf GoogleMaps:<br></p>
			<p><iframe width="475" height="475" id="gmap_canvas" src="https://maps.google.com/maps?q=Im%20Obstgarten%2018c%208602%20Wangen&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></p>
		</div>
	</div>
	</div>

	<footer>
		<p>&copy; 2020, Altorfer, Freitag, Raduner </p>
	</footer>
	<button onclick="topFunction()" id="TopButton" title="Nach oben gehen">Nach oben</button>
	<script src="scroll.js" />
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
