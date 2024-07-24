<?php 
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

$main_text = get_field('about-kurs_text') ? get_field('about-kurs_text') : '';
$args = array(
    'post_type' => 'krs_advantages',
    'posts_per_page' => -1,
);

$custom_query = new WP_Query($args);
?>

<section class="advantages" style="background-image: url(<?php echo KURSTHEME_THEME_URI.'/assets/img/bck2.png'; ?>);" id="advantages">
    <!--  -->

    <div class="container" style="position: relative;">
        <div class="advantages__back">
            <img src="<?php echo KURSTHEME_THEME_URI.'/assets/img/flower-1.png'?>" alt="">
        </div>
        <div class="advantages__flowers">
            <img src="<?php echo KURSTHEME_THEME_URI.'/assets/img/flower-2.png'?>" alt="">
            <img src="<?php echo KURSTHEME_THEME_URI.'/assets/img/flower-3.png'?>" alt="">
        </div>
        <div class="advantages__body">
            <div class="m-title" style="background: url(<?php echo KURSTHEME_THEME_URI.'/assets/img/asset-title-2.png'?>);">
                <h3>ПЕРЕВАГИ КУРСУ</h3>
            </div>
            <div class="advantages__cards">  
                <?php  
                $c = 0;
                if ($custom_query->have_posts()) :
                    while ($custom_query->have_posts()) : $custom_query->the_post(); $c++;?>
                    <div class="advantages__card">
                    <div class="advantages__number"><?php if ($c < 10) { echo '0'.$c; } else $c; ?></div>
                    <?php echo the_content(); ?>
                </div>
                    <?php endwhile;
                    else :
                        echo '<p>No content found</p>';
                    endif;
                ?>
                <?php wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
</section>
