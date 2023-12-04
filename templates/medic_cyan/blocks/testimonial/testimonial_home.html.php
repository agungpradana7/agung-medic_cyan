<?php if (!defined('_VALID_BBC')) exit('No direct script access allowed');

if (!empty($output['data']) && is_array($output['data'])) {
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
        foreach ($output['data'] as $data) {
          $massage = substr($data['message'], 0, 53);
          if (!empty($output['config']['avatar']) && preg_match('~ src="(.*?)"~', $sys->avatar($data['email']), $match)) {
          ?>
            <div class="slide-item">
              <div class="inner-box text-center">
                <div class="image-box">
                  <figure>
                    <img src="<?php echo 'https://gravatar.com/avatar/' . md5($data['email']) ?>" alt="">
                  </figure>
                </div>
                <h6><?php echo $data['name'] ?></h6>
                <p><?php echo $massage ?></p>
                <a href="index.php?mod=testimonial"><?php echo lang('Read More') ?></a>
              </div>
            </div>
          <?php
          }
          ?>
        <?php
        }
        ?>
      </div>
    </div>
  </section>
<?php
}
if ($output['config']['readmore'])
{
	?>
	<div class="text text-muted text-right"><a href="index.php?mod=testimonial"><?php echo lang('Read more') ?> </a></div><br />
	<div class="clearfix"></div>
	<?php
}
