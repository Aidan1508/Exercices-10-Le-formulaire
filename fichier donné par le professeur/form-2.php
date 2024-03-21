<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Nettoyage et validation des données entrantes
    $nom = strip_tags(trim($_POST["nom"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $message = strip_tags(trim($_POST["message"]));

    // Vérification des données (ex. si elles ne sont pas vides)
    if (empty($nom) || !filter_var($email, FILTER_VALIDATE_EMAIL) || empty($message)) {
        // Une des données est invalide, traiter l'erreur ici
        echo "Erreur dans les données du formulaire.";
        exit;
    }

    // Préparation de l'e-mail
    $destinataire = ".....@.....be";
    $sujet = "Nouveau message de $nom depuis mon portfolio";
    $contenu = "Vous avez reçu un nouveau message de $nom ($email):\n\n$message";
    $headers = "From: $email";

    // Envoi de l'e-mail
    if (mail($destinataire, $sujet, $contenu, $headers)) {
        echo "Merci, $nom. Votre message a été envoyé.";
    } else {
        echo "Désolé, une erreur est survenue lors de l'envoi de votre message.";
    }
} else {
    // Méthode de requête non autorisée
    echo "Méthode de requête non autorisée.";
}
?>
