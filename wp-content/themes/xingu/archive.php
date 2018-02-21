<?php get_header('page'); ?>
<main class="page-main">
    <div class="container">
        <div id="content" role="main">

            <?php the_post(); ?>
            <h1 class="entry-title"><?php the_title(); ?></h1>
            
            <?php get_search_form(); ?>
            
            <h2>Arquivos por mês:</h2>
            <ul>
                <?php wp_get_archives('type=monthly'); ?>
            </ul>
            
            <h2>Arquivos por assunto:</h2>
            <ul>
                <?php wp_list_categories(); ?>
            </ul>

        </div><!-- #content -->
    </div><!-- #container -->
</main>

<?php get_footer(); ?>