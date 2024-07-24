<?php 
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

$review1_title = get_field('reviews-1_title') ? get_field('reviews-1_title') : '';
$review1_text = get_field('reviews-1_text') ? get_field('reviews-1_text') : '';

$review2_title = get_field('reviews-2_title') ? get_field('reviews-2_title') : '';
$review2_text = get_field('reviews-2_text') ? get_field('reviews-2_text') : '';

$review3_title = get_field('reviews-3_title') ? get_field('reviews-3_title') : '';
$review3_text = get_field('reviews-3_text') ? get_field('reviews-3_text') : '';

$review4_title = get_field('reviews-4_title') ? get_field('reviews-4_title') : '';
$review4_text = get_field('reviews-4_text') ? get_field('reviews-4_text') : '';

$review5_title = get_field('reviews-5_title') ? get_field('reviews-5_title') : '';
$review5_text = get_field('reviews-5_text') ? get_field('reviews-5_text') : '';
?>

<section class="reviews" id="reviews">
    <!--  -->
    <div class="container" style="position: relative;">

        <div class="reviews__body">
            <div class="m-title" style="background: url(<?php echo KURSTHEME_THEME_URI.'/assets/img/asset-title-1.png'?>);">
                <h3>ВІДГУКИ</h3>
            </div>
            <div class="reviews__back">
                <img src="<?php echo KURSTHEME_THEME_URI.'/assets/img/grid.png'?>" alt="">
            </div>
            <div class="reviews__items">
                <div class="reviews__item" id="review1" style="background: url(<?php echo KURSTHEME_THEME_URI.'/assets/img/r1.png'?>);">
                    <div class="reviews__item--text">
                        <h2><?php echo $review1_title ?></h2>
                        <?php echo $review1_text ?>
                        <div class="flowers">
                            <img src="<?php echo KURSTHEME_THEME_URI.'/assets/img/flower.png'?>" alt="">
                        </div>
                    </div>
                </div>

                <div class="reviews__item" id="review2" style="background: url(<?php echo KURSTHEME_THEME_URI.'/assets/img/r2.png'?>);">
                    <div class="reviews__item--text">
                        <h2><?php echo $review2_title ?></h2>
                        <?php echo $review2_text ?>
                        <div class="flowers">
                            <img class="flowers--first" src="<?php echo KURSTHEME_THEME_URI.'/assets/img/flower-4.png'?>" alt="">
                            <img class="flowers--second" src="<?php echo KURSTHEME_THEME_URI.'/assets/img/flower-2.png'?>" alt="">
                        </div>
                    </div>
                </div>

                <div class="reviews__item" id="review3" style="background: url(<?php echo KURSTHEME_THEME_URI.'/assets/img/r3.png'?>);">
                    <div class="reviews__item--text">
                        <h2><?php echo $review3_title ?></h2>
                        <?php echo $review3_text ?>
                        <div class="flowers">
                            <img src="<?php echo KURSTHEME_THEME_URI.'/assets/img/flower-1.png'?>" alt="">
                        </div>
                    </div>
                </div>

                <div class="reviews__item" id="review4" style="background: url(<?php echo KURSTHEME_THEME_URI.'/assets/img/r4.png'?>);">
                    <div class="reviews__item--text">
                        <h2><?php echo $review4_title ?></h2>
                        <?php echo $review4_text ?>
                        <div class="flowers">
                            <img class="flowers--first" src="<?php echo KURSTHEME_THEME_URI.'/assets/img/flower-2.png'?>" alt="">
                            <img class="flowers--second" src="<?php echo KURSTHEME_THEME_URI.'/assets/img/flower-3.png'?>" alt="">
                        </div>
                    </div>
                </div>  

                <div class="reviews__item" id="review5" style="background: url(<?php echo KURSTHEME_THEME_URI.'/assets/img/r5.png'?>);">
                    <div class="reviews__item--text">
                        <h2><?php echo $review5_title ?></h2>
                        <?php echo $review5_text ?>
                        <div class="flowers">
                            <img src="<?php echo KURSTHEME_THEME_URI.'/assets/img/flower-4.png'?>" alt="">
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>