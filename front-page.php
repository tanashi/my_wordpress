<?php
/**
 * The template for displaying front-page
 */
get_header(); ?>
	<div class="front-news">
		<?php query_posts( 'posts_per_page=20' ); ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="grid">
			<a href="<?php the_permalink(); ?>">
				<div class="news-meta news-date">
					<div class="genericon genericon-time"></div>
					<?php the_time( 'Y/m/d' ); ?>
				</div>
				<div class="news-meta news-category">
					<?php $cat = get_the_category(); $cat = $cat[0]; {
						echo $cat->cat_name;
					} ?>
				</div>
				<?php if ( has_post_thumbnail() ) : ?>
					<?php the_post_thumbnail( 'top-thumb', array( 'class' => 'thumbnail' ) ); ?>
				<?php else : ?>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/no_image.gif" alt="" title="" width="210" height="210"/>
				<?php endif; ?>
				<div class="news-meta news-title">
					<p><?php echo mb_substr( get_the_title(), 0, 40 ); ?></p>
				</div>
			</a>
			<div class="news-tag">
				<?php
					the_tags('', '');
				?>
			</div>
		</div>
		<?php endwhile; endif; ?>
		<?php wp_reset_query(); ?>
	</div> <!-- /front-news -->
<?php get_footer(); ?>