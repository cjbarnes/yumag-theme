<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package YuMag
 */

// URL-path to images.
$src = get_template_directory_uri() . '/assets/';
$slug = 'on-the-grapevine';

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="archive-section">
				<header class="page-header category-header notices-header">
					<h1 class="taxonomy-title category-title notices-title">
						<img src="<?php echo $src . $slug; ?>.png" srcset="<?php echo $src . $slug; ?>@2x.png 2x, <?php echo $src . $slug; ?>.png 1x" alt="<?php esc_attr_e( 'On the Grapevine', 'yumag' ); ?>">
					</h1>
					<p class="taxonomy-description category-description"><?php esc_html_e( 'news from fellow alumni', 'yumag' ); ?></p>
						<p class="taxonomy-link category-archive-link">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" title="<?php _e( 'Go to latest issue', 'yumag' ); ?>">Back to latest issue</a>
						</p>
				</header>

			<?php if ( class_exists( 'YuMag_Plugin_Public' ) && method_exists( 'YuMag_Plugin_Public', 'display_filters' ) ) : ?>
				<div class="post-filters show-hide" data-summary="Search options">
					<?php YuMag_Plugin_Public::get_instance( YuMag_Plugin::get_instance() )->display_filters(); ?>
				</div>
			<?php endif; ?>

			<?php if ( have_posts() ) : ?>

				<div class="index-content">
					<div class="index-posts">
						<div>

						<?php /* Start the Loop */ ?>

						<?php while ( have_posts() ) : the_post(); ?>

							<?php get_template_part( 'content', 'yumag_notice' ); ?>

							<?php
								// If comments are open or we have at least one comment, load up the comment template
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;
							?>

						<?php endwhile; ?>

						</div>
					</div><!-- .index-posts -->
				</div><!-- .index-content -->
				<footer class="next-prev-wrap">
					<?php the_posts_navigation( array(
						'prev_text' => __( 'Older news', 'yumag' ),
						'next_text' => __( 'Newer news', 'yumag' ),
						'screen_reader_text' => __( 'Notices navigation', 'yumag' )
					) ); ?>
				</footer><!-- .next-prev-wrap -->

			<?php else : ?>

				<?php get_template_part( 'content', 'none' ); ?>

			<?php endif; ?>

			</section><!-- .archive-section -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
