<?php get_header(); ?>
<main>
    <div class="container" style="margin-top: 110px;">        
        <div class="row">
            <div class="col-sm-8 col-xs-12">
                <div class="row">
                    <div class="col-sm-12">
                        <h1><?php the_title() ?></h1>
                    </div>
                </div>
                <?php if(have_posts()): while(have_posts()): the_post() ?>
                    <div class="row">
                        <div class="col-sm-12">
                            <?php the_post_thumbnail(); ?>
                        </div>
                    </div>
                <?php endwhile; endif; ?>
            </div>
            <div class="col-sm-3 col-sm-offset-1 col-xs-12 text-center">
                <h2>Culturas</h2>
                <ul>
                    <?php
                        $loop = new WP_Query([
                            'post_type' => 'cultura',
                            'meta_key'  => 'posicao',
                            'orderby'   => 'posicao',
                            'order'     => 'ASC'
                        ]);
                        if($loop->have_posts()) : while($loop->have_posts()) : $loop->the_post()
                    ?>
                            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                    <?php endwhile; endif; ?>
                </ul>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>