<? get_header(); ?>

<? $tag = $_GET['s']; ?>

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

						// echo "<span>". strip_tags($product->get_categories(sizeof(get_the_terms($post->ID, 'product_cat'))))."</span>";

						$category = get_the_category(); 
						$parent = get_the_terms( $post->ID, 'product_cat' );
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

	          </a>

	          <? endwhile; else: ?>

	          Nenhum Resultado encontrado. 

			  <? endif; wp_reset_query(); ?>

      </div>



	</div>



</div>

</div>

<style type="text/css">
	.pg-produtos .products .item{
		padding: 10px;
	}
</style>

<? get_footer(); ?>

