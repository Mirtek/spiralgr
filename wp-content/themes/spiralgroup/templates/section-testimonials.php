<section class="testimonials-section">
    <div class="content-wrapper">
        <div class="custom-container">
            <div class="title">
                Testimonials
            </div>
            <div class="swiper-slider">
                <div class="swiper-wrapper">
                    <?php $testimonials = get_sub_field('testimonials'); ?>
                    <?php if ( $testimonials ): ?> 
                        <?php foreach ( $testimonials as $tes ): ?>
                            <div class="swiper-slide">
                                <div class="content">
                                    <?php echo ($tes['testimonial']); ?>
                                </div>  
                                <div class="author-container">
                                    <div class="author">
                                        <?php echo ($tes['name']); ?>
                                    </div>
                                    <div class="position">
                                        <?php echo ($tes['company']); ?>
                                    </div>
                                    <div class="logo"></div>
                                </div>
                            </div><!-- swiper-slide end -->
                        <?php endforeach; ?>
                    <?php endif; ?> 
                </div>
            </div>
        </div>
    </div>
</section>