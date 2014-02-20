<form role="search" method="get" action="<?php echo home_url('/'); ?>">
    <div class="row collapse">
      <div class="small-9 columns">
        <input type="search" value="<?php if (is_search()) { echo get_search_query(); } ?>" name="s" placeholder="<?php _e('Search', 'roots'); ?> <?php bloginfo('name'); ?>">
      </div>
      <div class="small-3 columns">
        <button type="submit" class="button postfix"><?php _e('Search', 'roots'); ?></button>
      </div>
    </div>
</form>
