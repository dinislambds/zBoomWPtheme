<?php

    /**
     * ReduxFramework Barebones Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    // This is your option name where all the Redux data is stored.
    $opt_name = "zboom_music";

    
    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
        'display_version'      => $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'menu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => __( 'zBoom Options', 'redux-framework-demo' ),
        'page_title'           => __( 'zBoom Options', 'redux-framework-demo' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => '',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => true,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => true,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => false,
        // Show the time the page took to load, etc
        'update_notice'        => false,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => true,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

        // OPTIONAL -> Give you extra features
        'page_priority'        => null,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => '',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => '_options',
        // Page slug used to denote the panel
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => true,
        // Shows the Import/Export panel when not used as a field.

        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => true,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
        // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!

        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

        //'compiler'             => true,

        // HINTS
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

    // ADMIN BAR LINKS -> Setup custom links in the admin bar menu as external items.
    $args['admin_bar_links'][] = array(
        'id'    => 'redux-docs',
        'href'  => '',
        'title' => __( 'Documentation', 'redux-framework-demo' ),
    );

    $args['admin_bar_links'][] = array(
        //'id'    => 'redux-support',
        'href'  => '',
        'title' => __( 'Support', 'redux-framework-demo' ),
    );

    $args['admin_bar_links'][] = array(
        'id'    => 'redux-extensions',
        'href'  => 'reduxframework.com/extensions',
        'title' => __( 'Extensions', 'redux-framework-demo' ),
    );

    // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
    $args['share_icons'][] = array(
        'url'   => '',
        'title' => '',
        'icon'  => ''
        //'img'   => '', // You can use icon OR img. IMG needs to be a full URL.
    );
    $args['share_icons'][] = array(
        'url'   => '',
        'title' => '',
        'icon'  => ''
    );
    $args['share_icons'][] = array(
        'url'   => '',
        'title' => '',
        'icon'  => ''
    );
    $args['share_icons'][] = array(
        'url'   => '',
        'title' => '',
        'icon'  => ''
    );

    // Panel Intro text -> before the form
    if ( ! isset( $args['global_variable'] ) || $args['global_variable'] !== false ) {
        if ( ! empty( $args['global_variable'] ) ) {
            $v = $args['global_variable'];
        } else {
            $v = str_replace( '-', '_', $args['opt_name'] );
        }
        $args['intro_text'] = sprintf( __( '', 'redux-framework-demo' ), $v );
    } else {
        $args['intro_text'] = __( '', 'redux-framework-demo' );
    }

    // Add content after the form.
    $args['footer_text'] = __( '', 'redux-framework-demo' );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */

    /*
     * ---> START HELP TABS
     */

    $tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => __( 'Theme Information 1', 'redux-framework-demo' ),
            'content' => __( '', 'redux-framework-demo' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => __( 'Theme Information 2', 'redux-framework-demo' ),
            'content' => __( '', 'redux-framework-demo' )
        )
    );
    Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    $content = __( '', 'redux-framework-demo' );
    Redux::setHelpSidebar( $opt_name, $content );


    /*
     * <--- END HELP TABS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */

    /*

        As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for


     */
/*
    // -> START Basic Fields
    Redux::setSection( $opt_name, array(
        'title'  => __( 'Basic Field', 'redux-framework-demo' ),
        'id'     => 'basic',
        'desc'   => __( 'Basic field with no subsections.', 'redux-framework-demo' ),
        'icon'   => 'el el-home',
        'fields' => array(
            array(
                'id'       => 'opt-text',
                'type'     => 'text',
                'title'    => __( 'Example Text', 'redux-framework-demo' ),
                'desc'     => __( 'Example description.', 'redux-framework-demo' ),
                'subtitle' => __( 'Example subtitle.', 'redux-framework-demo' ),
                'hint'     => array(
                    'content' => 'This is a <b>hint</b> tool-tip for the text field.<br/><br/>Add any HTML based text you like here.',
                )
            )
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title' => __( 'Basic Fields', 'redux-framework-demo' ),
        'id'    => 'basic',
        'desc'  => __( 'Basic fields as subsections.', 'redux-framework-demo' ),
        'icon'  => 'el el-home'
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Text', 'redux-framework-demo' ),
        'desc'       => __( 'For full documentation on this field, visit: ', 'redux-framework-demo' ) . '<a href="//docs.reduxframework.com/core/fields/text/" target="_blank">//docs.reduxframework.com/core/fields/text/</a>',
        'id'         => 'opt-text-subsection',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'text-example',
                'type'     => 'text',
                'title'    => __( 'Text Field', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle', 'redux-framework-demo' ),
                'desc'     => __( 'Field Description', 'redux-framework-demo' ),
                'default'  => 'Default Text',
            ),
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Text Area', 'redux-framework-demo' ),
        'desc'       => __( 'For full documentation on this field, visit: ', 'redux-framework-demo' ) . '<a href="//docs.reduxframework.com/core/fields/textarea/" target="_blank">//docs.reduxframework.com/core/fields/textarea/</a>',
        'id'         => 'opt-textarea-subsection',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'textarea-example',
                'type'     => 'textarea',
                'title'    => __( 'Text Area Field', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle', 'redux-framework-demo' ),
                'desc'     => __( 'Field Description', 'redux-framework-demo' ),
                'default'  => 'Default Text',
            ),
        )
    ) ); 

    */

    /*
     * <--- END SECTIONS
     */


    Redux::setSection( $opt_name, array(
        'title'         => 'Header Options',
        'id'            => 'header-pot',        
        'icon'          => 'fa fa-facebook ',       
     ) );


        Redux::setSection( $opt_name, array(
            'title'     => 'Logo Uploder',
            'id'        => 'logo_upload',
            'icon'      => 'fa fa-bandcamp',
            'subsection' => true,
            'fields'      => array(
            array(
                    'id'       => 'header_logo',
                    'type'     => 'media', 
                    'url'      => true,
                    'title'    => __('Upload your header logo'),
                    'default'  => array(
                        'url'=> get_template_directory_uri().'/images/logo.png'
                    ),
                ) )

            ) );



        Redux::setSection( $opt_name, array(
            'title'     => 'Footer Options',
            'id'        => 'footer_opt',
            'icon'      => 'fa fa-twitter',
            'subsection' => true,
            'fields'      => array(
            array(
            'id'               => 'footer-text',
            'type'             => 'editor',
            'title'            => __('Editor Text', 'redux-framework-demo'), 
            'subtitle'         => __('Subtitle text would go here.', 'redux-framework-demo'),
            'default'          => '<p>Copyright © 2013 - <a href="http://www.zerotheme.com/432/free-responsive-html5-css3-website-templates.html" target="_blank">Free Html5 Templates</a> by <a href="http://www.zerotheme.com" target="_blank">Zerotheme.com</a></p>',
            'args'   => array(
                'wpautop'       => false,
                'teeny'            => true,
                'textarea_rows'    => 10
            )
        ), )

            ) );




        Redux::setSection( $opt_name, array(
            'title'         => 'Multi Editor Aplly',
            'id'            => 'mult_edit',
            'icon'            => 'fa fa-home',
            ) );

        Redux::setSection( $opt_name, array(

            'title'          => 'Choice your Color',
            'id'             => 'color_opt',
            'subsection'          => true,
            'fields'          => array(
                array( 
                    'title'         => 'Background Color',
                    'id'              => 'bg_color',
                    'type'            => 'color',
                    'default'            => '#000',
                 )

                ),
            ) );


        Redux::setSection( $opt_name, array(

            'title'          => 'Choice Background Color',
            'id'             => 'bb_color_opt',
            'subsection'          => true,
            'fields'          => array(
                array( 
                    'title'         => 'Choice Background Color',
                    'id'              => 'sel_bg_color',
                    'type'            => 'background',
                    'default'            => array(

                        'background-color'  => '#ccc'
                        ),
                 ),

                array(
                    'title'     => 'Selct your border',
                    'id'        => 'border_sel',
                    'type'        => 'border',
                    'default'        => array(

                        'border-color'      => 'red',
                        'border-style'      => 'solid',
                        'border-top'        => '3',
                        'border-bottom'      => '2',
                        'border-right'      => '3',
                        'border-left'      => '2',
                        ),
                    ),




                array(
                    'title'     => 'Selct your option',
                    'id'        => 'select_button',
                    'type'        => 'button_set',
                    'options'        => array(

                        '1'        => 'Show',
                        '2'        => 'Hide',                        
                        ),
                    'default'       => '1'
                    ),

                



                array(
                    'title'     => 'Select your Fruit',
                    'id'        => 'select_fruit',
                    'type'        => 'checkbox',
                    'options'        => array(
                        '1'        => 'Apple',
                        '2'        => 'Benana',                        
                        '3'        => 'Orang',                        
                        '4'        => 'Mango',                        
                        '5'        => 'carrot',                        
                        ),
                    'default'       => array(

                        '1'        => '1',   
                        '3'        => '1',   

                         ),
                    ),





                array(
                    'id'        => 'sel_website_layout',
                    'type'      => 'image_select',
                    'title'      => 'Select website layout',
                    'options'     => array(

                        '1'     => array(
                            'alt'  => '1 culumn',
                            'img'  => get_template_directory_uri().'/inc/redux-framework/ReduxCore/assets/img/1c.png',
                            ),

                        '2'     => array(
                            'alt'  => '1 culumn',
                            'img'  => get_template_directory_uri().'/inc/redux-framework/ReduxCore/assets/img/1col.png',
                            ),
                        ),
                    'default'       => 2,

                    )






                ),
            ) );




        Redux::setSection( $opt_name, array( 
            'title'     => 'Select Options',
            'id'        => 'oth_opt',
            'icon'       => 'el el-youtube',
            ) );

        Redux::setSection( $opt_name, array( 
            'title'     => 'Choice Multi Options ',
            'id'        => 'oth_opt_mul',
            'icon'       => 'el el-home',
            'subsection'    => true,
            'fields'         => array(

                array(
                    'title'        => 'Gender Select',
                    'id'           => 'gender_text',
                    'type'           => 'radio',
                    'options'          => array(
                        '1'              => 'Male',
                        '2'              => 'Female',
                        /*'3'              => '',
                        '4'              => '',
                        '5'              => '',
*/
                        ),
                    'default'       => '1',
                   ),


                
        array(
            'id'        => 'opt-slider-label',
            'type'      => 'slider',
            'title'     => __('Slider Example 1', 'redux-framework-demo'),
            'subtitle'  => __('This slider displays the value as a label.', 'redux-framework-demo'),
            'desc'      => __('Slider description. Min: 1, max: 500, step: 1, default value: 250', 'redux-framework-demo'),
            "default"   => 250,
            "min"       => 1,
            "step"      => 1,
            "max"       => 500,
            'display_value' => 'label'
        ),





                array(
                    'title'        => 'Top category',
                    'id'           => 'top_cat_sel',
                    'type'         => 'select',
                    'data'         => 'category' ,
                    'default'         => '1' ,
                   ),




                array(
                    'title'        => 'Buttom category',
                    'id'           => 'buttom_cat_sel',
                    'type'         => 'select',
                    'data'         => 'category' ,
                    'default'         => '1' ,
                   ),

                array(
                    'title'        => 'Select Extra tag',
                    'id'           => 'extra_sel',
                    'type'         => 'select',
                    'data'         => 'post_type',
                    'multi'         => true ,
                   ),

                






                )
            ) );
