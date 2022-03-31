<?php 
/*
Template Name: Tabela de Preços
*/
get_header(); 
?>
<section class="section home-services">
	<div class="container container-services">
		<?php
		$dados = array(	
			// Publicidade
			array(
				'title' => 'PUBLICIDADE E MARKETING',
				'description' => 'Divulgue, venda mais, aumente seus resultados, engaje nas redes sociais, alcance mais pessoas e aumente a quantidade de seguidores com pacotes de publicidade e marketing digital.',
				'content' => array(
					array(
						'img' => '/img/icons/ads.png',
						'title' => 'Publicidade 1',
						'subtitle' => 'R$ 850 /mês',
						'text' => 'Publicidade e Marketing completo para sua empresa',
						'details' => array(
							'Gestão das Redes Sociais',
							'Identidade Visual',
							'Aumento de Engajamento e Seguidores',
							'2 Artes por Semana',
							'Facebook Ads e Instagram Ads',
							'Google Ads',
							'Google Meu Negócio e Business',
							'SEO (básico)',
							'Analytics e Relatórios',
							'Suporte',
							'Website (básico) - 3 páginas',
							'Hospedagem',
							'5 E-mails Personalizados',
							'Até R$ 150 de investimento em campanhas incluso',
							'Ou até R$ 500 de investimento em campanhas <br><small>(valor de investimento a parte)</small>',
						),
					),
					array(
						'img' => '/img/icons/ads.png',
						'title' => 'Publicidade 2',
						'subtitle' => 'R$ 1500 /mês',
						'text' => 'Publicidade e Marketing completo para sua empresa',
						'details' => array(
							'Gestão das Redes Sociais',
							'Identidade Visual',
							'Aumento de Engajamento e Seguidores',
							'Aumento de Resultados',
							'Captação de Vendas',
							'Geração de Leads',
							'3 Artes por Semana',
							'Facebook Ads e Instagram Ads',
							'Google Ads',
							'Google Meu Negócio e Business',
							'SEO',
							'Analytics e Relatórios',
							'Suporte',
							'Website (básico) - 5 páginas',
							'Hospedagem',
							'10 E-mails Personalizados',
							'Sistema de Gestão Administrativa e Financeira',
							'Até R$ 300 de investimento em campanhas incluso',
							'Ou até R$ 1000 de investimento em campanhas <br><small>(valor de investimento a parte)</small>',
						),
					),
					
					array(
						'img' => '/img/icons/ads.png',
						'title' => 'Publicidade 3',
						'subtitle' => 'R$ 2200 /mês',
						'text' => 'Publicidade e Marketing completo para sua empresa',
						'details' => array(
							'Gestão das Redes Sociais',
							'Identidade Visual',
							'Aumento de Engajamento e Seguidores',
							'Aumento de Resultados',
							'Captação de Vendas',
							'Geração de Leads',
							'5 Artes por Semana',
							'Facebook Ads e Instagram Ads',
							'Google Ads',
							'Google Meu Negócio e Business',
							'SEO',
							'Analytics e Relatórios',
							'Consultoria e Suporte',
							'Website (institucional) - 7 páginas',
							'Hospedagem',
							'10 E-mails Personalizados',
							'Sistema de Gestão Administrativa e Financeira',
							'Até R$ 300 de investimento em campanhas incluso',
							'Ou até R$ 1000 de investimento em campanhas <br><small>(valor de investimento a parte)</small>',
						),
					),
					array(
						'img' => '/img/icons/ads.png',
						'title' => 'Publicidade 4',
						'subtitle' => 'R$ 3500 /mês',
						'text' => 'Publicidade e Marketing completo para sua empresa',
						'details' => array(
							'Gestão das Redes Sociais',
							'Identidade Visual',
							'Branding e Fidelização',
							'Aumento de Engajamento e Seguidores',
							'Aumento de Resultados',
							'Captação de Vendas',
							'Geração de Leads',
							'7 Artes por Semana',
							'Gestão de Linkedin, Twitter, Tiktok, YouTube',
							'Facebook Ads e Instagram Ads',
							'Google Ads',
							'Google Meu Negócio e Business',
							'SEO',
							'1 Artigo de Blog por semana',
							'Analytics e Relatórios',
							'Consultoria e Suporte',
							'Website (institucional) - 10 páginas',
							'Hospedagem',
							'20 E-mails Personalizados',
							'Sistema de Gestão Administrativa e Financeira',
							'Até R$ 300 de investimento em campanhas incluso',
							'Ou até R$ 1000 de investimento em campanhas <br><small>(valor de investimento a parte)</small>',
						),
					),
				),
			),
			
			// Mídia Social
			array(
				'title' => 'MÍDIA SOCIAL',
				'description' => 'Gestão de Redes Sociais e Anúncios',
				'content' => array(
					array(
						'img' => '/img/icons/sociais.png',
						'title' => 'MÍDIA SOCIAL 1',
						'subtitle' => 'R$ 600 /mês',
						'text' => 'Pacote indicado para clientes que querem começar a movimentar as redes sociais e ter seus primeiros resultados.',
						'details' => array(
							'Facebook e Instagram',
							'Identidade Visual',
							'Aumento de Engajamento',
							'Até R$ 100 reais em anúncios',
							'Até 2 Artes por semana',
							'Suporte Básico',
						),
					),
					array(
						'img' => '/img/icons/sociais.png',
						'title' => 'MÍDIA SOCIAL 2',
						'subtitle' => 'R$ 1.200 /mês',
						'text' => 'Indicado para quem quer administrar projetos de forma eficiente e alavancar os seus resultados.',
						'details' => array(
							'Facebook e Instagram',
							'Identidade Visual',
							'Aumento de Engajamento',
							'Crescimento de Público Orgânico',
							'Até R$ 300 reais em anúncios',
							'Até 3 Artes por semana',
							'Consultoria e Suporte',
						),
					),
					array(
						'img' => '/img/icons/sociais.png',
						'title' => 'MÍDIA SOCIAL 3',
						'subtitle' => 'R$ 2.200 /mês',
						'text' => 'Indicado para quem quer administrar redes sociais com mais de 10k.',
						'details' => array(
							'Facebook e Instagram',
							'Identidade Visual',
							'Aumento de Engajamento',
							'Crescimento de Público Orgânico',
							'Até 4 Artes por semana',
							'Até R$ 500 reais em anúncios',
							'2 Fotografias/Filmagens por mês <br><small>(sujeito a taxa de locomoção)</small>',
							'Consultoria e Suporte',
						),
					),
					array(
						'img' => '/img/icons/sociais.png',
						'title' => 'MÍDIA SOCIAL 4',
						'subtitle' => 'R$ 3.000 /mês',
						'text' => 'Indicado para quem quer fazer branding, para quem já possui público e deseja produzir mais e melhor alcançando resultados em grande escala.',
						'details' => array(
							'Facebook e Instagram',
							'Identidade Visual',
							'Aumento de Engajamento',
							'Crescimento de Público Orgânico',
							'Até 5 Artes por semana',
							'Até R$ 1000 reais em anúncios',
							'4 Fotografias/Filmagens por mês <br><small>(sujeito a taxa de locomoção)</small>',
							'Consultoria e Suporte',
						),
					),
				),
			),

			// Gestão de Tráfego
			array(
				'title' => 'GESTÃO DE TRÁFEGO',
				'description' => 'Aumente suas vendas e resultados anunciando na internet de forma inteligente.',
				'content' => array(
					array(
						'img' => '/img/icons/ads.png',
						'title' => 'Tráfego 1',
						'subtitle' => 'R$ 500 /mês',
						'text' => 'Gestão de Tráfego para divulgação, alcance, aumento de vendas e resultados.',
						'details' => array(
							'Facebook Ads e Instagram Ads',
							'Google Ads',
							'Google Meu Negócio',
							'Google Business',
							'Até R$ 2 mil de investimento em campanhas <br><small>(valor de investimento a parte)</small>',
						),
					),
					array(
						'img' => '/img/icons/ads.png',
						'title' => 'Tráfego 2',
						'subtitle' => 'R$ 1000 /mês',
						'text' => 'Gestão de Tráfego para projetos que querem vender mais e divulgar ainda mais o seu negócio.',
						'details' => array(
							'Facebook Ads e Instagram Ads',
							'Google Ads',
							'Google Meu Negócio',
							'Google Business',
							'Até R$ 5 mil de investimento em campanhas <br><small>(valor de investimento a parte)</small>',
						),
					),
					array(
						'img' => '/img/icons/ads.png',
						'title' => 'Tráfego 3',
						'subtitle' => 'R$ 2000 /mês',
						'text' => 'Gestão de tráfego para projetos que buscam resultadores maiores e crescimento exponencial.',
						'details' => array(
							'Facebook Ads e Instagram Ads',
							'Google Ads',
							'Google Meu Negócio',
							'Google Business',
							'Até R$ 10 mil de investimento em campanhas <br><small>(valor de investimento a parte)</small>',
						),
					),
					array(
						'img' => '/img/icons/ads.png',
						'title' => 'Tráfego 4',
						'subtitle' => '22% dos anúncios',
						'text' => 'Investimentos de grande porte para alavancar o máximo de resultado e alcance dentro da estratégia publicitária.',
						'details' => array(
							'Facebook Ads e Instagram Ads',
							'Google Ads',
							'Google Meu Negócio',
							'Google Business',
							'Acima de R$ 10 mil de investimento em campanhas <br><small>(valor de investimento a parte)</small>',
						),
					),
				),
			),

			// Desenvolvimento
			array(
				'title' => 'DESENVOLVIMENTO',
				'description' => 'Desenvolvimento de Sites, Sistemas, Aplicativos e Lojas Virtuais.',
				'content' => array(
					array(
						'img' => '/img/icons/sites.png',
						'title' => 'Website 1',
						'subtitle' => 'R$ 1200',
						'text' => 'Website institucional para clientes que querem divulgar a empresa na internet',
						'details' => array(
							'Até 5 Páginas',
							'Responsivo',
							'Otimizado',
							'Site adicionado ao Google',
							'Painel Administrativo',
						),
					),
					array(
						'img' => '/img/icons/sites.png',
						'title' => 'Website 2',
						'subtitle' => 'R$ 1500',
						'text' => 'Website institucional para clientes que querem divulgar a empresa na internet',
						'details' => array(
							'Até 7 Páginas',
							'Responsivo',
							'Otimizado',
							'Site adicionado ao Google',
							'Painel Administrativo',
						),
					),
					array(
						'img' => '/img/icons/sites.png',
						'title' => 'Website 3',
						'subtitle' => 'R$ 2000',
						'text' => 'Website institucional para clientes que querem divulgar a empresa na internet',
						'details' => array(
							'Até 10 Páginas',
							'Responsivo',
							'Otimizado',
							'Site adicionado ao Google',
							'Painel Administrativo',
						),
					),
					array(
						'img' => '/img/icons/sites.png',
						'title' => 'Sistema',
						'subtitle' => 'R$ 250 /mês',
						'text' => 'Sistema de Gestão de Empresas, Financeiro, Administravio e Fluxo',
						'details' => array(
							'Até 5 fluxos de gestão',
							'Responsivo',
							'Otimizado',
							'Painel de Relatórios',
							'Controle de Funcionários',
							'Cadastro de Clientes',
							'Ordem de Serviço',
							'Fluxo de Caixa',
						),
					),
					array(
						'img' => '/img/icons/sites.png',
						'title' => 'Sistema Customizado',
						'subtitle' => 'A partir de R$ 2500 (fixo) + R$ 500 /mês',
						'text' => 'Sistema de Gestão de Empresas, Financeiro, Administravio e Fluxo',
						'details' => array(
							'Até 5 fluxos de gestão',
							'Responsivo',
							'Otimizado',
							'Painel de Relatórios',
							'Controle de Funcionários',
							'Cadastro de Clientes',
							'Ordem de Serviço',
							'Fluxo de Caixa',
							'Fluxo e Gestão Customizada',
						),
					),
					array(
						'img' => '/img/icons/sites.png',
						'title' => 'Aplicativo 1',
						'subtitle' => 'R$ 12.500 (fixo)',
						'text' => 'Aplicativos institucionais com funcões padrões',
						'details' => array(
							'Área do Cliente',
							'Abas Institucionais (Até 5)',
							'Área de Contato',
							'Multiplataforma (iOS e Android)',
							'Painel de Administração',
						),
					),
					array(
						'img' => '/img/icons/sites.png',
						'title' => 'Loja Virtual 1',
						'subtitle' => 'R$ 8.500 (fixo)',
						'text' => 'Loja Virtual profissional personalizada com layout',
						'details' => array(
							'Loja Virtual',
							'Painel Administrativo',
							'Responsivo',
							'Layout',
							'Principais Métodos de Entrega e Pagamento',
						),
					),
				),
			),

			// Hospedagem
			array(
				'title' => 'HOSPEDAGEM',
				'description' => 'Hospedagem de Sites',
				'content' => array(
					array(
						'img' => '/img/icons/sites.png',
						'title' => 'VPS 1',
						'subtitle' => 'R$ 100 mensal',
						'text' => 'Indicado pra quem quer espaço em hospedagem e e-mails personalizados.',
						'details' => array(
							'Hospedagem em VPS',
							'Servidor Rápido',
							'Até 10 E-mails Personalizados',
							'Suporte 24h',
						),
					),
					array(
						'img' => '/img/icons/sites.png',
						'title' => 'VPS 1',
						'subtitle' => 'R$ 150 mensal',
						'text' => 'Indicado pra quem quer espaço em hospedagem e e-mails personalizados.',
						'details' => array(
							'Hospedagem em VPS',
							'Servidor Rápido',
							'Até 10 E-mails Personalizados',
							'Suporte 24h',
							'20 gb de armazenamento',
						),
					),
				),
			),

			// Fotografia e Filmagem
			array(
				'title' => 'FOTOGRAFIA E FILMAGEM',
				'description' => 'Produção Fotográfica e Audiovisual',
				'content' => array(
					array(
						'img' => '/img/icons/producao.png',
						'title' => 'Fotografia - Mini Ensaio',
						'subtitle' => 'R$ 15 /foto (minino de 6)',
						'text' => 'Pequenos ensaios com edição',
						'details' => array(
							'Ensaio Fotográfico',
							'Iluminação',
							'Direção',
							'Locomoção <br><small>(Pode haver taxa de locomoção dependendo do local)</small>',
						),
					),
					array(
						'img' => '/img/icons/producao.png',
						'title' => 'Fotografia de Produtos',
						'subtitle' => 'a partir R$ 80',
						'text' => 'Pequenos ensaios corporativos',
						'details' => array(
							'Fotografia (15 fotos)',
							'Iluminação',
							'Locomoção <br><small>(Pode haver taxa de locomoção dependendo do local)</small>',
						),
					),
					array(
						'img' => '/img/icons/producao.png',
						'title' => 'Fotografia de Produtos 2',
						'subtitle' => 'a partir R$ 160',
						'text' => 'Pequenos ensaios corporativos',
						'details' => array(
							'Fotografia (30 fotos)',
							'Iluminação',
							'Locomoção <br><small>(Pode haver taxa de locomoção dependendo do local)</small>',
						),
					),
					
					array(
						'img' => '/img/icons/producao.png',
						'title' => 'Gravação e Edição',
						'subtitle' => 'R$ 200',
						'text' => 'Gravação de pequenos vídeos',
						'details' => array(
							'Formato Reels/Stories ou Formato Post',
							'Vídeos Comerciais Ilimitados ',
							'1 Edição',
							'Locomoção <br><small>(Pode haver taxa de locomoção dependendo do local)</small>',
						),
					),
					
					array(
						'img' => '/img/icons/producao.png',
						'title' => 'Gravação e Edição',
						'subtitle' => 'R$ 280',
						'text' => 'Gravação de pequenos vídeos',
						'details' => array(
							'Formato Reels/Stories ou Formato Post',
							'Vídeos Comerciais Ilimitados ',
							'2 Edições',
							'Locomoção <br><small>(Pode haver taxa de locomoção dependendo do local)</small>',
						),
					),
					array(
						'img' => '/img/icons/producao.png',
						'title' => 'Pacote Photography I',
						'subtitle' => 'R$ 800,00',
						'text' => 'Eventos de Fotografia/Filmagem',
						'details' => array(
							'Fotografia',
							'Iluminação',
							'+Material entregue através de link',
						),
					),
					array(
						'img' => '/img/icons/producao.png',
						'title' => 'Pacote Photography II',
						'subtitle' => 'R$ 1200,00',
						'text' => 'Eventos de Fotografia/Filmagem',
						'details' => array(
							'Fotografia',
							'Ensaio Fotográfico',
							'Iluminação',
							'Material entregue através de link',
						),
					),
					array(
						'img' => '/img/icons/producao.png',
						'title' => 'Pacote Photography III',
						'subtitle' => 'R$ 1400,00',
						'text' => 'Eventos de Fotografia/Filmagem',
						'details' => array(
							'Fotografia',
							'Ensaio Fotográfico',
							'Iluminação',
							'Making Of',
							'Material entregue através de link',
						),
					),
					array(
						'img' => '/img/icons/producao.png',
						'title' => 'Pacote Standard I',
						'subtitle' => 'De R$ 4.200,00 por R$ 3.800,00',
						'text' => 'Eventos de Fotografia/Filmagem',
						'details' => array(
							'Fotografia',
							'Filmagem',
							'Iluminação',
							'Ensaio Fotográfico + Filmagem',
							'Making Of',
							'Álbum (Fotolivro) 80 fotos',
							'Material entregue através de link',
						),
					),
					array(
						'img' => '/img/icons/producao.png',
						'title' => 'Pacote Premium I',
						'subtitle' => 'De R$ 4.500,00 por R$ 4.100,00',
						'text' => 'Eventos de Fotografia/Filmagem',
						'details' => array(
							'Fotografia',
							'Filmagem',
							'Iluminação',
							'Ensaio Fotográfico + Filmagem',
							'Making Of',
							'Álbum (Fotolivro) 80 fotos',
							'Pen Drive',
							'DVD',
							'Material entregue através de link',
						),
					),
					array(
						'img' => '/img/icons/producao.png',
						'title' => 'Pacote Premium II',
						'subtitle' => 'De R$ 7.200,00 por R$ 6.300,00 ',
						'text' => 'Eventos de Fotografia/Filmagem',
						'details' => array(
							'Drone',
							'Fotografia',
							'Filmagem',
							'Iluminação',
							'Ensaio Fotografia + Filmagem',
							'Making Of',
							'Material entregue através de link',
						),
					),
					array(
						'img' => '/img/icons/producao.png',
						'title' => 'Pacote Premium III',
						'subtitle' => 'De R$ 8.500,00 por R$ 7.200,00 ',
						'text' => 'Eventos de Fotografia/Filmagem',
						'details' => array(
							'Drone',
							'Fotografia',
							'Filmagem',
							'Iluminação',
							'Ensaio Fotografia + Filmagem',
							'Making Of',
							'Banner',
							'Álbum (Fotolivro)',
							'Pen Drive',
							'DVD',
							'Material entregue através de link',
						),
					),
					array(
						'img' => '/img/icons/producao.png',
						'title' => 'Ensaio',
						'subtitle' => 'R$ 800 – Fotos Ilimitadas',
						'text' => 'Ensaio – Casamento ou 15 Anos (foto)',
						'details' => array(
							'Fotos Ilimitadas'
						),
					),
					array(
						'img' => '/img/icons/producao.png',
						'title' => 'Ensaio 2',
						'subtitle' => 'R$ 1200 – Fotos Ilimitadas',
						'text' => 'Ensaio – Casamento ou 15 Anos (foto e vídeo)',
						'details' => array(
							'Fotos Ilimitadas'
						),
					),
					array(
						'img' => '/img/icons/producao.png',
						'title' => 'Infantil ou Smash The Cake ',
						'subtitle' => 'R$ 450,00 – Fotos Ilimitadas',
						'text' => 'Ensaio – Infantil ou Smash The Cake (foto)',
						'details' => array(
							'Fotos Ilimitadas'
						),
					),
					array(
						'img' => '/img/icons/producao.png',
						'title' => 'Trash The Dress',
						'subtitle' => 'R$ 600,00 – Fotos Ilimitadas',
						'text' => 'Trash The Dress (Foto)',
						'details' => array(
							'Fotos Ilimitadas'
						),
					),
					
				),
			),

			// Artes Gráficas
			array(
				'title' => 'ARTES GRÁFICAS',
				'description' => 'Artes para produção digital',
				'content' => array(
					array(
						'img' => '/img/icons/design.png',
						'title' => 'Criação de Logo',
						'subtitle' => 'a partir de R$ 150',
						'text' => 'Criação e Desenvolvimento de Logo',
						'details' => array(
							'Identidade Visual',
							'Marca',
						),
					),
					array(
						'img' => '/img/icons/design.png',
						'title' => 'Artes Gráficas',
						'subtitle' => 'a partir R$ 80',
						'text' => 'Criação de Artes gráficas para produção gráfica ou design digital',
						'details' => array(
							'Identidade Visual',
							'Diagramação',
						),
					),
					array(
						'img' => '/img/icons/design.png',
						'title' => 'Pacotes de Artes 1',
						'subtitle' => 'R$ 360',
						'text' => 'Artes Digitais para internet',
						'details' => array(
							'2 artes por semana',
							'Diagramação',
							'Identidade Visual',
						),
					),
					array(
						'img' => '/img/icons/design.png',
						'title' => 'Pacotes de Artes 2',
						'subtitle' => 'R$ 520',
						'text' => 'Artes Digitais para internet',
						'details' => array(
							'3 artes por semana',
							'Diagramação',
							'Identidade Visual',
						),
					),
					array(
						'img' => '/img/icons/design.png',
						'title' => 'Pacotes de Artes 3',
						'subtitle' => 'R$ 800',
						'text' => 'Artes Digitais para internet',
						'details' => array(
							'5 artes por semana',
							'Diagramação',
							'Identidade Visual',
						),
					),
					array(
						'img' => '/img/icons/design.png',
						'title' => 'Pacotes de Artes 4',
						'subtitle' => 'R$ 1500',
						'text' => 'Artes Digitais para internet',
						'details' => array(
							'7 artes por semana',
							'Diagramação',
							'Identidade Visual',
						),
					),
					
					array(
						'img' => '/img/icons/design.png',
						'title' => 'Pacotes de Artes 5',
						'subtitle' => 'R$ 2800',
						'text' => 'Artes Digitais para internet',
						'details' => array(
							'2 artes por dia',
							'Diagramação',
							'Identidade Visual',
						),
					),
					
					
					array(
						'img' => '/img/icons/design.png',
						'title' => 'Pacotes de Artes 6',
						'subtitle' => 'R$ 4500',
						'text' => 'Artes Digitais para internet',
						'details' => array(
							'3 artes por dia',
							'Diagramação',
							'Identidade Visual',
						),
					),
				),
			),

			// Produção Gráfica
			array(
				'title' => 'Produção Gráfica',
				'description' => 'Produção de Materiais Gráficos',
				'content' => array(
					array(
						'img' => '/img/icons/design.png',
						'title' => 'Lona',
						'subtitle' => 'R$ 40 /metro',
						'text' => 'Lona para fachadas (com ou sem ilhós)',
						'details' => array(
							'Produção',
							'Arte Gráfica Gratuita',
						),
					),
					array(
						'img' => '/img/icons/design.png',
						'title' => 'Banner',
						'subtitle' => 'R$ 120 /metro',
						'text' => 'Banner',
						'details' => array(
							'Produção',
							'Arte Gráfica Gratuita',
						),
					),
					array(
						'img' => '/img/icons/design.png',
						'title' => 'Adesivo',
						'subtitle' => 'R$ 120 /metro',
						'text' => 'Adesivos Impressos',
						'details' => array(
							'Produção',
							'Arte Gráfica Gratuita',
						),
					),
					array(
						'img' => '/img/icons/design.png',
						'title' => 'Cartão de Visita',
						'subtitle' => 'R$ 120 por 1.000 cartões',
						'text' => 'Cartão de Visita - 9 x 5 cm',
						'details' => array(
							'Produção',
							'Arte Gráfica Gratuita',
						),
					),
					array(
						'img' => '/img/icons/design.png',
						'title' => 'Panfletos',
						'subtitle' => 'R$ 180 por 2.500 panfletos',
						'text' => 'Panfletos - 10 x 15 cm',
						'details' => array(
							'Produção',
							'Arte Gráfica Gratuita',
						),
					),
				),
			),
			
		);
		foreach($dados as $listDadosSingle) {
			?>
			<h1 class="text-uppercase"><?php echo $listDadosSingle['title']; ?></h1>
			<hr />
			<p class="description-services text-center"><?php echo $listDadosSingle['description']; ?></p>
			<div class="content-services row">
				<?php 
				foreach ($listDadosSingle['content'] as $singleDados) {
					?>
					<div class=" col-lg-4 col-sm-6 col-12 py-2">
						<div class="single-service">
							<div class="img-service">
								<img src="<?php echo get_bloginfo('template_url') . $singleDados['img']; ?>" alt="">
							</div>
							<h3 class="text-center"><?php echo $singleDados['title']; ?></h3>
							<h2 class="title-service"><?php echo $singleDados['subtitle']; ?></h2>
							<p class="text-service"><?php echo $singleDados['text']; ?></p>
							<ul class="text-uppercase">
								<?php 
								foreach ($singleDados['details'] as $listSingle) {
									?><li><?php echo $listSingle; ?></li><?php
								}
								?>
							</ul>
						</div>
					</div>
					<?php
				}
			?>
			</div>
			<?php
		}
		?>
	</div>
</section>
<?php get_footer(); ?>