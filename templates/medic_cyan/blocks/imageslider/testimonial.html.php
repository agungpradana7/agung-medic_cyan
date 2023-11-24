<?php if (!defined('_VALID_BBC')) exit('No direct script access allowed');

$count = count($output['images']);
if ($count > 0) {
?>
  <section class="testimonial-section" style="background: url(/agung/templates/medic_cyan/images/testimonials/1.jpg);">
    <div class="container">
      <div class="section-title text-center">
        <h3><?php echo lang('What Our') ?>
          <span><?php echo lang('Patients Says') ?></span>
        </h3>
      </div>
      <div class="testimonial-carousel">
        <?php
        foreach ($output['images'] as $key => $dt) {
        ?>
          <div class="slide-item">
            <div class="inner-box text-center">
              <div class="image-box">
                <figure>
                  <img style="background-image: url(<?php echo $dt['image'] ?>" alt="">
                </figure>
              </div>
              <h6><?php echo $dt['title'] ?></h6>
              <p><?php echo lang('Neque porro quisquam est, qui dolorem ipsum quia consectetur, dolor sit amet, consectetur, numquam Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, at?') ?></p>
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
