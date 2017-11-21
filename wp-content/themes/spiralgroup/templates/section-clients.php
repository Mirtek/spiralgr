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
          <div class="company-logo company-1" style="background-image: url(<?php echo $logo['sizes']['medium']; ?>); background-size: 60%;">           
          </div>
        </div>
         <?php endwhile; ?>
                <?php endif; ?> 
      </div>
    </div>
  </section>
