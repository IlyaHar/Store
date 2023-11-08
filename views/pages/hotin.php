<?php


require PARTS_DIR . 'header.php';
?>
    <div class="container">
        <div class="product d-flex justify-content-center  ">
            <img class="image-main1" src="<?= IMAGES_URI ?>/hotin.jpg" alt="">
            <section class="text-product  ">
                <h5 class="">ДБ Хотин</h5>
                <h4 class="text-danger mt-3">3600 грн</h4>
                <div class="product-box-desc">
                    <div class="inner-box-desc">

                        <div class="brand mt-3" itemprop="brand" itemscope="" itemtype="http://schema.org/Brand">
                            <span>Виробник: </span><span itemprop="name">ТОВ НВП "Агро-Ритм" </span></div>

                        <div class="model"><span>Модель: </span> Альдазор</div>


                        <div class="stock"><span>Наявність:</span> <i class="fa fa-check-square-o"></i> Є в наявності</div>
                    </div>
                </div>
                <button type="button" class="btn btn-primary mt-4 btn-buy" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Купити
                </button>
                <div class="d-flex justify-content-center align-items-center">
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Телефонуйте по номеру :</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="phone1 text-center">
                                        <i class="fa-solid fa-phone"></i>
                                        <a class="text-decoration-none text-dark fs-5 mx-2" href="">+38 (096) 733 733 0</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
        </div>


<p class="mt-5">
        <ul class=""><li class="rtejustify"><span style="font-size:18px;">Назначение – зерно.</span></li><li class="rtejustify"><span style="font-size:18px;">Группа спелости – среднеранний;</span></li><li class="rtejustify"><span style="font-size:18px;">Тип зерна – желто-оранжевое иногда проявляются красные полосы, зубовидное;</span></li><li class="rtejustify"><span style="font-size:18px;">Среднее количество рядов – 16-18;</span></li><li class="rtejustify"><span style="font-size:18px;">Длина початка – 22-24 см;</span></li><li class="rtejustify"><span style="font-size:18px;">Высота растений – 230-240 см.</span></li><li class="rtejustify"><span style="font-size:18px;">ФАО – 280;</span></li><li class="rtejustify"><span style="font-size:18px;">Масса 1000 зерен – 200-350 гр;</span></li><li class="rtejustify"><span style="font-size:18px;">Потенциал урожайности зерна – 12-14 т/га;</span></li><li class="rtejustify"><span style="font-size:18px;">Уборочная влажность зерна – &nbsp;16,5%.</span></li></ul>
</p>
    </div>
<?php
require PARTS_DIR . 'footer.php';

