<?php if (!defined('_VALID_BBC')) exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">

<head><?php echo $sys->meta(); ?>
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

</head>

<body>
  <div class="page-wrapper">

    <?php echo $sys->block_show('header'); ?>

    <section class="header-uper">
        <div class="container clearfix">
          <div class="logo">
            <figure>
              <a href="index.html">
              <?php echo $sys->block_show('logo'); ?>
              </a>
            </figure>
          </div>
          <div class="right-side">
          <?php echo $sys->block_show('right'); ?>
          </div>
        </div>
      </section>




    <?php echo $sys->block_show('top'); ?>



    <?php echo $sys->block_show('content_top'); ?>


    <section class="cta">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="cta-block">
              <div class="top-doctor item">
                <?php echo trim($Bbc->content); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php echo $sys->block_show('content_bottom'); ?>

    <?php echo $sys->block_show('footer'); ?>


  </div>
  <!--End pagewrapper-->


  <!--Scroll to top-->
  <div class="scroll-to-top scroll-to-target" data-target=".header-top">
    <span class="icon fa fa-angle-up"></span>
  </div>

  <script src="<?php echo _URL; ?>templates/admin/bootstrap/js/bootstrap.min.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
  <!-- <script src="/agung/templates/medic_cyan/plugins/google-map/gmap.js"></script> -->

  <?php
  $sys->link_js($sys->template_url . 'plugins/google-map/gmap.js', false);
  $sys->link_js($sys->template_url . 'plugins/bootstrap-select.min.js', false);
  $sys->link_js($sys->template_url . 'plugins/slick/slick.min.js', false);
  $sys->link_js($sys->template_url . 'plugins/fancybox/jquery.fancybox.min.js', false);
  $sys->link_js($sys->template_url . 'plugins/validate.js', false);
  $sys->link_js($sys->template_url . 'plugins/wow.js', false);
  $sys->link_js($sys->template_url . 'plugins/jquery-ui.js', false);
  $sys->link_js($sys->template_url . 'lugins/timePicker.js', false);
  $sys->link_js($sys->template_url . 'js/script.js', false);
  ?>
</body>

</html>