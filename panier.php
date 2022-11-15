<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="style1.css">
  <script src="script.js"></script>
</head>
<body>
    <div class="liste_panier">
        <h1>La liste de vos bonnes pratiques est prête </h1>
    </div>

</body>
</html>

<?php
require 'connect.php';

for ($i = 0; $i <= count($_POST); $i++) {
    
    $cles = array_keys($_POST);
    if (isset($cles[$i])){
        
        $practices = $database->query("SELECT * FROM goodPractices WHERE cle= '". (int) $cles[$i] ."'");  

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
    }
}
?>

<?php  // requetes pour les incontournables

        $practices = $database->query("SELECT * FROM goodPractices WHERE Incontournable= 'INCONTOURNABLE'");  

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
<button class="btn"><i class="fa fa-download"></i>Download</button>
    <a href="print.js">Télécharger</a>
          
        