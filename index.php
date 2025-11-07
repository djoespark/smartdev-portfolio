<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - SmartDev Studio</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container header-container">
            <div class="logo">
                <img src="images/logo.png" alt="SmartDev Studio">
            </div>
            <nav>
                <ul>
                    <li><a href="#about">À propos</a></li>
                    <li><a href="#skills">Compétences</a></li>
                    <li><a href="#projects">Projets</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Section About -->
    <section id="about" class="fade-in">
        <div class="container fade-in">
            <h1>Bonjour, je suis DJAGLI Joseph Bénoît</h1>
            <p>Développeur web fullstack passionné par la création d'applications performantes et intuitives. Expert en PHP, MySQL, JS et frameworks modernes.</p>
        </div>
    </section>

    <!-- Section Skills -->
    <section id="skills" class="fade-in">
        <div class="container fade-in">
            <h2>Mes compétences</h2>
            <div class="skills-grid">
                <div class="skill">
                    <h3>Front-end</h3>
                    <p>HTML, CSS, JavaScript, Bootstrap, Tailwind</p>
                </div>
                <div class="skill">
                    <h3>Back-end</h3>
                    <p>PHP, MySQL, APIs, Docker</p>
                </div>
                <div class="skill">
                    <h3>Outils</h3>
                    <p>Git, VS Code, Postman, Node.js</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Projects -->
    <section id="projects" class="fade-in">
        <div class="container fade-in">
            <h2>Mes projets</h2>
            <div class="projects-grid">
                <div class="project-card">
                    <img src="images/projet1.png" alt="Mini-blog PHP/MySQL">
                    <div class="project-info">
                        <h3>Mini-blog PHP/MySQL</h3>
                        <p>CRUD complet, Docker, responsive, gestion des utilisateurs.</p>
                        <a href="#" class="btn">Voir le projet</a>
                    </div>
                </div>
                <div class="project-card">
                    <img src="images/logo.png" alt="Simulateur de devis">
                    <div class="project-info">
                        <h3>Simulateur de devis interactif</h3>
                        <p>HTML/CSS, JS, calcul dynamique, design moderne.</p>
                        <a href="#" class="btn">Voir le projet</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Contact -->
    <section id="contact" class="fade-in">
        <div class="container fade-in">
            <h2>Contactez-moi</h2>
            <form action="#" id="contactForm">
                <input type="text" placeholder="Votre nom" required>
                <input type="email" placeholder="Votre email" required>
                <textarea placeholder="Votre message" required></textarea>
                <button type="submit">Envoyer</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; 2025 SmartDev Studio - DJAGLI Joseph Bénoît</p>
            <p>
                <a href="#">GitHub</a> | 
                <a href="#">LinkedIn</a>
            </p>
        </div>
    </footer>

    <script src="js/script.js"></script>
</body>
</html>
