const toggle = document.getElementById('menuToggle');
const nav = document.getElementById('mainNav');
if (toggle) toggle.addEventListener('click', () => nav.classList.toggle('open'));

document.getElementById('year').textContent = new Date().getFullYear();

const form = document.getElementById('contactForm');
const msg = document.getElementById('formMessage');
form?.addEventListener('submit', (e) => {
  e.preventDefault();
  const data = new FormData(form);
  const name = data.get('name')?.toString().trim();
  const email = data.get('email')?.toString().trim();
  const message = data.get('message')?.toString().trim();

  if (!name || !email || !message) {
    msg.textContent = 'Merci de remplir tous les champs obligatoires.';
    msg.style.color = '#a03a3a';
    return;
  }

  msg.textContent = 'Votre demande est prête à être envoyée (mode HTML statique).';
  msg.style.color = '#2f7f60';
  form.reset();
});
