<?php
if (have_rows('page_builder', $page_id)) :
  $section_number = 1;
  $show_animations = get_field('css_animations', get_option('page_on_front'));
  while (have_rows('page_builder', $page_id)) : the_row(); 
    // Background Image
    $background_image = get_sub_field('background_image');
    $section = get_row_layout();
    $classes = '';
    // Get Content ACF Variables
    if ($section == 'content') {
      $section_padding = get_sub_field('padding');
      $classes .= ' '.$section_padding;
      if (get_sub_field('centered')) : $classes .= ' centered ' ; endif ;
    }
  ?>
    <div id="section-<?= $section_number ?>" 
      class=" section
        <?= $section; ?>
        <?php the_sub_field('section_type')?>
        <?= get_sub_field('background') ? 'bg-'.get_sub_field('background') : '' ?>
        <?= $classes ?>" 
        <?php if ((get_sub_field('background') == 'image') && !empty($background_image)) : ?>
          style="background-image: url('<?= $background_image['url'] ?>')"
        <?php endif; ?>
    >
      <div class="container">
      <?php
      switch ($section) {
        
        // Default: Content
        default:
          get_template_part('templates/section-content');
        break;
        
      } ?>
      </div>

    </div>
  <?php
  $section_number++;
  endwhile;
endif;
?>