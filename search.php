<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package thenobility
 */

get_header();
?>

<div class="thenobility-page-title-area sp-60">
	<div class="container">
		<div class="row ">
			<div class="col-md-12 text-center">				
				<h2><?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'thenobility' ), '<span>' . get_search_query() . '</span>' );
				?></h2>			
			</div>
		</div>
	</div>
</div>


	<div id="primary" class="content-area thenobility-content-area-padding">
		<main id="main" class="site-main">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="thenobility-article-list">
							
						<?php if ( have_posts() ) : ?>

						<?php
						/* Start the Loop */
						while ( have_posts() ) :
							the_post();
							/**
							* Run the loop for the search to output the results.
							* If you want to overload this in a child theme then include a file
							* called content-search.php and that will be used instead.
							*/
							get_template_part( 'template-parts/content', 'search' );

						endwhile;

						the_posts_navigation();
						else :
						get_template_part( 'template-parts/content', 'none' );

						endif;
						?>

						</div>
					</div>						
						<?php get_sidebar(); ?>														
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
