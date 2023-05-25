<?php
require_once "Employe.php";
require_once "Cadre.php";

$employe1 = new Employe('Rogaska','Svetlana','2590688456951',2900,'Developper');
$employe2 = new Employe('Jean','Neymar','1850389546458',1500.56,'Soudeur');
$employe3 = new Employe('Simon','Jeremy','179028955812',1700.47,'Assistant Mécanicien');
$employe4 = new Employe('Odile','Deray','285097154678',1900.14,'Magasinière');

$cadre1 = new Cadre('Deloin','Alain','1840259453666',2100.23,'chef maintenance',[$employe2,$employe4]);
$cadre2 = new Cadre('Rogaska','Alina','2840959473966',3500.54,'chef Service',[$employe1,$employe3]);


// echo $employe1->effectueSonJob();
// echo $employe2->effectueSonJob();
// echo $employe3->effectueSonJob();
// echo $employe4->effectueSonJob();
echo '<br><br>Appel Manage Cadre1 sans augmentation !!<br> ';
echo $cadre1->manage();
echo "</div><div>";
$cadre1->augmenteUnSalarie($employe2,10);
$cadre1->augmenteUnSalarie($employe4,20);
echo '<br><br>Appel Manage Cadre1 avec augmentation !!<br> ';
echo $cadre1->manage();
echo "</div><br>-------------------------------------------------------------------------<br>";
echo '<br><br>Appel Manage Cadre2 sans augmentation !!<br> ';
echo $cadre2->manage();
echo "<br><br><br><br><br><br><br>";
$cadre2->augmenteUnSalarie($employe3,10);
$cadre2->augmenteUnSalarie($employe1,20);
echo '<br><br>Appel Manage Cadre2 avec augmentation !!<br> ';
echo $cadre2->manage();
echo '</div>';





    
    
    
    
    
?>