<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php get_template_part('templates/entry-meta'); ?>
      <ul class="social-buttons cf">
        <li><a class="socialite twitter-share" href="http://twitter.com/share" data-text="<?php the_title(); ?> by @funds4disaster |" data-url="<?php the_permalink(); ?>" data-count="none" rel="nofollow" target="_blank"></a></li>
        <li><a class="socialite facebook-like" href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>", data-href="<?php the_permalink(); ?>" data-send="false" data-layout="button" data-action="like" data-width="60" data-show-faces="true" rel="nofollow" target="_blank"></a></li>
      </ul>
    </header>

    <div class="entry-content">

    <?php if ( is_singular( 'disasters' ) ): ?>
        <dl class="tabs" data-tab>
          <dd class="active"><a href="#panel2-1">Article</a></dd>
          <dd><a href="#panel2-2">Background</a></dd>
          <dd><a href="#panel2-3">Facts & Stats</a></dd>
          <dd><a href="#panel2-4">CDP Insights</a></dd>
          <dd><a href="#panel2-5">Donors</a></dd>
          <dd><a href="#panel2-6">NGO Response</a></dd>
          <dd><a href="#panel2-7">Take Action</a></dd>
          <dd><a href="#panel2-8">Learn More</a></dd>
        </dl>

        <div class="tabs-content">
          <div class="content active" id="panel2-1">
            <?php the_content(); ?>
          </div>
          <div class="content" id="panel2-2">
            <?php the_field('background'); ?>
          </div>
          <div class="content" id="panel2-3">
            <?php the_field('facts_&_stats'); ?>
          </div>
          <div class="content" id="panel2-4">
            <?php the_field('cdp_insights'); ?>
          </div>
          <div class="content" id="panel2-5">
            <?php the_field('donors'); ?>
          </div>
          <div class="content" id="panel2-6">
            <?php the_field('ngo_response'); ?>
          </div>
          <div class="content" id="panel2-7">
            <?php the_field('take_action'); ?>
          </div>
          <div class="content" id="panel2-8">
            <?php the_field('learn_more'); ?>
          </div>
        </div>
      <?php else: ?>
        <?php the_content(); ?>
      <?php endif; ?>

    </div>
    <div>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
    </div>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
