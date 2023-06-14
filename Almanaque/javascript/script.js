
const slider = document.querySelector('.slider');
const prevBtn = document.querySelector('.prev');
const nextBtn = document.querySelector('.next');
const slideWidth = document.querySelector('.slide').clientWidth;

let slideIndex = 0;

prevBtn.addEventListener('click', () => {
  slideIndex = (slideIndex - 1 + slider.children.length) % slider.children.length;
  slider.style.transform = `translateX(-${slideIndex * slideWidth}px)`;
});

nextBtn.addEventListener('click', () => {
  slideIndex = (slideIndex + 1) % slider.children.length;
  slider.style.transform = `translateX(-${slideIndex * slideWidth}px)`;
});




