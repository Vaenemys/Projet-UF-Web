<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<link rel="stylesheet"  href="CSS/admin.css">


<body>
<header>
	<div class="navbar">


        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; menu</span>

        <div id="mySidenav" class="sidenav">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
          <a href="Administration.php">Administration</a>
					<a href="contact.php">Contact</a>

        </div>


        <div class="titre">
          <a href="index.php">
            <h1>Groupe 3 </h1>
          </a>
				</div>

			<h2> Cv détaillé</h2>
    </div>

  </header>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
<br>
<br>
<br>

	<form action="signup.html" method="post">
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
