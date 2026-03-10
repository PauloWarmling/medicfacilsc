document.addEventListener('DOMContentLoaded', () => {


    const swiperMarketing = new Swiper('.swiper-marketing', {
        
        direction: 'horizontal',
        loop: true,

        slidesPerView: 1,
        spaceBetween: 0,

        pagination: {
            el: '.swiper-marketing .swiper-pagination',
            clickable: true,
        },

        navigation: {
            nextEl: '.swiper-marketing .swiper-button-next',
            prevEl: '.swiper-marketing .swiper-button-prev',
        },

        scrollbar: {
            el: '.swiper-marketing .swiper-scrollbar',
        },

        breakpoints: {
            769: {
                slidesPerView: 2,
                spaceBetween: 10
            }
        }
    });

    const swiperCase = new Swiper('.swiper.swiper-case', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,

        slidesPerView: 1,
        spaceBetween: 0,
        
        // If we need pagination
        pagination: {
            el: '.swiper-case .swiper-pagination',
        },
        
        // Navigation arrows
        navigation: {
            nextEl: '.swiper-case .swiper-button-next',
            prevEl: '.swiper-case .swiper-button-prev',
        },
        
        // And if we need scrollbar
        scrollbar: {
            el: '.swiper-case .swiper-scrollbar',
        },
        // RESPONSIVIDADE
        breakpoints: {

            // celular pequeno
            769: {
            slidesPerView: 2,
            spaceBetween: 10
            }
        }
    });

    // Procura o campo de telefone pelo ID que definimos no CF7
    var inputTel = document.querySelector("#whatsapp");
    if (inputTel) {
        window.intlTelInput(inputTel, {
            initialCountry: "br",
            separateDialCode: true,
            // O utilsScript já foi carregado via functions.php, então aqui é opcional
            preferredCountries: ["br", "us", "pt"],
        });
    }

})