<?php get_header(); ?>
<main>
    <div class="main-slider">
        <div class="center">
            <div class="main-slider-slide gallery-block">
                <div class="main-slider-photo gallery-block-photo"></div>
				<span>
                    <?= category_description(6); ?>
                </span>
            </div>
        </div>
    </div>
    <div class="photo-gallery">
        <div class="center">
            <?php if ( have_posts() ) :  query_posts('cat=6’.’&order=ASC'.'&posts_per_page=6');
                while (have_posts()) : the_post();
                    ?>
                    <div class="title-block ">
                        <span><?php the_title(); ?></span>
                    </div>
                    <div class="photo-gallery-slider gallery-block-slider">
                    <?php
                    if( have_rows('slider') ):
                        while ( have_rows('slider') ) : the_row();
                            ?>
                            <div class="photo-gallery-item" style="background-image: url('<?= the_sub_field('slider_pic'); ?>')"></div>
                            <?php
                        endwhile;
                    endif;
                    ?>
                    </div>
                        <?php
                endwhile;
            endif;
            wp_reset_query();
            ?>
            <button class="gallery-button">Другие фотографии</button>
        </div>
    </div>
</main>
<?php get_footer(); ?>
