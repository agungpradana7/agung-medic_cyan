<?php if (!defined('_VALID_BBC')) exit('No direct script access allowed'); ?>


  <?php
  foreach ($cat['list'] as $data) {
  $intro   = substr($data['intro'], 0, 30);
  $content = substr($data['content'], 0, 80);
  ?>
  <div class="item">
    <div class="inner-box">
      <div class="img_holder">
        <a href="<?php echo content_link($data['id'], $data['title']) ?>">
          <img src="<?php echo content_src($data['image'], false, false) ?>" alt="images" class="img-responsive">
        </a>
      </div>
      <div class="image-content text-center">
        <span><?php echo $intro ?></span>
        <a href="<?php echo content_link($data['id'], $data['title']) ?>">
          <h6><?php echo $data['title'] ?></h6>
        </a>
        <p><?php echo $content ?></p>
      </div>
    </div>
  </div>
<?php
}
