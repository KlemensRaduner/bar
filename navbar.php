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
				<li class="nav-item"> <a class="nav-link" href="../bar/index.php#">Home</a> </li>
				<li class="nav-item"> <a class="nav-link" href="../bar/index.php#ueber">Über</a></li>
				<li class="nav-item"> <a class="nav-link" href="../bar/index.php#our_drinks">Unsere Drinks</a> </li>
				<li class="nav-item"> <a class="nav-link" href="../bar/index.php#mixology_events">Kurse &amp Events</a></li>
				<li class="nav-item"> <a class="nav-link" href="../bar/index.php#kontakt">Kontakt</a></li>
			</ul>
			<ul class="navbar-nav">';

if (isset($_SESSION['user'])) {
	echo '<li class="nav-text">Sie sind als ' . $_SESSION['user']['username'] . ' angemeldet </li>
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
