<?php get_header(); ?>
	<main>
		<div class="main-slider">
			<div class="center">
				<?php if ( have_posts() ) :  query_posts('cat=4’.’&order=ASC'.'&showposts=6');
					while (have_posts()) : the_post();
						if( have_rows('main_slider') ):
							while ( have_rows('main_slider') ) : the_row();
								?>
								<div class="main-slider-slide">
									<div class="main-slider-photo" style="background-image: url('<?= the_sub_field('main_slider_pic'); ?>')"></div>
									<span><?= the_sub_field('main_slider_describe'); ?></span>
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
				<div class="request-link">
					<span>Частный детский сад</span>
				</div>
			</div>
			<div class="request-link2">
				<div class="request-link">
					<span>Творческое Ателье “Yellow Bird”</span>
				</div>
			</div>
		</div>
		<div class="our-principles">
			<div class="center">
				<div class="title-block">
					<span>Наши принципы</span>
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
					<span>Наша миссия</span>
				</div>
			<span>Мы создаем будущее, в котором у наших малышей есть все навыки, умения и знания для того, чтобы
					стать успешными в стремительно меняющемся мире, делать то, что они любят и любить то, что они
					делают.</span>
				<div class="mission-items">
					<div class="mission-item">
					<span>“Есть две важные вещи, которые мы
							можем передать нашим детям. Одна
							из них корни, другая –  Крылья.”</span>
						<span>Ходдинг Картер</span>
					</div>
					<div class="mission-item">
					<span>“Способности могут не проявляться до
							тех пор, пока не создадутся подходящие
							 возможности для их реализации.”</span>
						<span>Сэр Кэн Робинсон</span>
					</div>
					<div class="mission-item">
					<span>“Знание может привести из пункта
						А в пункт Б, а воображение куда
						угодно.”</span>
						<span>Альберт Эйнштейн</span>
					</div>
				</div>
			</div>
		</div>
		<div class="photo-gallery">
			<div class="center">
				<div class="title-block">
					<span>Фотогалерея</span>
				</div>
					<span>У нас случаются удивительные вещи, придумываются оригинальные идеи, воплощаются невероятные детские мечты.
						Мы крепко дружим, много играем, свободно творим и экспериментируем, каждый день делаем маленькие открытия и раскрываем
						большие таланты. А еще у нас умиротворенно, радостно и душевно.
					</span>
				<div class="photo-gallery-slider">
					<div class="photo-gallery-item"></div>
					<div class="photo-gallery-item"></div>
					<div class="photo-gallery-item"></div>
					<div class="photo-gallery-item"></div>
					<div class="photo-gallery-item"></div>
					<div class="photo-gallery-item"></div>
				</div>
				<button onclick="location.href='gallery'">Другие фотографии</button>
			</div>
		</div>
	</main>
<?php get_footer();
