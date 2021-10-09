<?php 

function postTypeBlog () {

    $labels = array(

        'name'               => _x( 'Blog', 'post type general name', 'your-plugin-textdomain' ),

        'singular_name'      => _x( 'Blog', 'post type singular name', 'your-plugin-textdomain' ),

        'menu_name'          => _x( 'Blog', 'admin menu', 'your-plugin-textdomain' ),

        'name_admin_bar'     => _x( 'Blog', 'add new on admin bar', 'your-plugin-textdomain' ),

        'add_new'            => _x( 'Adicionar Novo', 'Blog', 'your-plugin-textdomain' ),

        'add_new_item'       => __( 'Adicionar Novo Blog', 'your-plugin-textdomain' ),

        'new_item'           => __( 'Novo Blog', 'your-plugin-textdomain' ),

        'edit_item'          => __( 'Editar Blog', 'your-plugin-textdomain' ),

        'view_item'          => __( 'Visualizar Blog', 'your-plugin-textdomain' ),

        'all_items'          => __( 'Todos', 'your-plugin-textdomain' ),

        'search_items'       => __( 'Pesquisar Blog', 'your-plugin-textdomain' ),

        'parent_item_colon'  => __( 'Blog Pai:', 'your-plugin-textdomain' ),

        'not_found'          => __( 'Nenhum Blog encontrado.', 'your-plugin-textdomain' ),

        'not_found_in_trash' => __( 'Nenhum Blog encontrado in Trash.', 'your-plugin-textdomain' )

    );



    $args = array(

        'labels'             => $labels,

        'description'        => __( 'Descrição', 'your-plugin-textdomain' ),

        'public'             => true,

        'publicly_queryable' => true,

        'show_ui'            => true,

        'show_in_menu'       => true,

        'query_var'          => true,

        'rewrite'            => array( 'slug' => 'blog' ),

        'capability_type'    => 'post',

        'has_archive'        => true,

        'hierarchical'       => true,

        'menu_position'      => 4,

        'supports'           => array( 'title', 'editor', 'thumbnail'),

        'taxonomies'         => array('blog')

    );

    register_post_type('blog', $args);

    add_post_type_support( 'blog', 'wps_subtitle' );

}

add_action('init', 'postTypeBlog');



function tipsTax() {

    $label = array(

        'name' => 'Categorias',

        'singular_name' => 'Categoria',

        'menu_name' => 'Categoria',

        'all_items' => 'Todas as Categorias',

        'edit_item' => 'Editar Categoria',

        'view_item' => 'Visualizar',

        'update_item' => 'Atualizar',

        'add_new_item' => 'Adicionar Nova',

        'new_item_name' => 'Novo Item',

        'parent_item' => 'Categoria Pai',

        'parent_item_colon' => '',

        'search_items' => '',

        'popular_items' => '',

        'separate_items_with_commas' => '',

        'add_or_remove_items' => '',

        'choose_from_most_used' => '',

        'not_found' => ''

    );

    register_taxonomy(

        'blog',

        'blog',

        array(

            'labels' => $label,

            'public' => true,

            'show_ui' => true,

            'show_in_menu' => true,

            'hierarchical' => true,

            'show_admin_column' => true,

            'show_in_rest' => true,

            'query_var' => true,

            'rewrite' => array('slug' => 'blog')

        )

    );

}

add_action('init',  'tipsTax');