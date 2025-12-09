//Scroll Animations
const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      // console.log(entry);
      if (entry.isIntersecting) {
        entry.target.classList.add('animations-show-item');
        observer.unobserve(entry.target);
      } else {
        entry.target.classList.remove('animations-show-item');
      }
    });
  });
  
  const hiddenElements = document.querySelectorAll('.animations-hidden-item');
  hiddenElements.forEach((el) => observer.observe(el));