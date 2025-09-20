$(function() {
    // кнопки с типами продукции
    $('.listTypesProds button').click(function() {
        $('.listTypesProds button').removeClass('btnSecondActive');
        $(this).addClass('btnSecondActive');

        //тип раздела
        section = $(this).data('section');
        
        //скрыть элементы из других разделов
        $('.listProducts li').each(function() {
            if ($(this).data('section') != section) {
                $(this).addClass('itemProductHidden');
            } else {
                $(this).removeClass('itemProductHidden');
            }
        });

        $('.listProducts').trigger('refresh.owl.carousel');
    });

    let $slider = $('.listProducts');

    $slider.owlCarousel({
        items: 1,
        // margin: 20,
        loop: true,
        dots: false,
        nav: false, // выключаем стандартные стрелки
        // responsive:{
        //     0:{ items:1 },
        //     600:{ items:2 },
        //     900:{ items:3 },
        //     1200:{ items:4 }
        // }
    });


    $('.btnNextArrowProduct').click(function() {
        $slider.trigger('next.owl.carousel');
    });
    $('.btnPrevArrowProduct').click(function() {
        $slider.trigger('prev.owl.carousel');
    });
});