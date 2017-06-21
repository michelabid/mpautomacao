<? get_header(); ?>

<!-- Main carousel ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<div class="col-1 homepage-slider">
<div id="banner-fade" class="col-center carousel-home">
	<ul class="bjqs">

		<? query_posts('category_name=banner'); while(have_posts()): the_post(); ?>
		<? $fundo = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full'); ?>
		<? $field = get_field_object('botao'); $value = get_field('botao'); $label = $field['choices'][ $value ]; ?>
          <li class="item" style='background-image: url(<?= $fundo[0] ?>)' onclick="window.location='<? the_field('link'); ?>'">
               <div class="banner-desc center">
                    <div class="title">
                         <h1><? the_field('titulo'); ?></h1>
                    </div>
                    <? the_excerpt(); ?>
                    <? if($label == "Sim"): ?>
                    <a href="<? the_field('link'); ?>" title="Saiba mais">Saiba mais</a>
                    <? endif; ?>
               </div>
          </li>
         <? endwhile; ?>

       
	</ul>
	<ol class="bjqs-markers h-centered"></ol>
</div>
</div> 


<!-- Categories ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<div class="col-1 col-product-categories">
<div class="carousel right col-center">

  <div class="wrap itens">

      <!-- <? wp_list_categories('taxonomy=product_cat&pad_counts=1&depth=1&title_li='); ?> -->
      <?php wp_nav_menu( array( 'theme_location' => 'menu' ) ); ?>

      <!-- <?php wp_nav_menu( array( 'theme_location' => 'menu' ) ); ?> -->

  </div>

</div>
</div>


<div class="col-1 col-product-categories touch">
<div class="col-center">

  <div class="itens col-product-categories-touch">
   <!-- <? wp_list_categories('taxonomy=product_cat&pad_counts=1&depth=1&title_li='); ?> -->
   <?php wp_nav_menu( array( 'theme_location' => 'menu', 'menu_class' => 'nav-menu' ) ); ?>
  </div>

</div>
</div>


<!-- Main Content ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<div class="col-1 main-content">
<div class="col-center">

  <!-- PRATELEIRA -->
  <div class="products">

      <div class="header">
        <h2>Tudo para <b>automação industrial</b></h2>
        <a href="<? bloginfo('url') ?>/produtos/">ver todos</a>
      </div>

      <div class="overflow">
			<?
			$args = array( 'showposts' => '3', 'post_type' => 'product', 'meta_key' => '_featured',  'meta_value' => 'yes', 'orderby' => 'rand');
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
	          <a href="<? the_permalink(); ?>" class='item'>
	              <div class="img"><? the_post_thumbnail(); ?></div>
	              <h3>
	                <? the_title(); ?></br>
					<?
						$category = get_the_category(); 
						$parent = get_the_terms( $post->ID, 'product_cat' );
						// echo "<span>".$parent[0]->name ." / ". $parent[1]->name."</span>";

            $qtd = sizeof($parent);

            if($qtd==1){
              echo "<span>".$parent[0]->name ."</span>";
            } if($qtd==2){
              echo "<span>".$parent[0]->name ." / ". $parent[1]->name."</span>";
            } if($qtd==3){
              echo "<span>".$parent[0]->name ." / ". $parent[1]->name ." / ". $parent[2]->name . "</span>";
            }
					?>
	              </h3>
	              <span class="price"><?= $product->get_price_html(); ?></span>
	          </a>
          <? endwhile; wp_reset_query(); ?>
          
      </div>

  </div>
</div>

  
  <div class="col-1 home-info-sect">
  <div class="col-center">
      <div class="left">
        <img src="<? bloginfo('template_url') ?>/images/mpautomacao-logo.png">
      </div>

      <div class="right">
        <strong>Fundada há mais de <b>20 anos</b></strong>
        <p>A empresa <b>MP automação</b>, tem como prioridade atender o mercado em pneumática, máquinas, e dispositivos em geral. Ao longo desses anos a MP vem se aprimorando e desenvolvendo trabalhos nas áreas de Soluções em Pneumática e Hidráulica.</p>
        <div class="btn"><a href="<? bloginfo('url') ?>/empresa/">Conheça nossa empresa</a></div>
      </div>
  </div>
  </div>


  <div class="col-1 home-info-sect-2">
  <div class="col-center">


    <div class="left">
      <div class="center">
        <h3>Automação Industrial</h3>
        <p>Trabalhamos desde o desenvolvimento dos projetos, até a manutenção, instalação, consultoria e execução. Proporcionamos serviços rápidos, com preço compatível e qualidade comprovada. Uma excelente relação de “custo x benefício”.</p>
        <div class="btn"><a href="<? bloginfo('url') ?>/automacao-industrial/">Conheça nossas atuações</a></div>
      </div>
    </div>

    <div class="right">
      <div class="center">
        <h3>Tem alguma dúvida?</h3>
        <? query_posts('pagename=informacoes'); while(have_posts()): the_post(); ?>
        <p><? the_field('duvida'); ?></p>
        <? endwhile; wp_reset_query(); ?>
        <div class="btn"><a href="<? bloginfo('url') ?>/contato/"></a></div>
      </div>
    </div>


  </div>
  </div>


</div>

<? get_footer(); ?>
