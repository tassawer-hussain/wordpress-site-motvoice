<!doctype html >
<!--[if IE 8]>    <html class="ie8" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
<head>
    <title><?php wp_title('|', true, 'right'); ?></title>
    <meta charset="<?php bloginfo( 'charset' );?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php
    wp_head(); /** we hook up in wp_booster @see td_wp_booster_functions::hook_wp_head */
    ?>
</head>

<body <?php body_class() ?> itemscope="itemscope" itemtype="<?php echo td_global::$http_or_https?>://schema.org/WebPage">
<?php do_action('td_wp_body_open') ?>

<?php /* scroll to top */
    if ( td_util::get_option('tds_to_top') != 'hide' ) {
        $td_to_top_hide_on_mob_class = '';
        if ( td_util::get_option('tds_to_top_on_mobile') !== 'show' ) {
            $td_to_top_hide_on_mob_class = ' td-hide-scroll-up-on-mob';
        }

        $td_to_top_style = td_util::get_option('tds_to_top_style');
        $td_to_top_style = !empty($td_to_top_style) ? $td_to_top_style : 'style1';

        $to_top_buffy = '<div class="td-scroll-up' . $td_to_top_hide_on_mob_class . '" data-style="' . $td_to_top_style . '">';
            switch ( $td_to_top_style ) {
                case 'style1':
                    $to_top_buffy .= '<i class="td-icon-menu-up"></i>';
                    break;

                case 'style2':
                    $to_top_buffy .= '<div class="td-scroll-up-tooltip">';
                        $to_top_buffy .= '<span class="td-scroll-up-tt-txt">back to top</span>';
                        $to_top_buffy .= '<svg class="td-scroll-up-tt-arrow" xmlns="http://www.w3.org/2000/svg" width="19" height="5.339" viewBox="0 0 19 5.339"><path id="Path_1" data-name="Path 1" d="M57.778,5.982a8.963,8.963,0,0,0,1.97-.11,4.2,4.2,0,0,0,1.188-.478,8.966,8.966,0,0,0,1.5-1.286l1.156-1.116c1.359-1.3,2.038-1.956,2.81-2.19a3.358,3.358,0,0,1,2.076.041c.761.265,1.41.941,2.717,2.3l.741.772A9,9,0,0,0,73.46,5.332,4.2,4.2,0,0,0,74.7,5.86a9,9,0,0,0,2.079.122Z" transform="translate(76.778 5.997) rotate(180)" fill="%231a1a1a" fill-rule="evenodd"/></svg>';
                    $to_top_buffy .= '</div>';

                    $to_top_buffy .= '<svg class="td-scroll-up-arrow" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24"><path d="M17.71,11.29l-5-5a1,1,0,0,0-.33-.21,1,1,0,0,0-.76,0,1,1,0,0,0-.33.21l-5,5a1,1,0,0,0,1.42,1.42L11,9.41V17a1,1,0,0,0,2,0V9.41l3.29,3.3a1,1,0,0,0,1.42,0A1,1,0,0,0,17.71,11.29Z"/></svg>';
                    $to_top_buffy .= '<svg class="td-scroll-up-progress-circle" width="100%" height="100%" viewBox="-1 -1 102 102"><path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/></svg>';

                    break;
            }
            
        $to_top_buffy .= '</div>';

        echo $to_top_buffy;

        // load js
        td_resources_load::render_script( TDC_SCRIPTS_URL . '/tdToTop.js' . TDC_SCRIPTS_VER, 'tdToTop-js', '', 'footer');
    } ?>

    <?php
    if ( td_util::get_option('tds_hide_mobile_menu') != 'hide' ) {
        load_template( TDC_PATH_LEGACY . '/parts/menu-mobile.php', true);
    }
    if ( td_util::get_option('tds_hide_mobile_search') != 'hide' ) {
        load_template( TDC_PATH_LEGACY . '/parts/search.php', true);
    }
    ?>


    <div id="td-outer-wrap" class="td-theme-wrap">
    <?php //this is closing in the footer.php file ?>

        <?php

        $tdb_template_type = td_util::get_tdb_template_type();
        $hide_header = $tdb_template_type == 'footer' || $tdb_template_type == 'module';

        if ( td_util::tdc_is_live_editor_iframe() || ( ! td_util::is_template_header() && ! td_util::is_no_header() ) ) {

            $hide_class = '';
            if ( td_util::is_template_header() || td_util::is_no_header() || $hide_header ) {
                $hide_class = 'tdc-zone-invisible';
            }

            ?>

            <div class="tdc-header-wrap <?php echo esc_attr( $hide_class ) ?>">

            <?php
            /*
             * loads the header template set in Theme Panel -> Header area
             * the template files are located in ../parts/header
             */
                td_api_header_style::show_header();
            ?>

            </div>

            <?php
        }

        if ( td_util::tdc_is_live_editor_iframe() || td_util::is_template_header() ) {

            $tdc_header_template_content = td_util::get_header_template_content();

            $hide_class = '';

            ?>
            <div class="td-header-template-wrap" style="position: relative<?php echo $hide_header ? ';display:none' : '' ?>">
                <?php

                if ( empty( $tdc_header_template_content['tdc_header_mobile'] ) ) {
                    $shortcode = '[tdc_zone type="tdc_header_mobile"][vc_row][vc_column][/vc_column][/vc_row][/tdc_zone]';
                    $hide_class = 'tdc-zone-invisible';
                } else {
                    $shortcode = $tdc_header_template_content['tdc_header_mobile'];
                }

                ?>
                    <div class="td-header-mobile-wrap <?php echo esc_attr( $hide_class ) ?>">
                        <?php echo do_shortcode( $shortcode ) ?>
                    </div>
                <?php

                if ( empty( $tdc_header_template_content['tdc_header_mobile_sticky'] ) || ( ! td_util::tdc_is_live_editor_iframe() && isset( $tdc_header_template_content['tdc_is_mobile_header_sticky'] ) && false === $tdc_header_template_content['tdc_is_mobile_header_sticky'] )) {
                    $shortcode = '[tdc_zone type="tdc_header_mobile_sticky"][vc_row][vc_column][/vc_column][/vc_row][/tdc_zone]';
                } else {
                    $shortcode = $tdc_header_template_content['tdc_header_mobile_sticky'];
                }

                if ( td_util::tdc_is_live_editor_iframe() || ( isset( $tdc_header_template_content['tdc_is_mobile_header_sticky'] ) && true === $tdc_header_template_content['tdc_is_mobile_header_sticky'] ) ) { ?>

                    <div class="td-header-mobile-sticky-wrap tdc-zone-sticky-invisible tdc-zone-sticky-inactive" style="display: none">
                        <?php echo do_shortcode( $shortcode ) ?>
                    </div>

                <?php }

                $hide_class = '';

                if ( empty( $tdc_header_template_content['tdc_header_desktop'] ) ) {
                    $shortcode = '[tdc_zone type="tdc_header_desktop"][vc_row][vc_column][/vc_column][/vc_row][/tdc_zone]';
                    $hide_class = 'tdc-zone-invisible';
                } else {
                    $shortcode = $tdc_header_template_content['tdc_header_desktop'];
                }

                ?>

                    <div class="td-header-desktop-wrap <?php echo esc_attr( $hide_class ) ?>">
                        <?php echo do_shortcode( $shortcode ) ?>
                    </div>
                <?php

                if ( empty( $tdc_header_template_content['tdc_header_desktop_sticky'] ) || ( ! td_util::tdc_is_live_editor_iframe() && isset( $tdc_header_template_content['tdc_is_header_sticky'] ) && false === $tdc_header_template_content['tdc_is_header_sticky'] ) ) {
                    $shortcode = '[tdc_zone type="tdc_header_desktop_sticky"][vc_row][vc_column][/vc_column][/vc_row][/tdc_zone]';
                } else {
                    $shortcode = $tdc_header_template_content['tdc_header_desktop_sticky'];
                }

                if ( td_util::tdc_is_live_editor_iframe() || ( isset( $tdc_header_template_content['tdc_is_header_sticky'] ) && true === $tdc_header_template_content['tdc_is_header_sticky'] ) ) { ?>

                    <div class="td-header-desktop-sticky-wrap tdc-zone-sticky-invisible tdc-zone-sticky-inactive" style="display: none">
                        <?php echo do_shortcode( $shortcode ) ?>
                    </div>

                <?php } ?>
            </div>
            <?php

        }

        ?>

<?php

do_action('td_wp_booster_after_header'); //used by unique articles
