$(function() {
    let header = $('.header');

    $(window).scroll(function() {
        if($(this).scrollTop() > 1) {
            header.addClass('header_fixed');
        } else {
            header.removeClass('header_fixed');
        }
    });
});

$(function() {
    let header = $('.header');
    let hederHeight = header.height(); // вычисляем высоту шапки

    $(window).scroll(function() {
        if($(this).scrollTop() > 1) {
            header.addClass('header_fixed');
            $('body').css({
                'paddingTop': hederHeight+'px' // делаем отступ у body, равный высоте шапки
            });
        } else {
            header.removeClass('header_fixed');
            $('body').css({
                'paddingTop': 0 // удаляю отступ у body, равный высоте шапки
            })
        }
    });
});

if($(this).scrollTop() > 300) {
    header.css({
        'padding': '5px 0',
        'background': '#f6ffdb',
        'transition': '.3s'
    });
} else {
    header.css({
        'padding': '15px 0',
        'background': '#ffffff',
        'transition': '.3s'
    });
}

let mobileTel = $('.header__tel').first();  // сохранем в переменную первый элемент с классом header__tel

if($(this).scrollTop() > 500) {
    mobileTel.fadeOut();
} else {
    mobileTel.fadeIn();
}

// скрипт для кнопок лист

function button_first_advantages (){
    let photo= 'public/images/icon/compliance.png'
    let text1= 'Изготовление продукцию для тендеров по техническим заданиям заказчиков.' ;
    document.getElementById('advantages-list-img').src= photo;
    document.getElementById('advantages-text-img').innerText= text1;
}
function button_second_advantages (){
    let photo= 'public/images/icon/guarantee.png'
    let text1= 'Вся продукция производится из качественного, экологически чистого, отечественного сырья на современном оборудовании. Продукция сертифицирована и соответвует ГОСТ.' ;
    document.getElementById('advantages-list-img').src= photo;
    document.getElementById('advantages-text-img').innerText= text1;
}
function button_third_advantages (){
    let photo= 'public/images/icon/low-price.png'
    let text1= 'Прямые поставки сырья, низкие производственные издержки, отсутствие посредников - гарантируют конкурентные цены на нашу продукцию. Работаем как с НДС, так без НДС.' ;
    document.getElementById('advantages-list-img').src= photo;
    document.getElementById('advantages-text-img').innerText= text1;
}
function button_fourth_advantages(){
    let photo= 'public/images/icon/free-delivery.png'
    let text1= 'При заказе от 5 000 руб. бесплатная доставка в Новосибирск, Бердск, Искитим. При заказе из других регионов бесплатная доставка до транспортной компании' ;
    document.getElementById('advantages-list-img').src= photo;
    document.getElementById('advantages-text-img').innerText= text1;
}


