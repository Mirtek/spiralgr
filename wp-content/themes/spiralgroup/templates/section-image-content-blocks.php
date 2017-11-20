<section class="we-make-section">
  <div class="content-wrapper clearfix">
     
    <div class="grid clearfix">
     <?php if ( have_rows('block') ) :
              while ( have_rows('block') ) : the_row();
                $layout_type = get_row_layout();

                switch ( $layout_type ) {
                    case "regular":
                        $class="";
                        $class_smaller="";
                        $image_field = get_sub_field('image');
                        ?>
                            
                        <div class="grid-item <?php echo $class ?>">
                        <?php if (get_sub_field('link_url')) : ?>
                        <?php echo "<a href=" ?>
                        <?php echo the_sub_field('link_url') ?>
                        <?php echo "\">" ?>    
                        <?php endif; ?>

                        <div class="grid-smaller-item <?php echo $class_smaller ?>" style="background-image: url(<?php echo $image_field['sizes']['regular-thumb'] ?>)">
                        <div class="grid-bg--transparency <?php if (get_sub_field('link_url')) :
                                                                echo "grid-bg--hover";
                                                                endif; 
                                                           ?>">
                            <div class="cards-title">
                              <p><?php echo get_sub_field('title') ?></p>
                            </div>
                        </div>
                        </div>
                        <?php if (get_sub_field('link_url')) : ?>
                        <?php echo "</a>" ?>
                        <?php endif; ?>
                        </div>   

                        <?php 

                        break;

                    case "horizontal":
                        $class="grid-item--width2";
                        $class_smaller="grid-smaller-item--width2";
                        $image_field = get_sub_field('image2');
                        ?>
                            
                        <div class="grid-item <?php echo $class ?>">
                        <?php if (get_sub_field('link_url')) : ?>
                        <?php echo "<a href=" ?>
                        <?php echo the_sub_field('link_url') ?>
                        <?php echo "\">" ?>    
                        <?php endif; ?>   
                        <div class="grid-smaller-item <?php echo $class_smaller ?>" style="background-image: url(<?php echo $image_field['sizes']['insights-thumb'] ?>)">
                        <div class="grid-bg--transparency <?php if (get_sub_field('link_url')) :
                                                                echo "grid-bg--hover";
                                                                endif; 
                                                           ?>">
                            <div class="cards-title">
                              <p><?php echo get_sub_field('title2') ?></p>
                            </div>
                        </div>
                        </div>
                        <?php if (get_sub_field('link_url')) : ?>
                        <?php echo "</a>" ?>
                        <?php endif; ?> 
                        </div>   

                        <?php 

                        break;    

                    case "portrait":
                        $class="grid-item--height2";
                        $class_smaller="grid-smaller-item--height2";
                        $image_field = get_sub_field('image');
                        ?>

                        <div class="grid-item <?php echo $class ?>">
                        <?php if (get_sub_field('link_url')) : ?>
                        <?php echo "<a href=" ?>
                        <?php echo the_sub_field('link_url') ?>
                        <?php echo "\">" ?>    
                        <?php endif; ?>

                        <div class="grid-smaller-item <?php echo $class_smaller ?>" style="background-image: url(<?php echo $image_field['sizes']['portrait-thumb'] ?>)">
                        <div class="grid-bg--transparency <?php if (get_sub_field('link_url')) :
                                                                echo "grid-bg--hover";
                                                                endif; 
                                                           ?>">
                            <div class="cards-title">
                              <p><?php echo get_sub_field('title') ?></p>
                            </div>
                        </div>
                        </div>
                        <?php if (get_sub_field('link_url')) : ?>
                        <?php echo "</a>" ?>
                        <?php endif; ?>
                        </div>   

                        <?php 

                        break;               

                    case "featured":
                        $class="grid-item--height2 grid-item--width2";
                        $class_smaller="grid-smaller-item--height2 grid-smaller-item--width2";
                        $hover_effect_class="grid-smaller-item--featured";

                        if ( get_sub_field('hover_effect') == "secondary" ):
                            $hover_effect_class="grid-smaller-item--featured2";
                        endif;
                        ?>
                            
                        <div class="grid-item <?php echo $class ?>">
                        <?php if (get_sub_field('link_url')) : ?>
                        <?php echo "<a href=" ?>
                        <?php echo the_sub_field('link_url') ?>
                        <?php echo "\">" ?>    
                        <?php endif; ?>
                        <div class="grid-smaller-item <?php echo $class_smaller ?> <?php echo $hover_effect_class ?>">

                            <div class="cards-title cards-title--featured">
                              <p><?php echo get_sub_field('title')?> </p>
                            </div>
                            <div class="cards-subtitle cards-subtitle--featured">
                              <p><?php echo get_sub_field('subtitle') ?></p>
                            </div>
                        </div>
                        <?php if (get_sub_field('link_url')) : ?>
                        <?php echo "</a>" ?>
                        <?php endif; ?>
                        </div>   

                        <?php 

                        break;
                    default:
                        $class = "";
                        $class_smaller = "";
                        $image_field = "";
                }
        endwhile;
      endif; ?>
    </div>

</section> 