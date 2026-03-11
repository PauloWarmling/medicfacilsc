<?php get_header() ?>
<?php $fields = get_fields() ?>
<main>
    <section class="banner">
        <div class="banner-text-wrapper">
            <h1 class="banner-title"><?= $fields['titulo_banner'] ?></h1>
            <p class="banner-text"><?= $fields['paragrafo_banner'] ?></p>
            <div class="proposta-wrapper">
                <a href="#" class="proposta">QUERO UMA PROPOSTA PERSONALIZADA</a>
                <svg aria-hidden="true" class="e-font-icon-svg e-far-file" viewBox="0 0 384 512" xmlns="http://www.w3.org/2000/svg"><path d="M369.9 97.9L286 14C277 5 264.8-.1 252.1-.1H48C21.5 0 0 21.5 0 48v416c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48V131.9c0-12.7-5.1-25-14.1-34zM332.1 128H256V51.9l76.1 76.1zM48 464V48h160v104c0 13.3 10.7 24 24 24h104v288H48z"></path></svg>
            </div>
        </div>
    </section>

    <section class="lei">
        <div class="container">
            <div class="left-right-container">
                <div class="left">
                    <h2 class="lei-title">Cuidar da saúde da equipe agora é lei.</h2>
                    <p class="descricao-lei">Com a Lei <span>nº 14.831/2024</span>, sua empresa é <span>obrigada a oferecer</span> programas de promoção à <span>saúde mental</span>. Não cumprir pode significar processos e penalizações. Mas mais do que obrigação legal, <span>cuidar da saúde dos seus colaboradores é cuidar dos resultados do seu negócio.</span></p>
                </div>
                <div class="right">
                    <img src="<?=get_template_directory_uri()?>/assets/images/image_hero_2.webp" alt="leis" class="lei-img">
                </div>
            </div>
            <div class="lei-features container">
                <div class="feature">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="M80-120v-80h360v-447q-26-9-45-28t-28-45H240l120 280q0 50-41 85t-99 35q-58 0-99-35t-41-85l120-280h-80v-80h247q12-35 43-57.5t70-22.5q39 0 70 22.5t43 57.5h247v80h-80l120 280q0 50-41 85t-99 35q-58 0-99-35t-41-85l120-280H593q-9 26-28 45t-45 28v447h360v80H80Zm585-320h150l-75-174-75 174Zm-520 0h150l-75-174-75 174Zm335-280q17 0 28.5-11.5T520-760q0-17-11.5-28.5T480-800q-17 0-28.5 11.5T440-760q0 17 11.5 28.5T480-720Z"></path></svg>
                    <p class="feature-text"><?= $fields['card_lei_1']; ?></p>
                </div>
                <div class="feature">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="M160-80q-33 0-56.5-23.5T80-160v-440q0-33 23.5-56.5T160-680h200v-120q0-33 23.5-56.5T440-880h80q33 0 56.5 23.5T600-800v120h200q33 0 56.5 23.5T880-600v440q0 33-23.5 56.5T800-80H160Zm0-80h640v-440H600q0 33-23.5 56.5T520-520h-80q-33 0-56.5-23.5T360-600H160v440Zm80-80h240v-18q0-17-9.5-31.5T444-312q-20-9-40.5-13.5T360-330q-23 0-43.5 4.5T276-312q-17 8-26.5 22.5T240-258v18Zm320-60h160v-60H560v60Zm-200-60q25 0 42.5-17.5T420-420q0-25-17.5-42.5T360-480q-25 0-42.5 17.5T300-420q0 25 17.5 42.5T360-360Zm200-60h160v-60H560v60ZM440-600h80v-200h-80v200Zm40 220Z"></path></svg>
                    <p class="feature-text"><?= $fields['card_lei_2']; ?></p>
                </div>
                <div class="feature">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="M42-120v-112q0-33 17-62t47-44q51-26 115-44t141-18q77 0 141 18t115 44q30 15 47 44t17 62v112H42Zm80-80h480v-32q0-11-5.5-20T582-266q-36-18-92.5-36T362-320q-71 0-127.5 18T142-266q-9 5-14.5 14t-5.5 20v32Zm240-240q-66 0-113-47t-47-113h-10q-9 0-14.5-5.5T172-620q0-9 5.5-14.5T192-640h10q0-45 22-81t58-57v38q0 9 5.5 14.5T302-720q9 0 14.5-5.5T322-740v-54q9-3 19-4.5t21-1.5q11 0 21 1.5t19 4.5v54q0 9 5.5 14.5T422-720q9 0 14.5-5.5T442-740v-38q36 21 58 57t22 81h10q9 0 14.5 5.5T552-620q0 9-5.5 14.5T532-600h-10q0 66-47 113t-113 47Zm0-80q33 0 56.5-23.5T442-600H282q0 33 23.5 56.5T362-520Zm300 160-6-30q-6-2-11.5-4.5T634-402l-28 10-20-36 22-20v-24l-22-20 20-36 28 10q4-4 10-7t12-5l6-30h40l6 30q6 2 12 5t10 7l28-10 20 36-22 20v24l22 20-20 36-28-10q-5 5-10.5 7.5T708-390l-6 30h-40Zm20-70q12 0 21-9t9-21q0-12-9-21t-21-9q-12 0-21 9t-9 21q0 12 9 21t21 9Zm72-130-8-42q-9-3-16.5-7.5T716-620l-42 14-28-48 34-30q-2-5-2-8v-16q0-3 2-8l-34-30 28-48 42 14q6-6 13.5-10.5T746-798l8-42h56l8 42q9 3 16.5 7.5T848-780l42-14 28 48-34 30q2 5 2 8v16q0 3-2 8l34 30-28 48-42-14q-6 6-13.5 10.5T818-602l-8 42h-56Zm28-90q21 0 35.5-14.5T832-700q0-21-14.5-35.5T782-750q-21 0-35.5 14.5T732-700q0 21 14.5 35.5T782-650ZM362-200Z"></path></svg>
                    <p class="feature-text"><?= $fields['card_lei_3']; ?></p>
                </div>
                <div class="feature">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="M200-160v-80h64l79-263q8-26 29.5-41.5T420-560h120q26 0 47.5 15.5T617-503l79 263h64v80H200Zm148-80h264l-72-240H420l-72 240Zm92-400v-200h80v200h-80Zm238 99-57-57 142-141 56 56-141 142Zm42 181v-80h200v80H720ZM282-541 141-683l56-56 142 141-57 57ZM40-360v-80h200v80H40Zm440 120Z"></path></svg>
                    <p class="feature-text"><?= $fields['card_lei_4']; ?></p>
                </div>
            </div>
            <div class="proposta-wrapper">
                <a href="#" class="proposta">QUERO UMA PROPOSTA PERSONALIZADA</a>
                <svg aria-hidden="true" class="e-font-icon-svg e-far-file" viewBox="0 0 384 512" xmlns="http://www.w3.org/2000/svg"><path d="M369.9 97.9L286 14C277 5 264.8-.1 252.1-.1H48C21.5 0 0 21.5 0 48v416c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48V131.9c0-12.7-5.1-25-14.1-34zM332.1 128H256V51.9l76.1 76.1zM48 464V48h160v104c0 13.3 10.7 24 24 24h104v288H48z"></path></svg>
            </div>
        </div>
    </section>

    <section class="plano">
        <div class="plano-wrapper container">
            <h2 class="plano-title"><?= $fields['titulo_plano'] ?></h2>
            <p class="plano-text"><?= $fields['paragrafo_plano'] ?></p>

            <div class="plano-features">
                <?php for($i=1; $i <= 8; $i++): ?>
                    <div class="feature">
                        <?php print_responsive_img($fields['imagem_plano_'.$i]['url'], 'small', 'teste'); ?>
                        <p class="feature-text">
                            <?php echo $fields['texto_plano_'.$i]; ?>
                        </p>
                    </div>
                <?php endfor; ?>
            </div>
        </div>

        <div class="proposta-wrapper">
            <a href="#" class="proposta">QUERO OFERECER ESSE BENEFÍCIO À MINHA EQUIPE</a>
            <svg aria-hidden="true" class="e-font-icon-svg e-far-user" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"><path d="M313.6 304c-28.7 0-42.5 16-89.6 16-47.1 0-60.8-16-89.6-16C60.2 304 0 364.2 0 438.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-25.6c0-74.2-60.2-134.4-134.4-134.4zM400 464H48v-25.6c0-47.6 38.8-86.4 86.4-86.4 14.6 0 38.3 16 89.6 16 51.7 0 74.9-16 89.6-16 47.6 0 86.4 38.8 86.4 86.4V464zM224 288c79.5 0 144-64.5 144-144S303.5 0 224 0 80 64.5 80 144s64.5 144 144 144zm0-240c52.9 0 96 43.1 96 96s-43.1 96-96 96-96-43.1-96-96 43.1-96 96-96z"></path></svg>
        </div>

    </section>

    <section class="marketing">
    
        <div class="container">
            <div class="left-right-container">
                <div class="right">
                    <h2 class="marketing-title"><?= $fields['titulo_marketing'] ?></h2>
                    <p class="marketing-text"><?= $fields['paragrafo_marketing'] ?></p>
                </div>
                <div class="left">
                    <div class="swiper swiper-marketing">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <div class="card">
                                    <p class="card-text">Empresas que investem em bem-estar reduzem em <span>até 45% os afastamentos</span>, garantindo equipes mais saudáveis e produtivas.</p>
                                    <div class="proposta-wrapper">
                                        <a href="#" class="proposta">SOLICITAR ORÇAMENTO</a>
                                        <svg aria-hidden="true" class="e-font-icon-svg e-far-file" viewBox="0 0 384 512" xmlns="http://www.w3.org/2000/svg"><path d="M369.9 97.9L286 14C277 5 264.8-.1 252.1-.1H48C21.5 0 0 21.5 0 48v416c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48V131.9c0-12.7-5.1-25-14.1-34zM332.1 128H256V51.9l76.1 76.1zM48 464V48h160v104c0 13.3 10.7 24 24 24h104v288H48z"></path></svg>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <p class="card-text">Empresas que investem em bem-estar reduzem em <span>até 45% os afastamentos</span>, garantindo equipes mais saudáveis e produtivas.</p>
                                    <div class="proposta-wrapper">
                                        <a href="#" class="proposta">SOLICITAR ORÇAMENTO</a>
                                        <svg aria-hidden="true" class="e-font-icon-svg e-far-file" viewBox="0 0 384 512" xmlns="http://www.w3.org/2000/svg"><path d="M369.9 97.9L286 14C277 5 264.8-.1 252.1-.1H48C21.5 0 0 21.5 0 48v416c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48V131.9c0-12.7-5.1-25-14.1-34zM332.1 128H256V51.9l76.1 76.1zM48 464V48h160v104c0 13.3 10.7 24 24 24h104v288H48z"></path></svg>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <p class="card-text">Empresas que investem em bem-estar reduzem em <span>até 45% os afastamentos</span>, garantindo equipes mais saudáveis e produtivas.</p>
                                    <div class="proposta-wrapper">
                                        <a href="#" class="proposta">SOLICITAR ORÇAMENTO</a>
                                        <svg aria-hidden="true" class="e-font-icon-svg e-far-file" viewBox="0 0 384 512" xmlns="http://www.w3.org/2000/svg"><path d="M369.9 97.9L286 14C277 5 264.8-.1 252.1-.1H48C21.5 0 0 21.5 0 48v416c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48V131.9c0-12.7-5.1-25-14.1-34zM332.1 128H256V51.9l76.1 76.1zM48 464V48h160v104c0 13.3 10.7 24 24 24h104v288H48z"></path></svg>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <p class="card-text">Empresas que investem em bem-estar reduzem em <span>até 45% os afastamentos</span>, garantindo equipes mais saudáveis e produtivas.</p>
                                    <div class="proposta-wrapper">
                                        <a href="#" class="proposta">SOLICITAR ORÇAMENTO</a>
                                        <svg aria-hidden="true" class="e-font-icon-svg e-far-file" viewBox="0 0 384 512" xmlns="http://www.w3.org/2000/svg"><path d="M369.9 97.9L286 14C277 5 264.8-.1 252.1-.1H48C21.5 0 0 21.5 0 48v416c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48V131.9c0-12.7-5.1-25-14.1-34zM332.1 128H256V51.9l76.1 76.1zM48 464V48h160v104c0 13.3 10.7 24 24 24h104v288H48z"></path></svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev custom-prev">
                            <svg aria-hidden="true" class="e-font-icon-svg e-eicon-chevron-left" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg"><path d="M646 125C629 125 613 133 604 142L308 442C296 454 292 471 292 487 292 504 296 521 308 533L604 854C617 867 629 875 646 875 663 875 679 871 692 858 704 846 713 829 713 812 713 796 708 779 692 767L438 487 692 225C700 217 708 204 708 187 708 171 704 154 692 142 675 129 663 125 646 125Z"></path></svg>
                        </div>
                        <div class="swiper-button-next custom-next">
                            <svg aria-hidden="true" class="e-font-icon-svg e-eicon-chevron-right" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg"><path d="M696 533C708 521 713 504 713 487 713 471 708 454 696 446L400 146C388 133 375 125 354 125 338 125 325 129 313 142 300 154 292 171 292 187 292 204 296 221 308 233L563 492 304 771C292 783 288 800 288 817 288 833 296 850 308 863 321 871 338 875 354 875 371 875 388 867 400 854L696 533Z"></path></svg>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="tabela">
                <h2 class="tabela-title">MedicFácil x Convênio tradicional</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Benefício</th>
                            <th>MedicFácil</th>
                            <th>Convênio Tradicional</th>
                        </tr>
                    </thead>
                    <tbody>
    
                        <tr>
                            <td>Consultas Online 24h</td>
                            <td class="included"><span class="icon">✔️</span>Incluído</td>
                            <td class="not-included"><span class="icon">✖  </span>Não Incluso</td>
                        </tr>
    
                        <tr>
                            <td>Apoio Psicológico</td>
                            <td class="included"><span class="icon">✔️</span>Incluído</td>
                            <td class="not-included"><span class="icon">✖  </span>Pago à parte</td>
                        </tr>
    
                        <tr>
                            <td>Consultas presenciais inclusas</td>
                            <td class="included"><span class="icon">✔️</span>Sim</td>
                            <td class="included"><span class="icon">✔️</span>Sim</td>
                        </tr>
    
                        <tr class="price-row">
                            <td>Preço por colaborador</td>
                            <td>A partir de R$ 29,90</td>
                            <td>A partir de R$ 29,90</td>
                        </tr>
    
                        <tr>
                            <td>Carência</td>
                            <td class="included">Zero</td>
                            <td class="not-included">Até 180 dias</td>
                        </tr>
    
                        <tr>
                            <td>Check-up anual</td>
                            <td class="included"><span class="icon">✔️</span>Incluído</td>
                            <td class="optional"><span class="icon">✔️</span>Opcional</td>
                        </tr>
    
                        <tr>
                            <td>Apoio Nutricional e Fitness</td>
                            <td class="included"><span class="icon">✔️</span>Sim</td>
                            <td class="not-included"><span class="icon">✖  </span>Pago à parte</td>
                        </tr>
    
                        <tr>
                            <td>Assistência Pet</td>
                            <td class="included"><span class="icon">✔️</span>Incluído</td>
                            <td class="not-included"><span class="icon">✖  </span>Não Incluso</td>
                        </tr>
    
                        <tr>
                            <td>Assistência Funeral</td>
                            <td class="included"><span class="icon">✔️</span>Sim</td>
                            <td class="optional">Opcional</td>
                        </tr>
    
                        <tr>
                            <td>Desconto em Farmácia</td>
                            <td class="included"><span class="icon">✔️</span>Incluído</td>
                            <td class="not-included"><span class="icon">✖  </span>Pago à parte</td>
                        </tr>
    
                    </tbody>
                </table>
            </div>

        </div>
    </section>

    <section class="valor">
        <div class="container">
            <div class="wrapper">
                <p>Por um valor até 5 vezes menor, sua empresa tem a oportunidade de oferecer muito mais qualidade, eficiência e cuidado no dia a dia.</p>
            </div>
        </div>
    </section>

    <section class="cases container">
        <div class="left-right-container">
            <div class="left">
                <h2 class="cases-title">Empresários que já <span>escolheram a Medcfácil</span></h2>
                <div class="proposta-wrapper">
                    <a href="#" class="proposta">QUERO SER O PRÓXIMO CASE DE SUCESSO</a>
                    <svg aria-hidden="true" class="e-font-icon-svg e-far-user" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"><path d="M313.6 304c-28.7 0-42.5 16-89.6 16-47.1 0-60.8-16-89.6-16C60.2 304 0 364.2 0 438.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-25.6c0-74.2-60.2-134.4-134.4-134.4zM400 464H48v-25.6c0-47.6 38.8-86.4 86.4-86.4 14.6 0 38.3 16 89.6 16 51.7 0 74.9-16 89.6-16 47.6 0 86.4 38.8 86.4 86.4V464zM224 288c79.5 0 144-64.5 144-144S303.5 0 224 0 80 64.5 80 144s64.5 144 144 144zm0-240c52.9 0 96 43.1 96 96s-43.1 96-96 96-96-43.1-96-96 43.1-96 96-96z"></path></svg>
                </div>
            </div>
            <div class="right">
                <!-- Slider main container -->
                <div class="swiper swiper-case">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <?php for($i = 1; $i <= 2; $i++): ?>
                        <div class="swiper-slide">
                            <div class="case">
                                <?php print_responsive_img($fields['imagem_case_'.$i]['url']) ?>
                                <p class="case-text"><?= $fields['texto_case_'.$i] ?></p>
                            </div>
                        </div>
                    <?php endfor ?>
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>

            </div>
        </div>
    </section>

    <section class="leads">
        <div class="container">
            <div class="left-right-container">
                <div class="left">
                    <h2 class="lead-title">Comece hoje a transformação da sua empresa</h2>
                    <p class="lead-text">Preencha o formulário abaixo e receba uma proposta personalizada para a sua equipe, é simples, rápido e sem compromisso.</p>
                </div>
    
                <div class="right">
                    <?= do_shortcode('[contact-form-7 id="f8682be" title="Contact form 1"]'); ?>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer() ?>