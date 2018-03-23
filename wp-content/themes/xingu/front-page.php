<?php 
    $templateHome = get_template_directory_uri();
    $uploadDir = wp_upload_dir()['baseurl'];
?>

<?php get_header(); ?>
<main>
    
    <section class="header">        
        <div class="container-fluid" id="header-slider" data-slides='["<?=$templateHome?>/assets/images/banner.jpg", "<?=$templateHome?>/assets/images/BG01-1440x900.jpg", "<?=$templateHome?>/assets/images/BG02-1440x900.jpg", "<?=$templateHome?>/assets/images/BG03-1440x900.jpg"]'>
            <img style="display: none" src="<?=$templateHome?>/assets/images/BG01-1440x900.jpg" alt="">
            <img style="display: none" src="<?=$templateHome?>/assets/images/BG02-1440x900.jpg" alt="">
            <img style="display: none" src="<?=$templateHome?>/assets/images/BG03-1440x900.jpg" alt="">
            <img style="display: none" src="<?=$templateHome?>/assets/images/banner.jpg" alt="">
            
            <!-- <div class="xingu-logo">
                <img src="<?= $templateHome ?>/assets/images/logo_xingu.png" alt="Logo Xingu">
            </div> -->
        </div>
        <div class="clearfix"></div>
        <div class="container-fluid header-grids">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-xs-2  col-sm-2 col-md-2 col-md-offset-1 header-grid">
                        <div class="header-img text-center">
                            <img src="<?=$templateHome?>/assets/images/icon4.png" class="img-responsive" alt="/">
                            <h4>Infraestrutura</h4>
                        </div>
                    </div>
    
                    <div class="col-xs-2  col-sm-2 col-md-2 header-grid">
                        <div class="header-img text-center">
                            <img src="<?=$templateHome?>/assets/images/icon5.png" class="img-responsive" alt="/">
                            <h4>Consultoria</h4>
                        </div>
                    </div>
    
                    <div class="col-xs-2  col-sm-2 col-md-2 header-grid">
                        <div class="header-img text-center">
                            <img src="<?=$templateHome?>/assets/images/icon6.png" class="img-responsive" alt="/">
                            <h4>Pesquisa e Tecnologia</h4>
                        </div>
                    </div>
    
                    <div class="col-xs-2  col-sm-2 col-md-2 header-grid">
                        <div class="header-img text-center">
                            <img src="<?=$templateHome?>/assets/images/icon7.png" class="img-responsive" alt="/">
                            <h4>Estágio</h4>
                        </div>
                    </div>
    
                    <div class="col-xs-2  col-sm-2 col-md-2 header-grid">
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
                <div class="col-xs-12 col-md-4">
                    <a href="" id="clima">
                        <div class="icone">
                            <span class="ico" id="clima-ico"></span>
                        </div>    
                    </a>
                    <h4>Clima</h4>
                </div>
                <div class="col-xs-12 col-md-4">
                    <a href="" id="mercado">
                        <div class="icone">
                            <span class="ico" id="mercado-ico"></span>
                        </div>    
                    </a>
                    <h4>Mercado</h4>
                </div>
                <div class="col-xs-12 col-md-4">
                    <a href="" id="agronegocio">
                        <div class="icone">
                            <span class="ico" id="agronegocio-ico"></span>
                        </div>    
                    </a>
                    <h4>Agronegócio</h4>
                </div>
                <div class="col-xs-12 col-md-4">
                    <a href="" id="politica">
                        <div class="icone">
                            <span class="ico" id="politica-ico"></span>
                        </div>    
                    </a>
                    <h4>Política</h4>
                </div>
                <div class="col-xs-12 col-md-4">
                    <a href="" id="parceiros">
                        <div class="icone">
                            <span class="ico" id="parceiros-ico"></span>
                        </div>    
                    </a>
                    <h4>Parceiros</h4>
                </div>
                <div class="col-xs-12 col-md-4">
                    <a href="" id="eventos">
                        <div class="icone">
                            <span class="ico" id="eventos-ico"></span>
                        </div>    
                    </a>
                    <h4>Eventos</h4>
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
                    <div class="cultura" id="algodao">
                        <div class="textbox">
                            <img src="<?= $templateHome ?>/assets/images/algodao.png" alt="Algodão">
                            <p>Algodão</p>
                        </div>
                    </div>
                    <div class="cultura" id="soja">
                        <div class="textbox">
                            <img src="<?= $templateHome ?>/assets/images/soja.png" alt="Soja">
                            <p>Soja</p>
                        </div>
                    </div>
                    <div class="cultura" id="milho">
                        <div class="textbox">
                            <img src="<?= $templateHome ?>/assets/images/milho.png" alt="Milho">
                            <p>Milho</p>
                        </div>
                    </div>
                    <div class="cultura" id="arroz">
                        <div class="textbox">
                            <img src="<?= $templateHome ?>/assets/images/arroz.png" alt="Arroz">
                            <p>Arroz</p>
                        </div>
                    </div>
                    <div class="cultura" id="feijao">
                        <div class="textbox">
                            <img src="<?= $templateHome ?>/assets/images/feijao.png" alt="Feijão">
                            <p>Feijão</p>
                        </div>
                    </div>
                    <div class="cultura" id="girassol">
                        <div class="textbox">
                            <img src="<?= $templateHome ?>/assets/images/girassol.png" alt="Girassol">
                            <p>Girassol</p>
                        </div>
                    </div>
                    <div class="cultura" id="pastagem">
                        <div class="textbox">
                            <img src="<?= $templateHome ?>/assets/images/pastagem.png" alt="Pastagem">
                            <p>Pastagem</p>
                        </div>
                    </div>
                    <div class="cultura" id="outros">
                        <div class="textbox">
                            <img src="<?= $templateHome ?>/assets/images/outros.png" alt="Outros">
                            <p>Outros</p>
                        </div>
                    </div>
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