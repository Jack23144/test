<?php

add_ux_builder_shortcode( 'text_box', array(
    'type' => 'container',
    'name' => __( 'جعبه متن' ),
    'category' => __( 'Content' ),
    'template' => flatsome_ux_builder_template( 'text_box.html' ),
    'thumbnail' => flatsome_ux_builder_thumbnail( 'text_box' ),
    'require' => 'ux_banner',
    'allow' => array(
      'ux_breadcrumbs',
      'ux_the_title',
      'ux_image',
      'ux_lottie',
      'ux_stack',
      'ux_html',
      'text',
      'divider',
      'button',
      'title',
      'video_button',
      'row',
      'follow',
      'share'
    ),
    'wrap' => false,
    'resize' => array( 'right' ),
    'move' => 'top-left',

    'presets' => array(
        array(
            'name' => __( 'Default' ),
            'content' => '[text_box pos="x50 y50"][/text_box]',
        )
    ),
    'options' => array(
      'layout_options' => array(
        'type' => 'group',
        'heading' => __( 'طرح' ),
        'options' => array(
           'style' => array(
                'type' => 'radio-buttons',
                'heading' => __('Style'),
                'full_width' => true,
                'default' => '',
                'options' => array(
                    ''  => array( 'title' => 'نرمال'),
                    'square'  => array( 'title' => 'مربع'),
                    'circle'  => array( 'title' => 'دایره'),
                ),
            ),
            'text_color' => array(
                'type' => 'radio-buttons',
                'heading' => __('رنگ'),
                'default' => 'light',
                'options' => array(
                    'light'  => array( 'title' => 'روشن'),
                    'dark'  => array( 'title' => 'تیره'),
                ),
            ),
            'hover' => array(
                'type' => 'select',
                'heading' => __( 'هاور' ),
                'default' => '',
                'options' => require( __DIR__ . '/values/text-hover.php' ),
            ),
            'width' => array(
                'type' => 'slider',
                'heading' => __('عرض'),
                'responsive' => true,
                'default' => '60',
                'unit' => '%',
                'max' => '100',
                'min' => '0',
            ),
            'scale' => array(
              'type' => 'slider',
              'heading' => __('مقیاس'),
              'responsive' => true,
              'unit' => '%',
              'default' => '100',
              'max' => '500',
              'min' => '0',
            ),
           'margin' => array(
              'type' => 'margins',
              'heading' => __('فاصله'),
              'full_width' => true,
              'responsive' => true,
              'unit' => 'px',
              'min' => -200,
              'max' => 200,
              'step' => 1,
          ),
          'padding' => array(
                'type' => 'margins',
                'heading' => __('پدینگ'),
                'full_width' => true,
                'min' => 0,
                'max' => 200,
                'step' => 1,
                'responsive' => true,
          ),
           'rotate' => array(
              'type' => 'slider',
              'heading' => __('چرخش'),
              'default' => 0,
              'max' => 180,
              'min' => -180,
            ),
           'animate' => array(
              'type' => 'select',
              'heading' => __('انیمیشن'),
              'options' => require( __DIR__ . '/values/animate.php' ),
          ),
          'parallax' => array(
              'type' => 'slider',
              'heading' => __('پارالکس'),
              'param_name' => 'parallax',
              'default' => 0,
              'unit' => '+',
              'max' => 10,
              'min' => -10,
          ),
        ),
    ), // Layout options
    'positions' => require( __DIR__ . '/commons/position.php' ),
    'text_options' => array(
        'type' => 'group',
        'heading' => __( 'متن' ),
        'options' => array(
          'text_align' => array(
              'type' => 'radio-buttons',
              'heading' => __('تراز'),
              'default' => 'center',
              'options' => require( __DIR__ . '/values/align-radios.php' ),
            ),
           'text_depth' => array(
              'type' => 'slider',
              'heading' => __('سایه'),
              'default' => '0',
              'unit' => '+',
              'max' => '5',
              'min' => '0',
            ),
        )
    ), // Text options
    'bg_options' => array(
        'type' => 'group',
        'heading' => __( 'پس زمینه' ),
        'options' => array(

          'bg' => array(
            'type' => 'colorpicker',
            'heading' => __('رنگ پسزمینه'),
            'alpha' => true,
            'format' => 'rgb',
            'position' => 'bottom right',
          ),
            'radius' => array(
              'type' => 'slider',
              'heading' => __('شعاع'),
              'default' => 0,
              'unit' => 'px',
              'max' => 500,
              'min' => 0,
            ),
            'depth' => array(
              'type' => 'slider',
              'heading' => __('عمق'),
              'default' => '0',
              'unit' => '+',
              'max' => '5',
              'min' => '0',
            ),
            'depth_hover' => array(
              'type' => 'slider',
              'heading' => __('عمق : هاور'),
              'default' => '0',
              'unit' => '+',
              'max' => '5',
              'min' => '0',
            ),
        )
    ), // Frame
    'border_options' => require( __DIR__ . '/commons/border.php' ),
    'advanced_options' => require( __DIR__ . '/commons/advanced.php'),
  )
));
