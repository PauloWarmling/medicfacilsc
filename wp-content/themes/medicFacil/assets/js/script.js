document.addEventListener('DOMContentLoaded', () => {
  // menu-mobile
  const menuIcon = document.getElementById('mobile-icon')
  const menuMobile = document.getElementById('menu-mobile')

  menuIcon.addEventListener('click', () => {
    menuMobile.classList.add('active')
  })

  AOS.init();

});