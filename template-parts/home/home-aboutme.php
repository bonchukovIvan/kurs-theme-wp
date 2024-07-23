<?php 
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

$main_text = get_field('about-me_text') ? get_field('about-me_text') : '';
$btn_text = get_field('about-me_text') ? get_field('about-me_btn') : '';
$img = get_field('about-me_text') ? get_field('about-me_img') : '';

?>

<section class="about-me" style="background-image: url(<?php echo KURSTHEME_THEME_URI.'/assets/img/bck1.png'; ?>);">
    <div class="container">
        <div class="about-me__body">
            <div class="about-me__text">
                <div class="about-me__info">
                    <p>
                        <?php echo $main_text; ?>
                    </p>
                    <div class="about-me__img">
                        <img src="<?php echo KURSTHEME_THEME_URI.'/assets/img/k.png'?>" alt="" class="about-me__img--above">
                        <img src="<?php echo $img; ?>" alt="">
                    </div>
                </div>
                <div class="about-me__btn">
                    <button><?php echo $btn_text; ?></button>
                </div>
            </div>

        </div>
    </div>
</section>