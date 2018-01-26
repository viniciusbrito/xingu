<?php 
    $templateHome = get_template_directory_uri();
    $uploadDir = wp_upload_dir()['baseurl'];

?>
<div class="clearfix"></div>
<footer>
    <div class="footer-section">
        <div class="container">
            <hr />
            <div class="row">
                <!-- Fale Conosco -->
                <div class="col-md-8">                
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
                                    <input class="form-control input-lg" type="text" name="nome" value="" placeholder="Nome">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control input-lg" type="text" name="fone" value="" placeholder="Fone">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input class="form-control input-lg" type="text" name="email" value="" placeholder="E-mail">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control textarea" rows="" cols="" size></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-md-offset-8">
                                <button type="submit" class="btn btn-success btn-lg btn-block"><i class="glyphicon glyphicon-send"></i> Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Contato -->
                <div class="col-md-3 col-md-offset-1 text-left">
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
                    <div class="row">
                        <div class="col-xs-12 col-md-12 text-center" id="facebook">
                            <div class="fb-page" data-href="https://www.facebook.com/v1niciusbrito" data-tabs="timeline" data-width="290" data-height="100"
                                data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                                <blockquote cite="https://www.facebook.com/v1niciusbrito" class="fb-xfbml-parse-ignore">
                                    <a href="https://www.facebook.com/v1niciusbrito">Vinícius Brito</a>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>            
                <div class="row">
                    <div class="col-xs-12 col-md-12 text-center">
                        &copy; Xingu Pesquisa e Consultoria Agronômica - <?= date('Y'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="fb-root"></div>
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