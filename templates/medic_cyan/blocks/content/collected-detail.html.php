<?php if (!defined('_VALID_BBC')) exit('No direct script access allowed'); ?>


<?php
foreach ($cat['list'] as $data) {
  $content = substr($data['content'], 0, 50)
  ?>
  <div class="col-md-4 col-sm-6">
    <a href="<?php echo content_link($data['id'], $data['title']) ?>">
      <div class="gallery-item">
        <img src="<?php echo content_src($data['image'], false, false) ?>" style="width: 360px; height: 360px;" class="img-responsive" alt="gallery-image">
        <h3><?php echo $data['title'] ?></h3>
        <p><?php echo $content ?></p>
      </div>
    </a>
  </div>
  <?php
}
