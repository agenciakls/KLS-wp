<?php 
require_once 'inc/load.php';

/* Links */
$argVar = array(

	'maps' => 'https://goo.gl/maps/yt3PPqoemfgzFXVB9',
	'email' => 'contato@agenciakls.com.br',
	'facebook' => 'https://www.facebook.com/agenciakls',
	'instagram' => 'https://www.instagram.com/agenciakls/',
	'youtube' => 'https://www.youtube.com/user/agenciakls',
	'phone' => 'tel:+5521989113353',
	
	'home' => 12,
	'quem-somos' => 14,
	'trabalhe-conosco' => 18,
	'contato' => 16,

);
InfoVar::save($argVar);
?>