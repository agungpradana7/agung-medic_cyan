<?php if (!defined('_VALID_BBC')) exit('No direct script access allowed');

$count = count($output['images']);
if ($count > 0) {
  ?>
  <section class="service-section bg-gray section">
  <div class="container">
    <div class="section-title text-center">
      <h3>Provided
        <span>Services</span>
      </h3>
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet. qui suscipit atque <br>
        fugiat officia corporis rerum eaque neque totam animi, sapiente culpa. Architecto!</p>
    </div>
    <?php
    foreach ($output['images'] as $key => $dt) {
      $cls = $key ? '' : ' active';
      ?>
      <div class="item<?php echo $cls; ?>">
        <div class="row items-container clearfix">
          <div class="item">
            <div class="inner-box">
              <div class="img_holder">
                <a href="service.html">
                  <img src="<?php echo $dt['image']?>" alt="images" class="img-responsive">
                </a>
              </div>
              <div class="image-content text-center">
                <span>Better Service At Low Cost</span>
                <a href="service.html">
                  <h6><?php echo $dt['title'] ?></h6>
                </a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php
    }
    ?>
    </div>
</section>
  <?php
}


    
