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
            <input type="email" class="form-control" id="emailContact" name="emailContact" placeholder="Email" onfocus="checkMessage()"
                required pattern="^[A-Za-z]+@{1}[A-Za-z]+\.{1}[A-Za-z]{2,}$"
                value="<?= isset($_SESSION['inputs']['emailContact']) ? $_SESSION['inputs']['emailContact'] : '';?>">
            <label for="emailContact">E-mail : </label>
        </div>                            
                
        <div class="form-floating" id="nuageMessage">
            <!-- zone de texte étirable -->								
            <textarea class="form-control" id="message" name="message" placeholder="Ecrivez votre message" onfocus="checkMessage()" style="height: 200px" required><?= isset($_SESSION['inputs']['message']) ? $_SESSION['inputs']['message'] : '';?></textarea>									
            <label for="message">Message : </label>
        </div>
        
        <input type="hidden" id="postId" name="postId" value="">
        <div id="nuageBouton" onclick="contactSubmit()">                                            
            <a>Envoyer</a>               
        </div>    
    </div>
</form>