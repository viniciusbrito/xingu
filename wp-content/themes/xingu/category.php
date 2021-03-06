<?php get_header('page'); ?>
<main class="page-main">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <div class="page-title">
                    <h1><?php the_title(); ?></h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9 col-xs-12">
                <?php
                    if(have_posts()) : while(have_posts()) : the_post()
                ?>
                        <div class="page-post-header">
                            <div class="page-post-thumb">
                                <?php the_post_thumbnail(false, ['class'=>'img-responsive']); ?>
                            </div>
                            <div class="page-post-title">
                               <a href="<?php the_permalink() ?>"><h2><?php the_title(); ?></h2></a>
                            </div>
                            <div class="page-post-date">
                                <spam><?php the_date() ?></spam>
                            </div>
                        </div>
                        <div class="page-post-content">
                            <p><?php the_excerpt(); ?></p>
                        </div>
                        <div class="page-post-footer">
                            <a class="btn btn-md btn-info" href="<?php the_permalink(); ?>">Ler mais ...</a>
                        </div>
                <?php endwhile; endif; ?>
                <div class="paginacao"><?php wp_pagination();?></div>
            </div>
            <div class="col-md-3 col-xs-12 right">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Categorias</h2>
                        <?php wp_list_categories(); ?>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-12">
                        <h3>Tags</h3>
                        <?php
                            $tags = get_tags(); 
                            foreach($tags as $tag):
                                $tag_link = get_tag_link( $tag->term_id );
                        ?>
                                <a href="<?= $tag_link ?>" title="<?= $tag->name ?> Tag" class=""><?= $tag->name ?></a>
                            <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>