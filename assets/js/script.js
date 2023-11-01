

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

$(document).ready(function(){
    $('#loadMoreButton5').click(function(event){
        $('.products-next5, #loadMoreButton5').toggleClass('next5');

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


