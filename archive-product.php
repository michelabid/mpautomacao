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
	<div class="products c4">

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
                      	$cat_thumb_url = wp_get_attachment_image_src( $cat_thumb_id, 'medium_large' );


                    ?>

        				<? if(!empty($cat_thumb_url)): ?>
                        	<img src="<?php echo $cat_thumb_url[0]; ?>" alt="<?php echo $tax_term->name; ?>" />
                        <? endif; ?>

                      </div>



                      <div class="content">
                        <h3><?php echo $tax_term->name; ?></h3>
                        <? if(!empty($tax_term->description)): ?>
                          <span><?php echo substr($tax_term->description, 0, 150) . "..."; ?></span>
                        <? endif; ?>
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
	.products .item{
    height: 340px;
	}
  .content span{
    color: #bdbdbd !important;
  }
  .products .icon img{ width: 100%; }

  .products .item h3 {
    margin-bottom: 10px;
}
</style>

<? get_footer(); ?>
