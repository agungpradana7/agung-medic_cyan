<?php if (!defined('_VALID_BBC')) exit('No direct script access allowed'); ?>

<div class="header-top">
  <div class="container clearfix">
    <div class="top-left">
      <h6><?php echo $config['open_hours'] ?></h6>
    </div>
    <div class="top-right">
      <ul class="social-links">
        <?php
        unset($config['template'], $config['open_hours']);
        foreach ($config as $key => $links) {
        ?>
          <li>
            <a href="<?php echo $links ?>">
              <i class="fa fa-<?php echo $key ?>" aria-hidden="true"></i>
            </a>
          </li>
        <?php
        }
        ?>  
      </ul>
    </div>
  </div>
</div>