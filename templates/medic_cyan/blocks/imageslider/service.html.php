<?php if (!defined('_VALID_BBC')) exit('No direct script access allowed');

$count = count($output['images']);
if ($count > 0) {
?>
  <section class="service-section bg-gray section">
    <div class="container">
      <div class="section-title text-center">
        <h3><?php echo lang('Provided') ?>
          <span><?php echo lang('Services') ?></span>
        </h3>
        <p><?php echo lang('Lorem ipsum, dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet. qui suscipit atque <br>
          fugiat officia corporis rerum eaque neque totam animi, sapiente culpa. Architecto!')?></p>
      </div>
      <div class="row items-container clearfix">
        <?php
        foreach ($output['images'] as $key => $dt) {
        ?>
          <div class="item">
            <div class="inner-box">
              <div class="img_holder">
                <a href="service.html">
                  <img src="<?php echo $dt['image'] ?>" alt="images" class="img-responsive">
                </a>
              </div>
              <div class="image-content text-center">
                <span><?php echo $dt['description'] ?></span>
                <a href="service.html">
                  <h6><?php echo $dt['title'] ?></h6>
                </a>
                <p><?php echo lang('Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.') ?></p>
              </div>
            </div>
          </div>
        <?php
        }
        ?>
      </div>
    </div>
  </section>
<?php
}
