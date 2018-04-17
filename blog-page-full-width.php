<?php
/*
*
Template Name: Full-Width
*/
get_header(); ?>
<div style="background-image: url(<?php the_post_thumbnail_url('large') ?>);" class="thenobility-page-title-area">
	<div class="container">
		<div class="row ">
			<div class="col-md-12 text-<?php echo esc_html($text_title_direction); ?>">				
				<h2><?php echo esc_html(the_title()); ?></h2>			
			</div>
		</div>
	</div>
</div>

<div id="primary" class="content-area thenobility-content-area-padding">
		<main id="main" class="site-main">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="thenobility-article-list">
							<?php
							if ( have_posts() ) :
								if ( is_home() && ! is_front_page() ) : ?>
									<header>
										<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
									</header>
								<?php
								endif;
								/* Start the Loop */
								while ( have_posts() ) : the_post();
									/*
									 * Include the Post-Format-specific template for the content.
									 * If you want to override this in a child theme, then include a file
									 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
									 */
									get_template_part( 'template-parts/content', get_post_format() );
								endwhile; ?>								
								<div class="pagination-link">
									<?php
										post_pagination();
									?>
								</div>	

								<?php
							else :
								get_template_part( 'template-parts/content', 'none' );
						endif; ?>
						</div>
					</div>						
																				
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
