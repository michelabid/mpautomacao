<? get_header(); ?>

<!-- Internal Header ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<div class="col-1 internal-header">
<div class="col-center">
	<h1>Blog</h1>
</div>
</div>


<!-- Main Content ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<div class="col-1 internal-content blog">
<div class="col-center">

  <div class="left">

  	<? query_posts('category_name=Blog da MP Automação, Marketing & Vendas'); while(have_posts()): the_post(); ?>
    <a href="<? the_permalink(); ?>" class="item">
      <div class="center">
        <div class="cover"><? the_post_thumbnail(); ?></div>
        <h1><? the_title(); ?></h1>
        <span>
        <?
			foreach((get_the_category()) as $childcat) {
			if (cat_is_ancestor_of(3, $childcat)) {
			 echo $childcat->cat_name;
			}}
		?>
        </span>
        <div class="text">
        <? the_excerpt(); ?>
        </div>
      </div>
    </a>
    <? endwhile; wp_reset_query(); ?>

  </div>


  <div class="category-menu">
    <div class="mobile">
      <h3>Categorias</h3>
      <div class="icon" href=""></div>
    </div>
     <ul>
		<?
			$args = array('child_of' => 3);
			$categories = get_categories( $args );
			foreach($categories as $category) { 
			echo '<li><a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a></li> ';
			}
		?>
    </ul>
  </div>

</div>
</div>

<? get_footer(); ?>
