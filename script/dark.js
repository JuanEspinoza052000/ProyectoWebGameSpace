const DarkMode = document.getElementById('Oscuro');
const body = document.body;
const h1 = document.querySelector('esp1'); // Selecciona el primer <h1>
DarkMode.addEventListener('click', () => {
    body.classList.toggle('dark-mode');
    h1.classList.toggle('dark-mode-h1'); // Alterna la clase en <h1>
});
