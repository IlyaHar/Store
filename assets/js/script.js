let slideIndex = 1;
showSlides(slideIndex);

const slideshowContainer = document.querySelector('.slide');
let touchStartX = 0;
let touchEndX = 0;

slideshowContainer.addEventListener('touchstart', (e) => {
    touchStartX = e.touches[0].clientX;
});

slideshowContainer.addEventListener('touchmove', (e) => {
    touchEndX = e.touches[0].clientX;
});

slideshowContainer.addEventListener('touchend', () => {
    if (touchStartX - touchEndX > 50) {
        plusSlides(1); 
    } else if (touchEndX - touchStartX > 50) {
        plusSlides(-1); 
    }
});

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("MySlides");
    let dots = document.getElementsByClassName('dot');

    if (n > slides.length) {
        slideIndex = 1;
    }

    if (n < 1) {
        slideIndex = slides.length;
    }

    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }

    for (i = 0; i < dots.length; i++) {
        dots[i].classList.remove("active");
    }

    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].classList.add("active");
}

setInterval(function() {
    plusSlides(1); 
}, 10000); 


$(document).ready(function(){
    $('.header-burger').click(function(event){
        $('.header-burger, .mobile-menu').toggleClass('actives');
        $('body').toggleClass('lock')
        
    });
});

$(document).ready(function(){
    $('#loadMoreButton').click(function(event){
        $('.products-next, #loadMoreButton').toggleClass('next');
        
    });
});

$(document).ready(function(){
    $('#loadMoreButton2').click(function(event){
        $('.products-next2, #loadMoreButton2').toggleClass('next2');
        
    });
});

$(document).ready(function(){
    $('#loadMoreButton3').click(function(event){
        $('.products-next3, #loadMoreButton3').toggleClass('next3');
        
    });
});

$(document).ready(function(){
    $('#loadMoreButton4').click(function(event){
        $('.products-next4, #loadMoreButton4').toggleClass('next4');
        
    });
});


document.querySelectorAll('.link-header').forEach(function (item) {
    item.addEventListener('click', function () {
        item.classList.toggle('activess');
    });
});

window.addEventListener("scroll", function() {
    const fixedTheme = document.querySelector(".fixed-theme");
    const headerHeight = document.querySelector("header").offsetHeight; // Высота вашего header

    if (window.scrollY > headerHeight) { // Пользователь прокрутил до header
        fixedTheme.classList.add("fixed");
    } else {
        fixedTheme.classList.remove("fixed");
    }
});


