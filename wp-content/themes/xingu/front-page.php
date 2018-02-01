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
                            <img src="<?=$uploadDir?>/2018/01/icon4.png" class="img-responsive" alt="/">
                            <h4>Infraestrutura</h4>
                        </div>
                    </div>

                    <div class="col-md-2 header-grid">
                        <div class="header-img text-center">
                            <img src="<?=$uploadDir?>/2018/01/icon5.png" class="img-responsive" alt="/">
                            <h4>Consultoria</h4>
                        </div>
                    </div>

                    <div class="col-md-2 header-grid">
                        <div class="header-img text-center">
                            <img src="<?=$uploadDir?>/2018/01/icon6.png" class="img-responsive" alt="/">
                            <h4>Pesquisa e Tecnologia</h4>
                        </div>
                    </div>

                    <div class="col-md-2 header-grid">
                        <div class="header-img text-center">
                            <img src="<?=$uploadDir?>/2018/01/icon7.png" class="img-responsive" alt="/">
                            <h4>Estágio</h4>
                        </div>
                    </div>

                    <div class="col-md-2 header-grid">
                        <div class="header-img text-center">
                            <img src="<?=$uploadDir?>/2018/01/icon7.png" class="img-responsive" alt="/">
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

    <section class="servicos"> 
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 transicao">
                    <h3>Justo nec ultrices dui sapien eget mi proin.</h3>
                    <p>In hendrerit gravida rutrum quisque non tellus. In vitae turpis massa. <br/> Ipsum suspendisse ultrices gravida dictum fusce ut placerat.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 categorias">
                </div>
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
                            <a href="<?php the_permalink(); ?>">
                                <div class="textbox">
                                    <img src="<?php the_field('icone'); ?>" alt="<?php the_title(); ?>">
                                </div>    
                            </a>
                        </div>
                    <?php endwhile; endif; ?>
                </div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <!-- <section class="equipe-categorias">
        <div class="container">
            <div class="row">
                
                <div class="col-xs-12 col-md-6 equipe">
                    <h3>Equipe</h3>
                    <?php
                        $loop = new WP_Query( [
                            'post_type' => 'equipe',
                            'meta_key'  => 'ordem',
                            'orderby'   => 'ordem',
                            'order'     => 'ASC'
                        ]);
                        if($loop->have_posts()) : while($loop->have_posts()) : $loop->the_post()
                    ?>
                            <div class="row">
                                <div class="col-xs-12 col-md-12">
                                    <div class="membro">
                                        <div class="col-xs-4 col-md-2 col-sm-2">
                                            <?php the_post_thumbnail(false, ['class'=>'img-responsive']); ?>
                                        </div>
                                        <div class="col-xs-8 col-md-10 col-sm-10 text-left">
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                            <p><?php the_field('descricao'); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; endif; ?>
                </div>
                
                <div class="col-xs-12 col-md-4 categorias">
                    <h3>Serviços</h3>
                    <ul>
                        <li>Comércio e Insumos</li>
                        <li>Comercialização de grãos</li>
                        <li>Assistência técnica personalizada</li>
                        <li>Armazenagem com entrega fracionada</li>
                        <li>Mapeamento de área e projeto agrícola da safra</li>
                        <li>Agricultura de precisão</li>
                        <li>Armazenagem de grãos</li>
                        <li>Armazenagem de sementes em barracão climatizado</li>
                    </ul>
                </div>
            </div>
        </div>
    </section> 
    <div class="clearfix"></div> -->
    
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