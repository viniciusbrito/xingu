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
                    query_posts( ['post_type' => 'post', 'showposts' => 3, 'paged'=>$paged] );
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
                <li id="archives"><?php _e('Archives:'); ?>
                    <ul>
                <?php wp_get_archives('type=monthly'); ?>
                    </ul>
                <div class="row">
                    <div class="col-md-12">
                        <h2>Categorias</h2>
                        <ul class="list-group">
                            <?php
                            $categories =  get_categories(); 
                            foreach($categories  as $category):
                                $category_link = get_category_link( $category->term_id ); 
                                ?>
                            <a href="<?= $category_link ?>"><li class="list-group-item"><?= $category->name ?></li></a>
                            <?php endforeach; ?>
                        </ul>
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