<div class="content">
  <div class="row">
    <div class="<?= 'wrapper-' . get_sub_field('wrapping'); ?>">
      <?= apply_filters('the_content', get_sub_field('content', false)); ?>
    </div>
  </div>
</div>