<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<link rel="stylesheet"  href="CSS/blog .css">
<link rel="stylesheet"  href="css/nullify.css">



</head>
<body>
  <header>
          <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; menu</span>

        <div id="mySidenav" class="sidenav">
              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
              <a href="admin.php">CV détaillé</a>
              <a href="php/ajoutcompetences_info.php">ajouter</a>
              <a href="modifier.ajoutcompetences_info.php">modifier</a>
              <a href="sup.competences_info.php">supprimer</a>

          </div>
      <div class="titre">
        <a href="index.php">
            <h1>Groupe 3 </h1>
        </a>
      </div>
        <br>
        <h2>Gerer mon compte </h2>
  </header>
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
