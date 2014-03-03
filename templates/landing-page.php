<?php /*Template Name: Landing Page */ ?>
<?php get_header(); ?>

<?php
if ($post->post_parent)	{

	$ancestors=get_post_ancestors($post->ID);

	$root=count($ancestors)-1;

	$parent = $ancestors[$root];

} else {

	$parent = $post->ID;

}
?>

<div id="right-column" class="full">


<div id="landing-feature">

	<div id="landing-pic">
		<img src="<?php the_field("landing_page_graphic"); ?>" alt="<?php the_title(); ?>"/>
	</div>

	<div id="landing-nav">
		<?php

		$children = wp_list_pages("title_li=&child_of=". $parent ."&echo=0&depth=1");

		if($children) : ?>


			<!-- CHILDREN NAV -->

		      <?php

		      	if ($children) {

		      		echo "<ul>";

			      		echo $children;
			      		echo "<li><a target='_self' href='https://npo.networkforgood.org/Donate/Donate.aspx?npoSubscriptionId=1005594&skinid=107989'>Donate Now</a></li>";

		      		echo "</ul>";

		      	 }  ?>


		<?php endif; ?>

	</div>

	<div id="landing-text">
		<?php the_content(); ?>
	</div>

</div>



	<?php while(have_posts()) : the_post(); ?>

	  <?php

	  	$columns = array_pop(get_field("landing_page_content"));

	  	if($columns["right_column"] == "") { $left_col_class = "wide"; }
	  	if($columns["left_column"] == "") { $right_col_class = "wide"; }

	  ?>

	  <?php if($columns["left_column"] != "") { ?>

	  <div class="left landing-col <?php echo $left_col_class; ?>">
	  	<?php echo $columns["left_column"]; ?>

	  	<?php if(is_page('where')){
	  		query_posts(
	  			array(
	  				'post_type' => 'disasters',
	  				'showposts'=> -1,
	  				'tax_query' => array(
	  					array(
	  				       'taxonomy' => 'disaster_categories',
	  				       'terms' => 'developing_ongoing',
	  				       'field' => 'slug'
	  				    )
	  				 )
	  			)
	  		);
	  		echo '<ul>';
	  		if (have_posts()) : while (have_posts()) : the_post();
	  			echo '<li><a href="'.get_permalink().'">'.get_the_title().'</a></li>';
	  		endwhile; endif; wp_reset_query();
	  		echo '</ul>';

	  	}?>


	  </div>

	  <?php } ?>


	  <?php if($columns["right_column"] != "") { ?>

	  <div class="left landing-col <?php echo $right_col_class; ?>">
	  	<?php echo $columns["right_column"]; ?>
	  </div>

	  <?php } ?>


  	<?php endwhile; ?>


</div>
<!--/Full Column-->





<?php get_footer(); ?>
