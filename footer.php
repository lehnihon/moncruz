<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package site
 */

?>
	<div id="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h2>Moncruz Engenharia</h2>
					<p>Rua Azevedo Soares, 1661 - sala 11 - Tatuapé - São Paulo - SP
					</p>
					<p><strong>11 3628-1200</strong></p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="menu-footer clearfix">
						<div class="menu-op"><a href="<?php echo home_url( '/' ); ?>">Início</a></div>
						<div class="menu-op"><a href="<?php echo home_url( '/' )."sobre"; ?>">A Moncruz</a></div>
						<div class="menu-op"><a href="<?php echo home_url( '/' )."reforma-escritorio"; ?>">Área de atuação</a></div>								
						<div class="menu-op"><a href="#">Clientes</a></div>
						<div class="menu-op"><a href="#">Portfólio</a></div>
						<div class="menu-op"><a href="<?php echo home_url( '/' )."contato"; ?>">Trabalhe conosco</a></div>
						<div class="menu-op"><a href="<?php echo home_url( '/' )."Trabalhe-conosco"; ?>">Contato</a></div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">
					<ul class="redes_sociais_header">
		              <li class="youtube"><a target="_blank" href="#"></a></li>
		              <li class="instagram"><a target="_blank" href="#"></a></li>
		              <li class="twitter"><a target="_blank" href="#"></a></li>
		              <li class="facebook"><a target="_blank" href="https://www.facebook.com/Reforma-Se-1167940799992871/"></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div id="copy">
		<div class="container">
			<div class="row copy-text">
				<div class="col-md-6 text-left text-footer">
					&copy; Copyright <?php echo date('Y') ?> - Todos os direitos reservados - Moncruz Engenharia
				</div>
				<div class="col-md-3 col-md-offset-3 text-right">
					<a target="_blank" href="https://www.facebook.com/seimidigital/?ref=ts&fref=ts">
						<img class="e-claro anima-rino" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/mei.jpg"; ?>" />
					</a>
				</div>				
			</div>
		</div><!-- .container -->
	</div><!-- #footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
