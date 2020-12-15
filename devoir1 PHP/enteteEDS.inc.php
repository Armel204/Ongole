<!DOCTYPE html>
<?php
$variable1=" EDUCATION DANS LES ARTS ET LES SCIENCES ";
?>
<html lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php
echo "<title>Une page pleine d'inclusions $variable1</title>";
?>
</head>
<body>
<?php
$variableext="Verset à mémoriser</br>
« Les cieux racontent la gloire de Dieu,
et l’étendue manifeste l’œuvre de ses mains »
(Ps 19.1,)";
echo "<div><h1 style=\"border-width:5;border-style:double;background-color:#ffcc99;\">
LECON 10: $variable1 </h1>";
echo "<h3> $variableext</h3>";
echo "Nom du fichier ex&#233;cut&#233;: ", $_SERVER['PHP_SELF'],"&nbsp;&nbsp;&nbsp;";
echo " Nom du fichier inclus : ", __FILE__ ,"</div> "; 
?>