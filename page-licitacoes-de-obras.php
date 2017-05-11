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
					<img class="img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/Licitacoes-de-Obras.png"; ?>" alt="entrega-expressa"><br><br>
					<h1>Licitações de Obras</h1><br>
					<p>A Moncruz Engenharia trabalha na elaboração de processos para Licitação de Obras públicas e privadas contemplando:</p>
					<p>
						- Elaboração de planilhas quantitativas<br>
					- Carta convite<br>
					- Formulários para licitação<br>
					- Envio da licitação aos proponentes<br>
					- Equalização das propostas e documentações<br>
					- Análise e equalização das propostas
					</p>
			</div>
		</div>
	</section>

	<?php get_template_part( 'template-parts/quer-saber' ); ?>

</div>
<?php get_footer(); ?>
