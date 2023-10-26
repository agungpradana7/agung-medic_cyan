<?php if (!defined('_VALID_BBC')) exit('No direct script access allowed');

?>
<ul class="contact-info">
  <?php
  // unset($config['template']);
  $contact_us = $config['caption'];
  $contact = explode(" | ", $contact_us);
  // pr($contact_us);
  foreach ($contact as $item) {
    if (filter_var($item, FILTER_VALIDATE_EMAIL)) {
      $icon = 'envelope-o';
      $title = lang('email');
    } else {

      $icon = 'phone';
      $title = lang('Call Now');
    }

    ?>
    <li class="item">
      <div class="icon-box">
        <i class="fa fa-<?php echo $icon ?>"></i>
      </div>
      <strong><?php echo $title ?></strong>
      <br />
      <a href="#">
        <span><?php echo $item ?></span>
      </a>
    </li>
    <?php
  }
  ?>
</ul>
<div class="link-btn">
  <a href="<?php echo site_url('contact/main') ?>" class="btn-style-one"><?php echo lang('Appoinment') ?></a>
</div>