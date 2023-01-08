

<?php if (!empty($_POST['mail'] && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['sexe']) && !empty($_POST['date']) && !empty($_POST['cp']) && !empty($_POST['sujet']) && !empty($_POST['quest']))) {
    $mail = $_POST['mail'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $sexe = $_POST['sexe'];
    $date = $_POST['date'];
    $cp = $_POST['cp'];
    $sujet = $_POST['sujet'];
    $quest = $_POST['quest'];
    $quest = wordwrap($quest, 70);
    $desti = 'luca.malacie@gmail.com';
    $rec = 'De:' . $mail . '' . 'r/n' . 'Transférer à:' . $desti . '' .
        'X-Mailer: PHP/' . phpversion();
    $valide = mail($desti, $sujet, $quest, $rec);
    if (!valide) {
        echo ("Un problème est survenu");
    } else {
        echo ("Mail envoyé avec succès vous serez contacter sous peu");
        header('Location: ./contact.phtml');
    }
}
