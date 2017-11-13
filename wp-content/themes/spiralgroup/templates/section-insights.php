<section class="insight-from-section">
    <div class="content-wrapper">
        <div class="title">
            Insights from SpiralGroup Team
        </div>
        <div class="insight-list">
            <?php if ( have_rows('insights') ) : 
                while ( have_rows('insights') ) : the_row(); 
                $post_object = get_sub_field('insight');
                $post_thumbnail_url = get_the_post_thumbnail_url( $post_object->ID,'thumbnail' );
                $post_permalink = get_post_permalink ($post_object->ID);
                $post_title = $post_object->post_title;     
            ?>
            <div class="insight-item img-fluid" style="background: url(<?php echo($post_thumbnail_url); ?>)">
                <div class="backing"></div>
                <div class="title">
                    <a href="<?= $post_permalink ?>"><?= $post_title ?></a>
                </div>
            </div>
            <?php endwhile;
                  endif; ?>
        </div>
    </div>
</section>

