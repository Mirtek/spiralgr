<?php use Roots\Sage\Titles; ?>


<?php if (has_post_thumbnail()) {?>
  <section class="first-section" style="background: url(<?php echo(get_the_post_thumbnail_url( $post,'post-thumbnail' )); ?>); background-repeat: no-repeat;background-position: 50%; background-size: 100% 100%; height: 61vw; position: relative;">
<?php } else {?>
  <section class="first-section">
<?php } ?>
    <h1 class="content col-xs-10">
      <div class="main-title">
        <?php the_title(); ?>
      </div>
    </h1>
    <?php get_template_part('templates/entry-meta'); ?>
</section>
