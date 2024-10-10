//menu 
const menu = document.querySelector('.menuH');
const botones = document.querySelector('.botones');

menu.addEventListener('click',()=>{
    
    botones.classList.toggle("click");
})