<?php 
    $templateHome = get_template_directory_uri();
    $uploadDir = wp_upload_dir()['baseurl'];

?>
<div class="clearfix"></div>
<footer>
    <div class="footer-section">
        <div class="container">
            
            <div class="row">
                <div class="col-xs-12 col-md-4 equipe">
                    <h1>Equipe</h1>
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
                                        <div class="col-xs-4 col-md-3 col-sm-3">
                                            <?php the_post_thumbnail(false, ['class'=>'img-responsive']); ?>
                                        </div>
                                        <div class="col-xs-8 col-md-9 col-sm-9 text-left">
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                            <p><?php the_field('descricao'); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; endif; ?>
                </div>
                <div class="col-xs-12 col-md-8">
                    <div class="row">
                        <!-- Fale Conosco -->
                        <div class="col-md-6">                
                            <form class="form">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <h1>Fale conosco</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control input-xs" type="text" name="nome" value="" placeholder="Nome">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control input-xs" type="text" name="fone" value="" placeholder="Fone">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input class="form-control input-xs" type="text" name="email" value="" placeholder="E-mail">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea class="form-control textarea" rows="" cols=""></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <button type="submit" class="btn btn-success btn-sm btn-block"><i class="glyphicon glyphicon-send"></i> Enviar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Contato -->
                        <div class="col-md-5 col-md-offset-1 text-left">
                            <!-- footer-logo -->
                            <div class="row" id="footer-logo">
                                <div class="col-md-12">
                                    <img width="100%" class="image-responsive" src="<?=$templateHome?>/assets/images/logo_xingu.png" alt="Xingu Pesquisa">
                                </div>
                            </div>
                            <!-- contato info -->
                            <div class="row text-left" id="footer-contato">
                                <div class="col-xs-12 col-md-12">
                                    <h5>Telefone: (99) 9999-9999</h5>
                                </div>
                                <div class="col-xs-12 col-md-12">
                                    <h5>Email: contato@email.com.br</h5>
                                </div>
                                <div class="col-xs-12 col-md-12">
                                    <h5>Endereço: R. Sete de Setembro, 211
                                    <br/>Luis Eduardo Magalhães - BA, 47850-00</h5>
                                </div>
                            </div>
                            <!-- facebook page -->
                            <!-- <div class="row">
                                <div class="col-xs-12 col-md-12 text-center" id="facebook">
                                    <div class="fb-page" data-href="https://www.facebook.com/v1niciusbrito" data-tabs="timeline" data-width="290" data-height="100"
                                        data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                                        <blockquote cite="https://www.facebook.com/v1niciusbrito" class="fb-xfbml-parse-ignore">
                                            <a href="https://www.facebook.com/v1niciusbrito">Vinícius Brito</a>
                                        </blockquote>
                                    </div>
                                </div>
                            </div> -->
                        </div>            
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-12 text-center footer-copy">
                    &copy; Xingu Pesquisa e Consultoria Agronômica - <?= date('Y'); ?>
                </div>
            </div>
        </div>
    </div>
    <!-- <div id="fb-root"></div> -->
    <!-- <script>(function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.11';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script> -->

    <?php wp_footer(); ?>
</footer>
</body>
</html>