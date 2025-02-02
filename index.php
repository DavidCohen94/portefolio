<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hôtel La Flèche d'argent</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Dynalight&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="logo">
            <img src="css/img/logo_cropped(2).png" alt="">
        </div>
        <div class="burger">
            <svg class="icon" xmlns="http://www.w3.org/2000/svg" height="50px" viewBox="0 -960 960 960" width="50px" fill="#e8eaed">
                <path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/>
            </svg>
        </div>
    </header>
    <div class="burger-menu">
        <ul>
            <li>Home</li>
            <li>Contact</li>
            <li>Réserver</li>
        </ul>
    </div>
    <main>
        <div id="fond-top">
            <img src="css/img/fond.jpg" alt="">
            <div id="title">
                <h1>La flèche d'Argent, <br>Bordeaux</br></h1>
            </div>
        </div>
        <div class="container-contact">
            <div class="contact-address">
                69, rue des écoles, Bordeaux
                <div class="line-breaker"></div>
                <div id="bottom-line">
                    <img src="css/img/phone-icon.png" alt=""> <a href="tel:17">+33 1 12 34 56 78</a> 
                </div>
            </div>
        </div>
        <div class="container-services">
            <div class="service">
                <div class="content-top">
                    <p>Hébergement</p>
                    <img src="css/img/suite.jpg" alt="Image d'une suite">
                </div>
                <div class="content">
                    <p>Notre hôtel de luxe propose des chambres raffinées : Classique, Confort, Standing et Suite, pour un séjour d'exception.</p>
                    <button><a href="hebergement.html">Voir l'hébergement</a></button>
                </div>
            </div>
            <div class="service">
                <p>Piscine</p>
                <img src="css/img/pool.jpg" alt="Image d'une suite">
                <div class="content">
                    <p>Notre hôtel de luxe propose des chambres raffinées : Classique, Confort, Standing et Suite, pour un séjour d'exception.</p>
                    <button><a href="piscine.html">Voir la piscine</a></button>
                </div>
            </div>
            <div class="service">
                <p>Salon de Massage</p>
                <img src="css/img/massage.jpg" alt="Image d'une suite">
                <div class="content">
                    <p>Notre hôtel de luxe propose des chambres raffinées : Classique, Confort, Standing et Suite, pour un séjour d'exception.</p>
                    <button><a href="massage.html">Voir le salon de massage</a></button>
                </div>
            </div>
            <div class="service">
                <p>Restauration</p>
                <img src="css/img/cook.jpg" alt="Image d'une suite">
                <div class="content">
                    <p>Notre hôtel de luxe propose des chambres raffinées : Classique, Confort, Standing et Suite, pour un séjour d'exception.</p>
                </div>
            </div>
        </div>
        <footer>
            <div class="footer-content">
                <div class="footer-about">
                    <h3>À propos de nous</h3>
                    <p>Niché au cœur d’un écrin de verdure, notre hôtel de luxe incarne l’excellence et le raffinement. Chaque détail a été conçu pour offrir une expérience unique, où confort et élégance se rencontrent.</p>
                </div>
                
                <div class="footer-where">
                    <h3>Où somme nous ?</h3>
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3364.2880703643227!2d-0.5742544993292608!3d44.841571297554744!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd5527d1a6eb805b%3A0x2ea19be0e11d9781!2sPl.%20de%20la%20Bourse%2C%2033000%20Bordeaux!5e0!3m2!1sfr!2sfr!4v1737465437736!5m2!1sfr!2sfr" 
                        " allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
            <div class="footer-links">
                <ul>
                    <li>
                        <a href="mentions-legales.html">Mentions légales</a>
                    </li>
                    <li>
                        <a href="conditions-generales.html">Conditions générales de vente</a>
                    </li>
                </ul>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 La flèche d'Argent. Tous droits réservés.</p>
            </div>
        </footer>
    </main>
    <script src="index.js"></script>
</body>
</html>
