<div class="slider">
<ul class="bxslider">
<li><img src="http://wordpress.bmsbd.biz/wp-content/uploads/2015/01/slider-image-3.jpg" title="Funky roots" /></li>
<li><img src="http://wordpress.bmsbd.biz/wp-content/uploads/2015/01/slider-image-4.jpg" title="The long and winding road" /></li>
<li><img src="http://wordpress.bmsbd.biz/wp-content/uploads/2015/01/slider-image-5.jpg" title="Happy trees" /></li>
<li><img src="http://wordpress.bmsbd.biz/wp-content/uploads/2015/01/slider-image-6.jpg" title="Happy trees" /></li>
</ul>
</div>
<?php if ( is_active_sidebar( 'home_after_slider' ) ) : ?>
  <div class="blackBg">
<div class="container clearfix">
    <?php dynamic_sidebar( 'home_after_slider' ); ?>
  </div>
</div>
  <?php endif; ?>

