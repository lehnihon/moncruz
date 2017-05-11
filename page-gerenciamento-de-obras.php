<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package site
 */

get_header(); ?>

<div id="content">

	<?php get_template_part( 'template-parts/breadcrumbs' ); ?>

	<section id="solucoes-detalhes">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<?php get_template_part( 'template-parts/solucoes-menu' ); ?>
				</div>
				<div class="col-md-9">
					<img class="img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/Gerenciamento-de-Obras.png"; ?>" alt="entrega-expressa"><br><br>
					<h1>Gerenciamento de Obras</h1><br>
					<p>
						A <strong>Moncruz Engenharia</strong> oferece o serviço de <strong>Gerenciamento de Obras</strong>, que consiste em gerenciar a implantação do empreendimento em todos os seus aspectos, tudo para otimizar os investimentos necessários, como custos, prazos e a qualidade na implantação dos projetos de engenharia.
					</p>
					<p>
						- Equalização das diversas atividades necessárias para a execução da obra<br>
						- Concatenar as diversas informações de todas as disciplinas de projeto<br>
						- Representar o cliente junto aos projetistas, empreiteiros e órgãos competentes
					</p>

					<p>O <strong>Gerenciamento de Obras</strong> engloba ainda o controle de custos e o avanço físico da obra. Serão fornecidos diversos 
					relatórios para o acompanhamento da obra como:
					</p>

					<p>
						- Cronograma físico de Gantt<br>
					- Rede Pert CPM<br>
					- Cronograma financeiro<br>
					- Relatório fotográfico<br>
					- Medições de serviços<br>
					- Relatório de controle de gastos<br>
					- Relatório de provisões
					</p>
					
					<p>
						Dessa maneira, a <strong>Moncruz Engenharia</strong> acompanha a evolução da física e financeira do empreendimento, respeitando todas as
					metas traçadas, com controle rigoroso de execução de obras.
					</p>
					
					<p>
						O <strong>Gerenciamento de Obras</strong> é feita de forma integrada e sincronizada com os esforços de todos os envolvidos no projeto. O
					Gerenciamento de Obras é responsável pela gestão de compras, com foco na Engenharia de Custos, gerenciando equipe
					técnica de profissionais próprios ou de terceiros.
					</p>
					
					<p>
						A Moncruz Engenharia conta com uma equipe de profissionais com grande experiência em Gerenciamento de Obras, com 
					grande capacidade para realizar os mais diversos empreendimentos dos setores públicos e privados.
					</p>
					
			</div>
		</div>
	</section>

	<?php get_template_part( 'template-parts/quer-saber' ); ?>

</div>
<?php get_footer(); ?>
