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


function temporada_em_jogo_enqueue_scripts() {
    wp_enqueue_script(
        'temporada-em-jogo-script',
        get_stylesheet_directory_uri() . '/script.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );
}

add_action('wp_enqueue_scripts', 'temporada_em_jogo_enqueue_scripts');
function temporada_em_jogo_viewport() {
    echo '<meta name="viewport" content="width=device-width, initial-scale=1">' . "\n";
}

add_action('wp_head', 'temporada_em_jogo_viewport');