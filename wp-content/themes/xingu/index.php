<?php 
    $templateHome = get_template_directory_uri();
    $uploadDir = wp_upload_dir()['baseurl'];
?>

<?php get_header(); ?>

<main>        
 <!--   <section class="header">
        <div class="container-fluid" id="hearder-slider" data-slides='["<?=$uploadDir?>/2018/01/banner.jpg", "<?=$uploadDir?>/2018/01/BG01-1440x900.jpg", "<?=$uploadDir?>/2018/01/BG02-1440x900.jpg", "<?=$uploadDir?>/2018/01/BG03-1440x900.jpg"]'>
            <img style="display: none" src="<?=$uploadDir?>/2018/01/BG01-1440x900.jpg" alt="">
            <img style="display: none" src="<?=$uploadDir?>/2018/01/BG02-1440x900.jpg" alt="">
            <img style="display: none" src="<?=$uploadDir?>/2018/01/BG03-1440x900.jpg" alt="">
            <img style="display: none" src="<?=$uploadDir?>/2018/01/banner.jpg" alt="">
            <div class="row">
                <div class="header">

                </div>
            </div>
        </div>
    </section>
     <section class="sobre-servicos">
        <div class="container-fluid">
            Conteúdo aqui
        </div>
    </section>
    <section class="equipe-categorias">
        <div class="container">
            Conteúdo aqui
        </div>
    </section> 
    <section class="blog">
        <div class="container">
            Conteúdo aqui
        </div>
    </section>
-->
   

<div class="container-fluid" id="header-slider" data-slides='["<?=$uploadDir?>/2018/01/banner.jpg", "<?=$uploadDir?>/2018/01/BG01-1440x900.jpg", "<?=$uploadDir?>/2018/01/BG02-1440x900.jpg", "<?=$uploadDir?>/2018/01/BG03-1440x900.jpg"]'>
    <img style="display: none" src="<?=$uploadDir?>/2018/01/BG01-1440x900.jpg" alt="">
    <img style="display: none" src="<?=$uploadDir?>/2018/01/BG02-1440x900.jpg" alt="">
    <img style="display: none" src="<?=$uploadDir?>/2018/01/BG03-1440x900.jpg" alt="">
    <img style="display: none" src="<?=$uploadDir?>/2018/01/banner.jpg" alt="">
    <div class="container">
        <div class="row">
            <div class="col-md-12" id="header">
                <div class="header-grids">

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
    </div>
</div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 sobre">
            <h3>Justo nec ultrices dui sapien eget mi proin.</h3>
            <p>In hendrerit gravida rutrum quisque non tellus. In vitae turpis massa. <br/> Ipsum suspendisse ultrices gravida dictum fusce ut placerat.</p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 servicos">
            <div class="row">
                <div class="col-md-3">
                    <a href="" style="background: url('<?=$uploadDir?>/2018/01/img1.jpg') no-repeat center center;">
                        <h4>
                            <i class="ico" style="background: url('<?=$uploadDir?>/2018/01/icon1.png') no-repeat center center;"></i>
                            <span>Comércio de Insumos</span>
                        </h4>
                    </a>
                </div>

                <div class="col-md-3">
                    <a href="" style="background: url('<?=$uploadDir?>/2018/01/img2.jpg') no-repeat center center;">
                        <h4>
                            <i class="ico" style="background: url('<?=$uploadDir?>/2018/01/icon2.png') no-repeat center center;"></i>
                            <span>Comercialização de grãos</span>
                        </h4>
                    </a>
                </div>

                <div class="col-md-3">
                    <a href="" style="background: url('<?=$uploadDir?>/2018/01/img3.jpg') no-repeat center center;">
                        <h4>
                            <i class="ico" style="background: url('<?=$uploadDir?>/2018/01/icon3.png') no-repeat center center;"></i>
                            <span>Assistência técnica personalizada</span>
                        </h4>
                    </a>
                </div>

                <div class="col-md-3">
                    <a href="" style="background: url('<?=$uploadDir?>/2018/01/img4.jpg') no-repeat center center;">
                        <h4>
                            <i class="ico" style="background: url('<?=$uploadDir?>/2018/01/icon1.png') no-repeat center center;"></i>
                            <span>Armazenagem com entrega fracionada</span>
                        </h4>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <a href="" style="background: url('<?=$uploadDir?>/2018/01/img5.jpg') no-repeat center center;">
                        <h4>
                            <i class="ico" style="background: url('<?=$uploadDir?>/2018/01/icon2.png') no-repeat center center;"></i>
                            <span>Mapeamento de área e projeto agrícola da safra</span>
                        </h4>
                    </a>
                </div>

                <div class="col-md-3">
                    <a href="" style="background: url('<?=$uploadDir?>/2018/01/img6.jpg') no-repeat center center;">
                        <h4>
                            <i class="ico" style="background: url('<?=$uploadDir?>/2018/01/icon3.png') no-repeat center center;"></i>
                            <span>Agricultura de precisão</span>
                        </h4>
                    </a>
                </div>

                <div class="col-md-3">
                    <a href="" style="background: url('<?=$uploadDir?>/2018/01/img7.jpg') no-repeat center center;">
                        <h4>
                            <i class="ico" style="background: url('<?=$uploadDir?>/2018/01/icon1.png') no-repeat center center;"></i>
                            <span>Armazenagem de grãos</span>
                        </h4>
                    </a>
                </div>

                <div class="col-md-3">
                    <a href="" style="background: url('<?=$uploadDir?>/2018/01/img8.jpg') no-repeat center center;">
                        <h4>
                            <i class="ico" style="background: url('<?=$uploadDir?>/2018/01/icon2.png') no-repeat center center;"></i>
                            <span>Armazenagem de sementes em barracão climatizado</span>
                        </h4>
                    </a>
                </div>
            </div>
        </div>
    </div>
<div class="clearfix"></div>
    <div class="row">
        <div class="col-xs-12 col-md-12 equipe-categorias">
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
                                    <div class="col-md-12">
                                        <div class="membro">
                                            <div class="col-xs-12 col-md-2">
                                                <?php the_post_thumbnail(false, ['class'=>'img-responsive']); ?>
                                            </div>
                                            <div class="col-xs-12 col-md-9 text-left">
                                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                <p><?php the_field('descricao'); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; endif; ?>
                    </div>

                    <div class="col-xs-12 col-md-4 col-md-offset-2 categorias">
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
        </div>
    </div>
</div>
</main>

<?php get_footer(); ?>