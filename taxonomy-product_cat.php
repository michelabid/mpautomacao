<? get_header(); ?>

<style type="text/css">
	.category-desc { float: left; position: relative; width: 100%; margin-bottom: 25px; }
</style>

<!-- Internal Header ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<div class="col-1 internal-header">
<div class="col-center">
	<h1 style="float:left; position: relative;">Produtos</h1>
	<p  style="float: right;position: relative;">Produtos / <?php echo single_cat_title(); ?></p>
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

		<div class="category-desc">
			<h3><?php echo single_cat_title(); ?></h3>
			<?php echo category_description(); ?>
		</div>

	    <div class="overflow">
			<?
				$parent = get_the_terms($post->ID,'product_cat');
				$tagdapagina = $parent[0]->slug;
				
				$args = array(
				    // 'orderby' 		=> 'featured',
				    // 'order'			=> 'desc',
				    'product_cat'	=> $tagdapagina
				);
				
				$featured_query = new WP_Query( $args );
			?>
		    
			<? 
//              while($featured_query -> have_posts()): $featured_query->the_post();
              while(have_posts()): the_post();
            ?>
	          <a href="<? the_permalink(); ?>" class='item'>
	              <div class="img"><? the_post_thumbnail(); ?></div>
	              <h3>
	                <? the_title(); ?><br>
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
	          </a>
          <? endwhile; ?>
          <br class="br" />
          <? wp_paginate(); ?>
          
      </div>

	</div>

</div>
</div>

<style type="text/css">
	.category-menu .children{
		display: none !important; 
	}
	.category-menu .current-cat .children{
		display: block !important;
	}
	.category-menu li.cat-item.current-cat-parent.current-cat-ancestor .children{
		display: block !important;
	}
	.internal-header p{
		line-height: 109px;
	}
	@media (max-width: 850px){
		.internal-header p{
			line-height: 80px !important;
		}
	}
	@media (max-width: 700px){
    .internal-header p{
      display: none;
    }
  }
</style>

<? get_footer(); ?>
