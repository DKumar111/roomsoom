let prev = document.querySelector('.testim__left__arrow');
let next = document.querySelector('.testim__right__arrow');
let slide = document.getElementById("btnClick");

prev.addEventListener('click', () => {
    slide.scrollLeft -=500;
})
next.addEventListener('click', () => {
    slide.scrollLeft +=500;
})