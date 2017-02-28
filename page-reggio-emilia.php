<?php get_header(); ?>
<main>
    <div class="reggio-emilia-title">
        <div class="center">
            <div class="reggio-emilia-title-photo"></div>
            <span>Философия Reggio Emilia</span>
            <span>Мы разделяем самую инновационную философию, которую международные эксперты признают лучшим методом
            работы для дошкольного образования, которой восхищаются учителя и родители по всему миру, с
            которой дети познают мир,  наслаждаясь детством.
            </span>
        </div>
    </div>
    <div class="reggio-emilia-training">
        <div class="center">
            <p>Философия Реджио Эмилия  зародилась в 50-х годах прошлого века в городе на севере Италии Реджио Эмилия, в честь которого он и называется.
                Вдохновитель подхода Лорис Малагуцци, директор образовательных программ Reggio Emilia опирался на идеи великих мыслителей в сфере
                образования - Пиаже, Выготского, Монтессори, Штайнера, Дью и Брунера.
            </p>
            <p>Так появился педагогический подход, основные принципы и философия которого распространились по всему миру. В 1991 году изданием “Newsweek”
                Рэджио-садики были признаны лучшими в мире. Рэджио-подход отмечен множеством международных наград и премий. Лучшие международные
                частные образовательные учреждения работают на основе Рэджио-подхода.
            </p>
            <div class="training-items">
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
            <span>7 китов Рэджио-философии</span>
            <div class="whale-item">
                <div class="whale-item-top">
                    <span>1.</span>
                    <span>Образ ребенка</span>
                </div>
                <p>Рэджио-педагоги верят в неограниченный потенциал ребенка и его безграничное желание взаимодействовать с миром и привносить свой вклад.
                    Reggio Emilia  - это место для совместных опытов и открытый.<a href=""> Читать дальше>></a></p>
            </div>
            <div class="whale-item">
                <div class="whale-item-top">
                    <span>2.</span>
                    <span>Образ ребенка</span>
                </div>
                <p>Рэджио-педагоги верят в неограниченный потенциал ребенка и его безграничное желание взаимодействовать с миром и привносить свой вклад.
                    Reggio Emilia  - это место для совместных опытов и открытый.<a href=""> Читать дальше>></a></p>
            </div>
            <div class="whale-item">
                <div class="whale-item-top">
                    <span>3.</span>
                    <span>Образ ребенка</span>
                </div>
                <p>Рэджио-педагоги верят в неограниченный потенциал ребенка и его безграничное желание взаимодействовать с миром и привносить свой вклад.
                    Reggio Emilia  - это место для совместных опытов и открытый.<a href=""> Читать дальше>></a></p>
            </div>
            <div class="whale-item">
                <div class="whale-item-top">
                    <span>4.</span>
                    <span>Образ ребенка</span>
                </div>
                <p>Рэджио-педагоги верят в неограниченный потенциал ребенка и его безграничное желание взаимодействовать с миром и привносить свой вклад.
                    Reggio Emilia  - это место для совместных опытов и открытый.<a href=""> Читать дальше>></a></p>
            </div>
            <div class="whale-item">
                <div class="whale-item-top">
                    <span>5.</span>
                    <span>Образ ребенка</span>
                </div>
                <p>Рэджио-педагоги верят в неограниченный потенциал ребенка и его безграничное желание взаимодействовать с миром и привносить свой вклад.
                    Reggio Emilia  - это место для совместных опытов и открытый.<a href=""> Читать дальше>></a></p>
            </div>
            <div class="whale-item">
                <div class="whale-item-top">
                    <span>6.</span>
                    <span>Образ ребенка</span>
                </div>
                <p>Рэджио-педагоги верят в неограниченный потенциал ребенка и его безграничное желание взаимодействовать с миром и привносить свой вклад.
                    Reggio Emilia  - это место для совместных опытов и открытый.<a href=""> Читать дальше>></a></p>
            </div>
            <div class="whale-item">
                <div class="whale-item-top">
                    <span>7.</span>
                    <span>Образ ребенка</span>
                </div>
                <p>Рэджио-педагоги верят в неограниченный потенциал ребенка и его безграничное желание взаимодействовать с миром и привносить свой вклад.
                    Reggio Emilia  - это место для совместных опытов и открытый.<a href=""> Читать дальше>></a></p>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>
