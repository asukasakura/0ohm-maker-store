/* When the user scrolls down, hide the navbar. When the user scrolls up, show the navbar */

let menu = document.getElementById("masthead");
let altura = menu.offsetTop;
let searchBtn = document.querySelector('.aws-search-btn');
let formSearch = document.querySelector('.aws-search-form');
let searchResult = document.querySelector('.aws-search-result');
let collapseMenu = document.querySelector('#collapseCategory');
let mobileMenu = document.querySelector('.hamburger');

window.addEventListener('scroll', () => {

  if ( getYPosition() > altura ){
    menu.classList.add('menu-fixed');
    collapseCategory.classList.add('d-none')
    collapseCategory.classList.add('d-lg-block')
    mobileMenu.classList.remove('is-active')
  } else {
    menu.classList.remove('menu-fixed');
    collapseCategory.classList.remove('d-none')
    collapseCategory.classList.remove('d-lg-block')
  }
  
})

formSearch.addEventListener('click', (e) => {
  e.preventDefault(e);
  !formSearch.classList.contains('aws-focus') ? searchResult.style.display = 'none' : searchResult.style.display = 'block' 
})

function getYPosition(){
  let top  = window.pageYOffset || document.documentElement.scrollTop
  return top;
}


// efecto menú hamburguesa
function toggleMenu (event) {
  this.classList.toggle('is-active');
  event.preventDefault();
}
mobileMenu.addEventListener('click', toggleMenu, false);