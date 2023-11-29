<?php if (!defined('_VALID_BBC')) exit('No direct script access allowed'); ?>

<div class="col-md-4 col-sm-6 col-xs-12">
  <div class="about-widget">
    <div class="footer-logo">
      <figure>
        <a href="index.html">
          <img src="<?php echo $config['image'] ?>" alt="">
        </a>
      </figure>
    </div>
    <p><?php echo $config['description'] ?></p>
    <ul class="location-link">
      <?php
      unset($config['template'], $config['image'], $config['description']);
      $sosmed    = array_splice($config, 3, 4);
      foreach ($config as $key => $links) {
        if (filter_var(is_email($links))) {
          $icon = 'fa-envelope-o';
        } elseif (filter_var(is_phone($links))) {
          $icon = 'fa-phone';
        } else {
          $icon = 'fa-map-marker';
        }
      ?>
        <li class="item">
          <i class="fa <?php echo $icon ?>"></i>
          <p><?php echo $links ?></p>
        </li>
      <?php
      }
      ?>
    </ul>
    <ul class="list-inline social-icons">
      <?php foreach ($sosmed as $key => $links) {
      ?>
        <li><a href="<?php echo $links ?>"><i class="fa fa-<?php echo $key ?>"></i></a></li>
      <?php
      }
      ?>
    </ul>
  </div>
</div>