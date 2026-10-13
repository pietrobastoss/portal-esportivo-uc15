<?php
/**
 * Funções do tema filho Temporada em Jogo.
 */

function temporada_em_jogo_enqueue_styles() {
    wp_enqueue_style(
        'twentytwentyfive-style',
        get_template_directory_uri() . '/style.css'
    );

    wp_enqueue_style(
        'temporada-em-jogo-style',
        get_stylesheet_uri(),
        array('twentytwentyfive-style'),
        wp_get_theme()->get('Version')
    );
}

add_action('wp_enqueue_scripts', 'temporada_em_jogo_enqueue_styles');