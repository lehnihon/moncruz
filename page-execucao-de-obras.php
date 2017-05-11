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
					<img class="img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/Obras.png"; ?>" alt="entrega-expressa"><br><br>
					<h1>Execução de Obras</h1><br>
					<p>A Moncruz Engenharia é especialista na <strong>execução de obras</strong> residenciais, obras comerciais e reformas em geral.</p>
					<p>
						A execução de uma obra vai muito além de visitas periódicas ao canteiro de obra:
					</p>

					<p>
						<strong>Administração de custos</strong><br>
					Toda a pesquisa de preços de materiais, fornecedores, equipamentos, prazos de entrega e coordenação de equipes, estão 
					entre os principais itens no processo de execução de obra pela Moncruz.
					</p>
					<p>
						Além da pesquisa, a <strong>Moncruz Engenharia</strong> também faz o acompanhamento do processo de aquisição de materiais, escolha dos fornecedores, dos equipamentos, realização de orçamento, compra e prazo para entrega.
					</p>
					<p>
						<strong>Gerenciamento da Execução da obra</strong><br>
					A Moncruz Engenharia acompanha e gerencia todas as etapas da execução da obra, seja obras residenciais e obras 
					comerciais para assegurar o correto prosseguimento da obra e também realiza ações corretivas necessárias se houver 
					identificação de falhas e não conformidades.<br>
					Com um melhor gerecinamento de obras, evita-se desperdícios, despesas não previstas e atrasos.
					</p>
			</div>
		</div>
	</section>

	<?php get_template_part( 'template-parts/quer-saber' ); ?>

</div>
<?php get_footer(); ?>
