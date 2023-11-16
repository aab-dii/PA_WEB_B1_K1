const navbarNav = document.querySelector('.navbar-nav');
const profile = document.querySelector('.profile');
// ketika hamburger diklick
document.querySelector('#hamburger-menu').onclick = () => {
  navbarNav.classList.toggle('active');
  profile.classList.toggle('active');
};


//klick diluar sidebar utk menghilngkn nav
const hamburger = document.querySelector('#hamburger-menu');

document.addEventListener('click',function(e) {
  if(!hamburger.contains(e.target) && !navbarNav.contains(e.target) && !profile.contains(e.target)){
    navbarNav.classList.remove('active');
    profile.classList.remove('active');
  }
});

const revealElements = document.querySelectorAll(".reveal");

  function checkScroll() {
      for (let element of revealElements) {
          const elementTop = element.getBoundingClientRect().top;
          if (elementTop < window.innerHeight - 100 && elementTop > -element.clientHeight) {
              element.classList.add("revealed");
          } else {
              element.classList.remove("revealed");
          }
      }
  }
  
  function animate() {
      checkScroll();
      requestAnimationFrame(animate);
  }
  
  animate();