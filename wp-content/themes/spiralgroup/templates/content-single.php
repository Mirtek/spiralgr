<?php use Roots\Sage\Extras; ?>
<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <section class="first-section" style="background: url(<?php echo(get_the_post_thumbnail_url( $post,'post-thumbnail' )); ?>); background-repeat: no-repeat;background-position: 50%; background-size: 100% 100%; height: 61vw; position: relative;">
    <h1 class="content col-xs-10">
      <div class="main-title">
        <?php the_title(); ?>
      </div>
    </h1>
    <?php get_template_part('templates/entry-meta'); ?>
    </section> 
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
