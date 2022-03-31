<?php 
get_header(); 
?>
<main class="page-single">
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2">
				

				<div class="content-text">
					<?php 
					if (have_posts()) {
						while (have_posts()) {
							the_post();
							?>
							<h1><?php echo get_the_title(); ?></h1>
							<?php
							if (has_post_thumbnail()) {
								?>
								<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium_large'); ?>" class="rounded img-fluid">
								<!-- <div class="img-thumb" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium_large'); ?>')"></div> -->
								<?php
							}
							the_content();
						}
					}
					?>
				</div>

				<div class="text-center">
				<a onclick="window.history.go(-1); return false;"><button type="button">Voltar</button></a>
					<a href="<?php echo get_post_type_archive_link('blog'); ?>"><button type="button">Ver Outros Artigos</button></a>
				</div>
			</div>
		</div>

	</div>
</main>
<?php 
get_footer(); 
?>