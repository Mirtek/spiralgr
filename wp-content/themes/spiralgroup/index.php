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
					<a href=""></a>
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
				<a href="">Services</a>
			</li>
			<li class="menu-item">
				<a href="">Results</a>
			</li>
			<li class="menu-item">
				<a href="">About Us</a>
			</li>
			<li class="menu-item">
				<a href="">Insights</a>
			</li>
			<li class="menu-item">
				<a href="">Contact Us</a>
			</li>
		</ul>	
	</header>
	<!-- header end -->

	<!-- first section start -->
	<section class="first-section">
		<h1 class="content col-xs-10">
			<div class="main-title">
				Go from unknown to <span>indespensible.</span>
			</div>
			<div class="our-clients-container">
				<div class="our-clients-title">
					We helped our clients’ technology become part of 
				</div>
				<div class="our-clients-logo-list">
					
				</div>
			</div>
		</h1>
	</section>	
	<!-- first section end -->

	<!-- we-make section start -->
	<section class="we-make-section">
		<div class="content-wrapper clearfix">
			<div class="column-1 clearfix">
				<div class="row-1 card-item clients">
					<div class="backing"></div>
					<div class="cards-title">
						<p>200 +</p>
						<p>Clients</p>
					</div>
				</div>
				<div class="row-margin"></div>
				<div class="row-2 card-item valuations">
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
			<div class="column-2 we-make">
				<div class="column-title">
					We make emerging technology companies <span>matter.</span>
				</div>
				<div class="column-description">
					Guiding them from obscurity to industry leadership and high market valuation.
				</div>
			</div>
			<div class="column-margin"></div>
			<div class="column-3 card-item continents">
				<div class="backing"></div>
				<div class="cards-title">
					6
					<br/>
					Continents
				</div>
			</div>
		</div>
	</section>	
	<!-- we-make section end -->

	<!-- grounded-in section start -->
	<section class="grounded-in-section clearfix">
		<div class="content-wrapper clearfix">
			<div class="column-1 clearfix">
				<div class="row-1 clearfix">
					<div class="sub-column-1 card-item branding">
						<div class="backing"></div>
						<div class="cards-title">
							Branding
						</div>
					</div>
					<div class="sub-column-margin"></div>
					<div class="sub-column-2 card-item relations">
						<div class="backing"></div>
						<div class="cards-title">
							Public Relations
						</div>
					</div>
				</div>
				<div class="row-2 grounded">
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
					<div class="sub-column-1 card-item social">
						<div class="backing"></div>
						<div class="cards-title">
							Social Engagement
						</div>
					</div>
					<div class="sub-column-margin"></div>
					<div class="sub-column-2 card-item marketing">
						<div class="backing"></div>
						<div class="cards-title">
							Marketing Management
						</div>
					</div>
				</div>
				<div class="row-2 card-item digital-marketing">
					<div class="backing"></div>
					<div class="cards-title">					
						Digital
						<br/>
						Marketing
					</div>
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
					<div class="logo"></div>
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
				<div class="clients-item">
					<div class="company-logo company-1">
						
					</div>
					<div class="hover-description">
						<p class="value">
							5500
						</p>
						<p class="desc">
							articles in one week
						</p>
						<p class="value">
							3
						</p>
						<p class="desc">
							months from rebrand to bidding war
						</p>
						<p class="value">
							$2.4B
						</p>
						<p class="desc">
							aquisition
						</p>
					</div>
				</div>
				<div class="clients-item">
					<div class="company-logo company-2">
						
					</div>
					<div class="hover-description">
						<p class="value">
							5500
						</p>
						<p class="desc">
							articles in one week
						</p>
						<p class="value">
							3
						</p>
						<p class="desc">
							months from rebrand to bidding war
						</p>
						<p class="value">
							$2.4B
						</p>
						<p class="desc">
							aquisition
						</p>
					</div>
				</div>
				<div class="clients-item">
					<div class="company-logo company-3">
						
					</div>
					<div class="hover-description">
						<p class="value">
							5500
						</p>
						<p class="desc">
							articles in one week
						</p>
						<p class="value">
							3
						</p>
						<p class="desc">
							months from rebrand to bidding war
						</p>
						<p class="value">
							$2.4B
						</p>
						<p class="desc">
							aquisition
						</p>
					</div>
				</div>
				<div class="clients-item">
					<div class="company-logo company-4">
						
					</div>
					<div class="hover-description">
						<p class="value">
							5500
						</p>
						<p class="desc">
							articles in one week
						</p>
						<p class="value">
							3
						</p>
						<p class="desc">
							months from rebrand to bidding war
						</p>
						<p class="value">
							$2.4B
						</p>
						<p class="desc">
							aquisition
						</p>
					</div>
				</div>
				<div class="clients-item">						
					<div class="company-logo company-5">
						
					</div>
					<div class="hover-description">
						<p class="value">
							5500
						</p>
						<p class="desc">
							articles in one week
						</p>
						<p class="value">
							3
						</p>
						<p class="desc">
							months from rebrand to bidding war
						</p>
						<p class="value">
							$2.4B
						</p>
						<p class="desc">
							aquisition
						</p>
					</div>
				</div>
				<div class="clients-item">
					<div class="company-logo company-6">
						
					</div>
					<div class="hover-description">
						<p class="value">
							5500
						</p>
						<p class="desc">
							articles in one week
						</p>
						<p class="value">
							3
						</p>
						<p class="desc">
							months from rebrand to bidding war
						</p>
						<p class="value">
							$2.4B
						</p>
						<p class="desc">
							aquisition
						</p>
					</div>
				</div>
				<div class="clients-item">
					<div class="company-logo company-7">
						
					</div>
					<div class="hover-description">
						<p class="value">
							5500
						</p>
						<p class="desc">
							articles in one week
						</p>
						<p class="value">
							3
						</p>
						<p class="desc">
							months from rebrand to bidding war
						</p>
						<p class="value">
							$2.4B
						</p>
						<p class="desc">
							aquisition
						</p>
					</div>
				</div>
				<div class="clients-item">						
					<div class="company-logo company-8">
						
					</div>
					<div class="hover-description">
						<p class="value">
							5500
						</p>
						<p class="desc">
							articles in one week
						</p>
						<p class="value">
							3
						</p>
						<p class="desc">
							months from rebrand to bidding war
						</p>
						<p class="value">
							$2.4B
						</p>
						<p class="desc">
							aquisition
						</p>
					</div>
				</div>
				<div class="clients-item">						
					<div class="company-logo company-9">
						
					</div>
					<div class="hover-description">
						<p class="value">
							5500
						</p>
						<p class="desc">
							articles in one week
						</p>
						<p class="value">
							3
						</p>
						<p class="desc">
							months from rebrand to bidding war
						</p>
						<p class="value">
							$2.4B
						</p>
						<p class="desc">
							aquisition
						</p>
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

	<!-- article-section start -->
	<section class="article-section">
		<div class="content-wrapper">
			<h2>
				H2 We make emerging technology companies <span>matter.</span>
			</h2>
			<h3>
				H3 Social Engagement
			</h3>
			<h4>
				H4/H5/H6 Sample Text
			</h4>	
			<div class="content-desc">
				<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent lacinia 
					aliquam aliquam. Nulla sit amet lorem eu elit malesuada bibendum. Donec 
					fermentum auctor felis eu feugiat. In laoreet augue elit, in rutrum purus 
					eleifend in. Sed finibus non lectus id placerat. Praesent eros justo, porttitor 
					et nibh ut, sodales consectetur lorem. Quisque lacinia mi lorem, non vulputate 
					ligula tincidunt iaculis. Vestibulum iaculis volutpat nibh in vehicula. Morbi 
					laoreet massa quis ante faucibus, molestie ullamcorper magna accumsan.
				</p>
				<p>
						Phasellus quis tincidunt massa, quis pretium mauris. Vivamus congue rutrum 
					lectus ornare interdum. Cras dictum urna vel venenatis volutpat. Nunc eu turpis 
					sapien. Aenean velit lorem, porttitor nec sem non, finibus tempor orci. Fusce quis 
					risus sit amet mauris ultrices viverra. Nam nisl nunc, aliquam nec feugiat maximus, 
					blandit in felis. Phasellus eleifend, diam et consequat bibendum, felis mi lobortis 
					purus, sit amet finibus diam orci vel est. Phasellus eget ex auctor, hendrerit 
					purus eu, ornare risus.
				</p>
				<p>
						In nunc eros, bibendum at viverra et, dignissim vitae neque. Vestibulum eu 
					iaculis enim. Ut vehicula sapien sit amet rutrum feugiat. Interdum et malesuada 
					fames ac ante ipsum primis in faucibus. Duis vel semper libero, eu laoreet ante. 
					Maecenas tincidunt sem non mi feugiat luctus.
				</p>
			</div>
		</div>
	</section>
	<!-- article-section end -->
	
	<!-- footer start -->
	<footer>
		<div class="content-wrapper">
			<div class="logo-container">
				<a href=""></a>
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


