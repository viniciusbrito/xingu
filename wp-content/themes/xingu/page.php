<?php get_header(); ?>
<main class="page-main">
    <div class="container">        
        <div class="row">
            <div class="col-md-12">
                <div class="page-title">
                    <h1><?php the_title(); ?></h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="page-post-content">
                    <?php if(have_posts()): while(have_posts()): the_post() ?>
                        <p><?php the_content(); ?></p>
                    <?php endwhile; endif; ?>
                </div>    
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>