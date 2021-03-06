<div class="home-section home-topo container-fluid <?php if (!is_front_page()) { echo 'page-header'; } ?>">
	<div class="row">
		<div class="home-banner col-md-12">
			<?php
			if (is_front_page()) {
				?>
				<div class="area-feature container">
					<div class="row row-feature">
						<div class="box-feature col-md-6">
							<img src="<?php echo get_bloginfo('template_url'); ?>/img/home-img.png" alt="Banner Fundo" class="img-fluid img-mobile d-block d-md-none" />
							<h3>Aumente seus resultados</h3>
							<div class="text-padded">
								<h4>
									<span>Já imaginou sua empresa vendendo mais e gerando lucros? Nós te ajudamos a chegar lá!</span>
								</h4>
							</div>
							<a href="<?php echo get_page_link(InfoVar::show('sobre')); ?>">
								<button class="btn-default btn-inverted">SAIBA MAIS</button>
							</a>
						</div>
						<div class="col-md-6 d-none d-md-block">
							<img src="<?php echo get_bloginfo('template_url'); ?>/img/home-img.png" width="528" height="539" alt="Banner Fundo" class="img-fluid img-desktop" />
						</div>
					</div>
				</div>
				
				<div class="list-socials">
					<div class="single-socials">
						<a href="<?php echo InfoVar::show('facebook'); ?>" rel="noreferrer" target="_blank">
							<i class="fab fa-facebook-square">
							</i>
						</a>
					</div>
					<div class="single-socials">
						<a href="<?php echo InfoVar::show('instagram'); ?>" rel="noreferrer" target="_blank">
							<i class="fab fa-instagram">
							</i>
						</a>
					</div>
				</div>
				<?php
			}
			?>
		</div>
	</div>
</div>