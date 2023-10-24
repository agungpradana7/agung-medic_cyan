<?php if (!defined('_VALID_BBC')) exit('No direct script access allowed');

?>
<ul class="contact-info">
  <?php
    unset($config['template']);
    foreach ($config as $key => $value) {
      $contact_us = explode(" | ", $value);
      // pr($contact_us);
      foreach ($contact_us as $item) {
        if (filter_var($item, FILTER_VALIDATE_EMAIL)) {
          ?>
            <li class="item">
              <div class="icon-box">
                <i class="fa fa-envelope-o"></i>
              </div>
              <strong><?php echo lang('Email') ?></strong>
              <br />
              <a href="#">
                <span><?php echo $item ?></span>
              </a>
            </li>
          <?php
        } else {
          ?>
            <li class="item">
              <div class="icon-box">
                <i class="fa fa-phone"></i>
              </div>
              <strong><?php echo lang('Call Now') ?></strong>
              <br />
              <span><?php echo $item ?></span>
            </li>
          <?php
        }
      }
      ?>
  <?php
  }
  ?>
</ul>
<div class="link-btn">
  <a href="contact-us.html" class="btn-style-one"><?php echo lang('Appoinment') ?></a>
</div>