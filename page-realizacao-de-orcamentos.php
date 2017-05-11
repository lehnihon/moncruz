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
					<img class="img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/Realizacao-de-Orcamentos-de-Obras.png"; ?>" alt="entrega-expressa"><br><br>
					<h1>Realização de Orçamentos</h1><br>
					<p>A Moncruz Engenharia é especialista na <strong>Realização de Orçamento de Obra</strong>, seja para órgãos públicos ou privados. </p>

					<p>
						Para a Realização de Orçamentos, são fornecidos os seguintes relatórios:
					</p>
					
					<p>
						- Planilhas de preços<br>
						- Curva ABC de Serviços<br>
						- Curva ABC de insumos, composições de preços unitários<br>
						- Lista de insumos utilizados
					</p>

					<p>
						A Moncruz Engenharia conta com tecnologia própria para a <strong>Realização do Orçamento de Obras</strong>, contando com sistemas e 
					equipamentos especializados do mundo da construção.
					</p>
					<p>
						Cada orçamento é estudado detalhadamente em função do projeto proposto e das características do local de implantação da 
					obra, são realizadas cotações de insumos personalizadas na própria região do empreendimento, e elaboradas composições 
					de custos detalhadas para cada serviço previsto.
					</p>

					<p>Os orçamentos realizados pela Moncruz permitem uma profunda análise dos custos e recursos envolvidos, otimizando 
					processos e fornecendo todo o suporte necessário para tomadas de decisões.</p>

					<p>A <strong>Moncruz Engenharia</strong> garante o cumprimento de todos os prazos acordados na elaboração do orçamento, sem deixar de 
					lado a qualidade e a eficiência dos seus serviços.</p>
			</div>
		</div>
	</section>

	<?php get_template_part( 'template-parts/quer-saber' ); ?>

</div>
<?php get_footer(); ?>
