    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 footer-about">
                    <div class="element-footer">
                        <img src="<?php echo get_bloginfo('template_url'); ?>/img/logo.png" width="192" height="71" class="img-fluid footer-logo" alt="Logo - Agência KLS" />
                    </div>
                    <div class="element-footer">
                        <h3 class="title-about">
                            Quem Somos
                        </h3>
                        <p class="text-about">
                            Um modo interativo de sua marca chegar aos seus clientes. Temos uma equipe de profissionais capacitados e equipamentos de alta qualidade, para o melhor resultado dos projetos.
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="element-footer">
                        <h3 class="title-links">Links Importantes</h3>
                        <ul class="links-importants">
                            <li><a href="">Gestão de Redes Sociais</a></li>
                            <li><a href="">Desenvolvimento de Sites</a></li>
                            <li><a href="">Gestão de Tráfego</a></li>
                            <li><a href="">SEO e Conteúdo</a></li>
                            <li><a href="">Fotografia, Filmagem e Edição</a></li>
                            <li><a href="">Identidade Visual</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5 footer-about">
                    <div class="element-footer">
                        <h3>Contato</h3>
                        <div class="text-footer">
                            <div class="row">
                                <div class="col-md-6"><a href="<?php echo InfoVar::show('whatsapp'); ?>" target="_blank"><button class="btn-default btn-sm d-block btn-border white-dark">(21) 98911-3353</button></a></div>
                                <div class="col-md-6"><a href="<?php echo get_page_link(InfoVar::show('contato')); ?>"><button class="btn-default btn-sm d-block btn-inverted white-dark">Entre em contato</button></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="element-footer">
                        <h3 class="title-socials">Redes Sociais</h3>
                        <div class="footer-site">
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
                                <!-- <div class="single-socials">
                                    <a href="<?php echo InfoVar::show('youtube'); ?>" rel="noreferrer" target="_blank">
                                        <i class="fab fa-youtube">
                                        </i>
                                    </a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="pos-footer">
        <div class="text-pos-footer">
            Agência KLS - Todos os direitos reservados
        </div>
    </div>
    <div class="box-light" id="box-light">
        <i class="far fa-lightbulb"></i>
	</div>
	<div class="box-back-top" id="box-back-top">
		<i class="fas fa-arrow-up"></i>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/splide.min.js?v=1.1.19"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/functions.js?v=1.1.19"></script>
	<?php wp_footer(); ?>
</div>
</body>
</html>