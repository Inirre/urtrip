// side nav bar
const navSlide = () => {
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.nav__list');
  
    // add classes for side nav and burger
    burger.addEventListener('click', () => {
      nav.classList.toggle('nav__list--active');
      burger.classList.toggle('burger--toggle');
    })

    // remove these classes when larger screen
    window.addEventListener('resize', () => {
      if(document.body.clientWidth >= 900){
        nav.classList.remove('nav__list--active');
        burger.classList.remove('burger--toggle');
      } 
    })
    
  }
  
navSlide();

