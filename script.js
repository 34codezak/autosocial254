const services = [
  { title: 'Automated Posting', desc: 'Post across multiple platforms on autopilot.' },
  { title: 'Smart Scheduling', desc: 'Plan and publish content at the perfect time.' },
  { title: 'Audience Growth', desc: 'Grow real followers and build connections.' },
  { title: 'Detailed Analytics', desc: 'Track performance and make data-driven decisions.' }
];

const servicesContainer = document.getElementById('services');
services.forEach((service) => {
  const card = document.createElement('div');
  card.className = 'service-card';
  card.innerHTML = `<h3>${service.title}</h3><p>${service.desc}</p>`;
  servicesContainer.appendChild(card);
});

const form = document.getElementById('contact-form');
const formStatus = document.getElementById('form-status');

form.addEventListener('submit', (event) => {
  event.preventDefault();
  const formData = new FormData(form);
  const name = formData.get('name');
  const email = formData.get('email');
  const service = formData.get('service_interest');
  const message = formData.get('message');

  const subject = encodeURIComponent(`New AutoSocial Lead: ${service} from ${name}`);
  const body = encodeURIComponent(
    `Name: ${name}\nEmail: ${email}\nInterested In: ${service}\n\nMessage:\n${message}`
  );

  window.location.href = `mailto:autosocial254@gmail.com?subject=${subject}&body=${body}`;
  formStatus.textContent = 'Thanks! Your email app should open so you can send your message.';
});
