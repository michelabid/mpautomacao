<? get_header(); ?>

<style type="text/css">
	.category-desc { float: left; position: relative; width: 100%; margin-bottom: 25px; }
</style>

<!-- Internal Header ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<div class="col-1 internal-header">
<div class="col-center">
	<h1>Produtos</h1>
</div>
</div>

 
<!-- Main Content ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<div class="col-1 internal-content pg-produtos">
<div class="col-center">

	<!--  -->

	<!-- PRATELEIRA -->
	<div class="products">

		<div class="category-desc">
			<p><?php echo get_field("descricao_da_pagina", 9); ?></p>
		</div>

	    <div class="overflow">




	    	<?php
                  $index = 0;
                  $taxonomy = 'product_cat';
                  $args = array(
                      // 'orderby'           => 'name', 
                      // 'order'             => 'ASC',
                      'hide_empty'        => true, 
                      'parent'            => 0
                  ); 
                  $tax_terms = get_terms($taxonomy, $args); ?>
                  <?php foreach ($tax_terms as $tax_term): $index++; ?>
                  

                    <a class="item" href="<?php echo esc_attr(get_term_link($tax_term, $taxonomy)) ?>" title="<?php echo sprintf( __( "Ver todos os produtos em '%s'" ), $tax_term->name ); ?>">



                      <div class="icon">
                      	
                      <?php
                      	$cat_thumb_id = get_woocommerce_term_meta( $tax_term->term_id, 'thumbnail_id', true );
                      	$cat_thumb_url = wp_get_attachment_thumb_url( $cat_thumb_id, 'full' );
                      	?>

        				<? if(!empty($cat_thumb_url)): ?>
                        	<img src="<?php echo $cat_thumb_url; ?>" alt="<?php echo $tax_term->name; ?>" />
                        <? endif; ?>

                      </div>



                      <div class="content">
                        <strong><?php echo $tax_term->name; ?></strong>
                        <p><?php echo $tax_term->description; ?><p>
                      </div>
                    </a>

                <?php endforeach; ?>

          
      </div>

	</div>

</div>
</div>

<style type="text/css">
	.pg-produtos .products{
		width: 100%;
	}

</style>

<? get_footer(); ?>
