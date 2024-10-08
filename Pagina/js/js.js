const header = document.querySelector(".site-header");
const listaHeader = document.querySelector(".site-header ul")
// Header

var sleep = function(ms){
  return new Promise(resolve => setTimeout(resolve, ms));
};

window.addEventListener("scroll", () => {
  const currentScroll = window.pageYOffset;
  if (currentScroll) {
    header.classList.add("is-sticky");
    header.style.color = "black"
  } else {
    header.classList.remove("is-sticky");
  }
});


document.addEventListener("wheel",async function(e) {
    const scrolled = Math.sign(event.deltaY);
    console.info(scrolled);    

    if (scrolled > -1){
        header.classList.add("noHeader")
        listaHeader.style.display = 'none'
    } else {
      header.classList.remove("noHeader")
      listaHeader.style.display = 'flex'
    }
});

// Portada

var slideIndex = 1;
showDivs(slideIndex)

function plusDivs(n) {
  showDivs(slideIndex += n)
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides")
  if (n > x.length){
      slideIndex = 1
    }
  if (n < 1){
      slideIndex = x.length
    } 
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none"
  }
  x[slideIndex-1].style.display = "block"
}

var slideIndex = 0
carousel();

function carousel() {
  var i
  var x = document.getElementsByClassName("mySlides")
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none"
  }
  slideIndex++
  if (slideIndex > x.length) {slideIndex = 1}
  x[slideIndex-1].style.display = "block"

  setTimeout(carousel, 8000)
}

