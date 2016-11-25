<?php
	include ("..\kernel\model.php");
	echo "----------class utilisateur----------</br>";
	include ("..\kernel\utilisateur.php");
	$unutilisateur = new utilisateur(1, "azerty", "azerty12@gmail.com", "P@ssw0rd");
	
	echo $unutilisateur->get_utilisateur_id()."</br>";
	echo $unutilisateur->get_utilisateur_pseudo()."</br>";
	echo $unutilisateur->get_utilisateur_e_mail()."</br>";
	echo $unutilisateur->get_utilisateur_mot_passe()."</br></br>";
	
	$unutilisateur->set_utilisateur_id(2);
	$unutilisateur->set_utilisateur_pseudo("qssdfgh");
	$unutilisateur->set_utilisateur_e_mail("qsdfgh45@gmail.com");
	$unutilisateur->set_utilisateur_mot_passe("password");
	
	echo $unutilisateur->get_utilisateur_id()."</br>";
	echo $unutilisateur->get_utilisateur_pseudo()."</br>";
	echo $unutilisateur->get_utilisateur_e_mail()."</br>";
	echo $unutilisateur->get_utilisateur_mot_passe()."</br></br>";
	 
	
	echo "----------class sujet----------</br>";
	include ("..\kernel\sujet.php");
	$unsujet = new sujet(1,"un pinguouin","c'est une histoire",2);
	
	echo $unsujet->get_sujet_id()."</br>";
	echo $unsujet->get_sujet_titre()."</br>";
	echo $unsujet->get_sujet_description()."</br>";
	echo $unsujet->get_sujet_utilisateur_id()."</br></br>";
	
	echo $unsujet->set_sujet_id(2);
	echo $unsujet->set_sujet_titre("un pingouin en joie");
	echo $unsujet->set_sujet_description("une blague");
	echo $unsujet->set_sujet_utilisateur_id(2);
	
	echo $unsujet->get_sujet_id()."</br>";
	echo $unsujet->get_sujet_titre()."</br>";
	echo $unsujet->get_sujet_description()."</br>";
	echo $unsujet->get_sujet_utilisateur_id()."</br></br>";
	
	
	echo "----------class message----------</br>";
	include ("..\kernel\message.php");
	$unmessage = new message (1, "Un canard", "Je vais vous raconter comment je suis devenus un canard.", "2016/10/14", "2016/10/14", 2, 2);
	
	echo $unmessage->get_message_id()."</br>";
	echo $unmessage->get_message_titre()."</br>";
	echo $unmessage->get_message_contenu()."</br>";
	echo $unmessage->get_message_date_creation()."</br>";
	echo $unmessage->get_message_date_edite()."</br>";
	echo $unmessage->get_message_sujet_id()."</br>";
	echo $unmessage->get_message_utilisateur_id()."</br></br>";
	
	$unmessage->set_message_id(2);
	$unmessage->set_message_titre("Un poussin");
	$unmessage->set_message_contenu("Je vais vous raconter comment je suis devenus un poussin.");
	$unmessage->set_message_date_creation("2016/9/29");
	$unmessage->set_message_date_edite("2016/10/05");
	$unmessage->set_message_sujet_id(2);
	$unmessage->set_message_utilisateur_id(2);
	
	echo $unmessage->get_message_id()."</br>";
	echo $unmessage->get_message_titre()."</br>";
	echo $unmessage->get_message_contenu()."</br>";
	echo $unmessage->get_message_date_creation()."</br>";
	echo $unmessage->get_message_date_edite()."</br>";
	echo $unmessage->get_message_sujet_id()."</br>";
	echo $unmessage->get_message_utilisateur_id()."</br></br>";
?>