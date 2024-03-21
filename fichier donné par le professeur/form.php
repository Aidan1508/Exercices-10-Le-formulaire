<?php

$nom=$_POST["nom"];
$email=$_POST["email"];
$message=$_POST["message"];

// préparer l'e-mail

$destinataire="...";
$sujet="Nouveau message de $nom depuis mon portfolio";
$contenu="$nom qui à l'adresse $email vous dit : $message";
$headers="From: $email";

// Envoi de l'e-mail

mail($destinataire, $sujet, $contenu, $headers);



?>