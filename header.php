<?php

/**

 * @package WordPress

 * @subpackage BidSmart

 * @since Abid 1.0

 */



session_start("mp");

include'includes/functions.php';



?>  



<!doctype html>



<!--[if IE 7]>         <html class="no-js lt-ie7" xmlns="http:www.w3.org/1999/xhtml"> <![endif]-->

<!--[if IE 8]>         <html class="no-js lt-ie8" xmlns="http:www.w3.org/1999/xhtml"> <![endif]-->

<!--[if IE 9]>         <html class="no-js lt-ie9" xmlns="http:www.w3.org/1999/xhtml"> <![endif]-->

<!--[if gt IE 8]><!--> <html class="no-js" xmlns:og='http://ogp.me/ns#' lang="pt-br"> <!--<![endif]-->



<head>



	<title>MP Automação Industrial</title>



	<meta charset="utf-8">

	<meta name="author" content="ABID - Agência Brasileira de Inteligência e Design"/>

	<meta name="reply-to" content="http://www.abid.com.br/" />

	<meta name="revisit-after" content="10 Days" />

	<meta name="audience" content="all" />

	<meta name="language" content="pt-BR" />

	<meta name="distribuition" content="Global" />

	<meta name="robots" content ="index, follow, all">

	<meta name="googlebot" content="index,follow, all" />

	<meta http-equiv="Content-Language" content="pt-br" />

	<meta name='viewport' content='width=device-width, initial-scale=1.0' />

	<meta name="apple-touch-fullscreen" content="yes" /> 	



	<!-- style -->

	<!-- <link rel="stylesheet" type="text/css" href="<? bloginfo('stylesheet_url'); ?>?123" /> -->

	<link rel="stylesheet" type="text/css" href="<? bloginfo('template_url') ?>/css/style.css" />

	<link rel="stylesheet" type="text/css" href="<? bloginfo('template_url') ?>/js/iealert/style.css" />

	<link rel="stylesheet" type="text/css" href="<? bloginfo('template_url') ?>/css/carrinho.css" />

	<link rel="stylesheet" type="text/css" href="<? bloginfo('template_url'); ?>/custom.css" />



	<!-- style woo-commerce -->



	<link rel="stylesheet" type="text/css" href="<? bloginfo('template_url'); ?>/css/assets/woo.css" />



	<!-- Favicon -->

	<link rel="shortcut icon" href="<? bloginfo('template_url') ?>/images/favicon.ico" type="image/x-icon">

	<link rel="shortcut icon" href="<? bloginfo('template_url') ?>/images/favicon.png" type="image/png">



	<style type="text/css">

		form span { float: left; position: relative; width: 100%; }

		form .wpcf7-response-output { float: left; position: relative;width: 100%; }

		.top-menu li ul{ top: 22px; }

		.top-menu li.cat-item a{ font-size: 13px; padding: 8px 0 !important; font-weight: 500 !important; letter-spacing: 0.5px;}

		.products .overflow a.item{
			padding: 10px;
		}

		.internal-header{
			height: 70px !important;
		}
		@media (max-width: 850px){
		.internal-header{
			height: 80px !important;
		}
	}
		.internal-header a{
			text-decoration: none;
			font-size: 15px;
		    color: #747474;
		    font-family: 'Open Sans',sans-serif;
		    font-weight: 300;
		    line-height: 26px;
		    letter-spacing: .4px;
		}
		.internal-header a:hover{
			color: #000000;
		}

		.pg-produtos .category-menu {
		    padding: 35px 0 20px 0;
		}
	</style>



<? wp_head(); ?>



</head>



<body>



<div class='master-container'>

<div class="master-overlay"></div>





<!-- Top Header ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->



<div class="col-1 relative-top-header"></div>



<div class="col-1 top-header" alt="0">



	<div class="col-center">



			<!-- Logo Principal -->

			<a title="MP Automação" href="<? bloginfo('url') ?>" class="top-logo">

				<img width="261" alt="MP - Automação Industrial" src="<? bloginfo('template_url') ?>/images/mpautomacao.png">

			</a>



        

	        <!-- <a class="cart" href="<?php bloginfo( 'url' ); ?>/carrinho/" title="">

	            <?php echo $totalCarrinho; ?>

	        </a> -->





			<!-- Menu Principal -->

			<ul class="top-menu">

				<li><a href="<? bloginfo('url') ?>/empresa/">Empresa</a></li>

				<li>

					<a href="javascript:void(0);">Produtos</a>

					<ul>

						<? wp_list_categories('taxonomy=product_cat&pad_counts=1&depth=1&title_li='); ?>

					</ul>

				</li>

				<!-- <li><a href="<? bloginfo('url') ?>/loja/">Loja</a></li> -->

				<li><a href="<? bloginfo('url') ?>/blog/">Blog</a></li>

				<li><a href="<? bloginfo('url') ?>/contato/">Contato</a></li>

			</ul>





			<!-- Top Right -->

			<div class="right">



				<!-- chat -->

				<a class="tell-btn" href=""><b>(11) 4123-6838</b></a>



				<!-- cart 

				<a class="cart-btn" href="<? bloginfo('url') ?>/cart/"><div class="icon"></div></a> -->



				<? if($totalCarrinho == 0): ?>

					<a class="cart-btn" href="<? bloginfo('url') ?>/orcamento/">

						<p>faça um orçamento</p>

					</a>

				<? else: ?>

					<a class="cart-btn" href="<? bloginfo('url') ?>/cart/">

						<p>finalizar orçamento</p>

					</a>

				<? endif; ?>



				<!-- search -->

				<form class="search" action="<? bloginfo('url') ?>/" method="get">

					<input type="text" name="s" value="">

					<input type="submit" value="">

				</form>

				

			</div>



			<!-- Mobile menu icon -->

			<div class="menu-icon"></div>

                                     

	</div>



</div>











<div class="offcanvas-menu">



	<ul class="offcanvas-top-menu">

		<li><a href="<? bloginfo('url') ?>/empresa/">Empresa</a></li>

		<li><a href="javascript:void(0);">Produtos</a></li>

		<li><a href="<? bloginfo('url') ?>/blog/">Blog</a></li>

		<li><a href="<? bloginfo('url') ?>/contato/">Contato</a></li>

	</ul>



	<!-- <div class="offcanvas-social"></div>-->



	<div class="offcanvas-last">



		<div class="col-center">



			<!-- Chat -->

			<a class="tell-btn" href=""><b>(11) 4123-6838</b></a>



			<form class="search">

				<input placeholder="Busca" type="text" value="">

				<input type="submit" value="">

			</form>



			<!-- cart icon -->

			<a class="cart-btn" href="#"><div class="icon"></div></a>



		</div>



	</div>





</div>