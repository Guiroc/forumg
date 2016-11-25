<?php
include ("\kernel\model.php");
include ("\kernel\utilisateur.php");
include ("\kernel\sujet.php");
include ("\kernel\message.php");
$unutilisateur = new utilisateur(10,"azerty","azerty@gmail.com","azerty");

echo $unutilisateur->get_utilisateur_id();
echo $unutilisateur->get_utilisateur_pseudo();
echo $unutilisateur->get_utilisateur_e_mail();
echo $unutilisateur->get_utilisateur_mot_passe();
echo "</br></br>";
$tableau= array("utilisateur_pseudo"=>"azertyaa","utilisateur_e_mail"=>"azey16@gmail.com","utilisateur_mot_de_passe"=>"123456");
//print_r($tableau);
//$unutilisateur->create($tableau);

//$unutilisateur->set_utilisateur_id(80);
$unutilisateur->set_utilisateur_pseudo("poiuu1234");
$unutilisateur->set_utilisateur_e_mail("poiuu123@gmail.com");
$unutilisateur->set_utilisateur_mot_passe("poiuu1234");
//$unutilisateur->create2();

echo "</br>".$unutilisateur->get_total();
echo "</br></br>";
$a= array("43","poiuu","poiuu@gmail.com","poiuu");
$unutilisateur->update();

$unutilisateur->read(10);
echo "</br></br>";
$a=$unutilisateur->find("utilisateur_pseudo='alexandre'");
//print_r($a);
echo $unutilisateur->get_utilisateur_id();
echo $unutilisateur->get_utilisateur_pseudo();
echo $unutilisateur->get_utilisateur_e_mail();
echo $unutilisateur->get_utilisateur_mot_passe();
echo "</br></br>";
//$unutilisateur->delete(5);

//echo '<pre>';
//print_r($GLOBALS);
//echo '</pre>';

//$unutilisateur->delete();
unset($unutilisateur);
//echo "header("");"

$unsujet = new sujet();
//$unsujet->create();
$unsujet->read(1);
//echo $unsujet->get_sujet_utilisateur_id()->get_utilisateur_pseudo();
//var_dump($unsujet);

$unmessage = new message();
//$unmessage->create();
$unmessage->read(1);
//var_dump($unmessage);
?>