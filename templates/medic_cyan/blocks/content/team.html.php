<?php if (!defined('_VALID_BBC')) exit('No direct script access allowed');

if (!empty($cat['list']) && is_array($cat['list'])) {
?>
  <section class="team-section section">
    <div class="container">
      <div class="section-title text-center">
        <h3><?php echo lang('Our Expert') ?>
          <span><?php echo lang('Doctors') ?></span>
        </h3>
        <p><?php echo lang('Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem illo, rerum
          <br>natus nobis deleniti doloremque minima odit voluptatibus ipsam animi?') ?>
        </p>
      </div>
      <div class="row">
        <?php
        foreach ($cat['list'] as $data) {
        ?>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="team-member">
              <img src="<?php echo $data['image'] ?>" alt="doctor" class="img-responsive">
              <div class="contents text-center">
                <h4><?php echo $data['title'] ?></h4>
                <p><?php echo $data['content'] ?></p>
                <a href="<?php echo content_link($item['id'], $item['title']) ?>" class="btn btn-main"><?php echo lang('read more') ?></a>
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
?>