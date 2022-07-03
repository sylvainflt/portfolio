<?php

$errors = [];

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
    /*$Format_Message = '#^[a-zA-Z0-9?!(),;:áàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ\.\_\-\s]{1,1000}$#';
    if(!preg_match($Format_Message , $_POST['message'])){
        $errors['messageFormat'] = "Le message ne correspond pas au format attendu (caractères spéciaux interdits, limite de 1000 caractères).";
    }*/
    $Format_Name = "/^[A-Za-z '-]*$/";
    if(!preg_match($Format_Name , $_POST['nameContact'])){
        $errors['nameFormat'] = "Le format du nom saisi n'est pas valide. Veuillez écrire sans accents ni caractères spéciaux.";
    }
    /*$Format_Object = "#^[a-zA-Z0-9?!áàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ\.\_\-\s]{0,200}$#";
    if(!preg_match($Format_Object , $_POST['objectContact'])){
        $errors['objectFormat'] = "Le format de l'objet saisi n'est pas valide. Veuillez écrire sans accents ni caractères spéciaux.";
    }*/

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
?>
<form action="sendEmail.php" method="post" id="formContact">
    <div id="nuages">
                            
        <?php if(array_key_exists('errors', $_SESSION)): ?>
            <div class="alert alert-danger">
                <?= implode('<br>', $_SESSION['errors']); ?>
            </div>
        <?php endif; ?>
        <?php if(array_key_exists('success', $_SESSION)): ?>
            <div class="alert alert-success">
                Votre e-mail a bien été envoyé.
            </div>
        <?php endif; ?>

        <div class="form-floating" id="nuageNom">
        <input type="text" class="form-control" id="nameContact" name="nameContact" placeholder="Nom" 
                pattern="^[A-Za-z '-]+$" maxlength="20"
                value="<?= isset($_SESSION['inputs']['nameContact']) ? $_SESSION['inputs']['nameContact'] : '';?>">
            <label for="nameContact">Nom :</label>
        </div>								                                                            
        <div class="form-floating" id="nuageObjet">
            <input type="text" class="form-control" id="objectContact" name="objectContact" placeholder="Objet"
                value="<?= isset($_SESSION['inputs']['objectContact']) ? $_SESSION['inputs']['objectContact'] : '';?>">
            <label for="objectContact">Objet : </label>
        </div>                    
        <div class="form-floating" id="nuageEmail">
            <input type="email" class="form-control" id="emailContact" name="emailContact" placeholder="Email" 
                required pattern="^[A-Za-z]+@{1}[A-Za-z]+\.{1}[A-Za-z]{2,}$"
                value="<?= isset($_SESSION['inputs']['emailContact']) ? $_SESSION['inputs']['emailContact'] : '';?>">
            <label for="emailContact">E-mail : </label>
        </div>                            
                
        <div class="form-floating" id="nuageMessage">
            <!-- zone de texte étirable -->								
            <textarea class="form-control" id="message" name="message" placeholder="Ecrivez votre message" style="height: 200px" required><?= isset($_SESSION['inputs']['message']) ? $_SESSION['inputs']['message'] : '';?></textarea>									
            <label for="message">Message : </label>
        </div>
                                                
        <div class="form-check" id="nuageConditions">
            <!-- utilisation d'une case à cocher -->
            <input class="form-check-input" type="checkbox" id="checkCond" name="checkCond" required
                    value=<?= isset($_SESSION['inputs']['checkCond']) ? $_SESSION['inputs']['checkCond'] : 'off';?>>
            <label class="form-check-label" for="checkCond">
                Accepter les conditions
            </label>
        </div>
        <div id="nuageBouton" onclick="contactSubmit()">                                            
            <a>Envoyer</a>               
        </div>    
    </div>
</form>
<?php
unset($_SESSION['inputs']);
unset($_SESSION['errors']);
unset($_SESSION['success']);
?>