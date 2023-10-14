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
        


    });
});