<?php if (!defined('_VALID_BBC')) exit('No direct script access allowed'); ?>

<section class="promo-video">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="block text-center">
          <h6><?php echo lang('About Our Hospital') ?></h6>
          <h1><?php echo lang('The World') ?> <br>
            <?php echo lang('Class Hospitality') ?>
          </h1>
          <?php
          unset($config['template']);
          foreach ($config as $data) {
          ?>
            <a data-fancybox href="<?php echo $data ?>"><i class="fa fa-play"></i></a>
          <?php
          }
          ?>
        </div>
      </div>
    </div>
  </div>
</section>