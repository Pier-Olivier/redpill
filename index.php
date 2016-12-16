<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Calibrage impression</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
</head>
<body>
<?php

$ratio_hauteur_corps = 472;
//$ratio_hauteur_corps = 268;

if ($_POST){
    $titre = $_POST['titre'];
    $nb2lignes = $_POST['nb2lignes'];
    $largeur = $_POST['largeur'];
    $hauteur = $_POST['hauteur'];

    if (isset($_POST['sauver']))
        echo 'sauver';
}
else{
    $titre = 'defaut';
    $nb2lignes = 55;
    $largeur = 730;
    $hauteur = 1070;
}
?>
<style>
    body{
        font-family: arial;
    }

    input{
        width: 60px;
    }

    .page{
        border: 1px black solid;
        width: <?php echo $largeur ?>px;
        height: <?php echo $hauteur ?>px;
    }

    .lignes{
        margin-top : 25px;
        position: absolute;
    }

    .tete{
        background-color: red;
        width: 100%;
        height: 25%;
    }

    .corps{
        background-color: yellow;
        width: 100%;
        height: <?php echo $ratio_hauteur_corps ?>%;
    }

    .pied{
        background-color: green;
        width: 100%;
        height: 10%;
    }

    
</style>
<div class="page">
    
<div class="tete">
<form method="post">
<label>titre : </label>
<input name="titre" value="<?php echo $titre ?>" type="text">
<label>nr de lignes : </label>
<input name="nb2lignes" value="<?php echo $nb2lignes ?>" type="text">
<label>largeur : </label>
<input name="largeur" value="<?php echo $largeur ?>" type="text">
<label>hauteur : </label>
<input name="hauteur" value="<?php echo $hauteur ?>" type="text">
<input name="tester" type="submit" value="tester" >
<input name="sauver" type="submit" value="sauver" >
</form>
</div>
<div class="corps">
<?php
for ($i=1; $i<=$nb2lignes; $i++){
        echo $i.' ________________________________________________________________<br />';

}
?>
</div>

<div class="pied">

</div>

</div>

</body>
</html>