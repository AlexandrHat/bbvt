var swiper = new Swiper(".mySwiper", {
  spaceBetween: 100,
  cssMode: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  autoplay: {
   delay: 5000,
   disableOnInteraction: false,
   pauseOnMouseEnter: true
 },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});


var list = document.getElementsByClassName('btn-box')[0];

console.log(list);

list.addEventListener('click', function () {
  document.getElementsByClassName('mobi-nav')[0].classList.toggle('active'); 
  document.getElementsByClassName('span')[0].classList.toggle('left');
  document.getElementsByClassName('span')[1].classList.toggle('del');
  document.getElementsByClassName('span')[2].classList.toggle('right');

})