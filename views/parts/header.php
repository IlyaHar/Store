
<!doctype html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>АВМагро</title>
    <link rel="stylesheet" href="<?= ASSETS_URI ?>/css/style.css">
    <link rel="stylesheet" href="<?= ASSETS_URI ?>/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
<header class="p-3 bg-white d-flex ">
    <div class="container">

        <div class="d-flex flex-wrap align-items-center justify-content-start ">
            <div class="header-burger">
                <span></span>
            </div>

            <div class="logo-container"> <a class="text-decoration-none text-dark logo  " href=""><img width="150px" src="<?= IMAGES_URI ?>/logo.jpeg"></a></div>

<!--         <div class="search-container">-->
<!--                <input type="text" class="search-input" placeholder="Пошук...">-->
<!--            </div>-->
           <!-- <a class="text-decoration-none text-dark" href=""><i class="fa-solid fa-cart-shopping cart"></i></a>
-->
            <nav class="mobile-menu bg-white">
                <ul class="mobile-list">

                   <!-- <div class="menu-buttons d-flex justify-content-center align-items-center mt-3">
                        <button type="button" class="btn btn-dark mx-2">Увійти</button>
                        <button type="button" class="btn btn-warning ">Зареєструватися</button>
                    </div>-->
                    <div class="accordion accordion-flush mt-3" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button bg-white text-black fs-5 border-black collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    <a class="text-decoration-none text-black" href="">Категорії</a>
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse " data-bs-parent="#accordionFlushExample">
                                <li class="link-header"><a class="header-link top-items fs-5" href="/sunflowers " >Насіння соняшника</a></li>
                                <li class="link-header"><a class="header-link top-items fs-5" href="/corn">Насіння кукурудзи</a></li>
                                <li class="link-header"><a class="header-link top-items fs-5" href="/soya">Соя</a></li>
                                <li class="link-header"><a class="header-link top-items fs-5" href="/herbicides">Гербіциди</a></li>
                                <li class="link-header"><a class="header-link top-items fs-5" href="/fungicides">Фунгіциди</a></li>
                                <li class="link-header"><a class="header-link top-items fs-5" href="/insecticides">Інсектициди</a></li>
                                <li class="link-header"><a class="header-link top-items fs-5" href="/poisoners">Протруйники</a></li>
                                <li class="link-header"><a class="header-link top-items fs-5" href="/adhesives">Прилипачі</a></li>
                                <li class="link-header"><a class="header-link top-items fs-5" href="/desiccants">Десиканти</a></li>

                                <li class="link-header"><a class="header-link top-items fs-5" href="/fertilizers">Мікродобрива</a></li>
                            </div>
                        </div>
                        <li class="link-header"><a class="header-link top-items fs-5" href=".//#popular-product">Популярні товари</a></li>
                       <li class="link-header"><a class="header-link top-items fs-5" href=".//#action-product">Акційні товари</a></li>
                     <!--   <li class="link-header"><a class="header-link top-items fs-5" href=".//#new-product">Нові товари</a></li>
                        <li class="link-header"><a class="header-link top-items fs-5" href=".//#discount">Уцінка</a></li>-->
                        <li class="link-header"><a href="/" class="header-link top-items fs-5">Головна</a></li>
                        <li class="link-header"><a href="/aboutus" class="header-link top-items fs-5">О нас</a></li>
                        <li class="link-header"><a href="/delivery" class="header-link top-items fs-5">Доставка</a></li>
                        <li class="link-header"><a class="header-link top-items fs-5" href="/payment">Оплата</a></li>
                      <!--  <li class="link-header"><a class="header-link top-items fs-5" href="#">Доставка</a></li>
                        <li class="link-header"><a class="header-link top-items fs-5" href="#">Щоденник</a></li>
                        <li class="link-header"><a class="header-link top-items fs-5" href="#">Виробники</a></li>
                        <li class="link-header"><a class="header-link top-items fs-5" href="#">Помічники</a></li>-->
                        <li class="link-header"><a class="header-link top-items fs-5" href="#contacts-mobile">Контакти</a></li>
                        <div class="phone-mobile mt-3 mx-4">
                            <i class="fa-solid fa-phone"></i>
                            <a class="text-decoration-none text-dark fs-5 pb-3 " href="#">+38 (098) 531 6097</a>
                        </div>
                        <div class="phone-mobile mt-3 mx-4">
                            <i class="fa-brands fa-telegram " style="color: #4dbbff;"></i>
                            <a class="text-decoration-none text-dark fs-5 pb-3 " href="#">+38 (063) 896 0419</a><i class="fa-brands fa-viber " style="color: #c14dff;"></i>

                        </div>

                </ul>
            </nav>


            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0 mx-5 ">
                <li class="item-link"><a href="/" class="nav-link px-2 text-dark top-item">Головна</a></li>
                <li class="item-link"><a href="/aboutus" class="nav-link px-2 text-dark top-item">О нас</a></li>
                <li class="item-link"><a href="/delivery" class="nav-link px-2 text-dark top-item">Доставка</a></li>
                <li class="item-link"><a href="/payment" class="nav-link px-2 text-dark top-item">Оплата</a></li>

                <li class="item-link"><a href="#contacts" class="nav-link px-2 text-dark top-item ">Контакти</a></li>
       <!--         <li class="item-link"><a href="#" class="nav-link px-2 text-dark top-item ">Щоденник</a></li>
                <li class="item-link"><a href="#" class="nav-link px-2 text-dark top-item">Виробники</a></li>-->
            </ul>
            <div class="phone d-flex flex-column">
                <div class="phone">
                <i class="fa-solid fa-phone"></i>
                <a class="text-decoration-none text-dark fs-5 mx-2" href="">+38 (098) 531 6097</a>
                </div>
                <div class="phone">
                <i class="fa-brands fa-telegram " style="color: #4dbbff;"></i>
                <a class="text-decoration-none text-dark fs-5 pb-3 " href="#">+38 (063) 896 0419</a><i class="fa-brands fa-viber mx-1" style="color: #c14dff;"></i>
                </div>
                </div>
        </div>
</header>

<div class="text-bg-dark fixed-theme">
    <div class="container menu ">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start ">
            <div class="menu nav nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0 d-">
                <div class="catalog">
                    <a class="text-decoration-none text-light navcatalog fs-5 catalog-button" id="catalog-button" href="">
                            <i class="fa-solid fa-bars mx-3 fs-5"></i>Каталог</a>
                        <ul class="menu nav-catalog nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0 flex-column">
                            <li class=" item nav-item text-bg-light d-flex justify-content-start align-items-center">
                                <a class="text-dark text-item " href="/"><i class="fa-solid fa-seedling fs-5 px-3"></i>ПОСІВНИЙ МАТЕРІАЛ</a>
                                <i class="fa-solid fa-chevron-right arrow"></i>
                                <ul class="subitems text-bg-dark ">
                                    <li class="nav__item"><a class="text-light subitem" href="/sunflowers " >НАСІННЯ СОНЯШНИКА</a></li>
                                    <li class="nav__item"><a class="text-light subitem" href="/corn">НАСІННЯ КУКУРУДЗИ</a></li>
                                    <li class="nav__item"><a class="text-light subitem" href="/soya">СОЯ</a></li>
                                </ul>
                            </li>
                            <li class=" item nav-item text-bg-light d-flex justify-content-start align-items-center">
                                <a class="text-dark text-item" href="#">
                                    <i class="fa-brands fa-pagelines fs-5 px-3">
                                    </i>ЗАСОБИ ЗАХИСТУ РОСЛИН</a><i class="fa-solid fa-chevron-right arrow"></i>
                                <ul class="subitems2 text-bg-dark ">
                                    <li><a class="text-light subitem" href="/herbicides">ГЕРБІЦИДИ</a></li>
                                    <li><a class="text-light subitem" href="/fungicides">ФУНГІЦИДИ</a></li>
                                    <li><a class="text-light subitem" href="/insecticides">ІНСЕКТИЦИДИ</a></li>
                                    <li><a class="text-light subitem" href="/poisoners">ПРОТРУЙНИКИ</a></li>
                                    <li><a class="text-light subitem nonem" href="/adhesives">ПРИЛИПАЧІ</a></li>
                                    <li><a class="text-light subitem nonem" href="/desiccants">ДЕСИКАНТИ</a></li>
                                </ul>
                            </li>
                            <li class=" item nav-item text-bg-light d-flex justify-content-start align-items-center">
                                <a class="text-dark text-item" href="#"><i class="fa-solid fa-leaf fs-5 px-3">
                                    </i>ДОБРИВА</a>
                                <i class="fa-solid fa-chevron-right arrow"></i>
                                <ul class="subitems text-bg-dark">
                                    <li><a class="text-light subitem" href="/fertilizers">МІКРОДОБРИВА</a></li>
                                </ul>
                            </li>
                        </ul>
                </div>
            </div>
            <!--<form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3 menu" role="search">
                <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search">
            </form>-->

         <!--   <div class="text-end">
                <button type="button" class="btn btn-outline-light me-2 ">Увійти</button>
                <button type="button" class="btn btn-warning">Зареєструватися</button>
            </div>-->
        </div>
    </div>

</div>
<div class="container navigation">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <div class="menu nav nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center align-items-start mb-md-0">
            <ul class="menu nav nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0 flex-column">
                <li class=" item nav-item text-bg-light d-flex justify-content-start align-items-center">
                    <a class="text-dark text-item " href="#"><i class="fa-solid fa-seedling fs-5 px-3"></i>ПОСІВНИЙ МАТЕРІАЛ</a>
                    <i class="fa-solid fa-chevron-right arrow"></i>
                    <ul class="subitems text-bg-dark ">
                        <li class="nav__item"><a class="text-light subitem" href="/sunflowers">НАСІННЯ СОНЯШНИКА</a></li>
                        <li class=""><a class="text-light subitem" href="/corn">НАСІННЯ КУКУРУДЗИ</a></li>
                        <li class="nav__item"><a class="text-light subitem" href="/soya">СОЯ</a></li>
                    </ul>
                </li>
                <li class=" item nav-item text-bg-light d-flex justify-content-start align-items-center">
                    <a class="text-dark text-item" href="#">
                        <i class="fa-brands fa-pagelines fs-5 px-3">
                        </i>ЗАСОБИ ЗАХИСТУ РОСЛИН</a><i class="fa-solid fa-chevron-right arrow"></i>
                    <ul class="subitems2 text-bg-dark ">
                        <li><a class="text-light subitem" href="/herbicides">ГЕРБІЦИДИ</a></li>
                        <li><a class="text-light subitem" href="/fungicides">ФУНГІЦИДИ</a></li>
                        <li><a class="text-light subitem" href="/insecticides">ІНСЕКТИЦИДИ</a></li>
                        <li><a class="text-light subitem" href="/poisoners">ПРОТРУЙНИКИ</a></li>
                        <li><a class="text-light subitem nonem" href="/adhesives">ПРИЛИПАЧІ</a></li>
                        <li><a class="text-light subitem nonem" href="/desiccants">ДЕСИКАНТИ</a></li>
                    </ul>
                </li>
                <li class=" item nav-item text-bg-light d-flex justify-content-start align-items-center">
                    <a class="text-dark text-item" href="#"><i class="fa-solid fa-leaf fs-5 px-3">
                        </i>ДОБРИВА</a>
                    <i class="fa-solid fa-chevron-right arrow"></i>
                    <ul class="subitems text-bg-dark">
                        <li><a class="text-light subitem" href="/fertilizers">МІКРОДОБРИВА</a></li>
                    </ul>
                </li>
            </ul>
            <div class="header-cards float-end d-flex">
                <a class="text-decoration-none" href=".//#popular-product"><div class="header-card "><span class="text-dark text-decoration-none">Популярні товари</span></div></a>
                <a class="text-decoration-none" href=".//#action-product"><div class="header-card "><span class="text-dark text-decoration-none">Акційні товари</span></div></a>
            <!--    <a class="text-decoration-none" href=".//#new-product"><div class="header-card "><span class="text-dark text-decoration-none">Нові товари</span></div></a>-->
             <!--   <a class="text-decoration-none" href=".//#discount"><div class="header-card "><span class="text-dark text-decoration-none">Уцінка</span></div></a>-->
            </div>
        </div>
    </div>
</div>
