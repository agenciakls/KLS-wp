<?php 
require_once 'inc/load.php';

/* Links */
$argVar = array(

	'email' => 'contato@agenciakls.com.br',
	'facebook' => 'https://www.facebook.com/agenciakls',
	'instagram' => 'https://www.instagram.com/agenciakls/',
	'youtube' => 'https://www.youtube.com/channel/UCNFdqPTzAnYUtoW4tUGItGA',
	'phone' => 'tel:+5521989113353',
	'whatsapp' => 'https://api.whatsapp.com/send?phone=5521989113353&text=Ol%C3%A1',
	
	'home' => 6,
	'sobre' => 8,
	'contato' => 10,
	'trabalhe-conosco' => 12,

);
InfoVar::save($argVar);
?>