<?php 
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

$main_text = get_field('about-kurs_text') ? get_field('about-kurs_text') : '';
$args = array(
    'post_type' => 'custom_post',
    'posts_per_page' => -1,
);

$abouts = new WP_Query($args);
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
                <?php if ($abouts->have_posts()) :
                    while ($abouts->have_posts()) : $abouts->the_post(); ?>
                        <div class="about-kurs__card"
                        style="background: url('<?php echo get_the_post_thumbnail_url(); ?>');">
                            <h4><?php the_title(); ?></h4>
                        </div>
                    <?php endwhile;
                    endif;?>
                    <?php wp_reset_postdata(); ?>
                </div>
            </div>

        </div>
        
    </div>
</section>