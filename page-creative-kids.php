<?php get_header(); ?>
<main>
	<div class="about-quote other-page">
		<div class="center">
			<div class="about-quote-photo"></div>
				<span>Наша задача - помочь каждому ребёнку взобраться, как можно выше на его собственную гору </span>
				<span>Лорис Малагуцци</span>
			</div>
	</div>
	<div class="about-description">
		<div class="center">
			<?php if ( have_posts() ) :  query_posts('cat=14’.’&order=ASC'.'&showposts=4');
				while (have_posts()) : the_post();
					?>
					<p><?php the_content(); ?></p>
					<?php
				endwhile;
			endif;
			wp_reset_query();
			?>
			<div class="about-description-photos">
				<?php if ( have_posts() ) :  query_posts('cat=13’.’&order=ASC'.'&posts_per_page=2');
					while (have_posts()) : the_post();
						?>
						<div class="about-description-photo" style="background-image: url('<?php the_field('about_photo'); ?>')"></div>
						<?php
					endwhile;
				endif;
				wp_reset_query();
				?>
			</div>
			<?php if ( have_posts() ) :  query_posts('cat=14’.’&order=DESC'.'&showposts=4');
				while (have_posts()) : the_post();
					?>
					<p><?php the_content(); ?></p>
					<?php
				endwhile;
			endif;
			wp_reset_query();
			?>
			<div class="mail-pic"></div>
		</div>
	</div>
	<div class="about-feedback creative-theme">
		<div class="center">
			<span>Ждём вас в гости!</span>
			<span>Мы свяжемся с Вами в ближайшее время и все подробно расскажем</span>
			<form action="">
				<input type="text" placeholder="Имя*" required>
				<input type="email" placeholder="Email*" required>
				<input type="tel" placeholder="Телефон">
				<input type="submit" value="Прийти в гости">
			</form>
		</div>
	</div>
</main>
<?php get_footer(); ?>