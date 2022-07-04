<?php

$errors = [];

if(!empty($_POST['postId'])){
    $errors['postId'] = "Le champ postId n'est pas renseigné comme il faut.";
}

if(!isset($_POST['emailContact']) || empty($_POST['emailContact'])){
    $errors['email'] = "Le champ email n'est pas renseigné.";
}
if(!isset($_POST['message']) || empty($_POST['message'])){
    $errors['message'] = "Le champ message n'est pas renseigné.";
}
if(!isset($_POST['checkCond']) || empty($_POST['checkCond']) || !$_POST['checkCond']){
    $errors['conditions'] = "Veuillez accépter les conditions.";
}
$name = valid_donnees($_POST['nameContact']);
$objet = valid_donnees($_POST['objectContact']);
$email = valid_donnees($_POST['emailContact']);
$message = valid_donnees($_POST['message']);
function valid_donnees($donnees){
    $donnees = trim($donnees);
    $donnees = stripslashes($donnees);
    $donnees = htmlspecialchars($donnees);
    return $donnees;
}

$retour = false;

/*Si les champs email, et message ne sont pas vides */
if (!empty($email) && !empty($message)){

    // Remplacement de certains caractères spéciaux
    $message = str_replace("&#039;","'",$message);
    $message = str_replace("&#8217;","'",$message);
    $message = str_replace("&quot;",'"',$message);
    $message = str_replace('<br>','',$message);
    $message = str_replace('<br />','',$message);
    $message = str_replace("&lt;","<",$message);
    $message = str_replace("&gt;",">",$message);
    $message = str_replace("&amp;","&",$message);

    if(strlen($name) > 20){
        $errors['nameTooLong'] = "Le nom saisi dépasse la longueur maximale (20 caractères).";
    }
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['emailFormat'] = "L' e-mail saisi ne correspond pas au format attendu.";
    }
    $Format_Name = "/^[A-Za-z '-]*$/";
    if(!preg_match($Format_Name , $_POST['nameContact'])){
        $errors['nameFormat'] = "Le format du nom saisi n'est pas valide. Veuillez écrire sans accents ni caractères spéciaux.";
    }
    
    if(empty($errors)){
        try{
            $headers = 'From: '.$name.' <'.$email.'>' . "\r\n";
            $retour = mail("test1@myselfteam209626.testinator.com", $objet, $message, $headers);
        }
        catch(Exception $e) {
            $errors['envoiEmail'] = $e->getMessage();
        };
    }

}else
{
    $errors['errorRemplissage'] = "L' e-mail ainsi que le message doivent être impérativement renseignés.";            
};

if($retour){
    $success['emailEnvoye'] = 'E-mail envoyé.';
}
else{
    $errors['errorSending'] = 'E-mail non envoyé.';
}

session_start();

if(!empty($errors)){    
    $_SESSION['errors'] = $errors;
    $_SESSION['inputs'] = $_POST;
}else{
    $_SESSION['success'] = 1;
}

include 'formContact.php';

unset($_SESSION['inputs']);
unset($_SESSION['errors']);
unset($_SESSION['success']);
?>