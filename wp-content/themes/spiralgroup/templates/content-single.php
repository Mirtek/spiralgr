<?php use Roots\Sage\Extras; ?>
<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
 <?php get_template_part('templates/page', 'header'); ?>
    <div class="size-img"></div>
    <section class="article-section">
    <div class="content-wrapper">
        <?php the_content(); ?>
    </div>
  </section>
    <!--<footer>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>-->
    <?php /*comments_template('/templates/comments.php');*/ ?>
  </article>
<?php endwhile; ?>
