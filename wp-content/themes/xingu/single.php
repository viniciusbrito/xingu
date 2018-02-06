<?php get_header(); ?>

<main>
    <div class="container" style="margin-top: 110px;">        
        <div class="row">
            <div class="col-sm-8 col-xs-12">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="thumb-cover" style="width: 100%; max-height: 500px;">
                            <?php the_post_thumbnail() ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <h1><?php the_title() ?></h1>
                    </div>
                </div>
                <?php if(have_posts()): while(have_posts()): the_post() ?>
                    <div class="row">
                        <div class="col-sm-12">
                            <p><?php the_content(); ?></p>
                        </div>
                    </div>
                <?php endwhile; endif; ?>
            </div>
            <div class="col-sm-3 col-sm-offset-1 col-xs-12">
                <h2>Categorias</h2>
                <h2>Tags</h2>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>