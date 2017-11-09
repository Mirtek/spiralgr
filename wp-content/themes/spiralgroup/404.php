<!-- <?php get_template_part('templates/page', 'header'); ?> -->

<section class="first-section" style="background: url(<?php echo(get_the_post_thumbnail_url( $post,'post-thumbnail' )); ?>); background-repeat: no-repeat;background-position: 50%; background-size: 100% 100%; height: 61vw; position: relative;">
    <h1 class="content col-xs-10">
      <div class="main-title">
        <?php _e('Error 404. Sorry, but the page you were trying to view does not exist.', 'sage'); ?>
      </div>
    </h1>
    <?php get_template_part('templates/entry-meta'); ?>
    </section> 
<section class="content">

<?php get_search_form(); ?>
