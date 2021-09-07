<?php

function add_theme_scripts() {
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '1.0', 'all');
    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
    wp_enqueue_script( 'jquery','https://code.jquery.com/jquery-3.5.1.slim.min.js', array( 'jquery' ) );
    wp_enqueue_script( 'bootstrap-js','https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js', array( 'jquery' ) );
    
    }
    add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

function landing_page_registrando_taxonomia(){
    register_taxonomy(
        'trabalhos',
        'tipos',
        array(
            'labels' => array('name' => 'Trabalhos'),
            'hierarchical' => true
        )
    );
}
add_action('init','landing_page_registrando_taxonomia');

function landing_page_registrando_post_customizado()
{
    register_post_type('Trabalhos',
        array(
            'labels' => array('name' => 'Trabalhos'),
            'public' => true,
            'menu_position' => 0,
            'supports' => array('title', 'editor', 'thumbnail'),
            'menu_icon' => 'dashicons-admin-site'
        )
    );
}
add_action('init','landing_page_registrando_post_customizado');




function slide_custom_box() {
    $screens = [ 'page'];
    foreach ( $screens as $screen ) {
        add_meta_box(
            'slide-box',                 // Unique ID
            'Slide',      // Box title
            'slide_box',  // Content callback, must be of type callable
            $screen                            // Post type
        );

		add_meta_box(
            'social-box',                 // Unique ID
            'Redes Sociais',      // Box title
            'social_box',  // Content callback, must be of type callable
            $screen                            // Post type
        );
    }
}
add_action( 'add_meta_boxes', 'slide_custom_box' );

function slide_box( $post ) {
	$slide_titulo = get_post_meta( $post->ID, '_slide_titulo', true );
	$slide_texto = get_post_meta( $post->ID, '_slide_texto', true );
    ?>

	<p><b>Título</b></p>
	<input name="slide_titulo" type="text" value="<?php echo $slide_titulo;?>">

	<p><b>Texto</b></p>
	<textarea name="slide_texto"><?php echo $slide_texto; ?></textarea>
    
    
    <?php
}


function social_box( $post ) {
    $facebook = get_post_meta( $post->ID, '_facebook', true );
	$youtube = get_post_meta( $post->ID, '_youtube', true );
	$instagram = get_post_meta( $post->ID, '_instagram', true );
    ?>

	<p><b>Facebook</b></p>
	<input name="facebook" type="text" value="<?php echo $facebook;?>">
	<p><b>Youtube</b></p>
	<input name="youtube" type="text" value="<?php echo $youtube;?>">
	<p><b>Instagram</b></p>
	<input name="instagram" type="text" value="<?php echo $instagram;?>">
    
    <?php
}

function t9_save_postdata( $post_id ) {
	update_post_meta($post_id, '_slide_texto', $_POST['slide_texto']);
    update_post_meta($post_id, '_slide_titulo', $_POST['slide_titulo']);
	update_post_meta($post_id, '_facebook', $_POST['facebook']);
	update_post_meta($post_id, '_youtube', $_POST['youtube']);
	update_post_meta($post_id, '_instagram', $_POST['instagram']);
	
}
add_action( 'save_post', 't9_save_postdata' );

add_theme_support( 'post-thumbnails' );






