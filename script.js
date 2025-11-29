form.addEventListener("submit", function(e) {
    e.preventDefault();
    alert("Vielen Dank! Ihre Nachricht wurde gesendet.");
    form.reset();
});

// Smooth scrolling for navigation links
const navLinks = document.querySelectorAll('nav ul li a');
navLinks.forEach(link => {
    link.addEventListener('click', function(e) {
        e.preventDefault();
        const targetId = link.getAttribute('href').substring(1);
        const target = document.getElementById(targetId);
        target.scrollIntoView({ behavior: 'smooth' });
    });
});
