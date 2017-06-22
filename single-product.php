<? get_header(); ?>

<style type="text/css">

  .cart-btn2 { margin-top: 50px; border: 0; background-color: #e31f3e; -webkit-border-radius: 20px; -moz-border-radius: 20px; border-radius: 20px; color: #fff; font-size: 16px; padding: 11px 10% 11px 10%; margin-top: 50px; background-color: #e31f3e; -webkit-border-radius: 20px; -moz-border-radius: 20px; border-radius: 20px; color: #fff; font-size: 16px; padding: 11px 10% 11px 10%;}
  .cart-btn2:hover { background-color: #f73957; }
</style>

<!-- Internal Header ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<div class="col-1 internal-header">
<div class="col-center">

  <?

      global $post;

      $terms = get_the_terms( $post->ID, 'product_cat' );

      foreach ($terms as $term) {

        $product_cat_id = $term->term_id;

        break;

      }

      $category = get_the_category(); 
      $parent = get_the_terms( $post->ID, 'product_cat' );
      $category_link = get_category_link( $parent[0] );
      $category_link1 = get_category_link( $parent[1] );
      // echo "<span>".$parent[0]->name ." / ". $parent[1]->name."</span>";
      $qtd = sizeof($parent);

    ?>

    <p  style="float: left;position: relative;"><a href="http://mpautomacao.com/produtos/">Produtos</a> / 
      <? if($qtd==1)
      {
        echo "<a href=". esc_url( $category_link ) .">". $parent[0]->name ."</a>"; ?> / <? the_title(); 
      } 
      if($qtd>=2)
      {
        echo "<a href=". esc_url( $category_link ) .">". $parent[0]->name ."</a> / <a href=". esc_url( $category_link1 ) .">". $parent[1]->name."</a>"; ?> / <? the_title(); 
      } 
      ?> 
  </p>

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

			// echo $product->get_categories(sizeof(get_the_terms($post->ID, 'product_cat')));
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

<style type="text/css">
  .internal-header p{
    line-height: 70px;
  }
</style>

<? get_footer(); ?>

