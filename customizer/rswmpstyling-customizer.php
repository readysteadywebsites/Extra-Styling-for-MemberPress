<?php
/**
 * rswmpstyling Theme Customizer.
 *
 * @package RSW_MP_Styling
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function rswmpstyling_customize_register($wp_customize)
{
    /**
     * Customizer Slider controls
     */
    if (class_exists('WP_Customize_Control')) {
        require_once dirname(__FILE__) . '/inc/class-customizer-range-value-control/class-customizer-range-value-control.php';
    }

    // Font size array
    $pixel_size = array(
        '_' => '0px',
        '1' => '1px',
        '2' => '2px',
        '3' => '3px',
        '4' => '4px',
        '5' => '5px',
        '6' => '6px',
        '7' => '7px',
        '8' => '8px',
        '9' => '9px',
        '10' => '10px',
        '11' => '11px',
        '12' => '12px',
        '13' => '13px',
        '14' => '14px',
        '15' => '15px',
        '16' => '16px',
        '17' => '17px',
        '18' => '18px',
        '19' => '19px',
        '20' => '20px',
        '21' => '21px',
        '22' => '22px',
        '23' => '23px',
        '24' => '24px',
        '25' => '25px',
        '26' => '26px',
        '27' => '27px',
        '28' => '28px',
        '29' => '29px',
        '30' => '30px',
        '31' => '31px',
        '32' => '32px',
        '33' => '33px',
        '34' => '34px',
        '35' => '35px',
        '36' => '36px',
        '37' => '37px',
        '38' => '38px',
        '39' => '39px',
        '40' => '40px',
        '41' => '41px',
        '42' => '42px',
        '43' => '43px',
        '44' => '44px',
        '45' => '45px',
        '46' => '46px',
        '47' => '47px',
        '48' => '48px',
        '49' => '49px',
        '50' => '50px',
        '51' => '51px',
        '52' => '52px',
        '53' => '53px',
        '54' => '54px',
        '55' => '55px',
        '56' => '56px',
        '57' => '57px',
        '58' => '58px',
        '59' => '59px',
        '60' => '60px',
        '61' => '61px',
        '62' => '62px',
        '63' => '63px',
        '64' => '64px',
        '65' => '65px',
        '66' => '66px',
        '67' => '67px',
        '68' => '68px',
        '69' => '69px',
        '70' => '70px',
        '71' => '71px',
        '72' => '72px',
        '73' => '73px',
        '74' => '74px',
        '75' => '75px'
    );

    // Extend Functionality of Customizer...
    class rswmpstyling_Text_Control_Generic extends WP_Customize_Control
    {
        public $type = 'text_control';
        public function render_content()
        {
            $allowed_html      = array(
                'a' => array(
                    'href' => array(),
                    'title' => array(),
                    'target' => array()
                ),
                'p' => array(),
                'br' => array(),
                'em' => array(),
                'span' => array(),
                'strong' => array()
            );
            $allowed_protocols = array();
            ?>
                       <label>
                                <span class="customize-control-title"><?php
            echo esc_html($this->label);
            ?></span>
                                <textarea rows="9" style="width:100%;" <?php
            $this->link();
            ?>><?php
            echo wp_kses($this->value(), $allowed_html, $allowed_protocols);
            ?></textarea>
                                    </label>
                            <?php

        }
    }


    // MemberPress Settings
    $wp_customize->add_panel('rswmpstyling_memberpress_styling_panel', array(
        'priority' => 25,
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'title' => __('MemberPress - Extra Styling', 'rswmpstyling'),

    ));

    // Buttons
    $wp_customize->add_section('rswmpstyling_memberpress_styling', array(
        'priority' => 1,
        'title' => __('Buttons', 'rswmpstyling'),
        'description' => __('Buttons across all MemberPress pages (Login, Register etc.)', 'rswmpstyling'),
        'panel' => 'rswmpstyling_memberpress_styling_panel'
    ));


    $wp_customize->add_setting('rswmpstyling_memberpress_styling_button_bg_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'rswmpstyling_memberpress_styling_button_bg_color', array(
        'label' => esc_html__('Background Colour', 'rswmpstyling'),
        'section' => 'rswmpstyling_memberpress_styling',
        'priority' => 1
    )));

    $wp_customize->add_setting('rswmpstyling_memberpress_styling_button_bg_hover_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'rswmpstyling_memberpress_styling_button_bg_hover_color', array(
        'label' => esc_html__('Background Hover Colour', 'rswmpstyling'),
        'section' => 'rswmpstyling_memberpress_styling',
        'priority' => 2
    )));

    $wp_customize->add_setting('rswmpstyling_memberpress_styling_button_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'rswmpstyling_memberpress_styling_button_color', array(
        'label' => esc_html__('Text Colour', 'rswmpstyling'),
        'section' => 'rswmpstyling_memberpress_styling',
        'priority' => 3
    )));

    $wp_customize->add_setting('rswmpstyling_memberpress_styling_button_hover_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'rswmpstyling_memberpress_styling_button_hover_color', array(
        'label' => esc_html__('Text Colour Hover', 'rswmpstyling'),
        'section' => 'rswmpstyling_memberpress_styling',
        'priority' => 4
    )));


    $wp_customize->add_setting('rswmpstyling_memberpress_styling_button_border_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'rswmpstyling_memberpress_styling_button_border_color', array(
        'label' => esc_html__('Border Colour', 'rswmpstyling'),
        'section' => 'rswmpstyling_memberpress_styling',
        'priority' => 5
    )));

    $wp_customize->add_setting('rswmpstyling_memberpress_styling_button_border_hover_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'rswmpstyling_memberpress_styling_button_border_hover_color', array(
        'label' => esc_html__('Border Hover Colour', 'rswmpstyling'),
        'section' => 'rswmpstyling_memberpress_styling',
        'priority' => 6
    )));


    $wp_customize->add_setting('rswmpstyling_memberpress_styling_button_border_width', array(
        'default' => '0',
        'sanitize_callback' => 'esc_html'
    ));

    $wp_customize->add_control(new Customizer_Range_Value_Control($wp_customize, 'rswmpstyling_memberpress_styling_button_border_width', array(
        'section' => 'rswmpstyling_memberpress_styling',
        'label' => esc_html__('Border Width', 'rswmpstyling'),
        'type' => 'range-value',
        'input_attrs' => array(
            'max' => 20,
            'step' => 1,
            'suffix' => 'px' //optional suffix
        ),
        'priority' => 7
    )));

    $wp_customize->add_setting('rswmpstyling_memberpress_styling_button_border_radius', array(
        'default' => '0',
        'sanitize_callback' => 'esc_html'
    ));


    $wp_customize->add_control(new Customizer_Range_Value_Control($wp_customize, 'rswmpstyling_memberpress_styling_button_border_radius', array(
        'section' => 'rswmpstyling_memberpress_styling',
        'label' => esc_html__('Border Radius', 'rswmpstyling'),
        'type' => 'range-value',
        'input_attrs' => array(
            'min' => 0,
            'max' => 100,
            'step' => 1,
            'suffix' => 'px' //optional suffix
        ),
        'priority' => 7
    )));

    $wp_customize->add_setting('rswmpstyling_memberpress_styling_button_padding_top_bottom', array(
        'default' => '5',
        'sanitize_callback' => 'esc_html'
    ));

    $wp_customize->add_control(new Customizer_Range_Value_Control($wp_customize, 'rswmpstyling_memberpress_styling_button_padding_top_bottom', array(
        'section' => 'rswmpstyling_memberpress_styling',
        'label' => esc_html__('Padding Top &amp; Bottom', 'rswmpstyling'),
        'type' => 'range-value',
        'input_attrs' => array(
            'min' => 0,
            'max' => 100,
            'step' => 1,
            'suffix' => 'px' //optional suffix
        ),
        'priority' => 8
    )));


    $wp_customize->add_setting('rswmpstyling_memberpress_styling_button_padding_right_left', array(
        'default' => '15',
        'sanitize_callback' => 'esc_html'
    ));

    $wp_customize->add_control(new Customizer_Range_Value_Control($wp_customize, 'rswmpstyling_memberpress_styling_button_padding_right_left', array(
        'section' => 'rswmpstyling_memberpress_styling',
        'label' => esc_html__('Padding Left &amp; Right', 'rswmpstyling'),
        'type' => 'range-value',
        'input_attrs' => array(
            'min' => 0,
            'max' => 100,
            'step' => 1,
            'suffix' => 'px' //optional suffix
        ),
        'priority' => 9
    )));

    $wp_customize->add_setting('rswmpstyling_memberpress_styling_button_letter_spacing', array(
        'default' => '0',
        'sanitize_callback' => 'esc_html'
    ));

    $wp_customize->add_control(new Customizer_Range_Value_Control($wp_customize, 'rswmpstyling_memberpress_styling_button_letter_spacing', array(
        'section' => 'rswmpstyling_memberpress_styling',
        'label' => esc_html__('Letter Spacing', 'rswmpstyling'),
        'type' => 'range-value',
        'input_attrs' => array(
            'min' => 0,
            'max' => 20,
            'step' => 1,
            'suffix' => 'px' //optional suffix
        ),
        'priority' => 10
    )));



    $wp_customize->add_setting('rswmpstyling_memberpress_styling_button_font_size_mobile', array(
        'default' => '16',
        'sanitize_callback' => 'esc_html'
    ));

    $wp_customize->add_control(new Customizer_Range_Value_Control($wp_customize, 'rswmpstyling_memberpress_styling_button_font_size_mobile', array(
        'section' => 'rswmpstyling_memberpress_styling',
        'label' => esc_html__('Font Size: Mobile', 'rswmpstyling'),
        'type' => 'range-value',
        'input_attrs' => array(
            'min' => 0,
            'max' => 100,
            'step' => 1,
            'suffix' => 'px' //optional suffix
        ),
        'priority' => 11
    )));



    $wp_customize->add_setting('rswmpstyling_memberpress_styling_button_font_size_tablet', array(
        'default' => '20',
        'sanitize_callback' => 'esc_html'
    ));

    $wp_customize->add_control(new Customizer_Range_Value_Control($wp_customize, 'rswmpstyling_memberpress_styling_button_font_size_tablet', array(
        'section' => 'rswmpstyling_memberpress_styling',
        'label' => esc_html__('Font Size: Tablet', 'rswmpstyling'),
        'type' => 'range-value',
        'input_attrs' => array(
            'min' => 0,
            'max' => 100,
            'step' => 1,
            'suffix' => 'px' //optional suffix
        ),
        'priority' => 12
    )));

    $wp_customize->add_setting('rswmpstyling_memberpress_styling_button_font_size_desktop', array(
        'default' => '24',
        'sanitize_callback' => 'esc_html'
    ));

    $wp_customize->add_control(new Customizer_Range_Value_Control($wp_customize, 'rswmpstyling_memberpress_styling_button_font_size_desktop', array(
        'section' => 'rswmpstyling_memberpress_styling',
        'label' => esc_html__('Font Size: Desktop', 'rswmpstyling'),
        'type' => 'range-value',
        'input_attrs' => array(
            'min' => 0,
            'max' => 100,
            'step' => 1,
            'suffix' => 'px' //optional suffix
        ),
        'priority' => 13
    )));



    $wp_customize->add_setting('rswmpstyling_memberpress_styling_button_uppercase', array(
        'default' => '',
        'sanitize_callback' => 'esc_html'
    ));

    $wp_customize->add_control(
                      'rswmpstyling_memberpress_styling_button_uppercase',
                      array(
                          'section'   => 'rswmpstyling_memberpress_styling',
                          'label'     => esc_html__('Make Button Text Uppercase', 'rswmpstyling'),
                          'type'      => 'checkbox',
                          'priority' => 14
                      )
                  );

    $wp_customize->add_setting('rswmpstyling_memberpress_styling_button_full_width', array(
        'default' => '',
        'sanitize_callback' => 'esc_html'
    ));

    $wp_customize->add_control(
                      'rswmpstyling_memberpress_styling_button_full_width',
                      array(
                          'section'   => 'rswmpstyling_memberpress_styling',
                          'label'     => esc_html__('Make Button Full Width', 'rswmpstyling'),
                          'type'      => 'checkbox',
                          'priority' => 15
                      )
                  );

    $wp_customize->add_setting('rswmpstyling_memberpress_styling_button_center', array(
        'default' => '',
        'sanitize_callback' => 'esc_html'
    ));

    $wp_customize->add_control(
                      'rswmpstyling_memberpress_styling_button_center',
                      array(
                          'section'   => 'rswmpstyling_memberpress_styling',
                          'label'     => esc_html__('Make Button Centered', 'rswmpstyling'),
                          'type'      => 'checkbox',
                          'priority' => 16
                      )
                  );


        // COUPON BUTTON ONLY
        $wp_customize->add_section('rswmpstyling_memberpress_styling_coupon', array(
            'priority' => 1,
            'title' => __('Coupon Button Only', 'rswmpstyling'),
            'description' => __('Just the coupon button when registering/joining.', 'rswmpstyling'),
            'panel' => 'rswmpstyling_memberpress_styling_panel'
        ));


    $wp_customize->add_setting('rswmpstyling_memberpress_styling_coupon_bg_color', array(
            'default' => '',
            'sanitize_callback' => 'sanitize_hex_color'
        ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'rswmpstyling_memberpress_styling_coupon_bg_color', array(
            'label' => esc_html__('Background Colour', 'rswmpstyling'),
            'section' => 'rswmpstyling_memberpress_styling_coupon',
            'priority' => 1
        )));

    $wp_customize->add_setting('rswmpstyling_memberpress_styling_coupon_bg_hover_color', array(
            'default' => '',
            'sanitize_callback' => 'sanitize_hex_color'
        ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'rswmpstyling_memberpress_styling_coupon_bg_hover_color', array(
            'label' => esc_html__('Background Hover Colour', 'rswmpstyling'),
            'section' => 'rswmpstyling_memberpress_styling_coupon',
            'priority' => 2
        )));

    $wp_customize->add_setting('rswmpstyling_memberpress_styling_coupon_color', array(
            'default' => '',
            'sanitize_callback' => 'sanitize_hex_color'
        ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'rswmpstyling_memberpress_styling_coupon_color', array(
            'label' => esc_html__('Text Colour', 'rswmpstyling'),
            'section' => 'rswmpstyling_memberpress_styling_coupon',
            'priority' => 3
        )));

    $wp_customize->add_setting('rswmpstyling_memberpress_styling_coupon_hover_color', array(
            'default' => '',
            'sanitize_callback' => 'sanitize_hex_color'
        ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'rswmpstyling_memberpress_styling_coupon_hover_color', array(
            'label' => esc_html__('Text Colour Hover', 'rswmpstyling'),
            'section' => 'rswmpstyling_memberpress_styling_coupon',
            'priority' => 4
        )));


    $wp_customize->add_setting('rswmpstyling_memberpress_styling_coupon_border_color', array(
            'default' => '',
            'sanitize_callback' => 'sanitize_hex_color'
        ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'rswmpstyling_memberpress_styling_coupon_border_color', array(
            'label' => esc_html__('Border Colour', 'rswmpstyling'),
            'section' => 'rswmpstyling_memberpress_styling_coupon',
            'priority' => 5
        )));

    $wp_customize->add_setting('rswmpstyling_memberpress_styling_coupon_border_hover_color', array(
            'default' => '',
            'sanitize_callback' => 'sanitize_hex_color'
        ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'rswmpstyling_memberpress_styling_coupon_border_hover_color', array(
            'label' => esc_html__('Border Hover Colour', 'rswmpstyling'),
            'section' => 'rswmpstyling_memberpress_styling_coupon',
            'priority' => 6
        )));


    $wp_customize->add_setting('rswmpstyling_memberpress_styling_coupon_border_width', array(
            'default' => '0',
            'sanitize_callback' => 'esc_html'
        ));

    $wp_customize->add_control(new Customizer_Range_Value_Control($wp_customize, 'rswmpstyling_memberpress_styling_coupon_border_width', array(
            'section' => 'rswmpstyling_memberpress_styling_coupon',
            'label' => esc_html__('Border Width', 'rswmpstyling'),
            'type' => 'range-value',
            'input_attrs' => array(
                'max' => 20,
                'step' => 1,
                'suffix' => 'px' //optional suffix
            ),
            'priority' => 7
        )));

    $wp_customize->add_setting('rswmpstyling_memberpress_styling_coupon_border_radius', array(
            'default' => '0',
            'sanitize_callback' => 'esc_html'
        ));


    $wp_customize->add_control(new Customizer_Range_Value_Control($wp_customize, 'rswmpstyling_memberpress_styling_coupon_border_radius', array(
            'section' => 'rswmpstyling_memberpress_styling_coupon',
            'label' => esc_html__('Border Radius', 'rswmpstyling'),
            'type' => 'range-value',
            'input_attrs' => array(
                'min' => 0,
                'max' => 100,
                'step' => 1,
                'suffix' => 'px' //optional suffix
            ),
            'priority' => 7
        )));

    $wp_customize->add_setting('rswmpstyling_memberpress_styling_coupon_padding_top_bottom', array(
            'default' => '0',
            'sanitize_callback' => 'esc_html'
        ));

    $wp_customize->add_control(new Customizer_Range_Value_Control($wp_customize, 'rswmpstyling_memberpress_styling_coupon_padding_top_bottom', array(
            'section' => 'rswmpstyling_memberpress_styling_coupon',
            'label' => esc_html__('Padding Top &amp; Bottom', 'rswmpstyling'),
            'type' => 'range-value',
            'input_attrs' => array(
                'min' => 0,
                'max' => 100,
                'step' => 1,
                'suffix' => 'px' //optional suffix
            ),
            'priority' => 8
        )));


    $wp_customize->add_setting('rswmpstyling_memberpress_styling_coupon_padding_right_left', array(
            'default' => '0',
            'sanitize_callback' => 'esc_html'
        ));

    $wp_customize->add_control(new Customizer_Range_Value_Control($wp_customize, 'rswmpstyling_memberpress_styling_coupon_padding_right_left', array(
            'section' => 'rswmpstyling_memberpress_styling_coupon',
            'label' => esc_html__('Padding Left &amp; Right', 'rswmpstyling'),
            'type' => 'range-value',
            'input_attrs' => array(
                'min' => 0,
                'max' => 100,
                'step' => 1,
                'suffix' => 'px' //optional suffix
            ),
            'priority' => 9
        )));

    $wp_customize->add_setting('rswmpstyling_memberpress_styling_coupon_letter_spacing', array(
            'default' => '0',
            'sanitize_callback' => 'esc_html'
        ));

    $wp_customize->add_control(new Customizer_Range_Value_Control($wp_customize, 'rswmpstyling_memberpress_styling_coupon_letter_spacing', array(
            'section' => 'rswmpstyling_memberpress_styling_coupon',
            'label' => esc_html__('Letter Spacing', 'rswmpstyling'),
            'type' => 'range-value',
            'input_attrs' => array(
                'min' => 0,
                'max' => 20,
                'step' => 1,
                'suffix' => 'px' //optional suffix
            ),
            'priority' => 10
        )));


    $wp_customize->add_setting('rswmpstyling_memberpress_styling_coupon_button_width', array(
            'default' => '250',
            'sanitize_callback' => 'esc_html'
        ));

    $wp_customize->add_control(new Customizer_Range_Value_Control($wp_customize, 'rswmpstyling_memberpress_styling_coupon_button_width', array(
            'section' => 'rswmpstyling_memberpress_styling_coupon',
            'label' => esc_html__('Max Button Width', 'rswmpstyling'),
            'type' => 'range-value',
            'input_attrs' => array(
                'min' => 0,
                'max' => 500,
                'step' => 10,
                'suffix' => 'px' //optional suffix
            ),
            'priority' => 10
        )));

    $wp_customize->add_setting('rswmpstyling_memberpress_styling_coupon_font_size_mobile', array(
            'default' => '14',
            'sanitize_callback' => 'esc_html'
        ));

    $wp_customize->add_control(new Customizer_Range_Value_Control($wp_customize, 'rswmpstyling_memberpress_styling_coupon_font_size_mobile', array(
            'section' => 'rswmpstyling_memberpress_styling_coupon',
            'label' => esc_html__('Font Size: Mobile', 'rswmpstyling'),
            'type' => 'range-value',
            'input_attrs' => array(
                'min' => 0,
                'max' => 100,
                'step' => 1,
                'suffix' => 'px' //optional suffix
            ),
            'priority' => 11
        )));

    $wp_customize->add_setting('rswmpstyling_memberpress_styling_coupon_font_size_tablet', array(
            'default' => '16',
            'sanitize_callback' => 'esc_html'
        ));

    $wp_customize->add_control(new Customizer_Range_Value_Control($wp_customize, 'rswmpstyling_memberpress_styling_coupon_font_size_tablet', array(
            'section' => 'rswmpstyling_memberpress_styling_coupon',
            'label' => esc_html__('Font Size: Tablet', 'rswmpstyling'),
            'type' => 'range-value',
            'input_attrs' => array(
                'min' => 0,
                'max' => 100,
                'step' => 1,
                'suffix' => 'px' //optional suffix
            ),
            'priority' => 12
        )));

    $wp_customize->add_setting('rswmpstyling_memberpress_styling_coupon_font_size_desktop', array(
            'default' => '18',
            'sanitize_callback' => 'esc_html'
        ));

    $wp_customize->add_control(new Customizer_Range_Value_Control($wp_customize, 'rswmpstyling_memberpress_styling_coupon_font_size_desktop', array(
            'section' => 'rswmpstyling_memberpress_styling_coupon',
            'label' => esc_html__('Font Size: Desktop', 'rswmpstyling'),
            'type' => 'range-value',
            'input_attrs' => array(
                'min' => 0,
                'max' => 100,
                'step' => 1,
                'suffix' => 'px' //optional suffix
            ),
            'priority' => 13
        )));



    $wp_customize->add_setting('rswmpstyling_memberpress_styling_coupon_uppercase', array(
            'default' => '',
            'sanitize_callback' => 'esc_html'
        ));

    $wp_customize->add_control(
                          'rswmpstyling_memberpress_styling_coupon_uppercase',
                          array(
                              'section'   => 'rswmpstyling_memberpress_styling_coupon',
                              'label'     => esc_html__('Make Button Text Uppercase', 'rswmpstyling'),
                              'type'      => 'checkbox',
                              'priority' => 14
                          )
                      );

    $wp_customize->add_setting('rswmpstyling_memberpress_styling_coupon_full_width', array(
            'default' => '',
            'sanitize_callback' => 'esc_html'
        ));

    $wp_customize->add_control(
                          'rswmpstyling_memberpress_styling_coupon_full_width',
                          array(
                              'section'   => 'rswmpstyling_memberpress_styling_coupon',
                              'label'     => esc_html__('Make Button Full Width', 'rswmpstyling'),
                              'type'      => 'checkbox',
                              'priority' => 15
                          )
                      );

    $wp_customize->add_setting('rswmpstyling_memberpress_styling_coupon_center', array(
            'default' => '',
            'sanitize_callback' => 'esc_html'
        ));

    $wp_customize->add_control(
                          'rswmpstyling_memberpress_styling_coupon_center',
                          array(
                              'section'   => 'rswmpstyling_memberpress_styling_coupon',
                              'label'     => esc_html__('Make Button Centered', 'rswmpstyling'),
                              'type'      => 'checkbox',
                              'priority' => 16
                          )
                      );


        // PRICE AND TERMS BOX

        $wp_customize->add_section('rswmpstyling_memberpress_styling_price', array(
                'priority' => 1,
                'title' => __('Price &amp; Terms Box', 'rswmpstyling'),
                'description' => __('Terms and Price box on Register pages.', 'rswmpstyling'),
                'panel' => 'rswmpstyling_memberpress_styling_panel'
            ));


    $wp_customize->add_setting('rswmpstyling_memberpress_styling_price_box_bg', array(
                'default' => '',
                'sanitize_callback' => 'sanitize_hex_color'
            ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'rswmpstyling_memberpress_styling_price_box_bg', array(
                'label' => esc_html__('Background Colour', 'rswmpstyling'),
                'section' => 'rswmpstyling_memberpress_styling_price',
                'priority' => 1
            )));

    $wp_customize->add_setting('rswmpstyling_memberpress_styling_price_box_color', array(
                'default' => '',
                'sanitize_callback' => 'sanitize_hex_color'
            ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'rswmpstyling_memberpress_styling_price_box_color', array(
                'label' => esc_html__('Text Colour', 'rswmpstyling'),
                'section' => 'rswmpstyling_memberpress_styling_price',
                'priority' => 2
            )));


    $wp_customize->add_setting('rswmpstyling_memberpress_styling_price_box_border', array(
                'default' => '',
                'sanitize_callback' => 'sanitize_hex_color'
            ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'rswmpstyling_memberpress_styling_price_box_border', array(
                'label' => esc_html__('Border Colour', 'rswmpstyling'),
                'section' => 'rswmpstyling_memberpress_styling_price',
                'priority' => 3
            )));

    $wp_customize->add_setting('rswmpstyling_memberpress_styling_price_box_border_width', array(
        'default' => '0',
        'sanitize_callback' => 'esc_html'
    ));

    $wp_customize->add_control(new Customizer_Range_Value_Control($wp_customize, 'rswmpstyling_memberpress_styling_price_box_border_width', array(
        'section' => 'rswmpstyling_memberpress_styling_price',
        'label' => esc_html__('Border Width', 'rswmpstyling'),
        'type' => 'range-value',
        'input_attrs' => array(
            'max' => 20,
            'step' => 1,
            'suffix' => 'px' //optional suffix
        ),
        'priority' => 4
    )));
    $wp_customize->add_setting('rswmpstyling_memberpress_styling_price_box_centered', array(
        'default' => '',
        'sanitize_callback' => 'esc_html'
    ));

    $wp_customize->add_control(
                      'rswmpstyling_memberpress_styling_price_box_centered',
                      array(
                          'section'   => 'rswmpstyling_memberpress_styling_price',
                          'label'     => esc_html__('Make Text Centered', 'rswmpstyling'),
                          'type'      => 'checkbox',
                          'priority' => 5
                      )
                  );

      // Account Tabs

      $wp_customize->add_section('rswmpstyling_memberpress_styling_account_tabs', array(
              'priority' => 1,
              'title' => __('Account Tabs', 'rswmpstyling'),
              'description' => __('Switch on some basic styling for MemberPress account tabs.', 'rswmpstyling'),
              'panel' => 'rswmpstyling_memberpress_styling_panel'
          ));


  $wp_customize->add_setting('rswmpstyling_memberpress_styling_tabs', array(
          'default' => '',
          'sanitize_callback' => 'esc_html'
      ));

  $wp_customize->add_control(
                        'rswmpstyling_memberpress_styling_tabs',
                        array(
                            'section'   => 'rswmpstyling_memberpress_styling_account_tabs',
                            'label'     => esc_html__('Style account links as tabs', 'rswmpstyling'),
                            'type'      => 'checkbox',
                            'priority' => 1
                        )
                    );

}
add_action('customize_register', 'rswmpstyling_customize_register');
