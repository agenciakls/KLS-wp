<?php 

function script_work() {

    // $idPage = get_the_ID();

    global $post;

    $slugPage = (isset($post->post_name)) ? $post->post_name : '';

    if ($slugPage == 'trabalhe-conosco') {

        wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/script-work.js', array(), '', true );

        wp_localize_script( 'scripts', 'ajax_object',

            array( 

                'location' => admin_url( 'admin-ajax.php' ),

                'work' => 'work',

                'save' => 'save_work', 

            )

        );

    }

}

add_action( 'wp_enqueue_scripts', 'script_work' );

?>