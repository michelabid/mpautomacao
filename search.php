<? get_header(); ?>



<!-- Internal Header ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

<div class="col-1 internal-header">

<div class="col-center">

	<h1>Resultado de Busca</h1>

</div>

</div>





<!-- Main Content ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

<div class="col-1 internal-content pg-produtos">

<div class="col-center">



	<!-- PRATELEIRA -->

	<div class="products c4">



	      <div class="overflow">

			<? query_posts($query_string . "&post_type=product" );?>

			<? if (have_posts()) : ?>

			<? while (have_posts()): the_post(); ?>

	          <a href="<? the_permalink(); ?>" class='item'>

	              <div class="img"><? the_post_thumbnail(); ?></div>

	              <h3>

	                <? the_title(); ?></br>

					<?

						global $post;

						$terms = get_the_terms( $post->ID, 'product_cat' );

						foreach ($terms as $term) {

							$product_cat_id = $term->term_id;

							break;

						}

						echo "<span>". strip_tags($product->get_categories(sizeof(get_the_terms($post->ID, 'product_cat'))))."</span>";

					?>

	              </h3>

	          </a>

	          <? endwhile; else: ?>

	          Nenhum Resultado encontrado. 

			  <? endif; wp_reset_query(); ?>

      </div>



	</div>



</div>

</div>



<? get_footer(); ?>

