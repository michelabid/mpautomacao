<? get_header(); ?>

<style type="text/css">

  .cart-btn2 { margin-top: 50px; border: 0; background-color: #e31f3e; -webkit-border-radius: 20px; -moz-border-radius: 20px; border-radius: 20px; color: #fff; font-size: 16px; padding: 11px 10% 11px 10%; margin-top: 50px; background-color: #e31f3e; -webkit-border-radius: 20px; -moz-border-radius: 20px; border-radius: 20px; color: #fff; font-size: 16px; padding: 11px 10% 11px 10%;}
  .cart-btn2:hover { background-color: #f73957; }
</style>

<!-- Internal Header ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<div class="col-1 internal-header">
<div class="col-center">
	<strong>Produtos</strong>
</div>
</div>


<!-- Main Content ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

<div class="col-1 internal-content pg-produto-int">
<div class="col-center">



<? while(have_posts()): the_post(); ?>



	<div id="banner-slide" class="gallery">

      <!-- start Basic Jquery Slider -->

      <ul class="bjqs">

		<? 

			global $product;

			$attachment_ids = $product->get_gallery_attachment_ids();


			foreach($attachment_ids as $attachment_id){

				echo "<li><img src='". $image_link = wp_get_attachment_url( $attachment_id )."' /></li>";

			}

		?> 

      </ul>

	</div>





  <div class="product-info">

    <div class="header">

      <h1>

      <b><? the_title(); ?></b></br>

      <span>

		<?

			global $post;

			$terms = get_the_terms( $post->ID, 'product_cat' );

			foreach ($terms as $term) {

				$product_cat_id = $term->term_id;

				break;

			}

			echo $product->get_categories(sizeof(get_the_terms($post->ID, 'product_cat')));

		?>

      </span>

      </h1>



<!--
      <div class="price">

        <em><?= $product->get_price_html(); ?></em>

      </div>
-->

    </div>



    <div class="center">

      <? the_content(); ?>

      <? $download = get_field('download'); ?>
      <? if($download): ?>
        <div class="btn"><a class="pdf" href="<?= $download['url'] ?>" target="_blank"><span><img src="<? bloginfo('template_url') ?>/images/pdf-icon.png">baixar INFORMAÇÕES COMPLETAS</span></a></div>
      <? endif; $down = get_field('down'); if(!empty($down)): if(empty($download)): ?>

        <div class="btn"><a target="_blank" class="pdf" href="<? echo $down; ?>" target="_blank"><span><img src="<? bloginfo('template_url') ?>/images/pdf-icon.png">baixar INFORMAÇÕES COMPLETAS</span></a></div>

      <? endif; endif; ?>

<!--      <div class="btn"><a class="cart" href="?add-to-cart=<? the_ID(); ?>">Adicionar ao carrinho</a></div>-->
        
        
        <form class="qtd" name="carrinho" action="<?php bloginfo( 'url' ); ?>/carrinho" method="get">
            
          <!--
              <label for="qtd">Quantidade <br>de caixas</label>
              <input type="number" value="1" min="1" max="999" name="quantidade">
          -->

          <input type="hidden" value="<?php echo get_the_ID(); ?>" name="addCarrinho" />
          <div class="btn"><input class="cart cart-btn2" type="submit" value="Solicitar Orçamento"></div>

        </form>

      

    </div>



  </div>

  

<? endwhile; ?>







</div>

</div>



<? get_footer(); ?>

