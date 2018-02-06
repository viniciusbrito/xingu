<?php 
    $templateHome = get_template_directory_uri();
    $uploadDir = wp_upload_dir()['baseurl'];
?>

<?php get_header(); ?>
<main>
    
    <section>
        <div class="container-fluid" id="header-slider" data-slides='["<?=$uploadDir?>/2018/01/banner.jpg", "<?=$uploadDir?>/2018/01/BG01-1440x900.jpg", "<?=$uploadDir?>/2018/01/BG02-1440x900.jpg", "<?=$uploadDir?>/2018/01/BG03-1440x900.jpg"]'>
            <img style="display: none" src="<?=$uploadDir?>/2018/01/BG01-1440x900.jpg" alt="">
            <img style="display: none" src="<?=$uploadDir?>/2018/01/BG02-1440x900.jpg" alt="">
            <img style="display: none" src="<?=$uploadDir?>/2018/01/BG03-1440x900.jpg" alt="">
            <img style="display: none" src="<?=$uploadDir?>/2018/01/banner.jpg" alt="">
            <div class="row">
                <div class="col-md-12 header-grids">
                    <div class="col-md-2 col-md-offset-1 header-grid">
                        <div class="header-img text-center">
                            <img src="<?=$templateHome?>/assets/images/icon4.png" class="img-responsive" alt="/">
                            <h4>Infraestrutura</h4>
                        </div>
                    </div>

                    <div class="col-md-2 header-grid">
                        <div class="header-img text-center">
                            <img src="<?=$templateHome?>/assets/images/icon5.png" class="img-responsive" alt="/">
                            <h4>Consultoria</h4>
                        </div>
                    </div>

                    <div class="col-md-2 header-grid">
                        <div class="header-img text-center">
                            <img src="<?=$templateHome?>/assets/images/icon6.png" class="img-responsive" alt="/">
                            <h4>Pesquisa e Tecnologia</h4>
                        </div>
                    </div>

                    <div class="col-md-2 header-grid">
                        <div class="header-img text-center">
                            <img src="<?=$templateHome?>/assets/images/icon8.png" class="img-responsive" alt="/">
                            <h4>Estágio</h4>
                        </div>
                    </div>

                    <div class="col-md-2 header-grid">
                        <div class="header-img text-center">
                            <img src="<?=$templateHome?>/assets/images/icon9.png" class="img-responsive" alt="/">
                            <h4>Localização e contato</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    
    <section class="sobre">        
        <div class="container">
            <?php 
                query_posts( ['post_type' => 'page', 'pagename' => 'quem-somos'] );
                if(have_posts()): while(have_posts()): the_post()
            ?>
                <h1><?php the_title(); ?></h1>
                <div class="row">
                    <div class="col-xs-12 col-md-6">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="Sobre nós imagem" class="img-responsive">
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <p><?php the_excerpt(); ?></p>
                        <a href="<?php the_permalink(); ?>" class="btn btn-sm btn-success">Ler mais</a>
                    </div>
                </div>
                <?php endwhile; endif; ?>
        </div>
    </section>
    <div class="clearfix"></div>

    <section class="transicao">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <h3>Justo nec ultrices dui sapien eget mi proin.</h3>
                    <p>In hendrerit gravida rutrum quisque non tellus. In vitae turpis massa. <br/> Ipsum suspendisse ultrices gravida dictum fusce ut placerat.</p>
                </div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>

    <section class="servicos"> 
        <div class="container-fluid">
            <div class="row">
                <?php
                    $loop = new WP_Query([
                        'post_type' => 'categoria',
                        'meta_key'  => 'posicao',
                        'orderby'   => 'posicao',
                        'order'     => 'ASC'
                    ]);
                    if($loop->have_posts()) : while($loop->have_posts()) : $loop->the_post()
                ?>

                    <div class="col-xs-12 col-md-4">
                        <a href="" style="background: url('<?php the_post_thumbnail_url(); ?>') no-repeat center center;">
                            <div class="icone">
                                <span class="ico" style="background: url('<?php the_field('icone'); ?>') no-repeat center center;"></span>
                            </div>    
                        </a>
                        <h4><?php the_title(); ?></h4>
                    </div>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    
    <section class="culturas">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <h1>Culturas</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <?php
                        $loop = new WP_Query([
                            'post_type' => 'cultura',
                            'meta_key'  => 'posicao',
                            'orderby'   => 'posicao',
                            'order'     => 'ASC'
                        ]);
                        if($loop->have_posts()) : while($loop->have_posts()) : $loop->the_post()
                    ?>
                        <div class="cultura" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">

                                <div class="textbox">
                                    <img src="<?php the_field('icone'); ?>" alt="<?php the_title(); ?>">
                                    <p><?php the_title(); ?></p>
                                </div>
                        </div>
                    <?php endwhile; endif; ?>
                </div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    
    <section class="blog">
        <div class="container">
            <h1>Notícias</h1>
            <div class="row">
                <?php
                    query_posts( ['post_type' => 'post', 'showposts' => 3, 'paged'=>$paged] );
                    if(have_posts()) : while(have_posts()) : the_post()
                ?>
                    <div class="col-md-4 col-xs-12">                
                        <?php the_post_thumbnail(false, ['class'=>'img-responsive']); ?>
                        <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
                        <span><?php the_date(); ?></span>
                        <p><?php the_excerpt(); ?></p>
                        <a class="btn btn-md btn-success" href="<?php the_permalink(); ?>">Leia mais</a>
                    </div>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>

</main>
<?php get_footer(); ?>