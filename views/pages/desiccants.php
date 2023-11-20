<?php
require PARTS_DIR . 'header.php';
?>
    <div class="container-lg card-body">
        <div class="main-products2">
            <h2 id="discount" class="product-main text-secondary">Десиканти</h2>
        </div>
        <div class="card-container d-flex justify-content-center" id="products-container">
            <div class="card">
                <a href="/batman" class="text-dark text-decoration-none">
                    <div class="card-content">
                        <img class="image-main" src="<?= IMAGES_URI ?>/batman.jpg" alt="">
                        <h6 class="text-center mt-3">БАТМАН</h6>
                        <p class="text-card">
                            <span>Дикват, 150 г/л</span>
                        </p>
                        <p class="text-center text-danger price-card">1940 грн / 10 л</p>
                    </div>
                </a>
            </div>
        <!--    <div class="card">
                <a href="/pristar" class="text-dark text-decoration-none">
                    <div class="card-content">
                        <img class="image-main" src="<?php /*= IMAGES_URI */?>/pristar.jpg" alt="">
                        <h6 class="text-center mt-3">ПРИСТАР</h6>
                        <p class="text-center text-danger price-card">330.60 грн / л</p>
                    </div>
                </a>
            </div>
            <div class="card">
                <a href="/pragmat" class="text-dark text-decoration-none">
                    <div class="card-content">
                        <img class="image-main" src="<?php /*= IMAGES_URI */?>/pragmat.jpg" alt="">
                        <h6 class="text-center mt-3">ПРАГМАТ</h6>
                        <p class="text-center text-danger price-card">330.60 грн / л</p>
                    </div>
                </a>
            </div>
            <div class="card">
                <a href="/prospero" class="text-dark text-decoration-none">
                    <div class="card-content">
                        <img class="image-main" src="<?php /*= IMAGES_URI */?>/prospero.jpg" alt="">
                        <h6 class="text-center mt-3">ПРОСПЕРО</h6>
                        <p class="text-center text-danger price-card">330.60 грн / л</p>
                    </div>
                </a>
            </div>-->
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


