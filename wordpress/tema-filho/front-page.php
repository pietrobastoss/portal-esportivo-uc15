
<?php
/**
 * Página inicial do tema Temporada em Jogo.
 */
get_header();
?>

<div class="temporada-portal">

    <header>
        <a href="#inicio" aria-label="Temporada em Jogo - Página inicial">
            <span>TEMPORADA EM JOGO</span>
        </a>

        <p>As principais notícias do futebol brasileiro</p>

        <button class="menu-toggle" type="button"
            aria-expanded="false" aria-controls="menu-principal">
            <span class="menu-toggle-text">Menu</span>
            <span class="menu-toggle-icon" aria-hidden="true">☰</span>
        </button>

        <nav aria-label="Navegação principal" id="menu-principal">
            <ul>
                <li><a href="#inicio">Início</a></li>
                <li><a href="#noticias">Notícias</a></li>
                <li><a href="#jogos">Jogos</a></li>
                <li><a href="#classificacao">Classificação</a></li>
            </ul>
        </nav>
    </header>

    <main id="inicio">

        <section aria-labelledby="titulo-destaque">
            <h1 id="titulo-destaque">O futebol brasileiro em destaque</h1>

            <article>
                <p>DESTAQUE DO DIA</p>
                <h2>Campeonato nacional promete fortes emoções</h2>
                <p>
                    Uma notícia fictícia para apresentar as principais
                    informações esportivas do portal.
                </p>
                <a href="#noticias">Confira as últimas notícias</a>
            </article>
        </section>

   
<section id="noticias" aria-labelledby="titulo-noticias">
    <h2 id="titulo-noticias">Últimas notícias</h2>

    <?php
    $noticias = new WP_Query(array(
        'post_type'      => 'post',
        'posts_per_page' => 3,
        'post_status'    => 'publish'
    ));

    if ($noticias->have_posts()) :
        while ($noticias->have_posts()) :
            $noticias->the_post();
    ?>

            <article>
                <h3>
                    <a href="<?php echo esc_url(get_permalink()); ?>">
                        <?php echo esc_html(get_the_title()); ?>
                    </a>
                </h3>

                <p>
                    <?php echo esc_html(get_the_excerpt()); ?>
                </p>
            </article>

    <?php
        endwhile;
    else :
    ?>

        <p>Nenhuma notícia publicada no momento.</p>

    <?php
    endif;

    wp_reset_postdata();
    ?>
</section>


        <section id="jogos" aria-labelledby="titulo-jogos">
            <h2 id="titulo-jogos">Próximos jogos</h2>

            <article>
                <h3>Equipe Azul x Equipe Vermelha</h3>
                <p>Competição demonstrativa</p>
                <p>Data e horário: a definir</p>
            </article>

            <article>
                <h3>Equipe Verde x Equipe Branca</h3>
                <p>Competição demonstrativa</p>
                <p>Data e horário: a definir</p>
            </article>
        </section>

        <section id="classificacao" aria-labelledby="titulo-classificacao">
            <h2 id="titulo-classificacao">Classificação</h2>

            <p>
                Tabela ilustrativa. Os dados abaixo não representam
                a classificação real de uma competição.
            </p>

            <div class="tabela-responsiva">
                <table>
                    <caption>Classificação fictícia do campeonato</caption>

                    <thead>
                        <tr>
                            <th scope="col">Pos.</th>
                            <th scope="col">Equipe</th>
                            <th scope="col">Pontos</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>1º</td>
                            <td>Equipe Azul</td>
                            <td>15</td>
                        </tr>
                        <tr>
                            <td>2º</td>
                            <td>Equipe Vermelha</td>
                            <td>12</td>
                        </tr>
                        <tr>
                            <td>3º</td>
                            <td>Equipe Verde</td>
                            <td>10</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

    </main>

    <footer>
        <p>
            &copy; 2026 Temporada em Jogo.
            Projeto acadêmico desenvolvido para a UC15.
        </p>
        <p>Conteúdo esportivo demonstrativo.</p>
    </footer>

</div>

<?php get_footer(); ?>
