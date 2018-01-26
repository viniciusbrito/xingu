<?php 
    $templateHome = get_template_directory_uri();
    $uploadDir = wp_upload_dir()['baseurl'];

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    
    <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Josefin+Sans:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic' rel='stylesheet' type='text/css'>
    
    
    <link rel="shortcut icon" type="image/ico" href="<?= $templateHome ?>/assets/images/favicon.ico" />    
    <?php wp_head(); ?>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top navbar-custom" style="margin-top: 35px;">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php bloginfo( 'url' ); ?>"><?php bloginfo( 'name' ); ?></a>
        </div>

        <div class="navbar-collapse collapse" id="navbar">
            <?php
                wp_nav_menu( array(
                'menu' => 'main-menu',
                'depth' => 2,
                'container' => 'false',
                'menu_class' => 'nav navbar-nav',
                'walker' => new wp_bootstrap_navwalker())
                );
            ?>

            <form class="navbar-form navbar-right" id="search">
                <div class="input-group">
                    <input type="text" class="form-control input-sm" placeholder="Pesquisar...">
                    <span class="input-group-btn">
                        <button class="btn btn-sm btn-default" type="button"><i class="glyphicon glyphicon-search"></i></button>
                    </span>
                </div>
            </form>
        </div>
    </div>
</nav>