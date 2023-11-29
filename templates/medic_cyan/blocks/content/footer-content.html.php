<?php if (!defined('_VALID_BBC')) exit('No direct script access allowed');

if (!empty($cat['list']) && is_array($cat['list'])) {
?>
  <div class="col-md-4 col-sm-6 col-xs-12">
    <div class="social-links">
      <h6><?php echo lang('Recent Posts') ?></h6>
      <ul>
        <?php
        foreach ($cat['list'] as $data) {
          $content = substr($data['intro'], 0, 100);
        ?>
          <li class="item">
            <div class="media">
              <div class="media-left">
                <a href="#">
                  <img class="media-object" src="<?php echo $data['image'] ?>" style="width: 90px; height: 90px;" alt="post-thumb">
                </a>
              </div>
              <div class="media-body">
                <h4 class="media-heading"><a href="#"><?php echo $data['title'] ?></a></h4>
                <p><?php echo $content ?></p>
              </div>
            </div>
          </li>
        <?php
        }
        ?>
      </ul>
    </div>
  </div>
<?php
}
