<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>Creation de compte</title>
	<link  href="css/blog .css">

</head>

<header>
	<nav>
				<ul>
					<li><a href="">Accueil</a></li>
					<li><a href="https://google.fr">Google</a></li>
				</ul>
				<div class="right">
					<img src="1.png">
					<div class="login">
						<form action="index.php" method="post">
							<input type="email" name="email" placeholder="Accueil">
							<input type="password" name="password" placeholder="Mot de passe">
							<button type="submit" name="submit">Se connecte</button>
						</form>

					</div>
				</div>
	</nav
</header>
<body>
	<h2>Presentation</h2>
	<br>
	<br>

	<form action="signup.php" method="post">
		<select name="genre">
			<option value="r">Robot</option>
			<option value="m">Monsieur</option>
			<option value="f">Madame</option>
		</select>

		<label for="firstname">Prénom</label>
		<input type="text"
			name="firstname"
			value=""
			placeholder="Prenom"
			required="">
		<br>
		<label for="birthdate">date de naissance</label>
		<input type="date"
		 name="birthdate"
		 value=""
		 required="">
		 <br>
		 <label for="email">Adresse mail</label>
		 <input type="email"
		  		name="phone"
		  		placeholder="telephone"
		  		value=""
		  		required="">
		  <br>
		  <label for="phone">Numero de telephone</label>
		  <input type="telephone"
		  		 name="phone"
		  		 placeholder="telephone"
		  		 value=""
		  		 required="">
		  <br>

		  <br>
		  <label for="Adress">adresse</label>
		  <input type="text"
		  		 name="adress"
		  		 placeholder="numero et non de rue"
		  		 value=""
		  		 required="">
		  <input type="number"
		  		 name="zipcode"
		  		 placeholder="code postal"
		  		 value=""
		  		 required="">
		  <input type="text"
		  		 name="city"
		  		 placeholder="nom de la ville"
		  		 value="">
		  <br>
		  <hr>

		  <h2>Profession</h2>
		  <br>
		  <br>
		  	<label for="diplome">Diplome</label>
		    <select name="diplome">
			<option value="b">brevet</option>
			<option value="bs">Baccalaureat</option>
			<option value="bc">Bachelor</option>
			<option value="m">Master</option>
		</select>
		<br>
		 <label for="Experience">Avez-vous une experience professionnelle?:</label>
		    <textarea name="Experience"
		  			rows="8"
		  			cols="80">
		  	</textarea>
		  	<br>
		  	<label for="birthdate">date de debut</label>
		<input type="date"
		 name="Experience"
		 value="">
		 <br>
		  	<label for="birthdate">date de fin</label>
		<input type="date"
		 name="Experience"
		 value="">
		<br>
		 <label for="Plus">Avez-vous des informatition supllementaire a rajouter?:</label>
		    <textarea name="Plus"
		  			rows="6"
		  			cols="60"></textarea>

		<br>
		<hr>
		<h2>Centre d'interet</h2>
		<br>
	    <br>


		 <label for="interet">Quelles sont vos centres d' interets ?:</label>
		    <textarea name="interet"
		  			rows="3"
		  			cols="80"></textarea>
		<br>
		<label for="qualité">Avez-vous des qualités particulieres ?:</label>
		    <textarea name="qualité"
		  			rows="2"
		  			cols="80"></textarea>
		<br>
		<label for="projet">Avez vous un projet en cours ?Si oui, parlez de ce projet et quand pensez vous le finir ?:</label>
		<select name="projet">
			<option value="o">oui</option>
			<option value="n">non</option>
		<br>
		    <textarea name="projet"
		  			rows="8"
		  			cols="80"></textarea>


		  <br>
		  <input name="" type="checkbox" name="cgu" value="">J'accepte les conditition pour acceder a ce site</label>
		  <br>
		  <button type="button" name="button">modifier mon cv </button>


	</form>
	<div class="carre"></div>

</body>
</html>
