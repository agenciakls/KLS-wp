<?php 

function excerptLenght( $length ) {

    return 15;

}

add_filter( 'excerpt_length', 'excerptLenght', 999 );

?>