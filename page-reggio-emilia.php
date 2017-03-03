<?php get_header(); ?>
<main>
    <div class="reggio-emilia-title">
        <div class="center">
            <div class="reggio-emilia-title-photo"></div>
            <span><?= get_cat_name(9); ?></span>
            <span><?= category_description(9); ?></span>
        </div>
    </div>
    <div class="reggio-emilia-training">
        <div class="center">
            <?php if ( have_posts() ) :  query_posts('cat=9’.’&order=ASC'.'&showposts=6');
                while (have_posts()) : the_post();
                    ?>
                    <p><?php the_content();?></p>
                    <?php
                endwhile;
            endif;
            wp_reset_query();
            ?>
            <div class="training-items">
                <div class="pic-item1"></div>
                <div class="pic-item2"></div>
                <div class="training-items-head">
                    <span>Традиционное обучение</span>
                    <span>Обучение по Реджио-философии</span>
                </div>
                <div class="training-items-equal">

                    <?php if ( have_posts() ) :  query_posts('cat=7’.’&order=ASC'.'&posts_per_page=7');
                        $count = 1;
                        while (have_posts()) : the_post();
                            ?>
                            <div class="equal-item-top">
                                <span><?php the_title(); ?></span>
                                <span><?php the_content(); ?></span>
                            </div>
                            <div class="equal-item reggio-item-<?php echo $count; ?>">
                                <div class="equal-item-block left-block">
                                    <span><?php the_field('equal_comon'); ?></span>
                                </div>
                                <div class="equal-item-block right-block">
                            <span><?php the_field('equal_reggio'); ?></span>
                                </div>
                            </div>
                    <?php
                        $count++;
                        endwhile;
                    endif;
                    wp_reset_query();
                    ?>
            </div>
        </div>
    </div>
    <div class="regqio-emilia-whale">
        <div class="center">
            <div class="pic-item1"></div>
            <span><?= get_cat_name(8); ?></span>

            <?php if ( have_posts() ) :  query_posts('cat=8’.’&order=ASC'.'&showposts=7');
                $count = 1;
                while (have_posts()) : the_post();
                    ?>
                    <div class="whale-item">
                        <div class="whale-item-top">
                            <span><?= $count ?>.</span>
                            <span><?php the_title(); ?></span>
                        </div>
                        <p><?php the_content(); ?><a href=""> Читать дальше>></a></p>
                    </div>
                    <?php
                $count++;
                endwhile;
            endif;
            wp_reset_query();
            ?>
        </div>
    </div>
</main>
<?php get_footer(); ?>
