<?php
function meu_tema_enqueue_styles() {

    $base_uri = get_template_directory_uri() . '/assets/css/';
    $base_dir = get_template_directory() . '/assets/css/';

    $styles = [
        'fonts'    => 'fonts.css',
        'template' => 'template.css',
        'empresa'  => 'empresa.css',
        'header'   => 'header.css',
        'footer'   => 'footer.css',
    ];

    foreach ($styles as $handle => $file) {
        if (file_exists($base_dir . $file)) {
            wp_enqueue_style(
                $handle . '-style',
                $base_uri . $file,
                [],
                filemtime($base_dir . $file)
            );
        }
    }

    if (is_front_page() && file_exists($base_dir . 'front-page.css')) {
        wp_enqueue_style(
            'front-page-style',
            $base_uri . 'front-page.css',
            [],
            filemtime($base_dir . 'front-page.css')
        );
    }

    // ✅ AOS CDN (Animações)
    wp_enqueue_style(
        'aos-css',
        'https://unpkg.com/aos@2.3.1/dist/aos.css',
        [],
        '2.3.1'
    );

    // ✅ Swiper CSS CDN (Carrossel Versão 12)
    wp_enqueue_style(
        'swiper-css',
        'https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css',
        [],
        '12.0.0'
    );

    // ✅ Intl-Tel-Input CSS CDN (Bandeiras do Telefone Versão 26)
    wp_enqueue_style(
        'intl-tel-css',
        'https://cdn.jsdelivr.net/npm/intl-tel-input@26.7.6/build/css/intlTelInput.css',
        [],
        '26.7.6'
    );
}
add_action('wp_enqueue_scripts', 'meu_tema_enqueue_styles');

function carregar_scripts_tema() {
    // 1. LIBS EXTERNAS (CDNs)
    wp_enqueue_script('aos-js', 'https://unpkg.com/aos@2.3.1/dist/aos.js', [], '2.3.1', true);
    wp_enqueue_script('intl-tel-js', 'https://cdn.jsdelivr.net/npm/intl-tel-input@26.7.6/build/js/intlTelInput.min.js', [], '26.7.6', true);
    wp_enqueue_script('intl-tel-utils', 'https://cdn.jsdelivr.net/npm/intl-tel-input@26.7.6/build/js/utils.js', [], '26.7.6', true);
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js', [], '12.0.0', true);

    // 2. SCRIPT GLOBAL (Menu Mobile + Inicializações Gerais)
    // Ele depende apenas das libs externas
    wp_enqueue_script(
        'meu-script-global', 
        get_template_directory_uri() . '/assets/js/script.js', 
        array('aos-js', 'intl-tel-js', 'swiper-js'), 
        '1.2', 
        true
    );

    // 3. HOME (Lógica específica da Home)
    if ( is_front_page() || is_home() ) {
        wp_enqueue_script(
            'meu-script-home', 
            get_template_directory_uri() . '/assets/js/home.js', 
            array('meu-script-global'), // Depende do global para garantir ordem
            '1.0', 
            true
        );
    }

    // 4. EMPRESA (Lógica específica da página Empresa)
    if ( is_page('empresa') ) {
        wp_enqueue_script(
            'meu-script-empresa', 
            get_template_directory_uri() . '/assets/js/empresa.js', 
            array('meu-script-global'), 
            '1.0', 
            true
        );
    }
}
add_action('wp_enqueue_scripts', 'carregar_scripts_tema');



/**
 * Imprime uma imagem responsiva usando ID da mídia ou URL manual.
 *
 * @param int|string $image Imagem: ID da mídia (int) ou URL (string)
 * @param string $size Tamanho registrado no WP (ex: 'medium', 'large', 'full')
 * @param string $class Classes extras para a <img>
 */
function print_responsive_img( $image, $size = 'full', $class = '' ) {

    // Caso seja ID de mídia
    if ( is_int( $image ) ) {

        // Pega dados básicos da imagem
        $img_src     = wp_get_attachment_image_url( $image, $size );
        $img_srcset  = wp_get_attachment_image_srcset( $image, $size );
        $img_sizes   = wp_get_attachment_image_sizes( $image, $size );
        $img_alt     = get_post_meta( $image, '_wp_attachment_image_alt', true );

        if ( ! $img_alt ) {
            $img_alt = get_the_title( $image ); // fallback
        }

    } 
    // Caso seja URL simples
    else {
        $img_src = $image;
        $img_srcset = '';
        $img_sizes = '';
        $img_alt = '';
    }

    // Imprime o HTML final seguro
    echo '<img 
        src="' . esc_url($img_src) . '"
        ' . ($img_srcset ? 'srcset="' . esc_attr($img_srcset) . '"' : '') . '
        ' . ($img_sizes  ? 'sizes="' . esc_attr($img_sizes) . '"'   : '') . '
        alt="' . esc_attr($img_alt) . '"
        class="' . esc_attr($class) . '"
    />';
}

add_filter('wpcf7_autop_or_not', '__return_false');