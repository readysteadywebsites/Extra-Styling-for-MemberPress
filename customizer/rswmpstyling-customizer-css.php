<?php
/**
 * rswmpstyling Theme Customizer CSS.
 *
 * @package rswmpstyling
 */

/**
 * Output the CSS from the customizer option
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

function rswmpstyling_customizer_css()
{
    ?>
<style type="text/css" id="rswmpstyling-inline">
    .mp-spacer {
      line-height: 0.5;
    }
<?php

    // BUTTONS
    // Colours
    $rswmpstyling_memberpress_styling_button_bg_color = get_theme_mod('rswmpstyling_memberpress_styling_button_bg_color');
    $rswmpstyling_memberpress_styling_button_bg_hover_color = get_theme_mod('rswmpstyling_memberpress_styling_button_bg_hover_color');
    $rswmpstyling_memberpress_styling_button_color = get_theme_mod('rswmpstyling_memberpress_styling_button_color');
    $rswmpstyling_memberpress_styling_button_hover_color = get_theme_mod('rswmpstyling_memberpress_styling_button_hover_color');
    $rswmpstyling_memberpress_styling_button_border_color = get_theme_mod('rswmpstyling_memberpress_styling_button_border_color');
    $rswmpstyling_memberpress_styling_button_border_hover_color= get_theme_mod('rswmpstyling_memberpress_styling_button_border_hover_color');

    // Widths
    $rswmpstyling_memberpress_styling_button_border_width = get_theme_mod('rswmpstyling_memberpress_styling_button_border_width');
    if ($rswmpstyling_memberpress_styling_button_border_width == '_') {
        $rswmpstyling_memberpress_styling_button_border_width = '0';
    }
    // Radius
    $rswmpstyling_memberpress_styling_button_border_radius = get_theme_mod('rswmpstyling_memberpress_styling_button_border_radius');
    if ($rswmpstyling_memberpress_styling_button_border_radius == '_') {
        $rswmpstyling_memberpress_styling_button_border_radius = '0';
    }
    // Font Sizes
    $rswmpstyling_memberpress_styling_button_font_size_mobile = get_theme_mod('rswmpstyling_memberpress_styling_button_font_size_mobile');
    $rswmpstyling_memberpress_styling_button_font_size_tablet = get_theme_mod('rswmpstyling_memberpress_styling_button_font_size_tablet');
    $rswmpstyling_memberpress_styling_button_font_size_desktop = get_theme_mod('rswmpstyling_memberpress_styling_button_font_size_desktop');

    // Padding
    $rswmpstyling_memberpress_styling_button_padding_top_bottom = get_theme_mod('rswmpstyling_memberpress_styling_button_padding_top_bottom');
    $rswmpstyling_memberpress_styling_button_padding_right_left = get_theme_mod('rswmpstyling_memberpress_styling_button_padding_right_left');

    // Centered and Full Width
    $rswmpstyling_memberpress_styling_button_full_width = get_theme_mod('rswmpstyling_memberpress_styling_button_full_width');
    $rswmpstyling_memberpress_styling_button_center = get_theme_mod('rswmpstyling_memberpress_styling_button_center');
    // Uppercase
    $rswmpstyling_memberpress_styling_button_uppercase = get_theme_mod('rswmpstyling_memberpress_styling_button_uppercase');

    // Letter spacing
    $rswmpstyling_memberpress_styling_button_letter_spacing = get_theme_mod('rswmpstyling_memberpress_styling_button_letter_spacing');

    // Set up a catch to check settings
    $rswmpstyling_memberpress_styling_button_value = false;
    if ($rswmpstyling_memberpress_styling_button_bg_color || $rswmpstyling_memberpress_styling_button_bg_hover_color || $rswmpstyling_memberpress_styling_button_color
                || $rswmpstyling_memberpress_styling_button_hover_color ||  $rswmpstyling_memberpress_styling_button_border_color || $rswmpstyling_memberpress_styling_button_border_hover_color
                || $rswmpstyling_memberpress_styling_button_border_width || $rswmpstyling_memberpress_styling_button_font_size_mobile || $rswmpstyling_memberpress_styling_button_font_size_tablet || $rswmpstyling_memberpress_styling_button_font_size_desktop
            || $rswmpstyling_memberpress_styling_button_padding_top_bottom || $rswmpstyling_memberpress_styling_button_padding_right_left
           || $rswmpstyling_memberpress_styling_button_full_width || $rswmpstyling_memberpress_styling_button_center || $rswmpstyling_memberpress_styling_button_uppercase || $rswmpstyling_memberpress_styling_button_letter_spacing) {
        $rswmpstyling_memberpress_styling_button_value = true;
    }
    if ($rswmpstyling_memberpress_styling_button_value !== false) {
        if ($rswmpstyling_memberpress_styling_button_center) {
            ?>
                   .mp-form-submit, .mp_wrapper .submit,
                   .mp_wrapper .mepr-login-actions {
                   text-align: center;
                  }
                 <?php

        }
        ?>
                 .mepr-form .button-primary, .mepr-form .mepr-share-button, .mepr-form .mepr-submit,
                 .mp_wrapper .button-primary, .mp_wrapper .mepr-share-button, .mp_wrapper .mepr-submit,
                 .mp_wrapper .submit  {
                     transition: all 0.25s ease-in-out;
                     <?php if ($rswmpstyling_memberpress_styling_button_full_width) {
            ?>
                      display: inline-block;
                      width: 100%;
                      text-align: center;
                     <?php

        }
        ?>
                     <?php if ($rswmpstyling_memberpress_styling_button_uppercase) {
            ?>
                      text-transform: uppercase !important;
                     <?php

        }
        ?>
                 }
                 .mepr-form .button-primary, .mepr-form .mepr-share-button, .mepr-form .mepr-submit,
                 .mp_wrapper .button-primary, .mp_wrapper .mepr-share-button, .mp_wrapper .mepr-submit  {
                     <?php if ($rswmpstyling_memberpress_styling_button_bg_color) {
            ?>
                         background-color: <?php echo esc_attr($rswmpstyling_memberpress_styling_button_bg_color);
            ?> !important;
                     <?php

        }
        ?>
                     <?php if ($rswmpstyling_memberpress_styling_button_border_width) {
            ?>
                      border-style: solid;
                      border-width: <?php echo esc_attr($rswmpstyling_memberpress_styling_button_border_width);
            ?>px !important;
                     <?php

        }
        ?>
                     <?php if ($rswmpstyling_memberpress_styling_button_border_color) {
            ?>
                      border-color: <?php echo esc_attr($rswmpstyling_memberpress_styling_button_border_color);
            ?> !important;
                     <?php

        }
        ?>
                     <?php if ($rswmpstyling_memberpress_styling_button_font_size_mobile) {
            ?>
                      font-size: <?php echo esc_attr($rswmpstyling_memberpress_styling_button_font_size_mobile);
            ?>px !important;
                     <?php

        }
        ?>
                     <?php if ($rswmpstyling_memberpress_styling_button_padding_top_bottom) {
            ?>
                      padding-top: <?php echo esc_attr($rswmpstyling_memberpress_styling_button_padding_top_bottom);
            ?>px;
                     padding-bottom: <?php echo esc_attr($rswmpstyling_memberpress_styling_button_padding_top_bottom);
            ?>px;
                     <?php

        }
        ?>
                      <?php if ($rswmpstyling_memberpress_styling_button_padding_right_left) {
            ?>
                   padding-left: <?php echo esc_attr($rswmpstyling_memberpress_styling_button_padding_right_left);
            ?>px;
                      padding-right: <?php echo esc_attr($rswmpstyling_memberpress_styling_button_padding_right_left);
            ?>px;
                      <?php

        }
        ?>
                     <?php if ($rswmpstyling_memberpress_styling_button_border_radius) {
            ?>
                      border-radius: <?php echo esc_attr($rswmpstyling_memberpress_styling_button_border_radius);
            ?>px !important;
                     <?php

        }
        ?>
                 <?php if ($rswmpstyling_memberpress_styling_button_letter_spacing) {
            ?>
                         letter-spacing: <?php echo esc_attr($rswmpstyling_memberpress_styling_button_letter_spacing);
            ?>px !important;
                     <?php

        }
        ?>
               }


                 <?php if ($rswmpstyling_memberpress_styling_button_font_size_tablet) {
            ?>
                     @media only screen and (min-width: 768px) {
                         .mepr-form .button-primary, .mepr-form .mepr-share-button, .mepr-form .mepr-submit,
                         .mp_wrapper .button-primary, .mp_wrapper .mepr-share-button, .mp_wrapper .mepr-submit,
                         .mp_wrapper .submit  {
                              font-size: <?php echo esc_attr($rswmpstyling_memberpress_styling_button_font_size_tablet);
            ?>px !important;
                         }
                     }
                 <?php

        }
        ?>

                  <?php if ($rswmpstyling_memberpress_styling_button_font_size_desktop) {
            ?>
                        @media only screen and (min-width: 992px) {
                          .mepr-form .button-primary, .mepr-form .mepr-share-button, .mepr-form .mepr-submit,
                          .mp_wrapper .button-primary, .mp_wrapper .mepr-share-button, .mp_wrapper .mepr-submit,
                          .mp_wrapper .submit  {
                               font-size: <?php echo esc_attr($rswmpstyling_memberpress_styling_button_font_size_desktop);
            ?>px !important;
                          }
                        }
                  <?php

        }
        ?>

                 .mepr-form .button-primary, .mepr-form .mepr-share-button, .mepr-form .mepr-submit,
                 .mp_wrapper .button-primary, .mp_wrapper .mepr-share-button, .mp_wrapper .mepr-submit,
                 .mp_wrapper .submit {
                     transition: all 0.25s ease-in-out;
                     <?php if ($rswmpstyling_memberpress_styling_button_color) {
            ?>
                      color: <?php echo esc_attr($rswmpstyling_memberpress_styling_button_color);
            ?> !important;
                     <?php

        }
        ?>
                 }

                 .mepr-form .button-primary:hover, .mepr-form .mepr-share-button:hover, .mepr-form .mepr-submit:hover,
                 .mp_wrapper .button-primary:hover, .mp_wrapper .mepr-share-button:hover, .mp_wrapper .mepr-submit:hover {
                     <?php if ($rswmpstyling_memberpress_styling_button_bg_hover_color) {
            ?>
                      background-color: <?php echo esc_attr($rswmpstyling_memberpress_styling_button_bg_hover_color);
            ?> !important;
                     <?php

        }
        ?>

                     <?php if ($rswmpstyling_memberpress_styling_button_border_width) {
            ?>
                      border-style: solid;
                      border-width: <?php echo esc_attr($rswmpstyling_memberpress_styling_button_border_width);
            ?>px !important;
                     <?php

        }
        ?>
                     <?php if ($rswmpstyling_memberpress_styling_button_border_hover_color) {
            ?>
                      border-color: <?php echo esc_attr($rswmpstyling_memberpress_styling_button_border_hover_color);
            ?> !important;
                     <?php

        }
        ?>
                     <?php if ($rswmpstyling_memberpress_styling_button_border_radius) {
            ?>
                      border-radius: <?php echo esc_attr($rswmpstyling_memberpress_styling_button_border_radius);
            ?>px !important;
                     <?php

        }
        ?>
                  }

                 .mepr-form .button-primary:hover, .mepr-form .mepr-share-button:hover, .mepr-form .mepr-submit:hover,
                 .mp_wrapper .button-primary:hover, .mp_wrapper .mepr-share-button:hover, .mp_wrapper .mepr-submit:hover {
                     <?php if ($rswmpstyling_memberpress_styling_button_hover_color) {
            ?>
                      color: <?php echo esc_attr($rswmpstyling_memberpress_styling_button_hover_color);
            ?> !important;
                     <?php

        }
        ?>
                 }

             <?php

    }
    ?>

    <?php

    //COUPON BUTTONS
    $rswmpstyling_memberpress_styling_coupon_button = get_theme_mod('rswmpstyling_memberpress_styling_coupon_button');

    // Colours
    $rswmpstyling_memberpress_styling_coupon_bg_color = get_theme_mod('rswmpstyling_memberpress_styling_coupon_bg_color');
    $rswmpstyling_memberpress_styling_coupon_bg_hover_color = get_theme_mod('rswmpstyling_memberpress_styling_coupon_bg_hover_color');

    $rswmpstyling_memberpress_styling_coupon_color = get_theme_mod('rswmpstyling_memberpress_styling_coupon_color');
    $rswmpstyling_memberpress_styling_coupon_hover_color = get_theme_mod('rswmpstyling_memberpress_styling_coupon_hover_color');

    $rswmpstyling_memberpress_styling_coupon_border_color = get_theme_mod('rswmpstyling_memberpress_styling_coupon_border_color');
    $rswmpstyling_memberpress_styling_coupon_border_hover_color= get_theme_mod('rswmpstyling_memberpress_styling_coupon_border_hover_color');

    // Widths
    $rswmpstyling_memberpress_styling_coupon_border_width = get_theme_mod('rswmpstyling_memberpress_styling_coupon_border_width');

    if ($rswmpstyling_memberpress_styling_coupon_border_width == '_') {
        $rswmpstyling_memberpress_styling_coupon_border_width = '0';
    }

    // Radius
    $rswmpstyling_memberpress_styling_coupon_border_radius = get_theme_mod('rswmpstyling_memberpress_styling_coupon_border_radius');

    if ($rswmpstyling_memberpress_styling_coupon_border_radius == '_') {
        $rswmpstyling_memberpress_styling_coupon_border_radius = '0';
    }

    // Font Sizes
    $rswmpstyling_memberpress_styling_coupon_font_size_mobile = get_theme_mod('rswmpstyling_memberpress_styling_coupon_font_size_mobile');
    $rswmpstyling_memberpress_styling_coupon_font_size_tablet = get_theme_mod('rswmpstyling_memberpress_styling_coupon_font_size_tablet');
    $rswmpstyling_memberpress_styling_coupon_font_size_desktop = get_theme_mod('rswmpstyling_memberpress_styling_coupon_font_size_desktop');

    // Padding
    $rswmpstyling_memberpress_styling_coupon_padding_top_bottom = get_theme_mod('rswmpstyling_memberpress_styling_coupon_padding_top_bottom');
    $rswmpstyling_memberpress_styling_coupon_padding_right_left = get_theme_mod('rswmpstyling_memberpress_styling_coupon_padding_right_left');

    // Centered and Full Width
    $rswmpstyling_memberpress_styling_coupon_full_width = get_theme_mod('rswmpstyling_memberpress_styling_coupon_full_width');
    $rswmpstyling_memberpress_styling_coupon_center = get_theme_mod('rswmpstyling_memberpress_styling_coupon_center');
    $rswmpstyling_memberpress_styling_coupon_button_width = get_theme_mod('rswmpstyling_memberpress_styling_coupon_button_width');

    // Uppercase
    $rswmpstyling_memberpress_styling_coupon_uppercase = get_theme_mod('rswmpstyling_memberpress_styling_coupon_uppercase');

    // Letter spacing
    $rswmpstyling_memberpress_styling_coupon_letter_spacing = get_theme_mod('rswmpstyling_memberpress_styling_coupon_letter_spacing');


    // Set up a catch to check settings
    $rswmpstyling_memberpress_styling_coupon_value = false;
    if ($rswmpstyling_memberpress_styling_coupon_bg_color || $rswmpstyling_memberpress_styling_coupon_bg_hover_color || $rswmpstyling_memberpress_styling_coupon_color
                || $rswmpstyling_memberpress_styling_coupon_hover_color ||  $rswmpstyling_memberpress_styling_coupon_border_color || $rswmpstyling_memberpress_styling_coupon_border_hover_color
                || $rswmpstyling_memberpress_styling_coupon_border_width || $rswmpstyling_memberpress_styling_coupon_font_size_mobile || $rswmpstyling_memberpress_styling_coupon_font_size_tablet || $rswmpstyling_memberpress_styling_coupon_font_size_desktop
            || $rswmpstyling_memberpress_styling_coupon_padding_top_bottom || $rswmpstyling_memberpress_styling_coupon_padding_right_left
           || $rswmpstyling_memberpress_styling_coupon_full_width || $rswmpstyling_memberpress_styling_coupon_center || $rswmpstyling_memberpress_styling_coupon_uppercase || $rswmpstyling_memberpress_styling_coupon_letter_spacing || $rswmpstyling_memberpress_styling_coupon_button_width) {
        $rswmpstyling_memberpress_styling_coupon_value = true;
    }

    if ($rswmpstyling_memberpress_styling_coupon_button === '1') {
        $rswmpstyling_memberpress_styling_coupon_value = false;
    }

    ?>
                <?php
             if ($rswmpstyling_memberpress_styling_coupon_value !== false) {
                 ?>
                 .have-coupon-link  {
                  padding: 0;
                  transition: all 0.25s ease-in-out;
                  display: inline-block;
                  margin-top: 15px !important;
                  <?php if ($rswmpstyling_memberpress_styling_coupon_center) {
                     ?>
                      margin: 1.5em auto 20px auto !important;
                      display: block;
                      max-width: 270px;
                      text-align: center;
                    <?php

                 }
                 ?>
                 <?php if ($rswmpstyling_memberpress_styling_coupon_button_width) {
                     ?>
                     max-width: <?php echo esc_attr($rswmpstyling_memberpress_styling_coupon_button_width);
                     ?>px;
                   <?php

                 }
                 ?>
                     <?php if ($rswmpstyling_memberpress_styling_coupon_full_width) {
                     ?>
                      display: inline-block;
                      width: 100%;
                      max-width: 100%;
                      text-align: center;
                     <?php

                 }
                 ?>
                     <?php if ($rswmpstyling_memberpress_styling_coupon_uppercase) {
                     ?>
                      text-transform: uppercase !important;
                     <?php

                 }
                 ?>
                     <?php if ($rswmpstyling_memberpress_styling_coupon_bg_color) {
                     ?>
                         background-color: <?php echo esc_attr($rswmpstyling_memberpress_styling_coupon_bg_color);
                     ?> !important;
                     <?php

                 }
                 ?>
                     <?php if ($rswmpstyling_memberpress_styling_coupon_border_width) {
                     ?>
                      border-style: solid;
                      border-width: <?php echo esc_attr($rswmpstyling_memberpress_styling_coupon_border_width);
                     ?>px !important;
                     <?php

                 }
                 ?>
                     <?php if ($rswmpstyling_memberpress_styling_coupon_border_color) {
                     ?>
                      border-color: <?php echo esc_attr($rswmpstyling_memberpress_styling_coupon_border_color);
                     ?> !important;
                     <?php

                 }
                 ?>
                     <?php if ($rswmpstyling_memberpress_styling_coupon_font_size_mobile) {
                     ?>
                      font-size: <?php echo esc_attr($rswmpstyling_memberpress_styling_coupon_font_size_mobile);
                     ?>px !important;
                     <?php

                 }
                 ?>
                     <?php if ($rswmpstyling_memberpress_styling_coupon_padding_top_bottom) {
                     ?>
                      padding-top: <?php echo esc_attr($rswmpstyling_memberpress_styling_coupon_padding_top_bottom);
                     ?>px;
                     padding-bottom: <?php echo esc_attr($rswmpstyling_memberpress_styling_coupon_padding_top_bottom);
                     ?>px;
                     <?php

                 }
                 ?>
                      <?php if ($rswmpstyling_memberpress_styling_coupon_padding_right_left) {
                     ?>
                   padding-left: <?php echo esc_attr($rswmpstyling_memberpress_styling_coupon_padding_right_left);
                     ?>px;
                      padding-right: <?php echo esc_attr($rswmpstyling_memberpress_styling_coupon_padding_right_left);
                     ?>px;
                      <?php

                 }
                 ?>
                     <?php if ($rswmpstyling_memberpress_styling_coupon_border_radius) {
                     ?>
                      border-radius: <?php echo esc_attr($rswmpstyling_memberpress_styling_coupon_border_radius);
                     ?>px !important;
                     <?php

                 }
                 ?>
                 <?php if ($rswmpstyling_memberpress_styling_coupon_letter_spacing) {
                     ?>
                         letter-spacing: <?php echo esc_attr($rswmpstyling_memberpress_styling_coupon_letter_spacing);
                     ?>px !important;
                     <?php

                 }
                 ?>

                  }

                 <?php if ($rswmpstyling_memberpress_styling_coupon_font_size_tablet) {
                     ?>
                     @media only screen and (min-width: 768px) {
                         .have-coupon-link  {
                              font-size: <?php echo esc_attr($rswmpstyling_memberpress_styling_coupon_font_size_tablet);
                     ?>px !important;
                         }
                     }
                 <?php

                 }
                 ?>

                  <?php if ($rswmpstyling_memberpress_styling_coupon_font_size_desktop) {
                     ?>
                        @media only screen and (min-width: 992px) {
                          .have-coupon-link  {
                               font-size: <?php echo esc_attr($rswmpstyling_memberpress_styling_coupon_font_size_desktop);
                     ?>px !important;
                          }
                        }
                  <?php

                 }
                 ?>

                 .have-coupon-link {
                     transition: all 0.25s ease-in-out;
                     <?php if ($rswmpstyling_memberpress_styling_coupon_color) {
                     ?>
                      color: <?php echo esc_attr($rswmpstyling_memberpress_styling_coupon_color);
                     ?> !important;
                     <?php

                 }
                 ?>
                 <?php if ($rswmpstyling_memberpress_styling_coupon_border_width) {
                     ?>
                 border-style: solid;
                  border-width: <?php echo esc_attr($rswmpstyling_memberpress_styling_coupon_border_width);
                     ?>px !important;
                 <?php

                 }
                 ?>
                 }

                 .have-coupon-link:hover {
                     <?php if ($rswmpstyling_memberpress_styling_coupon_bg_hover_color) {
                     ?>
                      background-color: <?php echo esc_attr($rswmpstyling_memberpress_styling_coupon_bg_hover_color);
                     ?> !important;
                     <?php

                 }
                 ?>

                     <?php if ($rswmpstyling_memberpress_styling_coupon_border_width) {
                     ?>
                     border-style: solid;
                      border-width: <?php echo esc_attr($rswmpstyling_memberpress_styling_coupon_border_width);
                     ?>px !important;
                     <?php

                 }
                 ?>
                     <?php if ($rswmpstyling_memberpress_styling_coupon_border_hover_color) {
                     ?>
                      border-color: <?php echo esc_attr($rswmpstyling_memberpress_styling_coupon_border_hover_color);
                     ?> !important;
                     <?php

                 }
                 ?>
                     <?php if ($rswmpstyling_memberpress_styling_coupon_border_radius) {
                     ?>
                      border-radius: <?php echo esc_attr($rswmpstyling_memberpress_styling_coupon_border_radius);
                     ?>px !important;
                     <?php

                 }
                 ?>
                  }

                 .have-coupon-link:hover {
                     <?php if ($rswmpstyling_memberpress_styling_coupon_hover_color) {
                     ?>
                      color: <?php echo esc_attr($rswmpstyling_memberpress_styling_coupon_hover_color);
                     ?> !important;
                     <?php

                 }
                 ?>
                 }

             <?php

             }
    ?>



    <?php

    // PRICE AND TERMS BOX

    // Letter spacing
    $rswmpstyling_memberpress_styling_price_box_bg = get_theme_mod('rswmpstyling_memberpress_styling_price_box_bg');
    $rswmpstyling_memberpress_styling_price_box_color = get_theme_mod('rswmpstyling_memberpress_styling_price_box_color');
    $rswmpstyling_memberpress_styling_price_box_border = get_theme_mod('rswmpstyling_memberpress_styling_price_box_border');
    $rswmpstyling_memberpress_styling_price_box_border_width = get_theme_mod('rswmpstyling_memberpress_styling_price_box_border_width');
    $rswmpstyling_memberpress_styling_price_box_centered = get_theme_mod('rswmpstyling_memberpress_styling_price_box_centered');

    // Set up a catch to check settings
    $rswmpstyling_memberpress_styling_price_value = false;
    if ($rswmpstyling_memberpress_styling_price_box_bg || $rswmpstyling_memberpress_styling_price_box_border || $rswmpstyling_memberpress_styling_price_box_border_width
  || $rswmpstyling_memberpress_styling_price_box_centered || $rswmpstyling_memberpress_styling_price_box_color) {
        $rswmpstyling_memberpress_styling_price_value = true;
    }

    if ($rswmpstyling_memberpress_styling_price_value) {
        ?>
    .mepr_price,
      .mp_price_str {
        <?php if ($rswmpstyling_memberpress_styling_price_box_color) {
            ?>
         color: <?php echo esc_attr($rswmpstyling_memberpress_styling_price_box_color);
            ?> !important;
        <?php

        }
        ?>
        <?php if ($rswmpstyling_memberpress_styling_price_box_bg) {
            ?>
         background: <?php echo esc_attr($rswmpstyling_memberpress_styling_price_box_bg);
            ?> !important;
        <?php

        }
        ?>
          padding: 30px;
          <?php if ($rswmpstyling_memberpress_styling_price_box_centered) {
            ?>
              text-align: center;
          <?php

        }
        ?>
          <?php if ($rswmpstyling_memberpress_styling_price_box_border) {
            ?>
           border-color: <?php echo esc_attr($rswmpstyling_memberpress_styling_price_box_border);
            ?> !important;
          <?php

        }
        ?>
          <?php if ($rswmpstyling_memberpress_styling_price_box_border_width) {
            ?>
            border-style: solid;
           border-width: <?php echo esc_attr($rswmpstyling_memberpress_styling_price_box_border_width);
            ?>px;
          <?php

        }
        ?>
        display: block !important;
        margin-bottom: 15px !important;
      <?php

    }
    if ($rswmpstyling_memberpress_styling_price_value) {
        ?>
      }
    <?php

    }
    ?>

<?php
// Account tabs
$rswmpstyling_memberpress_styling_tabs = get_theme_mod('rswmpstyling_memberpress_styling_tabs');

    if ($rswmpstyling_memberpress_styling_tabs == '1') {
        ?>
body #mepr-account-nav {display: inline-block;width:100%!important;padding: 10px 0 0 0}
  @media only screen and (min-width: 767px) {
    body #mepr-account-nav {border-bottom: 1px solid #ccc;padding-left: 10px;}
  }
#mepr-account-nav .mepr-nav-item {display: inline-block;width: 100%;background: #f7f7f7;border: 1px solid #ccc;padding: 7px 15px; margin: 0 0 -1px 0}
  @media only screen and (min-width: 767px) {
    #mepr-account-nav .mepr-nav-item {width: auto;float:left;border-top-left-radius:8px;border-top-right-radius:8px;position:relative;margin-bottom:-1px}
  }
#mepr-account-nav .mepr-active-nav-tab {z-index:1;background:#e7e7e7}
  @media only screen and (min-width: 767px) {
    #mepr-account-nav .mepr-active-nav-tab {top:-5px;padding-top:12px;padding-bottom:7px;margin-right:-3px;margin-left:-1px;margin-bottom:-6px}
  }
<?php

    }
    ?>
<?php // Show / Hide on forms
$rswmpstyling_memberpress_show_pw = get_theme_mod('rswmpstyling_memberpress_show_pw');
    if ($rswmpstyling_memberpress_show_pw != '1') {
        ?>
body button.button.mp-hide-pw, body button.button.mp-hide-pw:hover {border:none;background:none;color:#000;opacity:0.7;transition:all 0.25s ease-in-out;}

<?php

    }
    ?>
        </style>
    <?php

} // End rswmpstyling_customizer_css
add_action('wp_head', 'rswmpstyling_customizer_css');
