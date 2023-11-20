<?php
require PARTS_DIR . 'header.php';
?>
    <div class="container-lg card-body">
        <div class="main-products2">
            <h2 id="discount" class="product-main text-secondary">Інсектициди</h2>
        </div>
        <div class="card-container d-flex justify-content-center" id="products-container">
            <div class="card">
                <a href="/anders" class="text-dark text-decoration-none">
                    <div class="card-content">
                        <img class="image-main" src="<?= IMAGES_URI ?>/anders.jpg" alt="">
                        <h6 class="text-center mt-3">АНДЕРС</h6>
                        <p class="text-card">
                            <span>Імідаклоприд, 300 г/л</span>
                        </p>
                        <p class="text-center text-danger price-card">3900 грн / 5 л</p>
                    </div>
                </a>
            </div>
            <div class="card">
                <a href="/luter" class="text-dark text-decoration-none">
                    <div class="card-content">
                        <img class="image-main" src="<?= IMAGES_URI ?>/luter.jpg" alt="">
                        <h6 class="text-center mt-3">ЛЮТЕР</h6>
                        <p class="text-card">
                            <span>Альфа-циперметрин, 100 г/л</span>
                        </p>
                        <p class="text-center text-danger price-card">1530 грн / 5 л</p>
                    </div>
                </a>
            </div>
            <div class="card">
                <a href="/polkar" class="text-dark text-decoration-none">
                    <div class="card-content">
                        <img class="image-main" src="<?= IMAGES_URI ?>/polkar.png" alt="">
                        <h6 class="text-center mt-3">ПОЛКАР</h6>
                        <p class="text-card">
                            <span>Ацетаміприд, 200 г/кг</span>
                        </p>
                        <p class="text-center  price-card text-warning">Немає в наявности</p>
                    </div>
                </a>
            </div>
            <div class="card">
                <a href="/forint" class="text-dark text-decoration-none">
                    <div class="card-content">
                        <img class="image-main" src="<?= IMAGES_URI ?>/forint.jpg" alt="">
                        <h6 class="text-center mt-3">ФОРИНТ</h6>
                        <p class="text-card">
                            <span>Хлорпірифос, 500 г/л</span>
                        </p>
                        <p class="text-center text-danger price-card">2370 грн / 5 л</p>
                    </div>
                </a>
            </div>
        </div>
        <!--        <div class="card-container d-flex justify-content-center " id="products-container">-->
        <!--            <div class="card">-->
        <!--                <a href="/spiner" class="text-dark text-decoration-none">-->
        <!--                    <div class="card-content">-->
        <!--                        <img class="image-main" src="--><?php //= IMAGES_URI ?><!--/spiner.jpg" alt="">-->
        <!--                        <h6 class="text-center mt-3">СПІНЕР</h6>-->
        <!--                        <p class="text-center text-danger price-card">330.60 грн / л</p>-->
        <!--                    </div>-->
        <!--                </a>-->
        <!--            </div>-->
        <!--            <div class="card">-->
        <!--                <a href="/migel" class="text-dark text-decoration-none">-->
        <!--                    <div class="card-content">-->
        <!--                        <img class="image-main" src="--><?php //= IMAGES_URI ?><!--/migel.jpg" alt="">-->
        <!--                        <h6 class="text-center mt-3">МІГЕЛЬ</h6>-->
        <!--                        <p class="text-center text-danger price-card">330.60 грн / л</p>-->
        <!--                    </div>-->
        <!--                </a>-->
        <!--            </div>-->
        <!--            <div class="card">-->
        <!--                <a href="/youkatan" class="text-dark text-decoration-none">-->
        <!--                    <div class="card-content">-->
        <!--                        <img class="image-main" src="--><?php //= IMAGES_URI ?><!--/youkatan.png" alt="">-->
        <!--                        <h6 class="text-center mt-3">ЮКАТАН</h6>-->
        <!--                        <p class="text-center text-danger price-card">330.60 грн / л</p>-->
        <!--                    </div>-->
        <!--                </a>-->
        <!--            </div>-->
        <!--            <div class="card">-->
        <!--                <a href="/stiven" class="text-dark text-decoration-none">-->
        <!--                    <div class="card-content">-->
        <!--                        <img class="image-main" src="--><?php //= IMAGES_URI ?><!--/stiven.jpg" alt="">-->
        <!--                        <h6 class="text-center mt-3">Стівен</h6>-->
        <!--                        <p class="text-center text-danger price-card">330.60 грн / л</p>-->
        <!--                    </div>-->
        <!--                </a>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--        <button id="loadMoreButton5" class="btn btn-primary">Подивитися ще</button>-->

        <!--        <div class="products-next5" id="products-next-container">-->
        <!--            <div class="card">-->
        <!--                <a href="" class="text-dark text-decoration-none">-->
        <!--                    <div class="card-content">-->
        <!--                        <img class="image-main" src="--><?php //= IMAGES_URI ?><!--/syngenta.jpg" alt="">-->
        <!--                        <h6 class="text-center mt-3">Соняшник Сурелі Сінгента</h6>-->
        <!--                        <p class="text-center text-danger price-card">330.60 грн / л</p>-->
        <!--                    </div>-->
        <!--                </a>-->
        <!--            </div>-->
        <!--            <div class="card">-->
        <!--                <a href="" class="text-dark text-decoration-none">-->
        <!--                    <div class="card-content">-->
        <!--                        <img class="image-main" src="--><?php //= IMAGES_URI ?><!--/syngenta.jpg" alt="">-->
        <!--                        <h6 class="text-center mt-3">Соняшник Сурелі Сінгента</h6>-->
        <!--                        <p class="text-center text-danger price-card">330.60 грн / л</p>-->
        <!--                    </div>-->
        <!--                </a>-->
        <!--            </div>-->
        <!--            <div class="card">-->
        <!--                <a href="" class="text-dark text-decoration-none">-->
        <!--                    <div class="card-content">-->
        <!--                        <img class="image-main" src="--><?php //= IMAGES_URI ?><!--/syngenta.jpg" alt="">-->
        <!--                        <h6 class="text-center mt-3">Соняшник Сурелі Сінгента</h6>-->
        <!--                        <p class="text-center text-danger price-card">330.60 грн / л</p>-->
        <!--                    </div>-->
        <!--                </a>-->
        <!--            </div>-->
        <!--            <div class="card">-->
        <!--                <a href="" class="text-dark text-decoration-none">-->
        <!--                    <div class="card-content">-->
        <!--                        <img class="image-main" src="--><?php //= IMAGES_URI ?><!--/syngenta.jpg" alt="">-->
        <!--                        <h6 class="text-center mt-3">Соняшник Сурелі Сінгента</h6>-->
        <!--                        <p class="text-center text-danger price-card">330.60 грн / л</p>-->
        <!--                    </div>-->
        <!--                </a>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--        <div class="products-next5" id="products-next-container">-->
        <!--            <div class="card">-->
        <!--                <a href="" class="text-dark text-decoration-none">-->
        <!--                    <div class="card-content">-->
        <!--                        <img class="image-main" src="--><?php //= IMAGES_URI ?><!--/syngenta.jpg" alt="">-->
        <!--                        <h6 class="text-center mt-3">Соняшник Сурелі Сінгента</h6>-->
        <!--                        <p class="text-center text-danger price-card">330.60 грн / л</p>-->
        <!--                    </div>-->
        <!--                </a>-->
        <!--            </div>-->
        <!--            <div class="card">-->
        <!--                <a href="" class="text-dark text-decoration-none">-->
        <!--                    <div class="card-content">-->
        <!--                        <img class="image-main" src="--><?php //= IMAGES_URI ?><!--/syngenta.jpg" alt="">-->
        <!--                        <h6 class="text-center mt-3">Соняшник Сурелі Сінгента</h6>-->
        <!--                        <p class="text-center text-danger price-card">330.60 грн / л</p>-->
        <!--                    </div>-->
        <!--                </a>-->
        <!--            </div>-->
        <!--            <div class="card">-->
        <!--                <a href="" class="text-dark text-decoration-none">-->
        <!--                    <div class="card-content">-->
        <!--                        <img class="image-main" src="--><?php //= IMAGES_URI ?><!--/syngenta.jpg" alt="">-->
        <!--                        <h6 class="text-center mt-3">Соняшник Сурелі Сінгента</h6>-->
        <!--                        <p class="text-center text-danger price-card">330.60 грн / л</p>-->
        <!--                    </div>-->
        <!--                </a>-->
        <!--            </div>-->
        <!--            <div class="card">-->
        <!--                <a href="" class="text-dark text-decoration-none">-->
        <!--                    <div class="card-content">-->
        <!--                        <img class="image-main" src="--><?php //= IMAGES_URI ?><!--/syngenta.jpg" alt="">-->
        <!--                        <h6 class="text-center mt-3">Соняшник Сурелі Сінгента</h6>-->
        <!--                        <p class="text-center text-danger price-card">330.60 грн / л</p>-->
        <!--                    </div>-->
        <!--                </a>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
    </div>

<?php
require PARTS_DIR . 'footer.php';


