<?php 
  $wrapping = get_field('page_wrapping');
?>
<div class="row">
  <div class="<?= $wrapping ? 'wrapper-' . $wrapping : 'wrapper-full'; ?>">
    <div class="entry-content">
      <?php the_content(); ?>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </div>
  </div>
</div>