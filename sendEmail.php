<?php

ini_set( 'display_errors', 1 );
error_reporting( E_ALL );

try{
    if(!isset($_POST['nameContact'])) throw new Exception("Le paramètre nom est absent");
    if(!isset($_POST['objectContact'])) throw new Exception("Le paramètre objet est absent");
    if(!isset($_POST['emailContact'])) throw new Exception("Le paramètre email est absent");
    if(!isset($_POST['message'])) throw new Exception("Le paramètre message est absent");

    $Format_Email = '#[a-z0-9]{1,}[\-\_\.a-z0-9]{0,}@[a-z]{2,}[\-\_\.a-z0-9]{0,}\.[a-z]{2,6}$#';
    if(!preg_match($Format_Email, $_POST['emailContact']))  throw new Exception("Le paramètre email ne correspond pas au format attendu");

    $Format_Message = '#^[a-zA-Z0-9áàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ\.\_\-\s]{1,500}$#';
    if(!preg_match($Format_Message , $_POST['message']))  throw new Exception("Le message ne correspond pas au format attendu - limite de 500 caractères");
    $Format_Name = "/^[A-Za-z '-]+$/";
    if(!preg_match($Format_Name , $_POST['nameContact']))  throw new Exception("Le format du nom saisi n'est pas valide. Veuillez écrire sans accents ni caractères spéciaux.");
    
}
catch(Exception $e) {
    echo 'Message: ' .$e->getMessage();
};

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
/*Si les champs email, et message ne sont pas vides et si les donnees ont
    *bien la forme attendue...*/
if (!empty($email)
    && strlen($name) <= 20
    && !empty($message)
    && filter_var($email, FILTER_VALIDATE_EMAIL)){

        // Remplacement de certains caractères spéciaux
        $message = str_replace("&#039;","'",$message);
        $message = str_replace("&#8217;","'",$message);
        $message = str_replace("&quot;",'"',$message);
        $message = str_replace('<br>','',$message);
        $message = str_replace('<br />','',$message);
        $message = str_replace("&lt;","<",$message);
        $message = str_replace("&gt;",">",$message);
        $message = str_replace("&amp;","&",$message);

        try{
            $headers = 'From: '.$name.' <'.$email.'>' . "\r\n";
            $retour = mail("test1@myselfteam209626.testinator.com", $objet, $message, $headers);
        }
        catch(Exception $e) {
            echo 'Message: ' .$e->getMessage();
        };

    }else
    {
        echo 'un des champs est vide ...';
        echo '$email '.$email;
        echo '$name '.$name;
        echo '$message '.$message;
    };

if($retour){
    echo 'email envoyé';
}
else{
    echo 'email non envoyé';
}

//header('Location: index.php#contact');