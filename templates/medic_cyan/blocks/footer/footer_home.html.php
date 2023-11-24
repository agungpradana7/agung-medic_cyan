<?php if (!defined('_VALID_BBC')) exit('No direct script access allowed'); ?>


<footer class="footer-main">
  <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="about-widget">
            <div class="footer-logo">
              <figure>
                <a href="index.html">
                  <img src="/agung/templates/medic_cyan/images/logo-2.png" alt="">
                </a>
              </figure>
            </div>
            <p><?php lang('Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, temporibus?') ?></p>
            <ul class="location-link">
              <?php
              unset($config['template']);
              $sosmed = array_splice($config, 3, 4);
              foreach ($config as $key => $links) {
                if (filter_var(is_email($links))) {
                  $icon = 'fa-envelope-o';
                } elseif (filter_var(is_phone($links))) {
                  $icon = 'fa-phone';
                } else {
                  $icon = 'fa-map-marker';
                }
              ?>
                <li class="item">
                  <i class="fa <?php echo $icon ?>"></i>
                  <p><?php echo $links ?></p>
                </li>
              <?php
              }
              ?>
            </ul>
            <ul class="list-inline social-icons">
              <?php foreach ($sosmed as $key => $links) {
                ?>
                <li><a href="<?php echo $links ?>"><i class="fa fa-<?php echo $key ?>"></i></a></li>
                <?php
              } 
              ?>
            </ul>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <h6><?php echo lang('Services') ?></h6>
          <ul class="menu-link">
            <li>
              <a href="#">
                <i class="fa fa-angle-right" aria-hidden="true"></i><?php echo lang('Orthopadic Liabilities') ?></a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-angle-right" aria-hidden="true"></i><?php echo lang('Dental Clinic') ?></a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-angle-right" aria-hidden="true"></i><?php echo lang('Dormamu Clinic') ?></a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-angle-right" aria-hidden="true"></i><?php echo lang('Psycological Clinic') ?></a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-angle-right" aria-hidden="true"></i><?php echo lang('Gynaecological Clinic') ?></a>
            </li>
          </ul>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="social-links">
            <h6><?php echo lang('Recent Posts') ?></h6>
            <ul>
              <li class="item">
                <div class="media">
                  <div class="media-left">
                    <a href="#">
                      <img class="media-object" src="/agung/templates/medic_cyan/images/blog/post-thumb-small.jpg" alt="post-thumb">
                    </a>
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading"><a href="#">Post Title</a></h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, dolorem.</p>
                  </div>
                </div>
              </li>
              <li class="item">
                <div class="media">
                  <div class="media-left">
                    <a href="#">
                      <img class="media-object" src="/agung/templates/medic_cyan/images/blog/post-thumb-small.jpg" alt="post-thumb">
                    </a>
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading">
                      <a href="#">Post Title</a>
                    </h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, dolorem.</p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container clearfix">
      <div class="copyright-text">
        <p>&copy; <?php echo lang('Copyright 2018. All Rights Reserved by') ?>
          <a href="index.html"><?php echo lang('Medic') ?></a>
        </p>
      </div>
      <ul class="footer-bottom-link">
        <li>
          <a href="index.html"><?php echo lang('Home') ?></a>
        </li>
        <li>
          <a href="about.html"><?php echo lang('About') ?></a>
        </li>
        <li>
          <a href="contact.html"><?php echo lang('Contact') ?></a>
        </li>
      </ul>
    </div>
  </div>
</footer>