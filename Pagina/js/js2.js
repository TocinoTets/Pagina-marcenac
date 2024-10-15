//menu 
const menu = document.querySelector('.menuH');
const botones = document.querySelector('.botones');

// Get the modal
var modal = document.getElementsByClassName('botones');

menu.addEventListener('click',()=>{
    
    botones.classList.toggle("click");
})

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}