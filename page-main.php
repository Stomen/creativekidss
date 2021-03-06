<?php get_header(); ?>
	<main>
		<div class="main-slider">
			<div class="center">
				<?php if ( have_posts() ) :  query_posts('cat=4’.’&order=ASC'.'&showposts=6');
					while (have_posts()) : the_post();
						if( have_rows('slider') ):
							while ( have_rows('slider') ) : the_row();
								?>
								<div class="main-slider-slide">
									<div class="main-slider-photo" style="background-image: url('<?= the_sub_field('slider_pic'); ?>')"></div>
									<span></span>
									<span><?= the_sub_field('slider_describe'); ?></span>
								</div>
								<?php
							endwhile;
						endif;
					endwhile;
				endif;
				wp_reset_query();
				?>
			</div>
		</div>
		<div class="request-buttons">
			<div class="request-link1">
				<a href="creative-kids">
					<div class="request-link">
						<span>Частный детский сад</span>
					</div>
				</a>
			</div>
			<div class="request-link2">
				<a href="yellow-bird">
					<div class="request-link">
						<span>Творческое Ателье “Yellow Bird”</span>
					</div>
				</a>
			</div>
		</div>
		<div class="our-principles">
			<div class="center">
				<div class="fox"></div>
				<div class="title-block">
					<span><?= get_cat_name(3); ?></span>
				</div>
				<div class="our-principles-block">
					<?php if ( have_posts() ) :  query_posts('cat=3’.’&order=ASC'.'&showposts=6');
						while (have_posts()) : the_post();
							if( have_rows('our_principles') ):
								while ( have_rows('our_principles') ) : the_row();
									?>
									<div class="our-principles-items">
										<div class="our-principles-item" style="background-image: url('<?= the_sub_field('principles_pic'); ?>')"></div>
										<span><?= the_sub_field('principles_title'); ?></span>
										<span><?= the_sub_field('principles_description'); ?></span>
									</div>
									<?php
								endwhile;
							endif;
						endwhile;
					endif;
					wp_reset_query();
					?>
				</div>
			</div>
		</div>
		<div class="mission">
			<div class="center">
				<div class="title-block">
					<span><?= get_cat_name(5); ?></span>
				</div>
			<span><?= category_description(5); ?></span>
				<div class="mission-items">
					<?php if ( have_posts() ) :  query_posts('cat=5’.’&order=ASC'.'&showposts=6');
						while (have_posts()) : the_post();
					?>
					<div class="mission-item">
						<span><?php the_content(); ?></span>
						<span><?php the_title(); ?></span>
					</div>
					<?php
						endwhile;
					endif;
					wp_reset_query();
					?>
				</div>
			</div>
		</div>
		<div class="photo-gallery">
			<div class="center">
				<div class="gallery-pic1"></div>
				<div class="gallery-pic2"></div>
				<div class="title-block">
					<span><?= get_cat_name(6); ?></span>
				</div>
					<span><?= category_description(6); ?></span>
				<div class="photo-gallery-slider">
					<?php if ( have_posts() ) :  query_posts('cat=6’.’&order=ASC'.'&posts_per_page=1');
						while (have_posts()) : the_post();
							if( have_rows('slider') ):
								while ( have_rows('slider') ) : the_row();
									?>
										<div class="photo-gallery-item" style="background-image: url('<?= the_sub_field('slider_pic'); ?>')"></div>
									<?php
								endwhile;
							endif;
						endwhile;
					endif;
					wp_reset_query();
					?>
				</div>
				<button onclick="location.href='gallery'">Другие фотографии</button>
			</div>
		</div>
	</main>
<?php get_footer();
