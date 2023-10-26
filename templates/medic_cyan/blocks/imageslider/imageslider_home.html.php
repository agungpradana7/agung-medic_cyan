<?php if (!defined('_VALID_BBC')) exit('No direct script access allowed');

$count = count($output['images']);
if ($count > 0) {
  $style = !empty($output['config']['fixsize']) ? ' style="width:' . @$output['cat']['width'] . 'px;height:' . @$output['cat']['height'] . 'px;overflow:hidden;"' : '';
  ?>
  <div class="hero-slider">
    <?php
    foreach ($output['images'] as $key => $dt) {
      $cls = $key ? '' : ' active';
      ?>
      <div class="item<?php echo $cls; ?>">
        <!-- Slider Item -->
        <div class="slider-item slide1" style="background-image: url(<?php echo $dt['image'] ?>)">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <!-- Slide Content Start -->
                <div class="content style text-center">
                  <h2 class="text-white text-bold mb-2"><?php echo $dt['title'] ?></h2>
                  <p class="tag-text mb-5">
                    <?php echo $dt['description'] ?>
                  </p>
                  <a href="#" class="btn btn-main btn-white"> <?php echo lang('explore') ?></a>
                </div>
                <!-- Slide Content End -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php
    }
    ?>
  </div>
  <?php
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
