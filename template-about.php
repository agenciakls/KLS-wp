<?php 
/*
Template Name: Sobre
*/
get_header(); 
?>
<main class="page-biography section">
	<div class="container">
		<div class="box-biography my-4">
			<section class="row d-flex flex-row-reverse">
				<div class="col-md-6">
					<div class="about-figure">
						<img src="<?php echo get_bloginfo('template_url'); ?>/img/img-sobre.jpg" class="img-fluid img-about rounded-circle" alt="">
					</div>
				</div>
				<div class="col-md-6 d-flex align-items-center">
					<div class="row">
						<div class="col-md-12">
							<div class="title-section">
								<h3>
									AGÊNCIA KLS
								</h3>
								<p><strong>Uma agência completa!</strong></p>
							</div>
						</div>
						<div class="col-md-12">
							<div class="content-section">
								<p>A KLS é uma empresa criada em 2018 e focada em publicidade e marketing, mas com o grande diferencial de gerar resultados para os seus clientes e projetar soluções ágeis para o mercado. </p>
								<p>Nós focamos em produção de contéudo com marketing inteligente, além disso trabalhamos com as melhores tecnologias do mercado e as metodologias avançadas.</p>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
	<?php /*
	<div class="content-icons-about my-5">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4 px-0 text-center">
					<img src="<?php echo get_bloginfo('template_url') . '/img/estrutura-1.jpg'; ?>" alt="" class="img-fluid">
				</div>
				<div class="col-md-4 px-0 text-center">
					<img src="<?php echo get_bloginfo('template_url') . '/img/estrutura-2.jpg'; ?>" alt="" class="img-fluid">
				</div>
				<div class="col-md-4 px-0 text-center">
					<img src="<?php echo get_bloginfo('template_url') . '/img/estrutura-3.jpg'; ?>" alt="" class="img-fluid">
				</div>
			</div>
		</div>
	</div>
	*/
	?>
</main>
<?php get_footer(); ?>