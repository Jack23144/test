<?php

$repeater_type = 'row';
$default_text_align = 'left';

$options = array(
'pages_options' => array(
    'type' => 'group',
    'heading' => __( 'Options' ),
    'options' => array(
      'ids' => array(
        'type' => 'gallery',
        'heading' => __( 'Images' ),
      ),
     'style' => array(
            'type' => 'select',
            'heading' => __( 'Style' ),
            'default' => 'overlay',
            'options' => require( __DIR__ . '/values/box-layouts.php' )
     ),
    'lightbox' => array(
          'type' => 'radio-buttons',
          'heading' => __('Open in Lightbox'),
          'default' => 'true',
          'options' => array(
              'false'  => array( 'title' => 'Off'),
              'true'  => array( 'title' => 'On'),
          ),
      ),

	'lightbox_image_size' => array(
	    'type'       => 'select',
	    'heading'    => __( 'اندازه تصویر لایتباکس' ),
	    'conditions' => 'lightbox == "true"',
	    'default'    => 'large',
	    'options'    => flatsome_ux_builder_image_sizes(),
    ),

  ),
),
'layout_options' => require( __DIR__ . '/commons/repeater-options.php' ),
'layout_options_slider' => require( __DIR__ . '/commons/repeater-slider.php' ),
);

$box_styles = require( __DIR__ . '/commons/box-styles.php' );
$options = array_merge($options, $box_styles);

add_ux_builder_shortcode( 'ux_gallery', array(
  'name' => __( 'گالری','ux-builder'),
  'category' => __( 'Content' ),
  'thumbnail' => flatsome_ux_builder_thumbnail( 'ux_gallery' ),
  'scripts' => array(
    'flatsome-masonry-js' => get_template_directory_uri() .'/assets/libs/packery.pkgd.min.js',
  ),
  'presets' => array(
    array(
      'name' => __( 'Default' ),
      'content' => '[ux_gallery]',
      ),
    ),
    'options' => $options
) );
