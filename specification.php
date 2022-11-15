<?php
require 'connect.php';
$practices = $database->query("SELECT * FROM goodPractices WHERE Family = 'SPECIFICATIONS'");  
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="style1.css">
  <script src="script.js"></script>
</head>
<body>
        <div class="header">
          <h2 class="green">GREEN ATTITUDE</h2>
          <nav>
              <ul class="menu">
                  <li><a href="index.php"><h3>Accueil</h3></a></li>
                  <li><a href="strategie.php"><h3>Stratégies</h3></a></li>
                  <li><a href="specification.php"><h3>Spécifications</h3></a></li>
                  <li><a href="ux_ui.php"><h3>ux/ui</h3></a></li>
                  <li><a href="contenus.php"><h3>Contenus</h3></a></li>
                  <li><a href="architecture.php"><h3>Architecture</h3></a></li>
                  <li><a href="frontend.php"><h3>Frontend</h3></a></li>
                  <li><a href="backend.php"><h3>Backend</h3></a></li>
                  <li><a href="panier.php"><h3>Panier</h3></a></li>
              </ul>
          </nav>    
          
        </div> 
      <div class="famille">
        <h2>| Familles de Spécifications</h2>
      </div>
  
  <form action="panier.php" method="post">
  
  <div class="grid-container">

  <?php
    while($row = $practices->fetch(PDO::FETCH_OBJ)) {
      echo "<div href=''>
          <span>
            ".$row->Family."
          </span>
            <p>".$row->Recommendation."</p>
               <p><h3>Ajouter au panier</h3>
               <input type=\"checkbox\" name=\"". $row->cle . "\">
               </p> 
        </div>";
    }
   ?>

    </div>

    <input type="submit" value="submit">

  </form>

    <footer>
      <p>
       &copy; Design4green || 2022, 
     </p>
   </footer>
 
</body>
</html>