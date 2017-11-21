<?php use Roots\Sage\Titles; ?>


<?php if (has_post_thumbnail()) {?>
<section class="first-section" style="background: url(<?php echo(get_the_post_thumbnail_url( $post,'post-thumbnail' )); ?>); background-repeat: no-repeat;background-position: 50%; background-size: 100% 100%; height: 61vw; position: relative;">
	<?php } else {?>
	<section class="first-section">
		<?php } ?>
		<h1 class="content col-xs-10 <?php if (is_page() && get_the_title()!="Home") : echo "narrow-header"; endif; ?>">
			<div class="main-title">
				<?php $header_type = get_field('header_type') ?>
				<?php if ($header_type==="default" || empty(get_field('header_type'))) {
					the_title();
					echo "</div>"; // close main-title for default
				} 
				elseif ($header_type==="custom") {
					the_field('header_title');
					if ( !empty(get_field('header_subtitle'))) { 
						echo ("<div class='our-clients-title'>");
						the_field('header_subtitle');
					echo ("</div>"); // close our-clients div
					echo ("</div>"); // close main-title dif for custom
				}
			}
			elseif ($header_type==="featured-clients") {
				the_field('header_title');
				if ( !empty(get_field('header_subtitle'))) { 
					echo ("</div>"); // close our-clients div
					echo ("<div class='our-clients-container'>");	
					echo ("<div class='our-clients-title'>");				
					echo ("<div class='our-clients-logo-list'>");
					the_field('header_subtitle');
					echo ("</div"); // close header subtitle div                   
 					echo ("</div>"); // close logo-list div
					echo ("</div>"); // close main-title dif for custom					
				}
			}
			?>
		<?php if ($header_type==="featured-clients"): ?>
			<?php $images = get_field('header_featured_clients'); ?>
			<?php if( $images ): ?>
				<?php foreach( $images as $image ): ?>
					<img class="header-image--size" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />         
				<?php endforeach; ?>
			<?php endif; ?>
		<?php endif; ?>

	</h1>
	<?php get_template_part('templates/entry-meta'); ?>
</section>
