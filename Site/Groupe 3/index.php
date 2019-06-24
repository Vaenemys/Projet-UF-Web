<!DOCTYPE html>
<html lang="fr" dir="ltr">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="utf-8">
		<link rel="stylesheet"  href="CSS/index.css">
		<link rel="stylesheet"  href="blog denys.html">
		<link rel="stylesheet"  href="blog Adrien.html">
		<link rel="stylesheet"  href="blog Ryan.html">
		<link rel="stylesheet"  href="css/nullify.css">

		<link rel="stylesheet" href="/css/cv1.css">
	</head>

	<body>

  <header>

      <div class="navbar">

        <span class="" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; menu</span>

        <div id="mySidenav" class="sidenav">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
          <a href="admin.php">CV détaillé</a>
          <a href="Administration.php">Administration</a>

					<a href="contact.php">contact</a>

        </div>
        <div class="title">
          <a href="index.php">
            <h1>GROUPE 3</h1>
          </a>
        </div>
        <p class="p-center">Bienvenue sur le site  du groupe 3!!!</p>
      </div>

  </header>


<main>








			<div class="container">

						<img src="img/photo.jpg" alt="photo" class="picture" style="width:100%">
								<div class="middle">
									<a href="cv1.php"> <div class="text"> Denys DELAUNAY <br><br>
									ETUDIANT B1 INFORMATIQUE
									<br><br>
									19 ANS
									<br>
									<br>
									MON CV
								</div></a>

							</div>
					</div>
			</div>

		<div class="container">
						<img src="img/adrien.jpg" alt="adrien" class="picture" style="width:100%">
						<div class="middle">
							<a href="cv3.php"><div class="text">adrien Sanches <br><br>
								ETUDIANT B1 INFORMATIQUE.
							<br>
							<br>
								20	 ANS
				<br><br>
				MON CV
				</div></a>

			</div>
		</div>

		<div class="container">
			<img    src="img/ryan.jpg" alt="Ryan" class= "picture" width="100%">
			<div class="middle">
				<a href="cv3.php"><div class="text">Ryan SADAOUI <br><br>
					ETUDIANT B1 INFORMATIQUE.
					<br>
					<br>
					19 ANS
					<br>
					<br>
					MON CV


				</div></a>

			</div>
		</div>

		</div>
	</div>








</main>













<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>

</body>
</html>
