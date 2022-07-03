<?php session_start();
?><!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Sylvain Foucault - Développeur web</title>
    <link href="style.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="images/SF.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <nav id="nav">
        <span class="logo bleuColor">SF</span>
        <ul>
            <li><a href="#entree" id="testEntree">ENTREE</a></li>
            <li><a href="#mot">MOT</a></li>
            <li><a href="#realisations">REALISATIONS</a></li>
            <li><a href="#competences">COMPETENCES</a></li>
            <li><a href="#contact">CONTACT</a></li>
            <li><a href="downloadCV.php" target="_blank">CV</a></li>
        </ul>
    </nav>

    <main>

        <section>
            <div id="entree">
                <canvas id="canvas2"></canvas>

                <span style="--i:1;">S</span>
                <span style="--i:2;">Y</span>
                <span style="--i:3;">L</span>
                <span style="--i:4;">V</span>
                <span style="--i:5;">A</span>
                <span style="--i:6;">I</span>
                <span style="--i:7;">N</span>
                <span style="--i:8;">&nbsp;</span>
                <span style="--i:9;">F</span>
                <span style="--i:10;">O</span>
                <span style="--i:11;">U</span>
                <span style="--i:12;">C</span>
                <span style="--i:13;">A</span>
                <span style="--i:14;">U</span>
                <span style="--i:15;">L</span>
                <span style="--i:16;">T</span>

                <h1 id="webdev">DEVELOPPEUR WEB</h1>

                <a id="lienBienvenu" onclick="scrollToBienvenu()">
                    <svg width="24px" height="24px" viewBox="0 0 24 24">
                        <g id="Iconly/Two-tone/Arrow---Down-2" stroke="none" stroke-width="1"
                            fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                            <g id="Arrow---Down-2" transform="translate(5.000000, 8.500000)" stroke="#555" stroke-width="3">                            
                                <polyline id="Stroke-1" points="14 0 7 7 0 0" />
                            </g>
                        </g>                    
                    </svg>
                </a>

            </div> 
        </section>


        <section id="mot" onshow="afficherElements()">            

            <a id="lienTop" onclick="scrollToTop()">
                <svg width="24px" height="24px" viewBox="0 0 24 24">
                    <g id="Iconly/Two-tone/Arrow---Up-2" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                        <g id="Arrow---Up-2" transform="translate(12.000000, 12.000000) rotate(-180.000000) translate(-12.000000, -12.000000) 
                            translate(5.000000, 8.500000)" stroke="#f1f1f1" stroke-width="3">
                            <polyline id="Stroke-1" points="14 0 7 7 0 0"></polyline>
                        </g>
                    </g>
                </svg>
            </a>    
            <div class="title">
                <h2 class="bvp">Bienvenu sur mon portfolio</h2>                
            </div>            

            <div class="presentation">
                <p class="rvt">Basé sur de solides notions de 
                    <span class="bleuFonceColor">développement</span>,</p> 
                <p class="rvt2">    
                    avec un goût pour le <span class="bleuFonceColor">web</span>,</p>
                <p class="rvt3">    
                    je suis toujours en quête d'inspiration, d'<span class="bleuFonceColor">originalité</span>.</p>   
            </div>
            
            <img src="./images/desktop.svg" class="desktop">        
                    

            <a id="lienRealisations" onclick="scrollToRealisations()">
                <svg width="24px" height="24px" viewBox="0 0 24 24">
                    <g stroke="none" stroke-width="1"
                        fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                        <g transform="translate(5.000000, 8.500000)" stroke="#f1f1f1" stroke-width="3">                            
                            <polyline id="Stroke-1" points="14 0 7 7 0 0" />
                        </g>
                    </g>                    
                </svg>
            </a>
        </section>


        <section class="titleScreens" id="realisations">            

            <a id="lienBackBienvenu" onclick="scrollBackToBienvenu()">
                <svg width="24px" height="24px" viewBox="0 0 24 24">
                    <g id="Iconly/Two-tone/Arrow---Up-2" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                        <g id="Arrow---Up-2" transform="translate(12.000000, 12.000000) rotate(-180.000000) translate(-12.000000, -12.000000) 
                            translate(5.000000, 8.500000)" stroke="#1020dd" stroke-width="3">
                            <polyline id="Stroke-1" points="14 0 7 7 0 0"></polyline>
                        </g>
                    </g>
                </svg>
            </a>    

            <div>
            
                <div class="expoMvt">
                    <div class="premierMot bleuColor">Exposition</div> 
                    <div class="suite bleuColor"> 
                        <span>de mes réalisations</span>
                    </div>
                </div>                         

                <div class="carouselDiv">

                    <input checked id="one" name="multiples" type="radio" value="1">
                    <label for="one">1</label>            
                    <input id="two" name="multiples" type="radio" value="2">
                    <label for="two">2</label>            
                    <input id="three" name="multiples" type="radio" value="3">
                    <label for="three">3</label>                
                    <input id="four" name="multiples" type="radio" value="4">
                    <label for="four">4</label>                
                    <input id="five" name="multiples" type="radio" value="5">
                    <label for="five">5</label>                
                    <input id="six" name="multiples" type="radio" value="6">
                    <label for="six">6</label> 
                    
                    <div class="container">
                        <div class="carousel">
                            <img src="./images/airGoRun.png" alt="airgo run" id="airGoRunScreen">
                            <img src="./images/sportEmploi.png" alt="sport emploi" id="sportEmploi">
                            <img src="./images/bandd.png" alt="bien etre et diététique" id="bandd">
                            <img src="./images/contactFormAMP.png" alt="formulaire de contact" id="contactForm">
                            <img src="./images/MCheader.png" alt="miel connect" id="mielConnect">
                            <img src="./images/RCMortagne/RCMortagne.jpg" alt="RC Mortagne" id="RCMortagne">
                            
                        </div>
                    </div> 
                </div>                                   
                
                <div id="overlay">
                    <img src="./images/airGoRun.png" id="airGoRunBigScreen" alt="airGoRun big screen">
                </div>                
                <div id="overlay2">
                    <img src="./images/sportEmploi.png" id="sportEmploiBigScreen" alt="sport emploi screen">
                </div>
                <div id="overlay3">
                    <img src="./images/bandd.png" id="banddBigScreen" alt="bien etre et diététique">
                </div>
                <div id="overlay4">
                    <img src="./images/contactFormAMP.png" id="contactFormBigScreen" alt="formulaire de contact">
                </div>
                <div id="overlay5">
                    <img src="./images/MCheader.png" id="mielConnectBigScreen" alt="miel connect grand">
                    <img src="./images/MCpres.png" id="mielConnect2BigScreen" alt="miel connect grand">
                </div>
                <div id="overlay6">
                    <img src="./images/RCMortagne/RCMortagne.jpg" id="RCMortagneBigScreen" alt="RC Mortagne grand">
                    <img src="./images/RCMortagne/lactu.png" id="RCMActuBigScreen" alt="RC Mortagne grand">
                </div>
                    
            </div>
            <a id="lienSkills" onclick="scrollToSkills()">
                <svg width="24px" height="24px" viewBox="0 0 24 24">
                    <g stroke="none" stroke-width="1"
                        fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                        <g transform="translate(5.000000, 8.500000)" stroke="#1020dd" stroke-width="3">                            
                            <polyline id="Stroke-1" points="14 0 7 7 0 0" />
                        </g>
                    </g>                    
                </svg>
            </a>
        </section>

        <section class="skills" id="competences">

            <a id="lienBackToRealisations" onclick="scrollBackToRealisations()">
                <svg width="24px" height="24px" viewBox="0 0 24 24">
                    <g id="Iconly/Two-tone/Arrow---Up-2" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                        <g id="Arrow---Up-2" transform="translate(12.000000, 12.000000) rotate(-180.000000) translate(-12.000000, -12.000000) 
                            translate(5.000000, 8.500000)" stroke="#1020dd" stroke-width="3">
                            <polyline id="Stroke-1" points="14 0 7 7 0 0"></polyline>
                        </g>
                    </g>
                </svg>
            </a>

            <div class="skillsTitle">
                <h2 class="bleuColor">Compétences</h2>
            </div>
            <div class="skillsTable">
                <a href="https://fr.wikipedia.org/wiki/Hypertext_Markup_Language" target="_blank"><div class="contourLogo"><img src="./images/logos/javascripthtmlcss.png"></div></a>                    
            
                <a href="https://fr.wikipedia.org/wiki/PHP" target="_blank"><div class="contourLogo"><img src="./images/logos/PHP-logo.svg"></div></a>                                    
            
                <a href="https://fr.wikipedia.org/wiki/WampServer" target="_blank"><div class="contourLogo"><img src="./images/logos/WampServer-logo.png"></div></a>                
            
                <a href="https://fr.wikipedia.org/wiki/JQuery" target="_blank"><div class="contourLogo"><img src="./images/logos/jQuery.png"></div></a>                
            
                <a href="https://fr.wikipedia.org/wiki/Node.js" target="_blank"><div class="contourLogo"><img src="./images/logos/Node.js_logo.svg"></div></a>                
            
                <a href="https://fr.wikipedia.org/wiki/Symfony" target="_blank"><div class="contourLogo"><img src="./images/logos/symfony_logo_vertical.png.webp"></div></a>                
            
                <a href="https://fr.wikipedia.org/wiki/React" target="_blank"><div class="contourLogo"><img src="./images/logos/React-icon.svg"></div></a>                
            
                <a href="https://fr.wikipedia.org/wiki/Next.js" target="_blank"><div class="contourLogo"><img src="./images/logos/Nextjs-logo.svg"></div></a>                
            
                <a href="https://fr.wikipedia.org/wiki/PostgreSQL" target="_blank"><div class="contourLogo"><img src="./images/logos/postgreSql.png"></div></a>                
            
                <a href="https://www.prisma.io/" target="_blank"><div class="contourLogo"><img src="./images/logos/prisma-2.svg"></div></a>                
            
                <a href="https://fr.wikipedia.org/wiki/Figma" target="_blank"><div class="contourLogo"><img src="./images/logos/figma-logo-carre_500x.webp"></div></a>                
            
                <a href="https://fr.wikipedia.org/wiki/Canva" target="_blank"><div class="contourLogo"><img src="./images/logos/Canva-Logo.png"></div></a>                
            
                <a href="https://fr.wikipedia.org/wiki/Trello" target="_blank"><div class="contourLogo"><img src="./images/logos/trello-logo.png"></div></a>                
            
                <a href="https://fr.wikipedia.org/wiki/Git" target="_blank"><div class="contourLogo"><img src="./images/logos/git.png"></div></a>                
            
                <a href="https://fr.wikipedia.org/wiki/GitHub" target="_blank"><div class="contourLogo"><img src="./images/logos/GitHub-Logo.png"></div></a>
                
            </div>
            <a id="lienContact" onclick="scrollToContact()">
                <svg width="24px" height="24px" viewBox="0 0 24 24">
                    <g stroke="none" stroke-width="1"
                        fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                        <g transform="translate(5.000000, 8.500000)" stroke="#1020dd" stroke-width="3">                            
                            <polyline id="Stroke-1" points="14 0 7 7 0 0" />
                        </g>
                    </g>                    
                </svg>
            </a>
        </section>

        <section class="contact" id="contact">

            <a id="lienBackToSkills" onclick="scrollBackToSkills()">
                <svg width="24px" height="24px" viewBox="0 0 24 24">
                    <g id="Iconly/Two-tone/Arrow---Up-2" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                        <g id="Arrow---Up-2" transform="translate(12.000000, 12.000000) rotate(-180.000000) translate(-12.000000, -12.000000) 
                            translate(5.000000, 8.500000)" stroke="#1020dd" stroke-width="3">
                            <polyline id="Stroke-1" points="14 0 7 7 0 0"></polyline>
                        </g>
                    </g>
                </svg>
            </a>

            <h2 class="bleuColor" id="titreContact">Contact</h2>

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

        </section>



    </main>
    <footer class="bleuColor">Sylvain Foucault - Tous droits réservés 2022</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>    
    <script src="./js/script.js"></script>
</body>

</html>

<?php
unset($_SESSION['inputs']);
unset($_SESSION['errors']);
unset($_SESSION['success']);
?>