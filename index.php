<?php
get_header(); ?>

<div id="content">
	<section id="banner">
		<div class="container">
			<div class="row">		
				<div class="col-md-12">
					<?php putRevSlider( "banner-index" ) ?>
				</div>
			</div><br><br>
			<div class="row">
				<div class="col-md-12">
					<h1 class="small">Moncruz Engenharia</h1>
					<h4>A Moncruz Engenharia é uma empresa especializada em gerenciamento de obras,<br> planejamento executivo, orçamento e execução de obras. </h4>
				</div>
			</div>
		</div>
	</section>

	<section id="servicos">
		<div class="container">
			<div class="row fundo-branco">
                <div class="col-md-4">   
                    <a href="#" title="#">
                        <img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/servicos1.jpg"; ?>" />
                    </a><br>
                    <h4>Realização de orçamentos</h4>
                    <a href="#" class="link" title="#">
                    	Saiba mais >
                    </a>
                </div>
                <div class="col-md-4">   
                    <a href="#" title="#">
                        <img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/servicos2.jpg"; ?>" />
                    </a><br>
                    <h4>Licitações</h4>
                    <a href="#" class="link" title="#">
                    	Saiba mais >
                    </a>
                </div>
                <div class="col-md-4">   
                    <a href="#" title="#">
                        <img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/servicos3.jpg"; ?>" />
                    </a><br>
                    <h4>Gerenciamento</h4>
                    <a href="#" class="link" title="#">
                    	Saiba mais >
                    </a>
                </div>
			</div>
			<div class="row fundo-branco">
                <div class="col-md-4">   
                    <a href="#" title="#">
                        <img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/servicos4.jpg"; ?>" />
                    </a><br>
                    <h4>Obras</h4>
                    <a href="#" class="link" title="#">
                    	Saiba mais >
                    </a>
                </div>
                <div class="col-md-4">   
                    <a href="#" title="#">
                        <img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/servicos5.jpg"; ?>" />
                    </a><br>
                    <h4>Propostas técnicas</h4>
                    <a href="#" class="link" title="#">
                    	Saiba mais >
                    </a>
                </div>
                <div class="col-md-4">   
                    <a href="#" title="#">
                        <img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/servicos6.jpg"; ?>" />
                    </a><br>
                    <h4>Quantificação de obras</h4>
                    <a href="#" class="link" title="#">
                    	Saiba mais >
                    </a>
                </div>
			</div>
			<div class="row fundo-cinza">
				<div class="col-md-12">
					<a href="<?php echo esc_url( home_url( '/' ) )."sobre"; ?>" class="btn-confira">atendimento</a>
				</div>   
			</div>
		</div>		
	</section>

	<section id="fotos-sobre">
		<div class="container">
			<div class="row">
				<div class="col-md-6 text-left">
					<h2>A Moncruz Engenharia</h2>
					<p>A <strong>Moncruz Engenharia </strong>tem sede em São Paulo, atua no mercado nacional 
					e internacional há mais de 20 anos.
					</p>
					<p>Atuamos em diversos segmentos da construção civil para obras públicas 
					e privadas.
					</p>
					<p>Os profissionais da Moncruz Engenharia são altamente capacitados, com 
					experiência adquirida no acompanhamento e execução dos mais variados 
					tipos de obras.</p>
					<ul>
						<li>Gerenciamento de obras</li>
						<li>Planejamento executivo</li>
						<li>Licitações</li>
						<li>Orçamento </li>
						<li>Quantificação de obras</li>
						<li>Propostas técnicas</li>
						<li>Execução de obras</li>
					</ul>

				</div>
				<div class="col-md-6 text-left">
					<img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/sobre-contrucao.jpg"; ?>"/>
				</div>
			</div>	
		</div>	
	</section>

</div>

<?php get_footer(); ?>
