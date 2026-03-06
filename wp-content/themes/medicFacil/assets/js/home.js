document.addEventListener('DOMContentLoaded', () => {
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

    aplicarMascaraTelefone();
})


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