<?php
/* Carrega scripts CSS e JS */
function wp_responsivo_scripts()
{
    /* Carregando CSS header */
    wp_enqueue_style( 'reset', get_template_directory_uri() . '/assets/css/reset.css' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
    wp_enqueue_style( 'custom', get_template_directory_uri() . '/assets/css/meustyle.css' );
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    /* Carregando no footer */
    wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/assets/js/bootstrap.min.js', ['jquery'], '', true );
    wp_enqueue_script('custom-js', get_template_directory_uri().'/assets/js/custom.js', ['jquery'], '', true );
}
add_action( 'wp_enqueue_scripts', 'wp_responsivo_scripts' );
/* Fim scripts */


/* Desativa edição dos arquivos */
define('DISALLOW_FILE_EDIT', true);

/* Suporte a thumbnails */
add_theme_support('post-thumbnails');

/* Suporte title tag */
add_theme_support('title-tag');

/* Register Custom Navigation Walker  */
require_once get_template_directory() . '/wp-bootstrap-navwalker.php';

/* Registrar menus */
function register_menu()
{
    register_nav_menu('header-menu', 'main-menu');
}
add_action('init', 'register_menu');


/* Registro Custom Post type Crops */
add_action('init', 'cultura_register');
function cultura_register()
{
     $labels = [
        'name' => 'Culturas',
        'singular_name' => 'Cultura',
        'add_new' => 'Adicionar Cultura',
        'add_new_item' => 'Adicionar Cultura',
        'edit_item' => 'Editar Cultura',
        'new_item' => 'Novo Cultura',
        'view_item' => 'Ver Cultura',
        'search_items' => 'Procurar Cultura',
        'not_found' =>  'Nada encontrado',
        'not_found_in_trash' => 'Nada encontrado no lixo',
        'parent_item_colon' => ''
    ];
    $args = [
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-images-alt',
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 9,
        'supports' => ['title', 'thumbnail'],
    ];
    register_post_type('cultura',$args);
}
/* Fim registro slider */

/* Registro Custom Post type Equipe */
add_action('init', 'equipe_registrer');
function equipe_registrer()
{
     $labels = [
        'name' => 'Equipe',
        'singular_name' => 'Equipe',
        'add_new' => 'Adicionar Membro',
        'add_new_item' => 'Adicionar Membro',
        'edit_item' => 'Editar Membro',
        'new_item' => 'Novo Membro',
        'view_item' => 'Ver Membro',
        'search_items' => 'Procurar Membro',
        'not_found' =>  'Nada encontrado',
        'not_found_in_trash' => 'Nada encontrado no lixo',
        'parent_item_colon' => ''
    ];
    $args = [
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-admin-users',
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 5,
        'supports' => ['title', 'thumbnail'],
    ];
    register_post_type('equipe',$args);
}
/* Fim registro de equipe */

/* Mudar o placeholder do membro */
add_filter( 'enter_title_here', 'custom_title_placeholder', 10, 2 );
function custom_title_placeholder( $title, $post )
{
    if ( $post->post_type = 'equipe' )
        $title = 'Nome';

    return $title;
}
/* Fim mudar placeholder membro */

/* Paginação */
function wp_pagination($pages = '', $range = 3)
{  
    global $wp_query, $wp_rewrite;  
    $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;  
    $pagination = [  
        'base' => @add_query_arg('page','%#%'),  
        'format' => '',  
        'total' => $wp_query->max_num_pages,  
        'current' => $current,  
        'show_all' => true,  
        'type' => 'plain'  
    ];  
    if ( $wp_rewrite->using_permalinks() ) $pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' );  
    if ( !empty($wp_query->query_vars['s']) ) $pagination['add_args'] = array( 's' => get_query_var( 's' ) );  
    echo '<div class="wp_pagination">'.paginate_links( $pagination ).'</div>';
}
/* Fim paginação */