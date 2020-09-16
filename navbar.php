<?php
echo '
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-black">
		<a class="navbar-brand" href="#">
			<img src="images/logo_mybar.png" height="50">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item"> <a class="nav-link" href="http://localhost/bar/#">Home</a> </li>
				<li class="nav-item"> <a class="nav-link" href="http://localhost/bar/#our_drinks">Our Drinks</a> </li>
				<li class="nav-item"> <a class="nav-link" href="http://localhost/bar/#ueber">Über</a></li>
				<li class="nav-item"> <a class="nav-link" href="http://localhost/bar/#galelrie">Galerie</a></li>
				<li class="nav-item"> <a class="nav-link" href="http://localhost/bar/#mixology_events">Kurse &amp Events</a></li>
				<li class="nav-item"> <a class="nav-link" href="http://localhost/bar/#kontakt">Kontakt</a></li>
			</ul>
			<ul class="navbar-nav">';


if (isset($_SESSION['user'])) {
	echo '<li class="nav-item">Sie sind angemeldet als ' . $_SESSION['user']['username'] . '</li>
		  <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>';
} else {
	echo '<li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
		  <li class="nav-item"><a class="nav-link" href="register.php">Registrieren</a></li>';
}
echo '
			</ul>
		</div>
	</nav>
';
