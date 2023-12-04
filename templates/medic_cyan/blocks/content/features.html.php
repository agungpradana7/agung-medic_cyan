<?php if (!defined('_VALID_BBC')) exit('No direct script access allowed');

if (!empty($cat['list']) && is_array($cat['list'])) {
?>
  <?php
  foreach ($cat['list'] as $data) {
    $content = substr($data['content'], 0, 200);
    ?>
    <div class="col-sm-6">
      <div class="item">
        <div class="icon-box">
          <figure>
            <a href="<?php echo content_link($data['id'], $data['title']) ?>">
              <img src="<?php echo content_src($data['image'], false, false) ?>" style="width: 50px; height: 50px;" alt="">
            </a>
          </figure>
        </div>
        <h6><?php echo $data['title'] ?></h6>
        <p><?php echo $content ?></p>
      </div>
    </div>
    <?php
  }
  ?>
<?php
}
