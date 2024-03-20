//                         Curseur

const cursorDot = document.querySelector("[data-cursor-dot]");
const cursorOutline = document.querySelector("[data-cursor-outline]");



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

function scrollToMiddle(sectionId) {
    
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
