<?php
if ($_SERVER['REQUEST_METHOD']=='POST') {
  $nombreErreur = 0;
  if (!isset($_POST['email'])) { // Si la variable "email" du formulaire n'existe pas (il y a un problème)
    $nombreErreur++; // On incrémente la variable qui compte les erreurs
    $erreur1 = '<p>Il y a un problème avec la variable "email".</p>';
  } else { // Sinon, cela signifie que la variable existe (c'est normal)
    if (empty($_POST['email'])) { // Si la variable est vide
      $nombreErreur++; // On incrémente la variable qui compte les erreurs
      $erreur2 = '<p>Vous avez oublié de donner votre email.</p>';
    } else {
      if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $nombreErreur++; // On incrémente la variable qui compte les erreurs
        $erreur3 = '<p>Cet email ne ressemble pas un email.</p>';
      }
    }
  }
  if (!isset($_POST['message'])) {
    $nombreErreur++;
    $erreur4 = '<p>Il y a un problème avec la variable "message".</p>';
  } else {
    if (empty($_POST['message'])) {
      $nombreErreur++;
      $erreur5 = '<p>Vous avez oublié de donner un message.</p>';
    }
  }    
  // (3) Ici, il sera possible d'ajouter plus tard un code pour vérifier un captcha anti-spam.
  if ($nombreErreur==0) { // S'il n'y a pas d'erreur
    // Ici il faut ajouter tout le code pour envoyer l'email.
    
    // Récupération des variables et sécurisation des données
    $name    = htmlentities($_POST['name']);
    $email   = htmlentities($_POST['email']);
    $message = htmlentities($_POST['message']);
    
    // Variables concernant l'email
    
    $destinataire = 'hello@aurelienj.com'; // Adresse email du webmaster (à personnaliser)
    $sujet = 'Message from AURELIENJ'; // Titre de l'email
    $contenu = '<html><head><title>Titre du message</title></head><body>';
    $contenu .= '<p><strong>Nom</strong>: '.$name.'</p>';
    $contenu .= '<p><strong>Email</strong>: '.$email.'</p>';
    $contenu .= '<p><strong>Message</strong>: '.$message.'</p>';
    $contenu .= '</body></html>'; // Contenu du message de l'email (en XHTML)
    
    // Pour envoyer un email HTML, l'en-tête Content-type doit être défini
    $headers = 'MIME-Version: 1.0'."\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
    
    // Envoyer l'email
    
    mail($destinataire, $sujet, $contenu, $headers); // Fonction principale qui envoi l'email
    echo '
    <script type="text/javascript">
    alert("MESSSSAGE SENNNDDD");
    </script>'; // Afficher un message pour indiquer que le message a été envoyé
        $nom = $email = $message = NULL;
    unset($_POST);// Dans le code présenté au chapitre précédent, cela signifie au code entre les commentaires (1) et (2).
  } else { // S'il y a un moins une erreur
    echo '
    <script type="text/javascript">
    alert("OOOPPPPSSSSSS not send...");
    </script>';
  }
}
?>