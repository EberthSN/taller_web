const themeToggler = document.querySelector(".theme-toggler");
let theme = "";
const icons = document.querySelectorAll('.theme-toggler span');
window.addEventListener('DOMContentLoaded', () => {
  setTheme();
})

function setTheme(){
  let currentTheme = getTheme("theme");
  icons.forEach( icon => {
    if( icon.classList.contains(currentTheme) ){
      icon.classList.add("active");
      return;
    }
  })
  if( currentTheme == "light-theme" ){
    document.body.classList.add('light');
  }
}

function getTheme(nameCookie){
  let cookies = document.cookie.split(';');
  for( i = 0; i < cookies.length; i++){
    let cookie = cookies[i].trim();
    if( cookie.indexOf(nameCookie+"=") == 0 ){
      return cookie.substring(nameCookie.length + 1, cookie.length);
    }
  }
  return "dark-theme";
}
themeToggler.addEventListener("click", () => {
  document.body.classList.toggle("light");
  themeToggler.querySelector("span:nth-child(1)").classList.toggle("active");
  themeToggler.querySelector("span:nth-child(2)").classList.toggle("active");
  
  icons.forEach( icon => {
    if( icon.classList.contains('active')){
      theme = icon.classList[0];
      console.log(theme)
    }
  })
  document.cookie = "theme="+theme;
});

const menuBtn = document.querySelector('.bx.bx-menu');
const sideBar = document.querySelector('.aside');
const closeBtn = document.querySelector('.closeIcon');


menuBtn.addEventListener('click', (e) => {
    e.preventDefault();
    sideBar.classList.add('show');
})

closeBtn.addEventListener('click', () => {
    sideBar.classList.remove('show');
})


function updateDate() {
  const dateElement = document.getElementById('current-date');
  const now = new Date();
  
  const options = { day: 'numeric', month: 'long', year: 'numeric' };
  const formattedDate = now.toLocaleDateString('es-ES', options);
  
  dateElement.textContent = formattedDate;
}

// Actualiza la fecha al cargar la página
updateDate();

// Actualiza la fecha cada día
setInterval(updateDate, 24 * 60 * 60 * 1000);