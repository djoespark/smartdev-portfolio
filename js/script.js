const faders = document.querySelectorAll('.fade-in');

const appearOptions = { threshold: 0.3 };

const appearOnScroll = new IntersectionObserver(function(entries, observer){
    entries.forEach(entry => {
        if(!entry.isIntersecting) return;
        entry.target.style.opacity = 1;
        entry.target.style.transform = 'translateY(0)';
        observer.unobserve(entry.target);
    });
}, appearOptions);

faders.forEach(fader => { appearOnScroll.observe(fader); });
// Sélection des éléments
const modal = document.getElementById('projectModal');
const modalTitle = document.getElementById('modalTitle');
const modalDesc = document.getElementById('modalDesc');
const modalLink = document.getElementById('modalLink');
const closeBtn = document.querySelector('.close');

// Détails des projets (tu peux ajouter le lien réel ici)
const projects = {
    "Mini-blog PHP/MySQL": {
        desc: "Mini-blog complet avec CRUD, gestion des utilisateurs et Docker.",
        link: "https://github.com/djoespark/miniblog"
    },
    "Simulateur de devis": {
        desc: "Application de calcul de devis dynamique en HTML/CSS/JS.",
        link: "https://github.com/djoespark/smartdev studio"
    }
};

// Ouvrir le modal
document.querySelectorAll('.btn').forEach(button => {
    button.addEventListener('click', () => {
        const projectName = button.dataset.project;
        modalTitle.textContent = projectName;
        modalDesc.textContent = projects[projectName].desc;
        modalLink.href = projects[projectName].link;
        modal.style.display = 'block';
    });
});

// Fermer le modal
closeBtn.addEventListener('click', () => {
    modal.style.display = 'none';
});

// Fermer en cliquant à l'extérieur
window.addEventListener('click', (e) => {
    if(e.target == modal) {
        modal.style.display = 'none';
    }
});
$(document).ready(function(){
    $('#simulateurForm').submit(function(e){
        e.preventDefault();

        // Récupération des champs
        let nom = $('#nom').val();
        let projet = $('#projet').val();
        let budget = $('#budget').val();
        let details = $('#details').val();

        // Format du message WhatsApp
        let message = 
`👋 Bonjour, je suis ${nom}.
Je suis intéressé par la création d’un projet : ${projet}.

💰 Budget estimé : ${budget} FCFA
📋 Détails :
${details}

Merci de me répondre dès que possible.`;

        // Ton numéro WhatsApp (change-le si besoin)
        let numero = "22879963708";

        // Encodage du message pour l’URL
        let url = `https://wa.me/${numero}?text=${encodeURIComponent(message)}`;

        // Redirection
        window.open(url, '_blank');
    });
});
