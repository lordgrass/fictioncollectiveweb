const menuState = [false];
const buttonToggle = document.getElementById('buttonToggle');
const menu = document.getElementById('menu');
                
buttonToggle.addEventListener('click', () => {
menuState[0] = !menuState[0];
menu.style.display = menuState[0] ? 'block' : 'none';
});

