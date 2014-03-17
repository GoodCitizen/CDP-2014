<div class="page-header">
  <h1>
    <?php echo roots_title(); ?>
  </h1>
  <?php if(is_archive() | is_home() ): ?>
  <?php else: ?>
  <ul class="social-buttons cf">
    <li><a class="socialite twitter-share" href="http://twitter.com/share" data-text="<?php the_title(); ?> by @funds4disaster |" data-url="<?php the_permalink(); ?>" data-count="none" rel="nofollow" target="_blank"></a></li>
    <li><a class="socialite facebook-like" href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>", data-href="<?php the_permalink(); ?>" data-send="false" data-layout="button" data-action="like" data-width="60" data-show-faces="true" rel="nofollow" target="_blank"></a></li>
  </ul>
  <?php endif; ?>
</div>
