<section class="select-clients-section">
    <div class="content-wrapper">
      <div class="title">
        <?php the_sub_field('title'); ?>
      </div>
      <div class="clients-list">
         <?php if ( have_rows('clients') ) : 
                while ( have_rows('clients') ) : the_row(); 
                $logo = get_sub_field('logo');    
            ?>
        <div class="clients-item">
          <div class="company-logo company-1" style="background-image: url(<?php echo $logo['sizes']['medium']; ?>);">
            
          </div>
          <div class="hover-description">
            <p class="value">
              <?php the_sub_field('number_1'); ?>
            </p>
            <p class="desc">
              <?php the_sub_field('number_1_description'); ?>
            </p>
            <p class="value">
              <?php the_sub_field('number_2'); ?>
            </p>
            <p class="desc">
              <?php the_sub_field('number_2_description'); ?>
            </p>
            <p class="value">
              <?php the_sub_field('number_3'); ?>
            </p>
            <p class="desc">
              <?php the_sub_field('number_3_description'); ?>
            </p>
          </div>
        </div>
         <?php endwhile; ?>
                <?php endif; ?> 
      </div>
    </div>
  </section>