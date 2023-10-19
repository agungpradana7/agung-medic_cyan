<?php if (!defined('_VALID_BBC')) exit('No direct script access allowed');

$count = count($output['images']);
if ($count > 0) {
  $style = !empty($output['config']['fixsize']) ? ' style="width:' . @$output['cat']['width'] . 'px;height:' . @$output['cat']['height'] . 'px;overflow:hidden;"' : '';
?>
  <div id="imageslider<?php echo $block->id; ?>" <?php /*echo $style;*/ ?> class="carousel slide" data-ride="carousel">
    <?php
    if (!empty($output['config']['indicator']) && $count > 1) {
      echo '<ol class="carousel-indicators">';
      foreach ($output['images'] as $key => $value) {
        $cls = $key ? '' : ' class="active"';
        echo '<li data-target="#imageslider' . $block->id . '" data-slide-to="' . $key . '"' . $cls . '></li>';
      }
      echo '</ol>';
    }
    echo '<div class="carousel-inner">';
    foreach ($output['images'] as $key => $dt) {
      $cls = $key ? '' : ' active';
    ?>
      <div class="item<?php echo $cls; ?>">
        <div class="hero-slider">
          <!-- Slider Item -->
          <div class="slider-item slide1" style="background-image: url(<?php echo _URL; ?>templates/medic_cyan/images/slider/slider-bg-1.jpg)">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <!-- Slide Content Start -->
                  <div class="content style text-center">
                    <h2 class="text-white text-bold mb-2">Our Best Surgeons</h2>
                    <p class="tag-text mb-5">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel
                      sunt animi sequi ratione quod at earum. <br />
                      Quis quos officiis numquam!
                    </p>
                    <a href="#" class="btn btn-main btn-white">explore</a>
                  </div>
                  <!-- Slide Content End -->
                </div>
              </div>
            </div>
          </div>
          <!-- Slider Item -->
          <div class="slider-item" style="background-image: url(<?php echo _URL; ?>templates/medic_cyan/images/slider/slider-bg-2.jpg)">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <!-- Slide Content Start-->
                  <div class="content style text-right">
                    <h2 class="text-white">We Care About <br />Your Health</h2>
                    <p class="tag-text">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </p>
                    <a href="#" class="btn btn-main btn-white">about us</a>
                  </div>
                  <!-- Slide Content End-->
                </div>
              </div>
            </div>
          </div>
          <!-- Slider Item -->
          <div class="slider-item" style="background-image: url(<?php echo _URL; ?>templates/medic_cyan/images/slider/slider-bg-3.jpg)">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <!-- Slide Content Start -->
                  <div class="content text-center style">
                    <h2 class="text-white text-bold mb-2">
                      Best Medical Services
                    </h2>
                    <p class="tag-text mb-5">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Beatae deserunt, <br />eius pariatur minus itaque nostrum.
                    </p>
                    <a href="shop.html" class="btn btn-main btn-white">shop now</a>
                  </div>
                  <!-- Slide Content End -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php
    }
    echo '</div>';
    if (!empty($output['config']['control']) && $count > 1) {
    ?>
      <a class="left carousel-control" href="#imageslider<?php echo $block->id; ?>" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
      </a>
      <a class="right carousel-control" href="#imageslider<?php echo $block->id; ?>" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
      </a>
    <?php
    }
    ?>
  </div>
<?php
}
