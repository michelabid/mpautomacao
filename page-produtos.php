<? get_header(); ?>

<!-- Internal Header ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<div class="col-1 internal-header">
<div class="col-center">
	<h1>Produtos</h1>
</div>
</div>


<!-- Main Content ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<div class="col-1 internal-content pg-produtos">
<div class="col-center">

	<div class="category-menu">
		<div class="mobile">
			<h3>Categorias</h3>
			<div class="icon" href=""></div>
		</div>
		<ul>
			<? wp_list_categories('taxonomy=product_cat&pad_counts=1&title_li='); ?>
		</ul>
	</div>

	<!-- PRATELEIRA -->
	<div class="products">

	      <div class="overflow">
			<?
			$args = array( 'post_type' => 'product' );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
	          <a href="<? the_permalink(); ?>" class='item'>
	              <div class="img"><? the_post_thumbnail(); ?></div>
	              <h3>
	                <? the_title(); ?></br>
					<?
						$category = get_the_category(); 
						$parent = get_the_terms( $post->ID, 'product_cat' );
						echo "<span>".$parent[0]->name ." / ". $parent[1]->name."</span>";
					?>
	              </h3>
	              <span class="price"><?= $product->get_price_html(); ?></span>
	          </a>
          <? endwhile; ?>
          <? wp_paginate(); ?>
          <? wp_reset_query(); ?>
          
      </div>

	</div>

</div>
</div>

<? get_footer(); ?>
