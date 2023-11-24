<?php if (!defined('_VALID_BBC')) exit('No direct script access allowed');

if (!empty($cat['list']) && is_array($cat['list'])) {
?>
  <section class="feature-section section bg-gray">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-xs-12">
          <div class="image-content">
            <div class="section-title text-center">
              <h3><?php echo lang('Best Features')?>
                <span><?php echo lang('of Our Hospital') ?></span>
              </h3>
              <p><?php echo lang('Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam magni in at debitis <br>
                nam error officia vero tempora alias? Sunt?') ?></p>
            </div>
            <div class="row">
              <?php
              foreach ($cat['list'] as $data) {
              ?>
                <div class="col-sm-6">
                  <div class="item">
                    <div class="icon-box">
                      <figure>
                        <a href="#">
                          <img src="<?php echo $data['image'] ?>" style="width: 50px; height: 50px;" alt="">
                        </a>
                      </figure>
                    </div>
                    <h6><?php echo $data['title']?></h6>
                    <p><?php echo $data['content']?></p>
                  </div>
                </div>
              <?php
              }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php
}
