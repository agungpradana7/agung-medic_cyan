<?php if (!defined('_VALID_BBC')) exit('No direct script access allowed');

foreach ($cat['list'] as $data) {
  ?>
  <section class="page-title text-center" style="background-image:url(<?php echo content_src($data['image'], false, false) ?>);">
    <div class="container">
      <div class="title-text">
        <h1><?php echo lang('About Us') ?></h1>
        <ul class="title-menu clearfix">
          <a href="<?php echo $sys->nav_show(); ?>"></a>
        </ul>
      </div>
    </div>
  </section>
  <?php
}
