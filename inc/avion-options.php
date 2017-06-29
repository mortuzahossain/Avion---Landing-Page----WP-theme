<?php
    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    $opt_name = "avion";

    $theme = wp_get_theme();
    $args = array(
        'opt_name'             => $opt_name,
        'display_name'         => $theme->get( 'Name' ),
        'display_version'      => $theme->get( 'Version' ),
        'menu_type'            => 'menu',
        'allow_sub_menu'       => true,

        'menu_title'           => __( 'CS Options', 'redux-framework-demo' ),
        'page_title'           => __( 'CS Options', 'redux-framework-demo' ),
        'dev_mode'             => false,
        'admin_bar_priority'   => 60,
        'page_icon'            => 'icon-themes',
        'menu_icon'            => 'dashicons-exerpt-view',
        'page_priority'        => 60,
        
        'google_api_key'       => '',
        'google_update_weekly' => false,
        'async_typography'     => true,
        'admin_bar'            => true,
        'admin_bar_icon'       => 'dashicons-portfolio',
        'global_variable'      => '',
        'update_notice'        => true,
        'customizer'           => true,
        'page_parent'          => 'themes.php',
        'page_permissions'     => 'manage_options',
        'last_tab'             => '',
        'page_slug'            => '_options',
        'save_defaults'        => true,
        'default_show'         => false,
        'default_mark'         => '',
        'show_import_export'   => true,
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        'output_tag'           => true,
        'database'             => '',
        'use_cdn'              => true,

        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'light',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );


    // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
    $args['share_icons'][] = array(
        'url'   => 'https://github.com/mortuzahossain/',
        'title' => 'Get more free theme on GitHub',
        'icon'  => 'el el-github'
    );
    $args['share_icons'][] = array(
        'url'   => 'https://www.facebook.com/mdmortuza.hossain/',
        'title' => 'Be friend of mine on Facebook',
        'icon'  => 'el el-facebook'
    );

    Redux::setArgs( $opt_name, $args );

    // Logo Upload
    Redux::setSection( $opt_name, array(
        'title'            => __( 'Image Upload', 'redux-framework-demo' ),
        'id'               => 'logo',
        'icon'             => 'el el-picture',
        'fields'           => array(
            array(
                'id'       => 'favicon-img',
                'type'     => 'media', 
                'url'      => true,
                'title'    => __('Favicon Upload', 'redux-framework-demo'),
                'default'  => array(
                    'url'  =>get_template_directory_uri().'/images/favicons/favicon.ico',
                ),
            ),
            array(
                'id'       => 'logo-img',
                'type'     => 'media', 
                'url'      => true,
                'title'    => __('Logo Upload', 'redux-framework-demo'),
                'default'  => array(
                    'url'=> get_template_directory_uri().'/images/avion_logo.png',
                ),
            ),
            array(
                'id'       => 'background-img',
                'type'     => 'media', 
                'url'      => true,
                'title'    => __('Background Upload', 'redux-framework-demo'),
                'default'  => array(
                    'url'  =>get_template_directory_uri().'/images/avion_bg.jpg',
                ),
            )
        )
    ) );
    // Header
    Redux::setSection( $opt_name, array(
        'title'            => __( 'Heading Text', 'redux-framework-demo' ),
        'id'               => 'heading',
        'icon'             => 'el el-align-left',
        'fields'           => array(
            array(
                'id'        => 'heading_text',
                'type'      => 'text',
                'title'     => __( 'Heading Text', 'redux-framework-demo' ),
                'default'   => 'We will be back with new and exciting feature!'
            ),
            array(
                'id'        => 'sub_heading_text',
                'type'      => 'text',
                'title'     => __( 'Sub Heading Text', 'redux-framework-demo' ),
                'default'   => 'turpis gravida vel donec id tuarpis tellus odio magna'
            )
        )
    ) );

    // Date

        Redux::setSection( $opt_name, array(
        'title'            => __( 'Launch Time', 'redux-framework-demo' ),
        'id'               => 'lunch',
        'icon'             => 'el el-calendar',
        'fields'           => array(
            array(
                'id'          => 'lunch-date',
                'type'        => 'date',
                'title'       => __('Launch Date', 'redux-framework-demo'), 
                'placeholder' => 'Click to enter a date'
            )
        ),
    ) );

    // Subscribe
    Redux::setSection( $opt_name, array(
        'title'            => __( 'Subscribe', 'redux-framework-demo' ),
        'id'               => 'sub',
        'icon'             => 'el el-bell',
        'fields'           => array(
            array(
                'id'        => 'subscribe_link',
                'type'      => 'textarea',
                'title'    => __( 'MailChimp', 'redux-framework-demo' ),
                'desc'     => 'Paste mailchimp form action link',
                'default'   => 'http://facebook.us16.list-manage.com/subscribe/post?u=3c6471708ddac41170d516748&amp;id=0e879c373c',
                'subtitle'  => 'If you need some help to do this then please contact with <a href="http://www.facebook.com/mdmortuza.hossain/">me</a>.',
            ),
        ),
    ) );

    // social
    Redux::setSection( $opt_name, array(
        'title'            => __( 'Social Logo', 'redux-framework-demo' ),
        'id'               => 'social',
        'icon'             => 'el el-thumbs-up',
        'fields'           => array(
            array(
                'id'          => 'contact_social',
                'type'        => 'slides',
                'title'       => __('Social Links', 'redux-framework-demo'),
                'subtitle'       => __('You can get social icon name from <a href="http://fontawesome.io/icons/" target="_blank">here</a>', 'redux-framework-demo'),
                'placeholder' => array(
                    'title'           => __('Icon Name (fa-pinterest)', 'redux-framework-demo'),
                    'url'           => __('URL', 'redux-framework-demo'),
                ),
                'show' => array(
                    'title' => true,
                    'url' => true,
                ),
            ),
        )
    ) );

    // Footer
    Redux::setSection( $opt_name, array(
        'title'            => __( 'Footer Text', 'redux-framework-demo' ),
        'id'               => 'footer',
        'icon'             => 'el el-align-left',
        'fields'           => array(
            array(
                'id'        => 'footer_text',
                'type'      => 'textarea',
                'title'     => __( 'Footer Text', 'redux-framework-demo' ),
                'default'   => 'Copyright &copy; 2016 Avion by <a target="_blank" style="color:#fff;" href="https://www.behance.net/glendragon">Glen Dragon</a>',
            ),
        )
    ) );