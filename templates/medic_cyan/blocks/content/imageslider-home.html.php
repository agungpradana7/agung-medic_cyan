<?php if (!defined('_VALID_BBC')) exit('No direct script access allowed'); ?>

<div class="hero-slider">
  <?php
  foreach ($cat['list'] as $key => $dt) {
    $cls = $key ? '' : ' active';
    ?>
    <div class="item<?php echo $cls; ?>">
      <!-- Slider Item -->
      <div class="slider-item slide1" style="background-image: url(<?php echo content_src($dt['image'], false, false) ?>)">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <!-- Slide Content Start -->
              <div class="content style text-center">
                <h2 class="text-white text-bold mb-2"><?php echo $dt['title'] ?></h2>
                <p class="tag-text mb-5">
                  <?php echo $dt['intro'] ?>
                </p>
                <a href="<?php echo content_link($dt['id'], $dt['title']) ?>" class="btn btn-main btn-white"> <?php echo lang('Learn More') ?></a>
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