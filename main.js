const sections = document.querySelectorAll("section");

const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add("visible");
    }
  });
}, { threshold: 0.2 });

sections.forEach(section => {
  observer.observe(section);
});


const toggleBtn = document.querySelector('.nav-toggle');
const nav = document.querySelector('.nav_links');
const navLinks = document.querySelectorAll('.nav_links a');


toggleBtn.addEventListener('click', () => {
  nav.classList.toggle('active');
  const expanded = toggleBtn.getAttribute('aria-expanded') === 'true' || false;
  toggleBtn.setAttribute('aria-expanded', !expanded);
});


navLinks.forEach(link => {
  link.addEventListener('click', () => {
    nav.classList.remove('active');
    toggleBtn.setAttribute('aria-expanded', false);
  });
});
