//                         Curseur

document.body.style.cursor = "none";

var inputs = document.getElementsByTagName("input");
for(var i = 0; i < inputs.length; i++) {
    inputs[i].style.cursor = "none";
}

var links = document.getElementsByTagName("a");
for(var i = 0; i < links.length; i++) {
    links[i].style.cursor = "none";
}


const cursorDot = document.querySelector("[data-cursor-dot]");
const cursorOutline = document.querySelector("[data-cursor-outline]");

var dot = document.querySelector('.cursor-dot');
var dot2 = document.querySelector('.cursor-outline');

window.addEventListener("mousemove", function(e){
    
    const posX = e.clientX;
    const posY = e.clientY;

    cursorDot.style.left = `${posX}px`;
    cursorDot.style.top = `${posY}px`;

    //cursorOutline.style.left = `${posX}px`;
    //cursorOutline.style.top = `${posY}px`;

    cursorOutline.animate({
        left: `${posX}px`,
        top: `${posY}px`
    }, { duration: 200, fill: "forwards"});
});


//change la taille du curseur quand on click
function adjustDotSize(dot1size, dote2size) {
    dot.style.transition = 'height 0.3s, width 0.3s';
    dot2.style.transition = 'height 0.3s, width 0.3s';
    dot.style.height = dot1size;
    dot.style.width = dot1size;
    dot2.style.height = dote2size;
    dot2.style.width = dote2size;
}
document.addEventListener('mousedown', function() {
    adjustDotSize('20px', '30px');
});
document.addEventListener('mouseup', function() {
    adjustDotSize('10px', '50px');
});




//                         Theme sombre theme claire

const btn = document.querySelector("#Moon");
let isDarkTheme = false;

window.addEventListener('load', function() {
    const currentTheme = localStorage.getItem('theme');
    if (currentTheme == 'dark') {
        isDarkTheme = true;
        changeStyles();
    }
});


btn.addEventListener("click", function() {
    isDarkTheme = !isDarkTheme;

    if (isDarkTheme) {
        localStorage.setItem('theme', 'dark');
    } else {
        localStorage.setItem('theme', 'light');
    }
    changeStyles();
});

function changeStyles() {
    const link = document.querySelector('link[href="css/black.css"]');
    const moonImg = document.getElementById('Moon');
    if (isDarkTheme && !link) {
        const newLink = document.createElement('link');
        newLink.rel = 'stylesheet';
        newLink.type = 'text/css';
        newLink.href = 'css/black.css';
        document.head.appendChild(newLink);

        moonImg.src = 'img/whitetem.png';
        moonImg.alt = 'blackthem';
    } else if (!isDarkTheme && link) {
        
        link.remove();
        moonImg.src = 'img/darktem.png';
    }
}


//                         Scroll animation

const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        console.log(entry)
        if(entry.isIntersecting) {
            entry.target.classList.add('show');
        }else{
            entry.target.classList.remove('show');
        }
    });
});


const hiddenElements = document.querySelectorAll('.hidden');
hiddenElements.forEach((el) => observer.observe(el));

//                         Smooth Scroll

function scrollToMiddle(sectionId, currentPage) {
    if (currentPage === 'contact.php' || currentPage === 'project.php') {
        window.location.href = './index.php#' + sectionId;
    }
    var section = document.getElementById(sectionId);
    var sectionTop = section.offsetTop;
    var sectionHeight = section.clientHeight;
    var windowHeight = window.innerHeight;
    var middleOfSection = sectionTop + (sectionHeight / 2) - (windowHeight / 2);

    window.scrollTo({   
        top: middleOfSection,
        behavior: 'smooth'
    });
}



//                    Requete Ajax qui affiche les projets

document.getElementById('btnGetData').addEventListener('click', function() {

    fetch('../php/projectBddToJson.php')
        .then(function(response) {
        if (!response.ok) {
            throw new Error('Erreur');
        }
        return response.json();
    })
        .then(function(data) {
        var html = '';
        data.forEach(function(item) {
            html += '<li class="card">';
            html += '<div class="img"><img src="' + item.image + '" alt="' + item.nom + '" draggable="false"></div>';
            html += '<h2>' + item.nom + '</h2>';
            html += '<span>' + item.langage + '</span>';
            html += '</li>';
        });

        document.querySelector('.carousel').innerHTML = html;

        const pscroll = document.querySelector(".pScrollHidden");
        pscroll.classList.remove("pScrollHidden");
        pscroll.classList.add("fade");

        var btnGetData = document.getElementById('btnGetData');
        btnGetData.parentNode.removeChild(btnGetData);

        

        activateCarouselScroll();
        })
    .catch(function(error) {
    console.error('Erreur:', error);
    });
});






//                       Formulaire


var form = document.getElementById("myForm")
form.addEventListener("submit", checkForm, false)


/**
 * Permet de valider le formulaire pour laisser un commentaire sur le site.
 */
function checkForm(event) {

    console.log("log")
    // Stockage des messages d'erreurs des champs :
    var errors = []
    
    var email = document.getElementById("inputEmail")
    var commentaire = document.getElementById("inputMsg")
    var name = document.getElementById("inputName")

    if (name.validity.valid === false) {
        errors.push("Veuillez ecrire un nom.")
    }
    if (email.validity.valid === false) {
        errors.push("L'adresse email saisie ne semble pas valide.")
    }
    if (commentaire.validity.valid === false) {
        errors.push("Merci de ne pas m'envoyez de commentaire vide.")
    }

    var errorDiv = form.querySelector("div.errors")

    if (errors.length > 0) {
        // On empêche le navigateur de soumettre les données :
        event.preventDefault()

        // On affiche les messages d'erreurs à l'utilisateur :
        errorDiv.style.display = 'block'
        var html = '<ul>'
        for (var i = 0; i < errors.length; i++) {
            html += '<li>' + errors[i] + '</li>'
        }
        html += '</ul>'
        errorDiv.innerHTML = html

        return false
    }
    else {
        // Si pas d'erreur, on retire les messages d'erreur de l'affichage.
        errorDiv.style.display = 'none'
    }

    return true
}






//                       Project Scroll
function activateCarouselScroll() {
    const carousel = document.querySelector(".carousel");
    const arrowBtns = document.querySelectorAll(".wrapper i");
    const firstCardWidth = carousel.querySelector(".card").offsetWidth;
    const carouselChildrens = [...carousel.children];

    let isDragging = false, startX, startScrollLeft;

    let cardPerView = Math.round(carousel.offsetWidth / firstCardWidth);

    carouselChildrens.slice(-cardPerView).reverse().forEach(card => {
        carousel.insertAdjacentHTML("afterbegin", card.outerHTML);
    });
    carouselChildrens.slice(0, cardPerView).reverse().forEach(card => {
        carousel.insertAdjacentHTML("beforeend", card.outerHTML);
    });

    arrowBtns.forEach(btn => {
        btn.addEventListener("click", () => {
            carousel.scrollLeft += btn.id === "left" ? -firstCardWidth : firstCardWidth;
        })
    });

    const dragStart = (e) => {
        isDragging = true;
        carousel.classList.add("dragging");
        startX = e.pageX;
        startScrollLeft = carousel.scrollLeft;
    }
    const dragStop = () => {
        isDragging = false;
        carousel.classList.remove("dragging");
    }

    const dragging = (e) => {
        if(!isDragging) return
        carousel.scrollLeft = startScrollLeft - (e.pageX - startX);
    }

    const infiniteScroll = () => {
        if(carousel.scrollLeft === 0){
            carousel.classList.add("no-transition");
            carousel.scrollLeft = carousel.scrollWidth - (2 * carousel.offsetWidth);
            carousel.classList.remove("no-transition");
        }else if(Math.ceil(carousel.scrollLeft) === carousel.scrollWidth - carousel.offsetWidth){
            carousel.classList.add("no-transition");
            carousel.scrollLeft = carousel.offsetWidth;
            carousel.classList.remove("no-transition");
        }
    }

    carousel.addEventListener("mousedown", dragStart);
    carousel.addEventListener("mousemove", dragging);
    document.addEventListener("mouseup", dragStop);
    carousel.addEventListener("scroll", infiniteScroll);

}