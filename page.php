<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package The_Landing
 */

get_header();

if ( ! is_front_page() ) {
	$content_css = ' px-6 py-12 ';
} else {
	$content_css = '';
}

?>

	<div class="w-full xl:max-w-screen-xl xl:mx-auto bg-white">
		<div>
			<?php while (have_posts()) : the_post(); ?>
				<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
					<header>
						<?php
						if ( ! is_front_page() ) {
							get_template_part('template-parts/page-title');
						} else {
								echo '<div class="w-full xl:max-w-screen-xl xl:mx-auto bg-white">';
								echo '<img src="' . get_template_directory_uri() . '/images/Banner_BDS-scaled.jpg" class="w-full" alt="Brad D. Smith Foundation Hall logo" />';
								echo '</div>';
						}
						?>
					</header>

					<div class="entry-content <?php echo $content_css ?> ">
						<?php the_content(); ?>
					</div>
				</article>
			<?php endwhile;?>
		</div>
	</div>

<?php
get_footer();
