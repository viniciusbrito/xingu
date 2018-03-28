<?php get_header('page'); ?>
<main class="single-post">
    <div class="container">        
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Notícias</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9 col-xs-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="thumb-cover">
                            <img src="<?php the_post_thumbnail_url() ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="single-title">
                            <h2><?php the_title() ?></h2>
                        </div>
                        <div class="single-date">
                            <spam>Publicado em <?= get_the_date() ?></spam>
                        </div>
                    </div>
                </div>
                <?php if(have_posts()): while(have_posts()): the_post() ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="single-content">
                                <p><?php the_content(); ?></p>
                            </div>
                            <div class="single-tags">
                                <?php the_tags() ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; endif; ?>
            </div>
            <div class="col-md-3 col-xs-12 right">
                <div class="row">
                    <div class="col-md-12">
                        <h3>Categorias</h3>
                        <div class="list-group">
                            <?php
                            $categories =  get_categories(); 
                            foreach($categories  as $category):
                                $category_link = get_category_link( $category->term_id ); 
                                ?>
                            <a href="<?= $category_link ?>" class="list-group-item"><?= $category->name ?></a>
                            <?php endforeach; ?>
                        </div>
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
                                <a href="<?= $tag_link ?>" title="<?= $tag->name ?> Tag" class="badge"><?= $tag->name ?></a>
                            <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>