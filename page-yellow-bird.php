<?php get_header(); ?>
<main>
	<div class="about-quote other-page">
		<div class="center">
			<div class="about-quote-photo yellow-bird"></div>
				<span>У ребёнка сто языков, сто рук, сто мыслей, сто способов думать, играть и говорить. Сто способов
					слушать, восхищаться, любить. Сто радостных чувств, чтобы петь и понимать.
					Сто миров, чтобы делать открытия... </span>
				<span>Лорис Малагуцци</span>
			</div>
	</div>
	<div class="about-description">
		<div class="center">
			<?php if ( have_posts() ) :  query_posts('cat=11’.’&order=ASC'.'&showposts=4');
				while (have_posts()) : the_post();
					?>
						<p><?php the_content(); ?></p>
					<?php
				endwhile;
			endif;
			wp_reset_query();
			?>
			<div class="about-description-photos">
				<?php if ( have_posts() ) :  query_posts('cat=12’.’&order=ASC'.'&posts_per_page=2');
					while (have_posts()) : the_post();
								?>
								<div class="about-description-photo" style="background-image: url('<?php the_field('about_photo'); ?>')"></div>
								<?php
					endwhile;
				endif;
				wp_reset_query();
				?>
			</div>
			<?php if ( have_posts() ) :  query_posts('cat=11’.’&order=DESC'.'&showposts=2');
				while (have_posts()) : the_post();
					?>
					<p><?php the_content(); ?></p>
					<?php
				endwhile;
			endif;
			wp_reset_query();
			?>
			<span>А еще можно узнавать обо всем первым. Мы не спамим, не надоедаем, не передаем
				адреса другим и присылаем только полезную информацию. </span>
			<div class="mail-pic"></div>
		</div>
	</div>
	<div class="about-feedback">
		<div class="center">
			<span>Чай заварен. Плюшки ждут. Приходите. И зовите друзей.</span>
			<form action="">
				<input type="text" placeholder="Имя*" required>
				<input type="email" placeholder="Email*" required>
				<input type="tel" placeholder="Телефон">
				<input type="submit" value="Быть в курсе">
			</form>
		</div>
	</div>
</main>
<?php get_footer(); ?>