'use strict';

$(function () {
    // Карусель партнеров
    function carouselPartners(element, startCounterSlide) {
        const slider = $(element);
        if (slider) {
            $(slider).slick({
                slidesToShow: startCounterSlide,
                infinite: false,
                prevArrow: '<button class="slick-arrow carousel__arrow carousel__arrow--prev" type="button"><span class="visually-hidden">Предыдущий слайд</span><svg class="slick-arrow__icon" width="20" height="58" viewBox="0 0 20 58" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.516934 30.5218L19.458 57.1084C19.5075 57.1784 19.567 57.2219 19.6296 57.2339C19.6922 57.2459 19.7555 57.2259 19.8121 57.1763C19.8687 57.1266 19.9163 57.0492 19.9496 56.9531C19.9828 56.8569 20.0003 56.7458 20 56.6326L20 50.7958C20 50.4258 19.9034 50.071 19.7437 49.8444L4.61775 28.619L19.7437 7.39351C19.9076 7.16699 20 6.81209 20 6.4421L20 0.605289C20 0.0993821 19.6765 -0.179996 19.458 0.129589L0.516934 26.7162C0.355947 26.9418 0.225716 27.2305 0.136142 27.5602C0.0465674 27.89 8.37833e-06 28.252 8.3447e-06 28.619C8.31107e-06 28.9859 0.0465673 29.348 0.136141 29.6777C0.225716 30.0074 0.355947 30.2961 0.516934 30.5218Z"/></svg></button>',
                nextArrow: '<button class="slick-arrow carousel__arrow carousel__arrow--next" type="button"><span class="visually-hidden">Следующий слайд</span><svg class="slick-arrow__icon" width="20" height="58" viewBox="0 0 20 58" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M19.4831 26.7155L0.542017 0.128954C0.492523 0.0589285 0.433042 0.015411 0.370407 0.00339831C0.307771 -0.00861438 0.24452 0.0113651 0.187918 0.0610425C0.131316 0.11072 0.0836588 0.188081 0.050419 0.28424C0.0171792 0.380399 -0.000295008 0.491456 3.76815e-06 0.604658V6.44147C3.76815e-06 6.81146 0.0966421 7.16635 0.256305 7.39288L15.3823 28.6183L0.256305 49.8438C0.0924404 50.0703 3.76815e-06 50.4252 3.76815e-06 50.7952V56.632C3.76815e-06 57.1379 0.323531 57.4173 0.542017 57.1077L19.4831 30.5212C19.6441 30.2955 19.7743 30.0068 19.8639 29.6771C19.9534 29.3473 20 28.9853 20 28.6183C20 28.2514 19.9534 27.8893 19.8639 27.5596C19.7743 27.2299 19.6441 26.9412 19.4831 26.7155Z"/></svg></button>',
                dots: false,
                responsive: [
                    {
                        breakpoint: 1200,
                        settings: {
                            slidesToShow: 4
                        }
                    },
                    {
                        breakpoint: 860,
                        settings: {
                            slidesToShow: 3
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 2,
                            centerMode: true,
                            arrows: false,
                            infinite: true,
                        }
                    }
                ]
            });
        }
    }

    carouselPartners('.js--partners', 6);
});

(function ($) {
    // Карусель сертификатов
    function carouselСertificates(element, startCounterSlide) {
        const slider = $(element);
        if (slider) {
            $(slider).slick({
                slidesToShow: startCounterSlide,
                infinite: false,
                prevArrow: '<button class="slick-arrow carousel__arrow carousel__arrow--prev" type="button"><span class="visually-hidden">Предыдущий слайд</span><svg class="slick-arrow__icon" width="20" height="58" viewBox="0 0 20 58" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.516934 30.5218L19.458 57.1084C19.5075 57.1784 19.567 57.2219 19.6296 57.2339C19.6922 57.2459 19.7555 57.2259 19.8121 57.1763C19.8687 57.1266 19.9163 57.0492 19.9496 56.9531C19.9828 56.8569 20.0003 56.7458 20 56.6326L20 50.7958C20 50.4258 19.9034 50.071 19.7437 49.8444L4.61775 28.619L19.7437 7.39351C19.9076 7.16699 20 6.81209 20 6.4421L20 0.605289C20 0.0993821 19.6765 -0.179996 19.458 0.129589L0.516934 26.7162C0.355947 26.9418 0.225716 27.2305 0.136142 27.5602C0.0465674 27.89 8.37833e-06 28.252 8.3447e-06 28.619C8.31107e-06 28.9859 0.0465673 29.348 0.136141 29.6777C0.225716 30.0074 0.355947 30.2961 0.516934 30.5218Z"/></svg></button>',
                nextArrow: '<button class="slick-arrow carousel__arrow carousel__arrow--next" type="button"><span class="visually-hidden">Следующий слайд</span><svg class="slick-arrow__icon" width="20" height="58" viewBox="0 0 20 58" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M19.4831 26.7155L0.542017 0.128954C0.492523 0.0589285 0.433042 0.015411 0.370407 0.00339831C0.307771 -0.00861438 0.24452 0.0113651 0.187918 0.0610425C0.131316 0.11072 0.0836588 0.188081 0.050419 0.28424C0.0171792 0.380399 -0.000295008 0.491456 3.76815e-06 0.604658V6.44147C3.76815e-06 6.81146 0.0966421 7.16635 0.256305 7.39288L15.3823 28.6183L0.256305 49.8438C0.0924404 50.0703 3.76815e-06 50.4252 3.76815e-06 50.7952V56.632C3.76815e-06 57.1379 0.323531 57.4173 0.542017 57.1077L19.4831 30.5212C19.6441 30.2955 19.7743 30.0068 19.8639 29.6771C19.9534 29.3473 20 28.9853 20 28.6183C20 28.2514 19.9534 27.8893 19.8639 27.5596C19.7743 27.2299 19.6441 26.9412 19.4831 26.7155Z"/></svg></button>',
                dots: false,
                responsive: [
                    {
                        breakpoint: 860,
                        settings: {
                            slidesToShow: 3
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            centerMode: true,
                            arrows: false
                        }
                    }
                ]
            });
            let allCountSlides = $(slider).slick("getSlick").slideCount;
            let pages = $('.certificates__count');
            pages.text(1 + '/' + allCountSlides);
            $(slider).on("afterChange", function (event, slick, currentSlide, nextSlide) {
                pages.text(currentSlide + 1 + ' / ' + allCountSlides);
            });
        }
    }

    carouselСertificates('.js--certificates', 4);
})(jQuery);

(function ($) {
    // Маска телефона
    $('input[type="tel"]').mask('+7 (999) 999-99-99');
})(jQuery);

(function ($) {
    // Карусель услуг
    function carouselSliderNavigation(element, startCounterSlide) {
        const slider = $(element);
        if (slider) {
            $(slider).slick({
                slidesToShow: startCounterSlide,
                infinite: false,
                prevArrow: '<button class="slick-arrow carousel__arrow carousel__arrow--prev" type="button"><span class="visually-hidden">Предыдущий слайд</span><svg class="slick-arrow__icon" width="20" height="58" viewBox="0 0 20 58" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.516934 30.5218L19.458 57.1084C19.5075 57.1784 19.567 57.2219 19.6296 57.2339C19.6922 57.2459 19.7555 57.2259 19.8121 57.1763C19.8687 57.1266 19.9163 57.0492 19.9496 56.9531C19.9828 56.8569 20.0003 56.7458 20 56.6326L20 50.7958C20 50.4258 19.9034 50.071 19.7437 49.8444L4.61775 28.619L19.7437 7.39351C19.9076 7.16699 20 6.81209 20 6.4421L20 0.605289C20 0.0993821 19.6765 -0.179996 19.458 0.129589L0.516934 26.7162C0.355947 26.9418 0.225716 27.2305 0.136142 27.5602C0.0465674 27.89 8.37833e-06 28.252 8.3447e-06 28.619C8.31107e-06 28.9859 0.0465673 29.348 0.136141 29.6777C0.225716 30.0074 0.355947 30.2961 0.516934 30.5218Z"/></svg></button>',
                nextArrow: '<button class="slick-arrow carousel__arrow carousel__arrow--next" type="button"><span class="visually-hidden">Следующий слайд</span><svg class="slick-arrow__icon" width="20" height="58" viewBox="0 0 20 58" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M19.4831 26.7155L0.542017 0.128954C0.492523 0.0589285 0.433042 0.015411 0.370407 0.00339831C0.307771 -0.00861438 0.24452 0.0113651 0.187918 0.0610425C0.131316 0.11072 0.0836588 0.188081 0.050419 0.28424C0.0171792 0.380399 -0.000295008 0.491456 3.76815e-06 0.604658V6.44147C3.76815e-06 6.81146 0.0966421 7.16635 0.256305 7.39288L15.3823 28.6183L0.256305 49.8438C0.0924404 50.0703 3.76815e-06 50.4252 3.76815e-06 50.7952V56.632C3.76815e-06 57.1379 0.323531 57.4173 0.542017 57.1077L19.4831 30.5212C19.6441 30.2955 19.7743 30.0068 19.8639 29.6771C19.9534 29.3473 20 28.9853 20 28.6183C20 28.2514 19.9534 27.8893 19.8639 27.5596C19.7743 27.2299 19.6441 26.9412 19.4831 26.7155Z"/></svg></button>',
                dots: false,
                responsive: [
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            centerMode: true,
                            arrows: false,
                            infinite: true,
                        }
                    }
                ]
            });
        }
    }

    carouselSliderNavigation('.js--service-small', 2);
})(jQuery);

(function ($) {
    // Открытие модального окна
    function openModalClick(element) {
        $(element).click(function (event) {
            let parent = $(this).closest("article");
            let overlay = parent.find(".modal-overlay");
            let modal = parent.find(".js_cart_one_click");

            overlay.addClass('show');
            modal.fadeIn();
            $('body').css('overflow', 'hidden');

            return false;
        });
    }

    function openModalClickId(element) {
        $(element).click(function (event) {
            let parent = $(this).closest(".single-technique");
            let overlay = parent.find(".modal-overlay");
            let modal = parent.find(".js_cart_one_click");

            overlay.addClass('show');
            modal.fadeIn();
            $('body').css('overflow', 'hidden');

            return false;
        });
    }

    openModalClick('.technique-item input[action="one_click"]');
    openModalClickId('.single-technique input[action="one_click"]');

    // Закрытие модального окна
    function closeModalWindow(trigger) {
        const modalOverlay = $('.modal-overlay');

        $(document).on('click', trigger, function (event) {

            const parentWindow = $(this).parents('.modal');

            $(modalOverlay).removeClass('show');
            $(parentWindow).css('display', 'none');
            $('body').css('overflow-y', 'initial');

            return false;
        });

        $(document).keyup(function (e) {
            if (e.keyCode === 27) {
                $(modalOverlay).removeClass('show');
                $('.modal').css('display', 'none');
                $('body').css('overflow-y', 'initial');
            }
        });
    }

    closeModalWindow('.js--modal-close');

    document.addEventListener('keypress', function (e) {
        if (e.keyCode === 27) document.getElementById('modal_id').hidden = 1;
    });
})(jQuery);

(function ($) {
    // Яндекс карта
    function yandexMap(coords) {
        ymaps.ready(init);

        function init() {
            var zoom = 17;
            var iconImageSize = [48, 66];
            var iconImageOffset = [-24, -66];
            var center = coords;
            var siteMap = new ymaps.Map('map', {
                center: center,
                zoom: zoom,
                controls: []
            });
            var zoomControl = new ymaps.control.ZoomControl({
                options: {
                    size: "small"
                }
            });
            siteMap.controls.add(zoomControl);
            var elamarPlacemark = new ymaps.Placemark(center, {}, {
                iconLayout: 'default#image',
                iconImageHref: window.location.protocol + '//' + window.location.host + '/images//' + 'ico-map.png',
                iconImageSize: iconImageSize,
                iconImageOffset: iconImageOffset
            });
            siteMap.geoObjects.add(elamarPlacemark);
        }
    }

    yandexMap([55.711833, 37.424120]);
})(jQuery);

(function ($) {
    // Определяем диапазон планшета
    let endMobile = 480;
    let windowWidth = document.body.clientWidth;

    // Карусель по-умолчанию
    function carouselDefault(element, startCounterSlide) {
        const slider = $(element);
        if (slider) {
            $(slider).slick({
                slidesToShow: startCounterSlide,
                centerMode: true,
                arrows: false,
                infinite: false,
                dots: false
            });
        }
    }

    // Карусель по-умолчанию
    function carouselDefaultDots(element, startCounterSlide) {
        const slider = $(element);
        if (slider) {
            $(slider).slick({
                slidesToShow: startCounterSlide,
                centerMode: true,
                arrows: false,
                infinite: false,
                dots: true
            });
        }
    }

    if (windowWidth <= endMobile) {
        carouselDefault('.js--default', 1);
        carouselDefaultDots('.js--default-dots', 1);
    }
})(jQuery);

(function ($) {
    // Определяем диапазон планшета
    let endMobile = 480;
    let windowWidth = document.body.clientWidth;

    // Открытие планшетного меню
    function openMenuTab(trigger) {
        $(trigger).on('click', function () {
            $(this).toggleClass('active');
            $('.page').toggleClass('overflow');
            $('.navigation').toggleClass('open');
            return false;
        });
    }

    // Открытие мобильного меню
    function openMenuMobile(trigger) {
        $(trigger).on('click', function () {
            $(this).toggleClass('active');
            $('.navigation').slideToggle();
            return false;
        });
    }

    if (windowWidth > endMobile) {
        openMenuTab('.js--menu-trigger');
    } else {
        openMenuMobile('.js--menu-trigger');
    }
})(jQuery);

(function ($) {
    // Определяем диапазон планшета
    let startDesktop = 1200;
    let windowWidth = document.body.clientWidth;

    // Меню категорий с иконками
    function catsSliderDesktop(element) {
        const slider = $(element);
        if (slider) {
            $(slider).slick({
                centerMode: false,
                swipeToSlide: true,
                infinite: false,
                dots: true,
                arrows: false,
                responsive: [
                    {
                        breakpoint: 1200,
                        settings: {
                            slidesToShow: 5
                        }
                    },
                    {
                        breakpoint: 980,
                        settings: {
                            slidesToShow: 4
                        }
                    },
                    {
                        breakpoint: 720,
                        settings: {
                            slidesToShow: 3
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 2,
                            centerMode: true,
                            infinite: true
                        }
                    }
                ]
            });
        }
    }

    if (windowWidth < startDesktop) {
        catsSliderDesktop('.js--technique-categories');
    }
})(jQuery);

(function ($) {
    // Аккордион
    function openAccordion(element) {
        let trigger = $(element).find('.accordion__title');

        $(trigger).click(function (event) {
            $(this).parent().siblings().removeClass('active');
            $(this).parent().siblings().find('.accordion__content').slideUp();
            $(this).parent().toggleClass('active');
            return false;
        });
    }

    openAccordion('.js--accordion');

    function detailTabs(element) {
        let tabsLink = $(element).find('.technique-tabs__link').children();


        tabsLink.click(function (event) {
            let tabsLinkAnchor = $(this).attr('href');

            $(element).find('.technique-tabs__link').removeClass('technique-tabs__link--active');
            $(this).parent().addClass('technique-tabs__link--active');
            $(element).find('.technique-tabs__item').removeClass('open');
            $(element).find(tabsLinkAnchor).addClass('open');

            return false;
        });
    }

    detailTabs('.js--tabs');
})(jQuery);

(function ($) {
    // Открываем меню выбора техники
    $('.js--choice-technique').click(function () {
        $(this).siblings('.horizontal-menu').slideToggle();
        return false;
    });

    // Показываем подменю
    $('.horizontal-menu__item--has-child > a').click(function () {
        $(this).toggleClass('active');
        $(this).siblings('.vertical-menu').slideToggle();
        return false;
    });

    // Определяем диапазон планшета
    let startTabs = 880;
    let windowWidth = document.body.clientWidth;

    if (windowWidth <= startTabs) {
        // Показываем подменю
        $('.main-menu__item--has-child > a').click(function () {
            $(this).toggleClass('active');
            $(this).siblings('.sub-menu__wrapper').slideToggle();
            return false;
        });
    }
})(jQuery);

(function ($) {
    // Спойлер текста
    let spoilerTrigger = $('.js--spoiler').find('.js--spoiler-more');

    $(spoilerTrigger).click(function () {
        $('.js--spoiler').find('.js--spoiler-content').toggleClass('open');
        let innerText = $(spoilerTrigger).text();
        if (innerText == 'Читать далее') {
            $(spoilerTrigger).text('Свернуть');
        } else {
            $(spoilerTrigger).text('Читать далее');
        }
    });
})(jQuery);

(function ($) {
    // Счетчик заказа
    let sum = $('.technique-custom__price-total').text();

    $('.js--add-cart').click(
        function () {
            let price = $(this).parents('.custom-card').find('.custom-card__price').data('price');
            let innerText = $(this).children('.custom-card__add-label').text();

            $(this).parents('.custom-card').toggleClass('active');
            if (innerText === 'Добавить') {
                $(this).children('.custom-card__add-label').text('Убрать');
            } else {
                $(this).children('.custom-card__add-label').text('Добавить');
            }

            if ($(this).parents('.custom-card').hasClass('active')) {
                sum = +sum + +price;
                $('.technique-custom__price-total').text(sum);
            } else {
                sum = +sum - (+price);
                $('.technique-custom__price-total').text(sum);
            }

            $('.technique-custom__price-total').each(function () {
                this.innerHTML = (parseInt(this.textContent) * 1)
                    .toLocaleString('ru-RU')
            })

            return false;
        }
    );

})(jQuery);

(function ($) {
    // Спойлер таблицы

})(jQuery);

(function ($) {
    // Скролл к якорю
    $('.technique-specifications__more').click(function () {
        var _href = $(this).attr("href");
        $("html, body").animate({scrollTop: $(_href).offset().top + "px"});
        return false;
    });
})(jQuery);


(function ($) {
    // Выбор категорий на главной
    let select_category_item = $(".js-select-category-slider .horizontal-menu__item");
    select_category_item.click(function (e) {
        e.preventDefault();
        let id = parseInt($(this).data("id"));
        $(".js-select-category-title").text($(this).text());
        $.post(
            "/",
            {
                "module": "shop",
                "action": "getProductsByCategory",
                "ajax": 1,
                "cat_id": id,
            },
            function (result) {
                result = JSON.parse(result);
                result.data = prepare(result.data);
                $(".js-select-category-products").html('');
                if (result.data != "") $(".js-select-category-products").html(result.data);
                else $(".js-select-category-products").html('Результаты отсутствуют!');
            });
    });
    $(".js-select-category-slider .horizontal-menu__item:nth-child(1)").click();
})(jQuery);