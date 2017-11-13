<?php $image = get_sub_field('image'); ?>

<section class="play-video-section">
    <div class="content-wrapper clearfix" style="background-image: url(<?php echo $image['url']; ?>);">
      <a class="video-link" href="<?php the_sub_field('vimeo_url'); ?>">
        <div class="backing"></div>
        <i class="ico fa fa-play-circle-o" aria-hidden="true"></i>
      </a>
    </div>
</section>