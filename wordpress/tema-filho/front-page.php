
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

   
<section id="destaques" aria-labelledby="titulo-destaque">
    <h1 id="titulo-destaque">O futebol brasileiro em destaque</h1>

    <div
        class="trilho-destaques"
        id="trilho-destaques"
        aria-roledescription="carrossel"
        aria-label="Destaques esportivos"
    >
        <article class="destaque-slide" aria-label="Destaque 1 de 3">
            <p>DESTAQUE DO DIA</p>
            <h2>Campeonato nacional promete fortes emoções</h2>
            <p>
                Uma notícia fictícia para apresentar as principais
                informações esportivas do portal.
            </p>
            <a href="#noticias">Confira as últimas notícias</a>
        </article>

        <article class="destaque-slide" aria-label="Destaque 2 de 3" hidden>
            <p>GIRO DOS CLUBES</p>
            <h2>Equipes intensificam preparação para a rodada</h2>
            <p>
                Conteúdo fictício sobre a preparação dos clubes
                para os próximos confrontos.
            </p>
            <a href="#jogos">Confira os próximos jogos</a>
        </article>

        <article class="destaque-slide" aria-label="Destaque 3 de 3" hidden>
            <p>NA TABELA</p>
            <h2>A disputa pelas primeiras posições continua</h2>
            <p>
                Um resumo fictício sobre a disputa por posições
                na classificação do campeonato.
            </p>
            <a href="#classificacao">Veja a classificação</a>
        </article>
    </div>

    <div class="controles-destaques">
        <button type="button" id="destaque-anterior">
            Destaque anterior
        </button>

        <p
            id="estado-destaques"
            role="status"
            aria-live="polite"
        >
            Destaque 1 de 3
        </p>

        <button type="button" id="destaque-proximo">
            Próximo destaque
        </button>
    </div>

    <p class="instrucao-destaques">
        Você também pode arrastar o destaque horizontalmente
        com o mouse ou o dedo.
    </p>
</section>


   

        <section id="noticias" aria-labelledby="titulo-noticias">
    <h2 id="titulo-noticias">Últimas notícias</h2>

    <div class="busca-noticias">
        <label for="busca-noticias">
            Buscar notícias por título ou conteúdo
        </label>

        <input
            type="search"
            id="busca-noticias"
            placeholder="Ex.: Internacional"
            aria-describedby="resultado-busca-noticias"
        >

        <p
            id="resultado-busca-noticias"
            role="status"
            aria-live="polite"
        >
            Exibindo as notícias mais recentes.
        </p>
    </div>

    <?php
    $noticias = new WP_Query(array(
        'post_type'      => 'post',
        'posts_per_page' => 3,
        'post_status'    => 'publish',
        'category_name'  => 'noticias'
    ));

    if ($noticias->have_posts()) :
        while ($noticias->have_posts()) :
            $noticias->the_post();
    ?>

            <article class="noticia-item">
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

    <?php
    $jogos = new WP_Query(array(
        'post_type'      => 'post',
        'posts_per_page' => 3,
        'post_status'    => 'publish',
        'category_name'  => 'jogos'
    ));

    if ($jogos->have_posts()) :
        while ($jogos->have_posts()) :
            $jogos->the_post();
    ?>

            <article>
                <h3>
                    <a href="<?php echo esc_url(get_permalink()); ?>">
                        <?php echo esc_html(get_the_title()); ?>
                    </a>
                </h3>

               
                 <div class="detalhes-jogo">
                    <?php the_content(); ?>
                </div>

            </article>

    <?php
        endwhile;
    else :
    ?>

        <p>Nenhum jogo cadastrado no momento.</p>

    <?php
    endif;

    wp_reset_postdata();
    ?>
</section>


        

<section id="classificacao" aria-labelledby="titulo-classificacao">
    <h2 id="titulo-classificacao">Classificação</h2>

    <?php
    $classificacao = new WP_Query(array(
        'post_type'      => 'post',
        'posts_per_page' => 1,
        'post_status'    => 'publish',
        'category_name'  => 'classificacao'
    ));

    if ($classificacao->have_posts()) :
        while ($classificacao->have_posts()) :
            $classificacao->the_post();
    ?>

            <h3><?php echo esc_html(get_the_title()); ?></h3>

            <div class="tabela-responsiva">
                <table>
                    <thead>
                        <tr>
                            <th scope="col">Posição</th>
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

            <p><small>Classificação fictícia para fins acadêmicos.</small></p>

    <?php
        endwhile;
    else :
    ?>

        <p>Nenhuma classificação cadastrada no momento.</p>

    <?php
    endif;

    wp_reset_postdata();
    ?>
</section>

        
<section id="sugestao" aria-labelledby="titulo-sugestao">
            <h2 id="titulo-sugestao">Sugira uma pauta</h2>

            <p id="instrucoes-sugestao">
                Tem uma sugestão de assunto para o portal?
                Preencha os campos abaixo. Os campos com * são obrigatórios.
            </p>

            <form id="form-sugestao" aria-describedby="instrucoes-sugestao">
                <div class="campo-formulario">
                    <label for="nome-sugestao">Seu nome *</label>
                    <input
                        type="text"
                        id="nome-sugestao"
                        name="nome"
                        autocomplete="name"
                        required
                        maxlength="80"
                    >
                </div>

                <div class="campo-formulario">
                    <label for="email-sugestao">Seu e-mail *</label>
                    <input
                        type="email"
                        id="email-sugestao"
                        name="email"
                        autocomplete="email"
                        required
                    >
                </div>

                <div class="campo-formulario">
                    <label for="assunto-sugestao">Assunto da pauta *</label>
                    <input
                        type="text"
                        id="assunto-sugestao"
                        name="assunto"
                        required
                        maxlength="120"
                    >
                </div>

                <div class="campo-formulario">
                    <label for="mensagem-sugestao">Descreva sua sugestão *</label>
                    <textarea
                        id="mensagem-sugestao"
                        name="mensagem"
                        rows="5"
                        required
                        maxlength="1000"
                        aria-describedby="limite-mensagem"
                    ></textarea>
                    <small id="limite-mensagem">
                        Máximo de 1000 caracteres.
                    </small>
                </div>

                <button type="submit">Validar sugestão</button>

                <p id="resultado-sugestao" role="status" aria-live="polite"></p>
            </form>
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
