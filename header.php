<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php bloginfo('name'); ?> | <?php is_home() ? bloginfo('description') : wp_title( '' ); ?></title>
<link href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" rel="stylesheet" />
<!-- jQuery library (served from Google) -->

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.7.1.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/cycle.js" type="text/javascript"></script>
<?php wp_head(); ?>
</head>
<body>
<div class="mainContainer">
<div class="topLinks">
<div class="container">
<div class="logo">
<div class="logoBox"><a href="index.php"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" width="434px" height="243px" alt=""></a></div>
</div>
<div class="navigation">
<p>CALL : +94 011 452 524
</br>
<b>helpsrilanka@hotmail.com</b></p>
<form class="search">
<input type="text" placeholder="search"/>
<button > </button>
</form>
<form class="log-in">
User id or Email
<br/>
<input type="text"/><br/>
Password<br/>
<input type="password"/>
<button type="submit">log in</button>
</form>



<?php 
                wp_nav_menu(array(
                  'theme_location' => 'main-menu',
                  'container' => '',
                  'fallback_cb' => 'show_top_menu',
                  'menu_class' => 'main-menu large nav sf-menu sf-js-enabled',
                  'menu_id' => 'nav',
                  'echo' => true,
                  'walker' => new description_walker(),
                  'depth' => 0 
                )); 
              ?>
<!--<ul>
<li><a href="#">HOME</a></li>
<li><a href="#about_us">ABOUT US</a></li>
<li><a href="#our_solution">VISION</a></li>
<li><a href="#client">FUND RAISING</a></li>
<li><a href="#contact">PROJECTS</a></li>
</ul>-->
</div>
<div class="clear"></div>
</div>
</div>
<div class="whtBorder">
<div class="container clearfix">
<?php putRevSlider("home-slider","homepage") ?>
</div></div>
<div class="blackBg">
<div class="container clearfix">
<?php if ( !function_exists('dynamic_sidebar')|| !dynamic_sidebar('Home Icon') ) : 
endif; 
?>
</div>
</div>
      