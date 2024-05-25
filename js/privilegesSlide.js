let back = document.querySelector('.back');
let forward = document.querySelector('.forward');
let slidebtn = document.getElementById("btnClick");

back.addEventListener('click', () => {
    slidebtn.scrollLeft -=500;
})
forward.addEventListener('click', () => {
    slidebtn.scrollLeft +=500;
})