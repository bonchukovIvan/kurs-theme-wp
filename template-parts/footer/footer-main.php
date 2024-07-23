<footer class="m-footer">
    <div class="container">
        <div class="m-footer__body">
            <div class="m-footer__logo">
                <img src="<?php echo KURSTHEME_THEME_URI.'/assets/img/logo.svg'?>" alt="">
            </div>
            <div class="m-footer__mobile">
                <?php wp_nav_menu([
                        'menu'                 => '',
                        'container'            => 'div',
                        'container_class'      => 'm-footer__navigation',
                        'container_id'         => '',
                        'container_aria_label' => '',
                        'menu_class'           => 'm-footer__menu',
                        'menu_id'              => '',
                        'echo'                 => true,
                        'fallback_cb'          => 'wp_page_menu',
                        'before'               => '',
                        'after'                => '',
                        'link_before'          => '',
                        'link_after'           => '',
                        'items_wrap'           => '<ul id="%1$s" class="%2$s wbsmd-menu">%3$s</ul>',
                        'item_spacing'         => 'preserve',
                        'depth'                => 0,
                        'walker'               => '',
                        'theme_location'       => 'main_header_menu',
                ]); ?>
                <div class="m-footer__icons">
                    <div>
                        <img src="<?php echo KURSTHEME_THEME_URI.'/assets/img/phone-w.svg'?>" alt="">
                    </div>
                    <div>
                        <img src="<?php echo KURSTHEME_THEME_URI.'/assets/img/inst-w.svg'?>" alt="">
                    </div>
                </div>
            </div>

        </div>
        <div class="m-footer__copyright">
            <p>© Зно з історії України</p>
            <p>DESIGN: <span>MYBURGERISNOTYOURS</span></p>
        </div>
    </div>
</footer>