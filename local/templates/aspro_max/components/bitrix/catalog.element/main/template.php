<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?$this->addExternalCss("/local/templates/aspro_max/components/bitrix/catalog.element/main/product-page.css");?>

<div id="product-page" class="main__product-block">
        <div class="product-block__left">
            <div class="product-block__image-background">
                <div class="product-block__other-images">
                    <img class="product-block__other-image" src="../main_page/media/product-page/other-image.png">
                    <img class="product-block__other-image" src="../main_page/media/product-page/other-image.png">
                    <img class="product-block__other-image" src="../main_page/media/product-page/other-image.png">
                    <img class="product-block__other-image" src="../main_page/media/product-page/other-image.png">
                </div>
                <div class="product-block__main-image">
                    <img class="product-block__image" src="../main_page/media/product-page/main-image.png">
                </div>
                <div class="swiper product-block__swiper">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide swiper-slide__image-slide ">
                            <img class="swiper-slide__image" src="../main_page/media/product-page/main-image.png">
                        </div>
                        <div class="swiper-slide swiper-slide__image-slide">
                            <img class="swiper-slide__image" src="../main_page/media/product-page/main-image.png">
                        </div>
                        <div class="swiper-slide swiper-slide__image-slide">
                            <img class="swiper-slide__image" src="../main_page/media/product-page/main-image.png">
                        </div>
                        <div class="swiper-slide swiper-slide__image-slide">
                            <img class="swiper-slide__image" src="../main_page/media/product-page/main-image.png">
                        </div>
                        <div class="swiper-slide swiper-slide__image-slide">
                            <img class="swiper-slide__image" src="../main_page/media/product-page/main-image.png">
                        </div>
                    </div>
                    <div class="swiper-pagination product-block__swiper-pagination "></div>
                </div>
            </div>
        </div>
        <div class="product-block__right">
            <div class="product-block__title"><?echo $arResult["NAME"]?></div>
            <div class="product-block__subtitle"><?echo $arResult["NAME"]?></div>
            <div class="product-block__vendor-code">артикул: 19000106952</div>
            <div class="product-block__price">
                <div class="product-block__full-price">666 ₽</div>
                <div class="product-block__discount-price">
                    <div class="product-block__price-title">400 ₽</div>
                    <div class="product-block__price-subtitle">если ты крутой</div>
                </div>
            </div>
            <div class="product-block__button">
                <button class="product-block__button-basket">в корзину</button>
                <button class="product-block__button-elected">
                    <img src="../main_page/media/product-page/white-heart.png">
                </button>
            </div>
            <div class="product-block__search">
                <a href="#" class="product-block__link">наличие в магазинах</a>
                <a href="#" class="product-block__link-arrow">
                    <img src="../main_page/media/icons/carousel_next.svg">
                </a>
            </div>
        </div>
    </div>
    <div class="main__about-product">
        <div class="about-product__title-block">
            <div class="about-product__titlе-item">ОПИСАНИЕ</div>
            <div class="about-product__titlе-item">ПРИМЕНЕНИЕ</div>
            <div class="about-product__titlе-item">СОСТАВ</div>
        </div>
        <div class="about-product__title">Strong Hold Cream Gel MORE INSIDE</div>
        <div class="about-product__vendor-code">артикул: 19000106952</div>
        <div class="about-product__info">
            Чтобы у вашей кожи появился кто-то вроде CICA-терапевта.
            Экстракт Центеллы Азиатской - первоклассный специалист по борьбе со стрессом вследствие
            агрессивного воздействия среды, помогает эпидермису восстанавливать естественный барьер,
            снимает покраснения, улучшает микроциркуляцию крови и способствует увеличению производства
            коллагена. И да, по части увлажнения CICA не уступает гиалуроновой кислоте. А теперь
            прибавьте к этому увлажняющие и защитные свойства аллантоина и пантенола. Хотите помочь своей коже?
        </div>
        <div class="about-product__characteristics">
            <div class="about-product__characteristics-title">подробные характеристики</div>
            <div class="about-product__type-product">
                <div class="about-product__characteristics-left">тип продукта</div>
                <div class="about-product__characteristics-right">салфетки</div>
            </div>
            <div class="about-product__for-whom">
                <div class="about-product__characteristics-left">для кого</div>
                <div class="about-product__characteristics-right">унисекс</div>
            </div>
            <div class="about-product__appointment">
                <div class="about-product__characteristics-left">назначение</div>
                <div class="about-product__characteristics-right">увлажнение и питание</div>
            </div>
            <div class="about-product__application-area">
                <div class="about-product__characteristics-left">область применения</div>
                <div class="about-product__characteristics-right">лицо</div>
            </div>
            <div class="about-product__skin-type">
                <div class="about-product__characteristics-left">тип кожи</div>
                <div class="about-product__characteristics-right">для всех типов кожи</div>
            </div>
        </div>
    </div>
    <div class="main__reviews">
        <div class="reviews__title-block">
            <div class="reviews__title">Отзывы</div>
            <div class="reviews__count">12</div>
        </div>
        <div class="reviews__items">
            <div class="reviews__item">
                <div class="reviews__item-name">Виктория</div>
                <div class="reviews__item-background">
                    <div class="reviews__item-info">
                        <div class="reviews__item-stars">
                            <img class="reviews__item-star" src="../main_page/media/product-page/star-background.png">
                            <img class="reviews__item-star" src="../main_page/media/product-page/star-background.png">
                            <img class="reviews__item-star" src="../main_page/media/product-page/star-background.png">
                            <img class="reviews__item-star" src="../main_page/media/product-page/star-background.png">
                            <img class="reviews__item-star" src="../main_page/media/product-page/star.png">
                        </div>
                        <div class="reviews__item-date">29 сентября 2022 г.</div>
                    </div>
                    <div class="reviews__item-review">
                        Девочки кто хочет распахнутый взгляд, реснички как после наращивания, делает длинными и
                        объемными
                    </div>
                    <div class="reviews__item-feedback">
                        <div class="reviews__item-likes">
                            <div class="reviews__item-like">
                                <img src="../main_page/media/product-page/like.png">
                            </div>
                            <div class="reviews__item-like-count">0</div>
                        </div>
                        <div class="reviews__item-dislikes">
                            <div class="reviews__item-dislike">
                                <img src="../main_page/media/product-page/dislike.png">
                            </div>
                            <div class="reviews__item-dislike-count">2</div>
                        </div>
                    </div>
                </div>
                <div class="reviews__item-rotate-background">
                </div>
            </div>
            <div class="reviews__item">
                <div class="reviews__item-name">Елизавета</div>
                <div class="reviews__item-background">
                    <div class="reviews__item-info">
                        <div class="reviews__item-stars">
                            <img class="reviews__item-star" src="../main_page/media/product-page/star-background.png">
                            <img class="reviews__item-star" src="../main_page/media/product-page/star-background.png">
                            <img class="reviews__item-star" src="../main_page/media/product-page/star-background.png">
                            <img class="reviews__item-star" src="../main_page/media/product-page/star-background.png">
                            <img class="reviews__item-star" src="../main_page/media/product-page/star.png">
                        </div>
                        <div class="reviews__item-date">30 сентября 2022 г.</div>
                    </div>
                    <div class="reviews__item-review">
                        Давно пользуюсь этой тушью,замечательная...не осыпаеться,
                        отлично удлиняет и даёт классный объём
                    </div>
                    <div class="reviews__item-feedback">
                        <div class="reviews__item-likes">
                            <div class="reviews__item-like">
                                <img src="../main_page/media/product-page/like.png">
                            </div>
                            <div class="reviews__item-like-count">0</div>
                        </div>
                        <div class="reviews__item-dislikes">
                            <div class="reviews__item-dislike">
                                <img src="../main_page/media/product-page/dislike.png">
                            </div>
                            <div class="reviews__item-dislike-count">2</div>
                        </div>
                    </div>
                </div>
                <div class="reviews__item-rotate-background">
                </div>
            </div>
        </div>
    </div>
    <div class="main__similar-products">
        <div class="similar-products__title-control">
            <div class="similar-products__title">
                ПОХОЖИЕ ТОВАРЫ
            </div>
            <div class="similar-products__control">
                <div class="swiper-button-prev products__button-prev">
                    <img src="../main_page/media/icons/carousel_prev.svg">
                </div>
                <div class="swiper-button-next products__button-next">
                    <img src="../main_page/media/icons/carousel_next.svg">
                </div>
            </div>
        </div>

            <div class="swiper-container product__slider">
                <div class="swiper-wrapper products__slider-wrapper">
                    <div class="image__slide swiper-slide ">
                        <div class="image-slider__image">
                            <img class="image-slider__image-heart"
                                 src="../main_page/media/product-page/slider/slider__heart.svg">
                            <img src="../main_page/media/product-page/slider/1.png">
                        </div>
                        <div class="image-slider__title">КРЕМ-ГЕЛЬ ДЛЯ СТОЙКИХ ОБРАЗОВ</div>
                        <div class="image-slider__subtitle">Strong Hold Cream Gel MORE INSIDE</div>
                    </div>
                    <div class="image__slide swiper-slide ">
                        <div class="image-slider__image">
                            <img class="image-slider__image-heart"
                                 src="../main_page/media/product-page/slider/slider__heart.svg">
                            <img src="../main_page/media/product-page/slider/2.png">
                        </div>
                        <div class="image-slider__title">КРЕМ-ГЕЛЬ ДЛЯ СТОЙКИХ ОБРАЗОВ</div>
                        <div class="image-slider__subtitle">Strong Hold Cream Gel MORE INSIDE</div>
                    </div>
                    <div class="image__slide swiper-slide ">
                        <div class="image-slider__image">
                            <img class="image-slider__image-heart"
                                 src="../main_page/media/product-page/slider/slider__heart.svg">
                            <img src="../main_page/media/product-page/slider/3.png">
                        </div>
                        <div class="image-slider__title">КРЕМ-ГЕЛЬ ДЛЯ СТОЙКИХ ОБРАЗОВ</div>
                        <div class="image-slider__subtitle">Strong Hold Cream Gel MORE INSIDE</div>
                    </div>
                    <div class="image__slide swiper-slide ">
                        <div class="image-slider__image">
                            <img class="image-slider__image-heart"
                                 src="../main_page/media/product-page/slider/slider__heart.svg">
                            <img src="../main_page/media/product-page/slider/4.png">
                        </div>
                        <div class="image-slider__title">КРЕМ-ГЕЛЬ ДЛЯ СТОЙКИХ ОБРАЗОВ</div>
                        <div class="image-slider__subtitle">Strong Hold Cream Gel MORE INSIDE</div>
                    </div>
                    <div class="image__slide swiper-slide ">
                        <div class="image-slider__image">
                            <img class="image-slider__image-heart"
                                 src="../main_page/media/product-page/slider/slider__heart.svg">
                            <img src="../main_page/media/product-page/slider/5.png">
                        </div>
                        <div class="image-slider__title">КРЕМ-ГЕЛЬ ДЛЯ СТОЙКИХ ОБРАЗОВ</div>
                        <div class="image-slider__subtitle">Strong Hold Cream Gel MORE INSIDE</div>
                    </div>
                    <div class="image__slide swiper-slide ">
                        <div class="image-slider__image">
                            <img class="image-slider__image-heart"
                                 src="../main_page/media/product-page/slider/slider__heart.svg">
                            <img src="../main_page/media/product-page/slider/6.png">
                        </div>
                        <div class="image-slider__title">КРЕМ-ГЕЛЬ ДЛЯ СТОЙКИХ ОБРАЗОВ</div>
                        <div class="image-slider__subtitle">Strong Hold Cream Gel MORE INSIDE</div>
                    </div>
                    <div class="image__slide swiper-slide ">
                        <div class="image-slider__image">
                            <img class="image-slider__image-heart"
                                 src="../main_page/media/product-page/slider/slider__heart.svg">
                            <img src="../main_page/media/product-page/slider/7.png">
                        </div>
                        <div class="image-slider__title">КРЕМ-ГЕЛЬ ДЛЯ СТОЙКИХ ОБРАЗОВ</div>
                        <div class="image-slider__subtitle">Strong Hold Cream Gel MORE INSIDE</div>
                    </div>
                </div>
            </div>

    </div>