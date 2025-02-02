// Sélectionne le bouton burger et le menu burger
const burger = document.querySelector('.burger');
const burgerMenu = document.querySelector('.burger-menu');
const svg = document.querySelector('.burger');

// Ajoute un gestionnaire d'événements pour le clic
burger.addEventListener('click', () => {
    burgerMenu.classList.toggle('active'); // Active/désactive la classe
    });


const accordeon = document.getElementsByClassName('service');

    for(i = 0; i<accordeon.length; i++){
        accordeon[i].addEventListener('click', function(){
            const content = this.querySelector('.content');
            content.classList.toggle('active'); 
        })
    }