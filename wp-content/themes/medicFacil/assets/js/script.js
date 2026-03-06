document.addEventListener('DOMContentLoaded', () => {
    AOS.init();
    aplicarMascaraTelefone();

    const accordions = document.querySelectorAll(".pergunta-wrapper");

    accordions.forEach(wrapper => {
        const resposta = wrapper.querySelector(".resposta");

        wrapper.addEventListener("click", () => {

            const estavaFechada = !resposta.classList.contains("ativa");
            wrapper.classList.toggle('ativa');
            resposta.classList.toggle("ativa");

            // ✅ FORÇA A TELA A DESCER AO ABRIR
            if (estavaFechada) {
                setTimeout(() => {
                    resposta.scrollIntoView({
                        behavior: "smooth",
                        block: "nearest"
                    });
                }, 200); // tempo da animação
            }
        });
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
    });


});


function aplicarMascaraTelefone() {
  const telefones = document.querySelectorAll('.telefone');

  if (!telefones.length) return;

  telefones.forEach(telefoneElement => {

    let numero = telefoneElement.textContent;

    // Remove tudo que não for número
    numero = numero.replace(/\D/g, '');

    // Remove o 55 se existir
    if (numero.startsWith('55')) {
      numero = numero.slice(2);
    }

    // Aplica a máscara (DD) 9XXXX-XXXX
    if (numero.length === 11) {
      numero = numero.replace(/^(\d{2})(\d{5})(\d{4})$/, '($1) $2-$3');
    }

    // Atualiza apenas o TEXTO da tag <a>
    telefoneElement.textContent = numero;

  });
}
