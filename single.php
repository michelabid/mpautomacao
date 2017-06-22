<?
	$post = $wp_query->post;
	if (in_category('Blog da MP Automação')){
		include(TEMPLATEPATH . '/single-blog.php');
	} else {
		wc_get_template_part( 'content', 'single-product' ); 
	}
?>