<?php use Roots\Sage\Titles; ?>


<?php if (has_post_thumbnail()) {?>
<section class="first-section" style="background: url(<?php echo(get_the_post_thumbnail_url( $post,'post-thumbnail' )); ?>); background-repeat: no-repeat;background-position: 50%; background-size: 100% 100%; height: 61vw; position: relative;">
	<?php } else {?>
	<section class="first-section">
		<?php } ?>
		<h1 class="content col-xs-10">
			<div class="main-title">
				<?php if (get_field('header_type')==="default" || empty(get_field('header_type'))) {
					the_title();
					echo "</div>"; // close main-title for default
				} 
				elseif (get_field('header_type')==="custom") {
					echo(get_field('header_title'));
					if ( !empty(get_field('header_subtitle'))) { 
						echo ("<div class='our-clients-title'>");
						echo get_field('header_subtitle');
					echo ("</div>"); // close our-clients div
					echo ("</div>"); // close main-title dif for custom
				}
			}
			elseif (get_field('header_type')==="featured-clients") {
				echo(get_field('header_title'));
				if ( !empty(get_field('header_subtitle'))) { 
					echo ("</div>"); // close our-clients div
					echo ("<div class='our-clients-container'>");	
					echo ("<div class='our-clients-title'>");				
					echo ("<div class='our-clients-logo-list'>");
					echo get_field('header_subtitle');
					echo ("</div"); // close header subtitle div                   
 					echo ("</div>"); // close logo-list div
					echo ("</div>"); // close main-title dif for custom					
				}
			}
			?>
		<?php 
		$images = get_field('header_featured_clients');
		if( $images ): ?>
		<?php foreach( $images as $image ): ?>
			<img height='50px' clas="img-fluid" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />         
		<?php endforeach; ?>
		<?php endif; ?>
		
	</h1>
	<?php get_template_part('templates/entry-meta'); ?>
</section>
