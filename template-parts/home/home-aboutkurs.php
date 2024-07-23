<?php 
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

$main_text = get_field('about-kurs_text') ? get_field('about-kurs_text') : '';
$args = array(
    'post_type' => 'custom_post',
    'posts_per_page' => 10,
);

$custom_query = new WP_Query($args);
?>

<section class="about-kurs">
    <div class="container" style="position: relative;">
        <div class="about-kurs__body">
            <div class="about-kurs__back">
                <img class="about-kurs__back--under" src="<?php echo KURSTHEME_THEME_URI.'/assets/img/grid.png'?>" alt="">
                <img class="about-kurs__back--above" src="<?php echo KURSTHEME_THEME_URI.'/assets/img/flower.png'?>" alt="">
            </div>
            <div class="m-title" style="background: url(<?php echo KURSTHEME_THEME_URI.'/assets/img/asset-title-1.png'?>);">
                <h3>ПРО КУРС</h3>
            </div>
            <div class="about-kurs__inner">
                <div class="about-kurs__text">
                    <?php echo $main_text; ?>
                </div>
                <div class="about-kurs__cards">
                <?php if ($custom_query->have_posts()) :
                    while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
                        <div class="about-kurs__card"
                        style="background: url('<?php echo get_the_post_thumbnail_url(); ?>');">
                            <h4><?php the_title(); ?></h4>
                        </div>
                    <?php endwhile;
                    else :
                        echo '<p>No content found</p>';
                    endif;
                ?>
                    <!-- <div class="about-kurs__card" style="background: url('<?php echo KURSTHEME_THEME_URI.'/assets/img/a2.png'; ?>');">
                        <h4>Тривалість курсу – 9 місяців</h4>
                    </div>
                    <div class="about-kurs__card" style="background: url('<?php echo KURSTHEME_THEME_URI.'/assets/img/a3.png'; ?>');">
                        <h4>Як часто займатися? – 2 рази на тиждень по 1 годині</h4>
                    </div>
                    <div class="about-kurs__card" style="background: url('<?php echo KURSTHEME_THEME_URI.'/assets/img/a4.png'; ?>');">
                        <h4>Який вигляд мають заняття? – проведення індивідуальних лекцій за власним графіком, або в групах до 10 осіб</h4>
                    </div>
                    <div class="about-kurs__card" style="background: url('<?php echo KURSTHEME_THEME_URI.'/assets/img/a5.png'; ?>');">
                        <h4>Коли проходять заняття?– за визначеним графіком</h4>
                    </div>
                    <div class="about-kurs__card" style="background: url('<?php echo KURSTHEME_THEME_URI.'/assets/img/a6.png'; ?>');">
                        <h4>Вартість – 550 грн/місяць</h4>
                    </div> -->
                </div>
            </div>

        </div>
        
    </div>
</section>