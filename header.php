<!DOCTYPE html>
<title><?php wp_title( '|', true, 'right' ); bloginfo('name') ?></title>
<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:700&subset=cyrillic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.2.2/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<?php wp_head() ?>
</head>
<body <?php body_class(); ?>>
<div class="container">
    <div class="row-fluid">
        <div class="span12">
            <div class="header">
                <?php if (display_header_text()): ?>
                <div class="blog-name-wrap">
                    <h1 class="blog-name">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" style="color: #<?php echo get_header_textcolor() ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
                            <?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>
                            <div class="blog-description"><?php echo get_bloginfo('description') ?></div>
                        </a>
                    </h1>
                </div>
                <?php endif; ?>
                <?php
                    $header_image_width  = get_custom_header()->width;
                    $header_image_height = get_custom_header()->height;
                ?>
                <img src="http://uraylib.ru/wp-content/uploads/2013/03/cropped-2.jpg" width="<?php echo $header_image_width; ?>" height="<?php echo $header_image_height; ?>" alt="" />
            </div>

            <div class="navigation">
                <?php wp_nav_menu(array('theme_location' => 'header-menu')) ?>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>


    <a href="http://uraylib.ru/%d1%80%d0%be%d0%b4%d0%bd%d0%be%d0%b9-%d1%8e%d0%b3%d1%80%d0%b5-%d0%bf%d1%80%d0%b8%d0%b7%d0%bd%d0%b0%d0%bd%d0%b8%d0%b5/" class="cs-main" id="cs-main13" style="width: 90px; height: 56px; float: left; position: absolute; left: 180px; top: 0px; opacity: 1; background-image: url(http://uraylib.ru/wp-content/plugins/vslider/timthumb.php?src=http://uraylib.ru/wp-content/uploads/2013/02/kt.jpg&amp;w=630&amp;h=280&amp;zc=1&amp;q=80); background-position: -180px 0px;" target="_blank"></a>