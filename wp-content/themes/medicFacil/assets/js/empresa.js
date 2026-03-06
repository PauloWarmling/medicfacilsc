document.addEventListener('DOMContentLoaded', () => {
    const swiper = new Swiper('.swiper', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,

        slidesPerView: 2,
        spaceBetween: 10,
        
        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
        },
        
        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        
        // And if we need scrollbar
        scrollbar: {
            el: '.swiper-scrollbar',
        },
        // RESPONSIVIDADE
        breakpoints: {

            // celular pequeno
            768: {
            slidesPerView: 1,
            spaceBetween: 0
            },
            480: {
            slidesPerView: 1,
            spaceBetween: 0
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