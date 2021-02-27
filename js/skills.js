// All skills
const all = document.querySelectorAll(".skill");
const programming = document.querySelectorAll(".programming");
const web = document.querySelectorAll(".web");
const os = document.querySelectorAll(".os");
const others = document.querySelectorAll(".others");
//All buttons
const allBtn = document.querySelector('#all-btn');
const programmingBtn = document.querySelector('#programming-btn');
const webBtn = document.querySelector('#web-btn');
const othersBtn = document.querySelector('#others-btn');
const osBtn = document.querySelector('#os-btn');
//functions
allBtn.addEventListener('click', function buttonClicked(e) {
    for (var i = 0; i < all.length; i++) {
        all[i].classList.remove("hideSkill");
    }
})
programmingBtn.addEventListener('click', function buttonClicked(e) {
    for (var i = 0; i < all.length; i++) {
        all[i].classList.add("hideSkill");
    }
    for (var i = 0; i < programming.length; i++) {
        programming[i].classList.remove("hideSkill");
    }
})
webBtn.addEventListener('click', function buttonClicked(e) {
    for (var i = 0; i < all.length; i++) {
        all[i].classList.add("hideSkill");
    }
    for (var i = 0; i < web.length; i++) {
        web[i].classList.remove("hideSkill");
    }
})
othersBtn.addEventListener('click', function buttonClicked(e) {
    for (var i = 0; i < all.length; i++) {
        all[i].classList.add("hideSkill");
    }
    for (var i = 0; i < others.length; i++) {
        others[i].classList.remove("hideSkill");
    }
})
osBtn.addEventListener('click', function buttonClicked(e) {
    for (var i = 0; i < all.length; i++) {
        all[i].classList.add("hideSkill");
    }
    for (var i = 0; i < os.length; i++) {
        os[i].classList.remove("hideSkill");
    }
})
