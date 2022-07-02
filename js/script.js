/*----------overlay------------------------------------*/
document.getElementById("airGoRunScreen").addEventListener("click", () => {
    document.getElementById("overlay").style.display = "block";
});
document.getElementById("overlay").addEventListener("click", () => {
    document.getElementById("overlay").style.display = "none";
});
/*------------overlay2-------------------------------*/
document.getElementById("sportEmploi").addEventListener("click", () => {
    document.getElementById("overlay2").style.display = "block";
});
document.getElementById("overlay2").addEventListener("click", () => {
    document.getElementById("overlay2").style.display = "none";
});
/*------------overlay3---------------------------------*/
document.getElementById("bandd").addEventListener("click", () => {
    document.getElementById("overlay3").style.display = "block";
});
document.getElementById("overlay3").addEventListener("click", () => {
    document.getElementById("overlay3").style.display = "none";
});
/*------------overlay4---------------------------------*/
document.getElementById("contactForm").addEventListener("click", () => {
    document.getElementById("overlay4").style.display = "block";
});
document.getElementById("overlay4").addEventListener("click", () => {
    document.getElementById("overlay4").style.display = "none";
});
/*------------overlay5---------------------------------*/
document.getElementById("mielConnect").addEventListener("click", () => {
    document.getElementById("overlay5").style.display = "block";
});
document.getElementById("overlay5").addEventListener("click", () => {
    document.getElementById("overlay5").style.display = "none";
});
/*------------overlay6---------------------------------*/
document.getElementById("RCMortagne").addEventListener("click", () => {
    document.getElementById("overlay6").style.display = "block";
});
document.getElementById("overlay6").addEventListener("click", () => {
    document.getElementById("overlay6").style.display = "none";
});
/*---------------------------------------------------------------scrolls----------------------------------------------------------------------*/
function scrollToBienvenu(){
    window.scrollTo({
        top: window.innerHeight,
        left: 0,
        behavior: 'smooth'
      });
}
function scrollToRealisations(){
    window.scrollTo({
        top: 2*window.innerHeight,
        left: 0,
        behavior: 'smooth'
      });
}
function scrollToSkills(){
    window.scrollTo({
        top: 3*window.innerHeight,
        left: 0,
        behavior: 'smooth'
      });
}
function scrollToContact(){
    window.scrollTo({
        top: 4*window.innerHeight,
        left: 0,
        behavior: 'smooth'
      });
}
function scrollBackToSkills(){
    window.scrollTo({
        top: 3*window.innerHeight,
        left: 0,
        behavior: 'smooth'
      });
}
function scrollBackToRealisations(){
    window.scrollTo({
        top: 2*window.innerHeight,
        left: 0,
        behavior: 'smooth'
      });
}
function scrollBackToBienvenu(){
    window.scrollTo({
        top: window.innerHeight,
        left: 0,
        behavior: 'smooth'
      });
}
function scrollToTop(){
    window.scrollTo({
        top: 0,
        left: 0,
        behavior: 'smooth'
      });
}
/*----------------------------------------------------------------entree----------------------------------------------------------------------*/

let container = document.getElementById('entree');
let spans = document.querySelectorAll('span');
container.onmousemove = function(e) {
    let X = e.pageX;
    let Y = e.pageY;   
    document.getElementById('webdev').style.transform = 'translate(' + X / 100 * 4 + 'px,' + Y / 100 * 4 + 'px)';
    document.getElementById('lienBienvenu').style.transform = 'translate(' + X / 100 * 7 + 'px,' + Y / 100 * 7 + 'px)';
}
/*-------------------------------------------------------------------sortie-----------------------------------------------------------------------------*/

let contact = document.getElementById('contact');
contact.onmousemove = function(e){
    let X = e.pageX;
    let Y = e.pageY;
    document.getElementById('nuageNom').style.transform = 'translate(' + X / 100 * -4 + 'px,' + Y / 100 * 2 + 'px)';    
    document.getElementById('nuageObjet').style.transform = 'translate(' + X / 100 * 3 + 'px,' + Y / 100 * 2 + 'px)';
    document.getElementById('nuageEmail').style.transform = 'translate(' + X / 100 * -3 + 'px,' + Y / 100 * 2 + 'px)';
    document.getElementById('nuageMessage').style.transform = 'translate(' + X / 100 * 4 + 'px,' + Y / 100 * 2 + 'px)';
    document.getElementById('nuageConditions').style.transform = 'translate(' + X / 100 * 2 + 'px,' + Y / 100 * 2 + 'px)';
    document.getElementById('nuageBouton').style.transform = 'translate(' + X / 100 * -2 + 'px,' + Y / 100 * 2 + 'px)';
}
/*-------------------------------------------------------------------canvas-----------------------------------------------------------------------------*/

const canvas2 = document.getElementById('canvas2');
const ctx2 = canvas2.getContext('2d');
canvas2.width = window.innerWidth;
canvas2.height= window.innerHeight;
const particlesArray = [];
//let hue = 0;

window.addEventListener('resize', function(){
    canvas2.width = window.innerWidth;
    canvas2.height= window.innerHeight;
})

const mouse2 = {
    x: undefined,
    y: undefined,
}
canvas2.addEventListener('click', function(event){
    mouse2.x = event.offsetX;
    mouse2.y = event.offsetY;
    for(let i = 0; i< 10; i++){
        particlesArray.push(new Particle());
    }
});
canvas2.addEventListener('mousemove', function(event){
    mouse2.x = event.offsetX;
    mouse2.y = event.offsetY;
    for(let i = 0; i< 5; i++){
        particlesArray.push(new Particle());
    }
})

class Particle {
    constructor(){
        this.x = mouse2.x;
        this.y = mouse2.y;        
        this.size = Math.random() * 10 + 1;
        this.speedX = Math.random() * 3 -1.5;
        this.speedY = Math.random() * 3 -1.5;
        //this.color = 'hsl('+ hue +', 100%,50%)';
        this.color = 'white';
    }
    update(){
        this.x += this.speedX;
        this.y += this.speedY;
        if(this.size > 0.2) this.size  -= 0.1;
    }
    draw(){
        ctx2.fillStyle = this.color;
        ctx2.beginPath();
        ctx2.arc(this.x, this.y, this.size, 0, Math.PI * 2);
        ctx2.fill();
    }
}

function handleParticles(){
    for (let i = 0; i < particlesArray.length; i++){
        particlesArray[i].update();
        particlesArray[i].draw();        
        for(let j = i; j< particlesArray.length; j++){
            const dx = particlesArray[i].x - particlesArray[j].x;
            const dy = particlesArray[i].y - particlesArray[j].y;
            const distance = Math.sqrt(dx*dx + dy*dy);
            if(distance < 100){
                ctx2.beginPath();
                ctx2.strokeStyle = particlesArray[i].color;
                ctx2.lineWidth = 0.2;
                ctx2.moveTo(particlesArray[i].x, particlesArray[i].y);
                ctx2.lineTo(particlesArray[j].x, particlesArray[j].y);
                ctx2.stroke();
                ctx2.closePath();
            }
        }
        if(particlesArray[i].size <= 0.3){
            particlesArray.splice(i, 1);
            i--;
        }
    }
}
function animate2(){
    ctx2.clearRect(0,0, canvas2.width, canvas2.height);
    //ctx2.fillStyle = 'rgba(0,0,0,0.02)';
    //ctx2.fillRect(0, 0, canvas2.width, canvas2.height);
    handleParticles();
    //hue+=2;

    requestAnimationFrame(animate2);
}
animate2();

window.addEventListener('scroll', function(){
    canvas2.width = window.innerWidth;
    canvas2.height = window.innerHeight;
});

/*----------------------------------------------------------------- Contact Form--------------------------------------------------------------*/

function submitContactForm(){
    if(validateForm()){
        document.getElementById('formContact').submit();
    }
};

function validateForm() {
    
    //const name = document.getElementById("nameContact").value;;
    //const object = document.getElementById("objectContact").value;; 
    const ec = document.getElementById("emailContact").value;
    const message = document.getElementById("message").value;
    const cond = document.getElementById("check1").checked;
    if(ec.trim() === '') {
        alert("Veuillez saisir votre e-mail");
        return false;
    }
    if(message.trim() === '') {
        alert("Veuillez laisser un message");
        return false;
    }
    if(!cond) {
        alert("Veuillez accepter les conditions");
        return false;
    }
    if(!checkEmail() || !checkName()){
        return false;
    };
/*
    var xhr = new XMLHttpRequest();

    const data = {
        'nameContact' : name,
        'objectContact' : object,
        'emailContact' : ec,
        'message' : message
    };


    xhr.open("POST", 'sendEmail.php', true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    xhr.onreadystatechange = function() { // Call a function when the state changes.
        if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
            
            alert("Message envoyé !");
        }
    }
    xhr.send(data);    
*/
    return true;  
};
function checkEmail() {

    const email = document.getElementById('emailContact');
    const filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if (!filter.test(email.value)) {
        alert("Le format d'adresse e-mail saisie n'est pas valide.");
        email.focus;
        return false;
    }
    return true;
}
function checkName() {

    const name = document.getElementById('nameContact');
    const filter = /^[A-Za-z '-]+$/;

    if (!filter.test(name.value)) {
        alert("Le format du nom saisi n'est pas valide. Veuillez écrire sans accents ni caractères spéciaux.");
        name.focus;
        return false;
    }
    return true;
}
/*-----------------------------------------------------------------navbar --------------------------------------------------------------------*/

document.getElementById('nav').addEventListener('mouseenter', function(){
    this.style.opacity = "1";
    if(window.pageYOffset >= 3*window.innerHeight){
        this.style.background = "#1020dd80";
    }else{
        this.style.background = "#F1F1F180";
    }
});
document.getElementById('nav').addEventListener('mouseleave', function(){
    this.style.opacity = "0";
});

/*--------------------------------------------------------------anims textes-------------------------------------------------------------*/
var motEcrit = false;
var logosRemontes = false;
document.getElementsByClassName('bvp')[0].style.display = "none";
document.getElementsByClassName('rvt')[0].style.display = "none";
document.getElementsByClassName('rvt2')[0].style.display = "none";
document.getElementsByClassName('rvt3')[0].style.display = "none";

window.addEventListener('scroll', function(){
    
    if(!motEcrit && window.scrollY > window.innerHeight-200 && window.scrollY < 2*window.innerHeight){

        document.getElementsByClassName('bvp')[0].style.display = "block";
        document.getElementsByClassName('rvt')[0].style.display = "block";
        document.getElementsByClassName('rvt2')[0].style.display = "block";
        document.getElementsByClassName('rvt3')[0].style.display = "block";

        // Wrap every letter in a span
        var textWrapper = document.querySelector('.bvp');
        textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

        anime.timeline()
        .add({
            targets: '.bvp .letter',
            scale: [4,1],
            opacity: [0,1],
            easing: "easeOutExpo",
            duration: 700,
            delay: (el, i) => 70*i
        }).add({
            targets: '.rvt',
            opacity: [0,1],
            easing: "linear",
            duration: 700
        }).add({
            targets: '.rvt2',
            opacity: [0,1],
            easing: "linear",
            duration: 700
        }).add({
            targets: '.rvt3',
            opacity: [0,1],
            easing: "linear",
            duration: 700
        }).add({
            targets: '.desktop',
            opacity: [0,1],
            easing: "linear",
            duration: 700
        });
        motEcrit = true;
    }
    else if( window.scrollY > 3*window.innerHeight-200 && window.scrollY < 4*window.innerHeight)
    {
        console.log(window.scrollY);
        anime.timeline()
        .add({
            targets: '.contourLogo',
            translateY: [100,0],
            translateZ: 0,
            opacity: [0,1],
            easing: "easeOutExpo",
            duration: 1400,
            delay: (el, i) => 300 + 180 * i
        });
        logosRemontes = true;
    }
});

