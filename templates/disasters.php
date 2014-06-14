<?php while (have_posts()) : the_post(); ?>
  <?php the_content(); ?>
<?php endwhile; ?>

<?php query_posts('post_type=disasters&showposts=-1'); ?>
<h5>Disasters</h5>
<ul>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
  <?php endwhile; endif; ?>
</ul>
          <?php wp_reset_query(); ?>
