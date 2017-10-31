<?php get_template_part('templates/page', 'header'); ?>

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
  <?php get_search_form(); ?>

<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
<?php endwhile; ?>

<?php the_posts_navigation(); ?>


<!-- ======================================================================================================================================== -->
	<!-- header start -->
	<header>
		<div class="content-wrapper">
			<div class="logo-container">
				<div class="logo">
					
				</div>
				<div class="slogan">
					Brand Marketing For Emerging Technology Companies
				</div>
			</div>
			<div class="menu-button">
				<i class="ico fa fa-bars" aria-hidden="true"></i>
			</div>
		</div>	
		<ul class="menu-block">
			<div class="menu-block-close-btn">
				<i class="fa fa-times" aria-hidden="true"></i>
			</div>
			<li class="menu-item">
				Services
			</li>
			<li class="menu-item">
				Results
			</li>
			<li class="menu-item">
				About Us
			</li>
			<li class="menu-item">
				Insights
			</li>
			<li class="menu-item">
				Contact Us
			</li>
		</ul>	
	</header>
	<!-- header end -->

	<!-- first section start -->
	<section class="first-section">
		<h1 class="content col-xs-10">
			Go from unknown to <span>indespensible.</span>
		</h1>
	</section>	
	<!-- first section end -->

	<!-- we-make section start -->
	<section class="we-make-section">
		<div class="content-wrapper clearfix">
			<div class="column-1 clearfix">
				<div class="row-1 card-item">
					<div class="backing"></div>
					<div class="cards-title">
						<p>200 +</p>
						<p>Clients</p>
					</div>
				</div>
				<div class="row-margin"></div>
				<div class="row-2 card-item">
					<div class="backing"></div>
					<div class="cards-title">						
						<p>$5+ Billion</p> 
						<p>Valuations/</p> 
						<p>Acquisitions/</p>
						<p>IPO Exists</p>
					</div>
				</div>
			</div>
			<div class="column-margin"></div>
			<div class="column-2">
				<div class="column-title">
					We make emerging technology companies <span>matter.</span>
				</div>
				<div class="column-description">
					Guiding them from obscurity to industry leadership and high market valuation.
				</div>
			</div>
			<div class="column-margin"></div>
			<div class="column-3 card-item">
				<div class="backing"></div>
			<!-- 3 -->
			</div>
		</div>
	</section>	
	<!-- we-make section end -->

	<!-- grounded-in section start -->
	<section class="grounded-in-section clearfix">
		<div class="content-wrapper clearfix">
			<div class="column-1 clearfix">
				<div class="row-1 clearfix">
					<div class="sub-column-1 card-item">
						<div class="backing"></div>
						<div class="cards-title">
							Branding
						</div>
					</div>
					<div class="sub-column-margin"></div>
					<div class="sub-column-2 card-item">
						<div class="backing"></div>
						<div class="cards-title">
							Public Relations
						</div>
					</div>
				</div>
				<div class="row-2">
					<div class="title">
						Grounded in data and market <span>intelligence.</span>
					</div>
					<div class="description">
						Enhanced by deep industry expertise and experience, we make your brand brilliant by illuminating your value to key stakeholders.
					</div>
				</div>
			</div>
			<div class="column-margin"></div>
			<div class="column-2 clearfix">
				<div class="row-1 clearfix">
					<div class="sub-column-1 card-item">
						<div class="backing"></div>
						<div class="cards-title">
							Social Engagement
						</div>
					</div>
					<div class="sub-column-margin"></div>
					<div class="sub-column-2 card-item">
						<div class="backing"></div>
						<div class="cards-title">
							Marketing Management
						</div>
					</div>
				</div>
				<div class="row-2 card-item">
					<div class="backing"></div>
					2
				</div>
			</div>
		</div>
	</section>	
	<!-- grounded-in section end -->
	
	<section class="play-video-section">
		<div class="content-wrapper clearfix">
			<div class="backing"></div>
			<i class="ico fa fa-play-circle-o" aria-hidden="true"></i>
		</div>
	</section>

	<!-- testimonials-section start -->
	<section class="testimonials-section">
		<div class="content-wrapper">
			<div class="custom-container">
				<div class="title">
					Testimonials
				</div>
				<div class="content">
						"I work with over 250 marketing agencies every year.  
						I see them in all states of effectiveness and every 
						variation you can imagine. Spiralgroup is quite unique 
						in their commitment to only offering seasoned, senior 
						level staff who have an amazing depth of knowledge. 
						They only work in categories where they can bring an 
						unfair advantage to their clients.  That’s impressive and rare"
				</div>
				<div class="author-container">
					<div class="author">
						Drew McLellan
					</div>
					<div class="position">
						President,  Agency Management Institute
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- testimonials-section end -->

	<!-- select-clients-section start -->
	<section class="select-clients-section">
		<div class="content-wrapper">
			<div class="title">
				Select Clients
			</div>
			<div class="clients-list">
				<div class="clients-row">
					<div class="clients-item">
						1
					</div>
					<div class="clients-item">
						2
					</div>
					<div class="clients-item">
						3
					</div>
				</div>
				<div class="clients-row">
					<div class="clients-item">
						1
					</div>
					<div class="clients-item">
						2
					</div>
					<div class="clients-item">
						3
					</div>
				</div>
				<div class="clients-row">
					<div class="clients-item">
						1
					</div>
					<div class="clients-item">
						2
					</div>
					<div class="clients-item">
						3
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- select-clients-section end -->

	<!-- insight-from-section start -->
	<section class="insight-from-section">
		<div class="content-wrapper">
			<div class="title">
				Insights from SpiralGroup Team
			</div>
			<div class="insight-list">
				<div class="insight-item">
					<div class="backing"></div>
					<div class="title">
						4 Misconceptions That Keep You From Great PR
					</div>
				</div>
				<div class="insight-item">	
					<div class="backing"></div>				
					<div class="title">
						4 Misconceptions That Keep You From Great PR
					</div>
				</div>
				<div class="insight-item">
					<div class="backing"></div>
					<div class="title">
						4 Misconceptions That Keep You From Great PR
					</div>
				</div>
				<div class="insight-item">
					<div class="backing"></div>
					<div class="title">
						4 Misconceptions That Keep You From Great PR
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- insight-from-section end -->
	
	<!-- footer start -->
	<footer>
		<div class="content-wrapper">
			<div class="logo-container">

			</div>
			<div class="contact-us-container">
				<div class="title">
					Contact Us
				</div>
				<div class="address-container">
					<p>350 Townsend Street</p>
					<p>Suite 777</p>
					<p>San Francisco, CA 94107</p>
					<p>415-869-8579</p>
					<p class="email"><a href="mailto:info@spiralgroup.com">info@spiralgroup.com</a></p>
				</div>
			</div>
			<div class="footer-menu-container">
				<ul class="menu">
					<li class="menu-item">
						<a href="">
							Services 
						</a>
					</li>
					<li class="menu-item">
						<a href="">
							Results
						</a>
					</li>
					<li class="menu-item">
						<a href="">
							Insights
						</a>
					</li>
					<li class="menu-item">
						<a href="">
							About Us
						</a>
					</li>
				</ul>
			</div>
			<div class="footer-social-links-container">
				<ul class="social-links">
					<li class="social-links-item">
						<a href="">
							Twitter 
						</a>
					</li>
					<li class="social-links-item">
						<a href="">
							Facebook
						</a>
					</li>
					<li class="social-links-item">
						<a href="">
							LinkedIn
						</a>
					</li>
				</ul>
			</div>
		</div>		
	</footer>
	<!-- footer end -->


