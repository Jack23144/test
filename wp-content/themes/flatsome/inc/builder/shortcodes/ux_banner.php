<?php

add_ux_builder_shortcode( 'ux_banner', array(
  'type' => 'container',
  'name' => __( 'بنر' ),
  'category' => __( 'Content' ),
  'thumbnail' => flatsome_ux_builder_thumbnail( 'ux_banner' ),
  'toolbar_thumbnail' => 'bg',
  'template' => flatsome_ux_builder_template( 'ux_banner.html' ),
  'wrap' => false,
  'info' => '{{ label }}',
  'resize' => array( 'bottom' ),
  'allow' => array( 'text_box', 'ux_image' ),
  'add_buttons' => array( 'bottom-right' ),
  'addable_spots' => array( 'top', 'bottom' ),
  'priority' => 3,

  'styles' => array(
    'flatsome-banner-effect' => get_template_directory_uri() . '/assets/css/effects.css'
  ),

  // Override children data.
  'children' => array(
    'addable_spots' => array( 'center' ),
  ),

  'presets' => array(
    array(
      'name' => __( 'خالی' ),
      'thumbnail' => flatsome_ux_builder_thumbnail( 'banners/blank' ),
      'content' => '[ux_banner height="500px"] [text_box width="60"]<h3 class="uppercase"><strong>This is a simple banner</strong></h3> <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>[/text_box] [/ux_banner]',
    ),
    array(
      'name' => __( 'ساده وسط' ),
      'thumbnail' => flatsome_ux_builder_thumbnail( 'banners/simple-center' ),
      'content' => '[ux_banner height="500px" bg_overlay="rgba(0, 0, 0, 0.17)"] [text_box width="60"]<h3 class="uppercase">Change this to anything</h3> <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p> [button text="Click me" color="white" style="outline"] [/text_box] [/ux_banner]',
    ),
    array(
      'name' => __( 'چپ' ),
      'thumbnail' => flatsome_ux_builder_thumbnail( 'banners/simple-left' ),
      'content' => '[ux_banner height="500px" bg_overlay="rgba(0, 0, 0, 0.31)"] [text_box width="40" width__sm="60" position_x="10"]<h3 class="uppercase">Change this to anything</h3> <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p> [button text="Click me" color="white" style="outline"] [/text_box] [/ux_banner]',
    ),
    array(
      'name' => __( 'راست' ),
      'thumbnail' => flatsome_ux_builder_thumbnail( 'banners/simple-right' ),
      'content' => '[ux_banner height="500px" bg_overlay="rgba(0, 0, 0, 0.31)"] [text_box width="40" width__sm="60" position_x="90"]<h3 class="uppercase">Change this to anything</h3> <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p> [button text="Click me" color="white" style="outline"] [/text_box] [/ux_banner]',
    ),
    array(
      'name' => __( 'دکمه چپ' ),
      'thumbnail' => flatsome_ux_builder_thumbnail( 'banners/simple-buttons' ),
      'content' => '[ux_banner height="500px" bg_overlay="rgba(0, 0, 0, 0.31)"] [text_box width="40" width__sm="60" position_x="5" text_align="left"]<h2 class="uppercase"><strong>Main Headline</strong></h2> <h3>Smaller Headline</h3> <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p> [button text="Primary"] [button text="Secondary" color="white" style="outline"] [/text_box] [/ux_banner]',
    ),
    array(
      'name' => __( 'دکمه راست' ),
      'thumbnail' => flatsome_ux_builder_thumbnail( 'banners/simple-buttons-right' ),
      'content' => '[ux_banner height="500px" bg_overlay="rgba(0, 0, 0, 0.2)"] [text_box width="40" width__sm="60" position_x="95" text_align="right"]<h2 class="uppercase"><strong>Main Headline</strong></h2> <h3>Smaller Headline</h3> <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p> [button text="Primary"] [button text="Secondary" color="white" style="outline"] [/text_box] [/ux_banner]',
    ),
    array(
      'name' => __( 'ساده چپ' ),
      'thumbnail' => flatsome_ux_builder_thumbnail( 'banners/simple-left-light' ),
      'content' => '[ux_banner height="500px" bg_color="rgb(255, 255, 255)" bg_overlay="rgba(190, 190, 190, 0.2)"] [text_box width="40" width__sm="60" position_x="5" text_align="left" text_color="dark"]<h2 class="uppercase"><strong>Main Headline</strong></h2> <h3>Smaller Headline</h3> <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p> [button text="Primary"] [button text="Secondary" style="outline"] [/text_box][/ux_banner]',
    ),
    array(
      'name' => __( 'ساده راست' ),
      'thumbnail' => flatsome_ux_builder_thumbnail( 'banners/simple-right-light' ),
      'content' => '[ux_banner height="500px" bg_color="rgb(255, 255, 255)" bg_overlay="rgba(190, 190, 190, 0.2)"] [text_box width="40" width__sm="60" position_x="95" text_align="right" text_color="dark"]<h2 class="uppercase"><strong>Main Headline</strong></h2> <h3>Smaller Headline</h3> <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p> [button text="Primary"] [button text="Secondary" style="outline"] [/text_box] [/ux_banner]',
    ),
     array(
      'name' => __( 'جعبه چپ' ),
      'thumbnail' => flatsome_ux_builder_thumbnail( 'banners/box-left' ),
      'content' => '[ux_banner height="500px" bg_color="rgb(255, 255, 255)" bg_overlay="rgba(190, 190, 190, 0.2)"] [text_box width="40" width__sm="60" position_x="5" text_align="left" text_color="dark" padding="30px 30px 30px 30px" bg="rgb(255, 255, 255)" depth="3"]<h2 class="uppercase"><strong>Main Headline</strong></h2> <h3>Smaller Headline</h3> <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p> [button text="Primary"] [button text="Secondary" style="outline"] [/text_box] [/ux_banner]',
    ),
    array(
      'name' => __( 'جعبه راست' ),
      'thumbnail' => flatsome_ux_builder_thumbnail( 'banners/box-right' ),
      'content' => '[ux_banner height="500px" bg_overlay="rgba(0, 0, 0, 0.2)"] [text_box width="40" width__sm="60" position_x="95" text_color="dark" padding="30px 30px 30px 30px" bg="rgba(255, 255, 255, 0.86)" depth="3"]<h2 class="uppercase"><strong>Main Headline</strong></h2> <h3>Smaller Headline</h3> <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p> [button text="Primary"] [button text="Secondary" style="outline"] [/text_box] [/ux_banner]',
    ),
     array(
      'name' => __( 'جعبه تیره چپ' ),
      'thumbnail' => flatsome_ux_builder_thumbnail( 'banners/dark-box-left' ),
      'content' => '[ux_banner height="500px" bg_overlay="rgba(0, 0, 0, 0.2)"] [text_box width="40" width__sm="60" position_x="5" padding="30px 30px 30px 30px" bg="rgba(0, 0, 0, 0.86)" depth="3"]<h2 class="uppercase"><strong>Main Headline</strong></h2> <h3>Smaller Headline</h3> <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p> [button text="Primary"] [button text="Secondary" color="white" style="outline"] [/text_box] [/ux_banner]',
    ),
     array(
      'name' => __( 'دایره راست' ),
      'thumbnail' => flatsome_ux_builder_thumbnail( 'banners/circle-right' ),
      'content' => '[ux_banner height="500px" bg_overlay="rgba(0, 0, 0, 0.2)"] [text_box style="circle" width="40" width__sm="60" position_x="90" padding="30px 30px 30px 30px" bg="rgba(0, 0, 0, 0.86)" depth="3"]<h2 class="uppercase"><strong>Main Headline</strong></h2> <h3>Smaller Headline</h3> <p>Lorem ipsum dolor sit amet, conse.</p> [button text="Secondary" color="white" style="outline"] [/text_box] [/ux_banner]',
    ),
     array(
      'name' => __( 'فروش بزرگ' ),
      'thumbnail' => flatsome_ux_builder_thumbnail( 'banners/huge-sale' ),
      'content' => '[ux_banner height="600px"] [text_box width="67" animate="flipInY"]<h3 class="alt-font">It has Finally started...</h3> [divider] <h1 class="h-large uppercase"><strong><span style="font-size: 180%;">HUGE SALE</span></strong></h1> <h1 class="uppercase">UP TO 70% OFF</strong></h1> [divider] [button text="Shop men!" color="white" style="outline" link="#"] [button text="Shop women" color="white" style="outline" link="#"] [button text="Shop all" color="white" style="outline" link="#"] [/text_box] [/ux_banner]',
    ),
    array(
      'name' => __( 'نشان' ),
      'thumbnail' => flatsome_ux_builder_thumbnail( 'banners/badge' ),
      'content' => '[ux_banner height="400px" bg_overlay="rgba(0, 0, 0, 0.2)"] [text_box width="100" position_y="90" line_height="xs" text_color="dark" padding="5px 30px 10px 30px" bg="rgba(255, 255, 255, 0.94)"]<h4 class="uppercase">Summer 2017</h4> <h3 class="uppercase"><strong>NEW Summer Trends</strong></h3> [button text="Shop now" style="underline"] [/text_box] [text_box style="circle" width="26" margin="0px -5px 0px 0px" position_x="100" position_y="5"] <p><span style="font-size: 250%;"><strong>SALE</strong></span></p> [/text_box] [/ux_banner]',
    ),
    array(
      'name' => __( 'حباب نشان' ),
      'thumbnail' => flatsome_ux_builder_thumbnail( 'banners/badge-bubble' ),
      'content' => '[ux_banner height="400px" bg_overlay="rgba(0, 0, 0, 0.2)"] [text_box width="80" position_y="90" text_align="left" line_height="m"]<h4 class="uppercase">Summer 2017</h4> <h2 class="uppercase"><strong>NEW Summer Trends</strong></h2> [button text="Shop now" color="white" style="outline"] [/text_box] [text_box style="circle" width="26" margin="0px -5px 0px 0px" position_x="90" position_y="10" bg="rgba(0, 0, 0, 0.46)"] <p><span style="font-size: 250%;"><strong>-50%</strong></span></p> [/text_box] [/ux_banner]',
    ),
    array(
      'name' => __( 'نشان ساده' ),
      'thumbnail' => flatsome_ux_builder_thumbnail( 'banners/badge-simple' ),
      'content' => '[ux_banner height="400px" bg_overlay="rgba(0, 0, 0, 0.2)"][text_box width="80" position_y="90" line_height="m"]<h4 class="uppercase">Summer 2017</h4> <h2 class="uppercase"><strong>NEW Summer Trends</strong></h2> [button text="Shop now" color="white" style="outline"] [/text_box] [/ux_banner]',
    ),
  ),

  'options' => array(
    'label' => array(
        'type' => 'textfield',
        'heading' => 'لیبل آدمین',
        'placeholder' => 'لیبل را وارد کنید..'
    ),

    'layout_options' => array(
      'type' => 'group',
      'heading' => __( 'طرح' ),
      'options' => array(
        'height' => array(
          'type' => 'scrubfield',
          'responsive' => true,
          'heading' => __('Height'),
          'default' => '',
          'placeholder' => __('Auto'),
          'min' => 0,
          'max' => 1000,
          'step' => 1,
          'helpers' => require( __DIR__ . '/helpers/heights.php' ),
        ),
      ),
    ),
    'slide_options' =>  require( __DIR__ . '/commons/slide.php' ),
    'background_options' => require( __DIR__ . '/commons/background.php' ),
    'shape_divider_options' => require( __DIR__ . '/commons/shape-divider.php' ),
    'border_options' => require( __DIR__ . '/commons/border.php' ),
    'link_options' => require( __DIR__ . '/commons/links.php' ),
    'video_options' => require( __DIR__ . '/commons/video.php' ),
    'advanced_options' => require( __DIR__ . '/commons/advanced.php'),
    'sticky' => array(
      'type' => 'radio-buttons',
      'heading' => 'Sticky',
      'default' => '',
      'options' => array(
          'true'   => array( 'title' => 'On'),
          ''  => array( 'title' => 'Off'),
        ),
      ),
    ),
) );
