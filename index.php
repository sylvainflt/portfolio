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
                <div class="CV"><a href="downloadCV.php" target="_blank">CV</a></div>
                <canvas id="canvas"></canvas>
                
                <div class="nom">
                    <p>
                        <span style="--i:1;">S</span>
                        <span style="--i:2;">Y</span>
                        <span style="--i:3;">L</span>
                        <span style="--i:4;">V</span>
                        <span style="--i:5;">A</span>
                        <span style="--i:6;">I</span>
                        <span style="--i:7;">N</span>
                        <span style="--i:8;">&nbsp;</span>
                    </p>
                    <p>
                        <span style="--i:9;">F</span>
                        <span style="--i:10;">O</span>
                        <span style="--i:11;">U</span>
                        <span style="--i:12;">C</span>
                        <span style="--i:13;">A</span>
                        <span style="--i:14;">U</span>
                        <span style="--i:15;">L</span>
                        <span style="--i:16;">T</span>
                    </p>
                </div>
                <h1 id="webdev">DEVELOPPEUR WEB</h1>

                <img id="photoEntree" src="./images/photo.png" alt="ma photo">

                <a id="lienBienvenu" class="lien" onclick="scrollToBienvenu()">
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


        <section id="mot">            

            <div class="CV"><a href="downloadCV.php" target="_blank">CV</a></div>

            <a id="lienTop" class="lien" onclick="scrollToTop()">
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
                <h2 class="bvp">Bienvenue sur mon portfolio</h2>                
            </div>            

            <div class="presentation">
                <p class="rvt">Basé sur de solides notions de 
                    <span class="bleuFonceColor">développement</span>,</p> 
                <p class="rvt2">    
                    avec un goût pour le <span class="bleuFonceColor">web</span>,</p>
                <p class="rvt3">    
                    je suis toujours en quête d'inspiration, d'<span class="bleuFonceColor">originalité</span>.</p>
                <img src="./images/portraitDessin2.png" class="portraitDessin" alt="portrait dessin">       
            </div>                                    

            <a id="lienRealisations" class="lien" onclick="scrollToRealisations()">
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

            <div class="CV"><a href="downloadCV.php" target="_blank">CV</a></div>
                
            <a id="lienBackBienvenu" class="lien" onclick="scrollBackToBienvenu()">
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
            
                <h2 class="bleuColor">Réalisations</h2>                        

                <div class="carouselDiv">
                    <!--
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
                    -->
                    <div class="container">
                        <div class="carousel">                                
                            <img src="./images/airGoRun.png" alt="airgo run" id="airGoRunScreen" ondragstart="drag1(event)" ontouchstart="touch1(event)">                                                                                    
                            <img src="./images/contactFormAMP.png" alt="formulaire de contact" id="contactForm" ondragstart="drag2(event)" ontouchstart="touch2(event)">
                            <img src="./images/blogAPI.png" alt="une api pour un blog" id="blogAPI" ondragstart="drag3(event)" ontouchstart="touch3(event)">
                            <img src="./images/MielConnect/MCheader.png" alt="miel connect" id="mielConnect" ondragstart="drag4(event)" ontouchstart="touch4(event)">
                            <img src="./images/RCMortagne/RCMortagne.jpg" alt="RC Mortagne" id="RCMortagne" ondragstart="drag5(event)" ontouchstart="touch5(event)">
                            <img src="./images/nature.png" alt="nature point de vue" id="naturePV" onclick="document.location = 'nature.php';" ondragstart="drag6(event)" ontouchstart="touch6(event)">                            
                        </div>
                    </div> 
                    
                    <div id="descProj1" class="descProj"><h4 id="AirGoP">Projet AirGo Run</h4><p>Premier projet design puis intégration, promotion de montres sportives.</p></div>                                        
                    <div id="descProj2" class="descProj"><h4 id="AMPContactP">Page contact projet AMP</h4><p>Projet de stage, création d'une page web pour le site AMP.</p></div>
                    <div id="descProj3" class="descProj"><h4 id="BlogAPIP">Projet blog API</h4><p>Projet de stage, une API nodeJS TypeScript pour une application Blog.</p></div>
                    <div id="descProj4" class="descProj"><h4 id="MielConnectP">Projet Miel Connect</h4><p>Intégration d'une maquette faite par des designers. Projet Miel Connect avec Wordpress.</p></div>
                    <div id="descProj5" class="descProj"><h4 id="RCMortagneP">Projet RC Mortagne</h4><p>Mon projet de formation, développer le site d'une équpe de football avec Symfony.</p></div>
                    <div id="descProj6" class="descProj"><h4 id="NaturePVP">Projet Nature</h4><p>Création d'une page avec l'effet parallax.</p></div>

                </div>                                   
                
                <div id="overlay">
                    <img src="./images/airGoRun.png" id="airGoRunBigScreen" alt="airGoRun big screen">
                </div>                                
                <div id="overlay2">
                    <img src="./images/contactFormAMP.png" id="contactFormBigScreen" alt="formulaire de contact">
                </div>
                <div id="overlay3">
                    <img src="./images/blogAPI.png" id="blogAPIBigScreen" alt="blog API">
                </div>
                <div id="overlay4">
                    <img src="./images/MielConnect/MCheader.png" id="mielConnectBigScreen" alt="miel connect grand">
                    <img src="./images/MielConnect/MCpres.png" id="mielConnect2BigScreen" alt="miel connect grand">
                </div>
                <div id="overlay5">
                    <img src="./images/RCMortagne/RCMortagne.jpg" id="RCMortagneBigScreen" alt="RC Mortagne grand">
                    <img src="./images/RCMortagne/lactu.png" id="RCMActuBigScreen" alt="RC Mortagne grand">
                </div>
                
            </div>
            <a id="lienSkills" class="lien" onclick="scrollToSkills()">
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

            <div class="CV"><a href="downloadCV.php" target="_blank">CV</a></div>                

            <a id="lienBackToRealisations" class="lien" onclick="scrollBackToRealisations()">
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
                <h2 class="bleuColor competences">Compétences</h2>
            </div>
            <div class="skillsTable">
                <div class="skill">
                    <a data="https://fr.wikipedia.org/wiki/HTML" target="_blank">
                        <div class="contourLogo" >
                            <img src="./images/logos/javascripthtmlcss.png" onclick="afficheTechno(event)">
                        </div>
                    </a>  
                    <p>HTML, CSS ainsi que Javascript sont la base de tous site internet. J'ai utilisé ces langages dans chaque projet.</p>                  
                </div>
                <div class="skill">
                    <a data="https://fr.wikipedia.org/wiki/PHP" target="_blank">
                        <div class="contourLogo">
                            <img src="./images/logos/PHP-logo.svg" onclick="afficheTechno(event)">
                        </div>
                    </a>
                    <p>J'ai utilisé PHP dans des exercices et TPs, PHP étant le langage côté serveur le plus utilisé.</p>                                                      
                </div>
                <div class="skill">
                    <a data="https://fr.wikipedia.org/wiki/WampServer" target="_blank">
                        <div class="contourLogo">
                            <img src="./images/logos/WampServer-logo.png" onclick="afficheTechno(event)">
                        </div>
                    </a>
                    <p>WampServer est un outils trés pratique incluant un serveur apache ainsi que mySql pour les bases de données.</p>                                  
                </div>
                <div class="skill">                 
                    <a data="https://fr.wikipedia.org/wiki/Symfony" target="_blank">
                        <div class="contourLogo">
                            <img src="./images/logos/symfony_logo_vertical.png.webp" onclick="afficheTechno(event)">
                        </div>
                    </a>
                    <p>Symfony est un framework basé sur PHP. Je l'ai utilisé notamment pour mon projet RCMortagne.</p>                                  
                </div>
                <div class="skill">
                    <a data="https://fr.wikipedia.org/wiki/Node.js" target="_blank">
                        <div class="contourLogo">
                            <img src="./images/logos/Node.js_logo.svg" onclick="afficheTechno(event)">
                        </div>
                    </a>
                    <p>NodeJs est un langage côté serveur basé sur Javascript. Je l'ai utilisé pour mon projet Blog.</p>                                  
                </div>
                <div class="skill">
                    <a data="https://fr.wikipedia.org/wiki/React" target="_blank">
                        <div class="contourLogo">
                            <img src="./images/logos/React-icon.svg" onclick="afficheTechno(event)">
                        </div>
                    </a>
                    <p>J'ai utilisé le framework React dans mon projet react-portfolio.</p>                                  
                </div>
                <div class="skill">
                    <a data="https://fr.wikipedia.org/wiki/Next.js" target="_blank">
                        <div class="contourLogo">
                            <img src="./images/logos/Nextjs-logo.svg" onclick="afficheTechno(event)">
                        </div>
                    </a>
                    <p>J'ai utilisé le framework NextJs dans mon projet Blog.</p>                                  
                </div>
                <div class="skill">
                    <a data="https://fr.wikipedia.org/wiki/PostgreSQL" target="_blank">
                        <div class="contourLogo">
                            <img src="./images/logos/postgreSql.png" onclick="afficheTechno(event)">
                        </div>
                    </a>
                    <p>J'ai utilisé le système de gestion de base de données PostgreSql dans mon projet Blog.</p>                                  
                </div>
                <div class="skill">
                    <a data="https://www.prisma.io/" target="_blank">
                        <div class="contourLogo">
                            <img src="./images/logos/prisma-2.svg" onclick="afficheTechno(event)">
                        </div>
                    </a>
                    <p>J'ai utilisé l'ORM Prisma dans mon projet Blog.</p>                                  
                </div>
                <div class="skill">
                    <a data="https://fr.wikipedia.org/wiki/Bootstrap_(framework)" target="_blank">
                        <div class="contourLogo">
                            <img src="./images/logos/Bootstrap_logo.png" onclick="afficheTechno(event)">
                        </div>
                    </a>
                    <p>J'ai utilisé Bootstrap dans différents projets, pour le positionnement.</p>                  
                </div>
                <div class="skill">
                    <a data="https://fr.wikipedia.org/wiki/Wordpress" target="_blank">
                        <div class="contourLogo">
                            <img src="./images/logos/wordpressLogo.png" onclick="afficheTechno(event)">
                        </div>
                    </a>
                    <p>J'ai développé avec Wordpress le projet Miel Connect.</p>                  
                </div>
                <div class="skill">
                    <a data="https://fr.wikipedia.org/wiki/Figma" target="_blank">
                        <div class="contourLogo">
                            <img src="./images/logos/figma-logo-carre_500x.webp" onclick="afficheTechno(event)">
                        </div>
                    </a>
                    <p>J'ai utilisé Figma à plusieurs reprises pour faire les maquettes. (airGoRun, B/D)</p>                                  
                </div>
                <div class="skill">                             
                    <a data="https://fr.wikipedia.org/wiki/GitHub" target="_blank">
                        <div class="contourLogo">
                            <img src="./images/logos/GitHub-Logo.png" onclick="afficheTechno(event)">
                        </div>
                    </a>
                    <p>Une bonne partie des développements sur lesquels j'ai travaillé sont sur Github.</p>                                                  
                </div>

                <div class="centreSkills" onclick="demarrage()"></div>
            </div>
            <a id="lienContact" class="lien" onclick="scrollToContact()">
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

            <div class="CV"><a href="downloadCV.php" target="_blank">CV</a></div>                

            <a id="lienBackToSkills" class="lien" onclick="scrollBackToSkills()">
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

            <?php include 'formContact.php'; ?>
            
        </section>

    </main>
    <footer class="bleuColor">Sylvain Foucault - <a class="bleuColor" href="mentionsLegales.php" target="_blank">Mentions Légales</a></footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>     
    <script src="./js/script.js"></script>
    <script src="./js/carousel.js"></script>
</body>

</html>