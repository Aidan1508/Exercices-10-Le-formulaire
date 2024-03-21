<?php

$nom=$_POST["nom"];
$email=$_POST["email"];   // $nom=crétion de valeur   $_POST=méthode d'envoie (method="post")   ["nom"]=ciblage de l'étiquette (name="nom)"//
$message=$_POST["message"];

//echo "$nom";
//echo "$email";
//echo "$messsage";

//préparer l'amail

$destinataire="aidan.bara1508@gmail.com";
$sujet="Nouveau message de $nom depuis mon portfolio";
$contenu="$nom qui à l'adresse $email vous dit : $message";
$headers="From: $email";

//envoie de l'e-mail

mail($destinataire, $sujet, $contenu, $headers);



?>