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
					<img class="img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/Propostas-tecnicas-de-obras.png"; ?>" alt="entrega-expressa"><br><br>
					<h1>Propostas técnicas</h1><br>
					<p>A Moncruz Engenharia trabalha na elaboração de <strong>propostas técnicas</strong> personalizadas para órgãos públicos e privados, contendo: </p>
					<p>
						- Metodologia executiva<br>
					- Plano de ataque<br>
					- Cronogramas<br>
					- Logística de execução<br>
					- Plano de implantação do canteiro de obras.
					</p>

			</div>
		</div>
	</section>

	<?php get_template_part( 'template-parts/quer-saber' ); ?>

</div>
<?php get_footer(); ?>
