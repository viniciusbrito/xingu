<?php 
    $templateHome = get_template_directory_uri();
    $uploadDir = wp_upload_dir()['baseurl'];
?>

<?php get_header(); ?>
<main>
    
    <section class="header">        
        <div class="container-fluid" id="header-slider" data-slides='["<?=$templateHome?>/assets/images/banners/banner_1.jpg", "<?=$templateHome?>/assets/images/banners/banner_2.jpg", "<?=$templateHome?>/assets/images/banners/banner_3.jpg", "<?=$templateHome?>/assets/images/banners/banner_4.jpg", "<?=$templateHome?>/assets/images/banners/banner_5.jpg", "<?=$templateHome?>/assets/images/banners/banner_6.jpg", "<?=$templateHome?>/assets/images/banners/banner_7.jpg"]'>
            <img style="display: none" src="<?=$templateHome?>/assets/images/banners/banner_1.jpg" alt="">
            <img style="display: none" src="<?=$templateHome?>/assets/images/banners/banner_2.jpg" alt="">
            <img style="display: none" src="<?=$templateHome?>/assets/images/banners/banner_3.jpg" alt="">
            <img style="display: none" src="<?=$templateHome?>/assets/images/banners/banner_4.jpg" alt="">
            <img style="display: none" src="<?=$templateHome?>/assets/images/banners/banner_5.jpg" alt="">
            <img style="display: none" src="<?=$templateHome?>/assets/images/banners/banner_6.jpg" alt="">
            <img style="display: none" src="<?=$templateHome?>/assets/images/banners/banner_7.jpg" alt="">
        </div>
        <div class="clearfix"></div>
        <div class="container-fluid header-grids">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-xs-2  col-sm-2 col-md-2 col-md-offset-1 header-grid">
                        <a href="<?= get_permalink( get_page_by_title( 'Infraestrutura' ) ) ?>">
                            <div class="header-img text-center">
                                <img src="<?=$templateHome?>/assets/images/icon4.png" class="img-responsive" alt="/">
                                <h4>Infraestrutura</h4>
                            </div>
                        </a>
                    </div>
    
                    <div class="col-xs-2  col-sm-2 col-md-2 header-grid">
                        <a href="<?= get_permalink( get_page_by_title( 'Consultoria' ) ) ?>">
                            <div class="header-img text-center">
                                <img src="<?=$templateHome?>/assets/images/icon5.png" class="img-responsive" alt="/">
                                <h4>Consultoria</h4>
                            </div>
                        </a>
                    </div>
    
                    <div class="col-xs-2  col-sm-2 col-md-2 header-grid">
                        <a href="<?= get_permalink( get_page_by_title( 'Pesquisa e Tecnologia' ) ) ?>">
                            <div class="header-img text-center">
                                <img src="<?=$templateHome?>/assets/images/icon6.png" class="img-responsive" alt="/">
                                <h4>Pesquisa e Tecnologia</h4>
                            </div>
                        </a>
                    </div>
    
                    <div class="col-xs-2  col-sm-2 col-md-2 header-grid">
                        <a href="<?= get_permalink( get_page_by_title( 'Estágio' ) ) ?>">
                            <div class="header-img text-center">
                                <img src="<?=$templateHome?>/assets/images/icon7.png" class="img-responsive" alt="/">
                                <h4>Estágio</h4>
                            </div>
                        </a>
                    </div>
    
                    <div class="col-xs-2  col-sm-2 col-md-2 header-grid">
                        <a href="<?= get_permalink( get_page_by_title( 'Localização e Contato' ) ) ?>">
                            <div class="header-img text-center">
                                <img src="<?=$templateHome?>/assets/images/icon9.png" class="img-responsive" alt="/">
                                <h4>Localização e contato</h4>
                            </div>
                        </a>
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
                        <div class="video">
                            <video width="100%" height="auto" autoplay loop poster="<?=$templateHome?>/assets/images/preload.png">
                                <source src="<?=$templateHome?>/assets/video/xingu.mp4" type="video/mp4">
                                poster
                            </video>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <p>A Xingu Pesquisa e Consultoria Agronômica é uma empresa independente de experimentação e consultoria agrícola, situada na cidade de Confresa – MT, com atuação na região Nordeste do estado de Mato Grosso (Vale Araguaia / Xingu) e região sul do estado do Pará. Em 2015, iniciou-se as atividades com operações voltadas a experimentação agrícola, com serviços de estudo e pesquisa, na inserção, adaptação e desenvolvimento de insumos (defensivos, fertilizantes e sementes), máquinas, implementos e equipamentos agropecuários. Em 2016, obteve-se o credenciamento junto ao Ministério da Agricultura, Pecuária e Abastecimento – MAPA, iniciando a implantação de trabalhos e a prestação de serviços de pesquisa independentes à indústria de proteção de culturas. Desde então, realizamos avaliações para empresas nacionais e internacionais, contribuindo para o sucesso do registro e lançamento futuro de novos ingredientes ativos no mercado brasileiro. De modo atender os produtores agrícolas através do desenvolvimento e implementação de novas estratégias na busca pelo melhor desempenho e performance, em 2017 trabalhando em estreita colaboração com nossos clientes, iniciou-se as atividades voltadas a consultoria agronômica, de modo a maximizar a relação entre a pesquisa e as unidades agrícolas. Oferecemos-lhes um pacote de atendimento profissional composto por planejamento agrícola efetivo, através de monitoramento frequente, voltado a rentabilidade final do setor produtivo de acordo com seus objetivos individuais.</p>
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
                    <a href="<?= get_permalink( get_page_by_title( 'Clima' ) ) ?>" id="clima">
                        <div class="icone">
                            <span class="ico" id="clima-ico"></span>
                        </div>    
                    </a>
                    <h4>Clima</h4>
                </div>
                <div class="col-xs-12 col-md-4">
                    <a href="<?= get_permalink( get_page_by_title( 'Mercado' ) ) ?>" id="mercado">
                        <div class="icone">
                            <span class="ico" id="mercado-ico"></span>
                        </div>    
                    </a>
                    <h4>Mercado</h4>
                </div>
                <div class="col-xs-12 col-md-4">
                    <a href="<?= get_permalink( get_page_by_title( 'Agronegócio' ) ) ?>" id="agronegocio">
                        <div class="icone">
                            <span class="ico" id="agronegocio-ico"></span>
                        </div>    
                    </a>
                    <h4>Agronegócio</h4>
                </div>
                <div class="col-xs-12 col-md-4">
                    <a href="<?= get_permalink( get_page_by_title( 'Política' ) ) ?>" id="politica">
                        <div class="icone">
                            <span class="ico" id="politica-ico"></span>
                        </div>    
                    </a>
                    <h4>Política</h4>
                </div>
                <div class="col-xs-12 col-md-4">
                    <a href="<?= get_permalink( get_page_by_title( 'Parceiros' ) ) ?>" id="parceiros">
                        <div class="icone">
                            <span class="ico" id="parceiros-ico"></span>
                        </div>    
                    </a>
                    <h4>Parceiros</h4>
                </div>
                <div class="col-xs-12 col-md-4">
                    <a href="<?= get_permalink( get_page_by_title( 'Eventos' ) ) ?>" id="eventos">
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