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
    <!-- Preloader -->
    <!-- <div class="preloader"></div> -->
    <!-- Preloader -->



    <!--header top-->
    <?php echo $sys->block_show('header'); ?>
    <div class="header-top">
      <div class="container clearfix">
        <div class="top-left">
          <h6>Opening Hours : Saturday to Tuesday - 8am to 10pm</h6>
        </div>
        <div class="top-right">
          <ul class="social-links">
            <li>
              <a href="#">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-google-plus" aria-hidden="true"></i>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-pinterest-p" aria-hidden="true"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!--header top-->

    <!--Header Upper-->
    <section class="header-uper">
      <div class="container clearfix">
        <div class="logo">
          <figure>
            <a href="index.html">
              <img src="/agung/templates/medic_cyan/images/logo.png" alt="" width="130" <?php echo $sys->block_show('logo'); ?>>
            </a>
          </figure>
        </div>
        <div class="right-side">
          <ul class="contact-info">
            <li class="item">
              <div class="icon-box">
                <i class="fa fa-envelope-o"></i>
              </div>
              <strong>Email</strong>
              <br>
              <a href="#">
                <span>info@medic.com</span>
              </a>
            </li>
            <li class="item">
              <div class="icon-box">
                <i class="fa fa-phone"></i>
              </div>
              <strong>Call Now</strong>
              <br>
              <span>+ (88017) - 123 - 4567</span>
            </li>
          </ul>
          <div class="link-btn">
            <a href="#" class="btn-style-one">Appoinment</a>
          </div>
        </div>
      </div>
    </section>
    <!--Header Upper-->


    <!--Main Header-->
    <nav class="navbar navbar-default">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active">
              <a href="index.html">Home</a>
            </li>
            <li>
              <a href="about.html">About</a>
            </li>
            <li>
              <a href="service.html">Service</a>
            </li>
            <li>
              <a href="gallery.html">Gallery</a>
            </li>
            <li>
              <a href="team.html">Team</a>
            </li>
            <li>
              <a href="appointment.html">Appointment</a>
            </li>
            <li>
              <a href="blog.html">Blog</a>
            </li>
            <li>
              <a href="contact.html">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!--End Main Header -->

    <!--=================================
    =            Page Slider            =
    ==================================-->
    <div class="hero-slider">
      <!-- Slider Item -->
      <div class="slider-item slide1" style="background-image:url(/agung/templates/medic_cyan/images/slider/slider-bg-1.jpg)">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <!-- Slide Content Start -->
              <div class="content style text-center">
                <h2 class="text-white text-bold mb-2">Our Best Surgeons</h2>
                <p class="tag-text mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel sunt animi sequi ratione quod at earum. <br>
                  Quis quos officiis numquam!</p>
                <a href="#" class="btn btn-main btn-white">explore</a>
              </div>
              <!-- Slide Content End -->
            </div>
          </div>
        </div>
      </div>
      <!-- Slider Item -->
      <div class="slider-item" style="background-image:url(/agung/templates/medic_cyan/images/slider/slider-bg-2.jpg);">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <!-- Slide Content Start-->
              <div class="content style text-right">
                <h2 class="text-white">We Care About <br>Your Health</h2>
                <p class="tag-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                <a href="#" class="btn btn-main btn-white">about us</a>
              </div>
              <!-- Slide Content End-->
            </div>
          </div>
        </div>
      </div>
      <!-- Slider Item -->
      <div class="slider-item" style="background-image:url(/agung/templates/medic_cyan/images/slider/slider-bg-3.jpg)">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <!-- Slide Content Start -->
              <div class="content text-center style">
                <h2 class="text-white text-bold mb-2">Best Medical Services</h2>
                <p class="tag-text mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae deserunt,
                  <br>eius pariatur minus itaque nostrum.
                </p>
                <a href="shop.html" class="btn btn-main btn-white">shop now</a>
              </div>
              <!-- Slide Content End -->
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--====  End of Page Slider  ====-->

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

    <!--about section-->
    <section class="feature-section section bg-gray">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-xs-12">
            <div class="image-content">
              <div class="section-title text-center">
                <h3>Best Features
                  <span>of Our Hospital</span>
                </h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam magni in at debitis <br>
                  nam error officia vero tempora alias? Sunt?</p>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="item">
                    <div class="icon-box">
                      <figure>
                        <a href="#">
                          <img src="/agung/templates/medic_cyan/images/resource/1.png" alt="">
                        </a>
                      </figure>
                    </div>
                    <h6>Orthopedics</h6>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil ducimus veniam illo quibusdam pariatur ex sunt, est aspernatur
                      at debitis eius vitae vel nostrum dolorem labore autem corrupti odit mollitia?</p>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="item">
                    <div class="icon-box">
                      <figure>
                        <a href="#">
                          <img src="/agung/templates/medic_cyan/images/resource/2.png" alt="">
                        </a>
                      </figure>
                    </div>
                    <h6>Diaginostic</h6>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil ducimus veniam illo quibusdam pariatur ex sunt, est aspernatur
                      at debitis eius vitae vel nostrum dolorem labore autem corrupti odit mollitia?</p>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="item">
                    <div class="icon-box">
                      <figure>
                        <a href="#">
                          <img src="/agung/templates/medic_cyan/images/resource/3.png" alt="">
                        </a>
                      </figure>
                    </div>
                    <h6>Psycology</h6>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil ducimus veniam illo quibusdam pariatur ex sunt, est aspernatur
                      at debitis eius vitae vel nostrum dolorem labore autem corrupti odit mollitia?</p>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="item">
                    <div class="icon-box">
                      <figure>
                        <a href="#">
                          <img src="/agung/templates/medic_cyan/images/resource/4.png" alt="">
                        </a>
                      </figure>
                    </div>
                    <h6>General Treatment</h6>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil ducimus veniam illo quibusdam pariatur ex sunt, est aspernatur
                      at debitis eius vitae vel nostrum dolorem labore autem corrupti odit mollitia?</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--End about section-->

    <!--Start about us area-->
    <section class="service-tab-section section">
      <div class="outer-box clearfix">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <!-- Nav tabs -->
              <div class="tabs">
                <ul class="nav nav-tabs" role="tablist">
                  <li role="presentation" class="active">
                    <a href="#dormitory" data-toggle="tab">dormitory</a>
                  </li>
                  <li role="presentation">
                    <a href="#orthopedic" data-toggle="tab">orthopedic</a>
                  </li>
                  <li role="presentation">
                    <a href="#sonogram" data-toggle="tab">sonogram</a>
                  </li>
                  <li role="presentation">
                    <a href="#x-ray" data-toggle="tab">x-ray</a>
                  </li>
                  <li role="presentation">
                    <a href="#diagnostic" data-toggle="tab">diagnostic</a>
                  </li>
                </ul>
              </div>
              <!--Start single tab content-->
              <div class="tab-content">
                <div class="service-box tab-pane fade in active row" id="dormitory">
                  <div class="col-md-6">
                    <img class="img-responsive" src="/agung/templates/medic_cyan/images/services/service-one.jpg" alt="service-image">
                  </div>
                  <div class="col-md-6">
                    <div class="contents">
                      <div class="section-title">
                        <h3>dormitory</h3>
                      </div>
                      <div class="text">
                        <p>The implant fixture is first placed, so that it ilikely to osseointegrate, then a dental prosthetic is added. then a
                          dental prosthetic is added.then a dental pros- thetic is added.</p>
                        <p>The implant fixture is first placed, so that it ilikely to osseointegrate, then a dental prosthetic is added. then a dental
                          prosthetic is added.then a dental pros- thetic is added.</p>
                      </div>
                      <ul class="content-list">
                        <li>
                          <i class="fa fa-dot-circle-o"></i>Whitening is among the most popular dental
                        </li>
                        <li>
                          <i class="fa fa-dot-circle-o"></i>Teeth cleaning is part of oral hygiene and involves
                        </li>
                        <li>
                          <i class="fa fa-dot-circle-o"></i>Teeth cleaning is part of oral hygiene and involves
                        </li>
                      </ul>
                      <a href="#" class="btn btn-style-one">Read more</a>
                    </div>
                  </div>
                </div>
                <!--End single tab content-->
                <!--Start single tab content-->
                <div class="service-box tab-pane fade in" id="orthopedic">
                  <div class="col-md-6">
                    <img class="img-responsive" src="/agung/templates/medic_cyan/images/services/service-two.jpg" alt="service-image">
                  </div>
                  <div class="col-md-6">
                    <div class="contents">
                      <div class="section-title">
                        <h3>orthopedic</h3>
                      </div>
                      <div class="text">
                        <p>The implant fixture is first placed, so that it ilikely to osseointegrate, then a dental prosthetic is added.
                          then a dental prosthetic is added.then a dental pros- thetic is added.</p>
                        <p>The implant fixture is first placed, so that it ilikely to osseointegrate, then a dental prosthetic is added.
                          then a dental prosthetic is added.then a dental pros- thetic is added.</p>
                      </div>
                      <ul class="content-list">
                        <li>
                          <i class="fa fa-dot-circle-o"></i>Whitening is among the most popular dental
                        </li>
                        <li>
                          <i class="fa fa-dot-circle-o"></i>Teeth cleaning is part of oral hygiene and involves
                        </li>
                        <li>
                          <i class="fa fa-dot-circle-o"></i>Teeth cleaning is part of oral hygiene and involves
                        </li>
                      </ul>
                      <a href="#" class="btn btn-style-one">Read more</a>
                    </div>
                  </div>
                </div>
                <!--End single tab content-->
                <!--Start single tab content-->
                <div class="service-box tab-pane fade in" id="sonogram">
                  <div class="col-md-6">
                    <img class="img-responsive" src="/agung/templates/medic_cyan/images/services/service-three.jpg" alt="service-image">
                  </div>
                  <div class="col-md-6">
                    <div class="contents">
                      <div class="section-title">
                        <h3>sonogram</h3>
                      </div>
                      <div class="text">
                        <p>The implant fixture is first placed, so that it ilikely to osseointegrate, then a dental prosthetic is added.
                          then a dental prosthetic is added.then a dental pros- thetic is added.</p>
                        <p>The implant fixture is first placed, so that it ilikely to osseointegrate, then a dental prosthetic is added.
                          then a dental prosthetic is added.then a dental pros- thetic is added.</p>
                      </div>
                      <ul class="content-list">
                        <li>
                          <i class="fa fa-dot-circle-o"></i>Whitening is among the most popular dental
                        </li>
                        <li>
                          <i class="fa fa-dot-circle-o"></i>Teeth cleaning is part of oral hygiene and involves
                        </li>
                        <li>
                          <i class="fa fa-dot-circle-o"></i>Teeth cleaning is part of oral hygiene and involves
                        </li>
                      </ul>
                      <a href="#" class="btn btn-style-one">Read more</a>
                    </div>
                  </div>
                </div>
                <!--End single tab content-->
                <!--Start single tab content-->
                <div class="service-box tab-pane fade in" id="x-ray">
                  <div class="col-md-6">
                    <img class="img-responsive" src="/agung/templates/medic_cyan/images/services/service-four.jpg" alt="service-image">
                  </div>
                  <div class="col-md-6">
                    <div class="contents">
                      <div class="section-title">
                        <h3>x-ray</h3>
                      </div>
                      <div class="text">
                        <p>The implant fixture is first placed, so that it ilikely to osseointegrate, then a dental prosthetic is added.
                          then a dental prosthetic is added.then a dental pros- thetic is added.</p>
                        <p>The implant fixture is first placed, so that it ilikely to osseointegrate, then a dental prosthetic is added.
                          then a dental prosthetic is added.then a dental pros- thetic is added.</p>
                      </div>
                      <ul class="content-list">
                        <li>
                          <i class="fa fa-dot-circle-o"></i>Whitening is among the most popular dental
                        </li>
                        <li>
                          <i class="fa fa-dot-circle-o"></i>Teeth cleaning is part of oral hygiene and involves
                        </li>
                        <li>
                          <i class="fa fa-dot-circle-o"></i>Teeth cleaning is part of oral hygiene and involves
                        </li>
                      </ul>
                      <a href="#" class="btn btn-style-one">Read more</a>
                    </div>
                  </div>
                </div>
                <!--End single tab content-->
                <!--Start single tab content-->
                <div class="service-box tab-pane fade in" id="diagnostic">
                  <div class="col-md-6">
                    <img class="img-responsive" src="/agung/templates/medic_cyan/images/services/service-five.jpg" alt="service-image">
                  </div>
                  <div class="col-md-6">
                    <div class="contents">
                      <div class="section-title">
                        <h3>diagnostic</h3>
                      </div>
                      <div class="text">
                        <p>The implant fixture is first placed, so that it ilikely to osseointegrate, then a dental prosthetic is added.
                          then a dental prosthetic is added.then a dental pros- thetic is added.</p>
                        <p>The implant fixture is first placed, so that it ilikely to osseointegrate, then a dental prosthetic is added.
                          then a dental prosthetic is added.then a dental pros- thetic is added.</p>
                      </div>
                      <ul class="content-list">
                        <li>
                          <i class="fa fa-dot-circle-o"></i>Whitening is among the most popular dental
                        </li>
                        <li>
                          <i class="fa fa-dot-circle-o"></i>Teeth cleaning is part of oral hygiene and involves
                        </li>
                        <li>
                          <i class="fa fa-dot-circle-o"></i>Teeth cleaning is part of oral hygiene and involves
                        </li>
                      </ul>
                      <a href="#" class="btn btn-style-one">Read more</a>
                    </div>
                  </div>
                </div>
                <!--End single tab content-->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--End about us area-->

    <!--Service Section-->
    <section class="service-section bg-gray section">
      <div class="container">
        <div class="section-title text-center">
          <h3>Provided
            <span>Services</span>
          </h3>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet. qui suscipit atque <br>
            fugiat officia corporis rerum eaque neque totam animi, sapiente culpa. Architecto!</p>
        </div>
        <div class="row items-container clearfix">
          <div class="item">
            <div class="inner-box">
              <div class="img_holder">
                <a href="service.html">
                  <img src="/agung/templates/medic_cyan/images/gallery/1.jpg" alt="images" class="img-responsive">
                </a>
              </div>
              <div class="image-content text-center">
                <span>Better Service At Low Cost</span>
                <a href="service.html">
                  <h6>Dormitory</h6>
                </a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.</p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="inner-box">
              <div class="img_holder">
                <a href="service.html">
                  <img src="/agung/templates/medic_cyan/images/gallery/2.jpg" alt="images" class="img-responsive">
                </a>
              </div>
              <div class="image-content text-center">
                <span>Better Service At Low Cost</span>
                <a href="service.html">
                  <h6>Germs Protection</h6>
                </a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.</p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="inner-box">
              <div class="img_holder">
                <a href="service.html">
                  <img src="/agung/templates/medic_cyan/images/gallery/3.jpg" alt="images" class="img-responsive">
                </a>
              </div>
              <div class="image-content text-center">
                <span>Better Service At Low Cost</span>
                <a href="service.html">
                  <h6>Psycology</h6>
                </a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.</p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="inner-box">
              <div class="img_holder">
                <a href="service.html">
                  <img src="/agung/templates/medic_cyan/images/gallery/1.jpg" alt="images" class="img-responsive">
                </a>
              </div>
              <div class="image-content text-center">
                <span>Better Service At Low Cost</span>
                <a href="service.html">
                  <h6>Dormitory</h6>
                </a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.</p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="inner-box">
              <div class="img_holder">
                <a href="service.html">
                  <img src="/agung/templates/medic_cyan/images/gallery/2.jpg" alt="images" class="img-responsive">
                </a>
              </div>
              <div class="image-content text-center">
                <span>Better Service At Low Cost</span>
                <a href="service.html">
                  <h6>Germs Protection</h6>
                </a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.</p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="inner-box">
              <div class="img_holder">
                <a href="service.html">
                  <img src="/agung/templates/medic_cyan/images/gallery/3.jpg" alt="images" class="img-responsive">
                </a>
              </div>
              <div class="image-content text-center">
                <span>Better Service At Low Cost</span>
                <a href="service.html">
                  <h6>Psycology</h6>
                </a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--End Service Section-->

    <!--team section-->
    <section class="team-section section">
      <div class="container">
        <div class="section-title text-center">
          <h3>Our Expert
            <span>Doctors</span>
          </h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem illo, rerum
            <br>natus nobis deleniti doloremque minima odit voluptatibus ipsam animi?
          </p>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="team-member">
              <img src="/agung/templates/medic_cyan/images/team/doctor-2.jpg" alt="doctor" class="img-responsive">
              <div class="contents text-center">
                <h4>Dr. Robert Barrethion</h4>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos, aspernatur.</p>
                <a href="#" class="btn btn-main">read more</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="team-member">
              <img src="/agung/templates/medic_cyan/images/team/doctor-lab-3.jpg" alt="doctor" class="img-responsive">
              <div class="contents text-center">
                <h4>Dr. Marry Lou</h4>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos, aspernatur.</p>
                <a href="#" class="btn btn-main">read more</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="team-member">
              <img src="/agung/templates/medic_cyan/images/team/event-2.jpg" alt="doctor" class="img-responsive">
              <div class="contents text-center">
                <h4>Dr. Sansa Stark</h4>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos, aspernatur.</p>
                <a href="#" class="btn btn-main">read more</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--End team section-->

    <!--testimonial-section-->
    <section class="testimonial-section" style="background: url(/agung/templates/medic_cyan/images/testimonials/1.jpg);">
      <div class="container">
        <div class="section-title text-center">
          <h3>What Our
            <span>Patients Says</span>
          </h3>
        </div>
        <div class="testimonial-carousel">
          <!--Slide Item-->
          <div class="slide-item">
            <div class="inner-box text-center">
              <div class="image-box">
                <figure>
                  <img src="/agung/templates/medic_cyan/images/testimonials/1.png" alt="">
                </figure>
              </div>
              <h6>Adam Rose</h6>
              <p>Neque porro quisquam est, qui dolorem ipsum quia consectetur, dolor sit amet, consectetur, numquam Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, at?</p>
            </div>
          </div>
          <!--Slide Item-->
          <div class="slide-item">
            <div class="inner-box text-center">
              <div class="image-box">
                <figure>
                  <img src="/agung/templates/medic_cyan/images/testimonials/2.png" alt="">
                </figure>
              </div>
              <h6>David Warner</h6>
              <p>Neque porro quisquam est, qui dolorem ipsum quia consectetur, dolor sit amet, consectetur, numquam Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, at?</p>
            </div>
          </div>
          <!--Slide Item-->
          <div class="slide-item">
            <div class="inner-box text-center">
              <div class="image-box">
                <figure>
                  <img src="/agung/templates/medic_cyan/images/testimonials/3.png" alt="">
                </figure>
              </div>
              <h6>Amy Adams</h6>
              <p>Neque porro quisquam est, qui dolorem ipsum quia consectetur, dolor sit amet, consectetur, numquam Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, at?</p>
            </div>
          </div>
          <!--Slide Item-->
          <div class="slide-item">
            <div class="inner-box text-center">
              <div class="image-box">
                <figure>
                  <img src="/agung/templates/medic_cyan/images/testimonials/1.png" alt="">
                </figure>
              </div>
              <h6>Adam Rose</h6>
              <p>Neque porro quisquam est, qui dolorem ipsum quia consectetur, dolor sit amet, consectetur, numquam Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, at?</p>
            </div>
          </div>
          <!--Slide Item-->
          <div class="slide-item">
            <div class="inner-box text-center">
              <div class="image-box">
                <figure>
                  <img src="/agung/templates/medic_cyan/images/testimonials/2.png" alt="">
                </figure>
              </div>
              <h6>David Warner</h6>
              <p>Neque porro quisquam est, qui dolorem ipsum quia consectetur, dolor sit amet, consectetur, numquam Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, at?</p>
            </div>
          </div>
          <!--Slide Item-->
          <div class="slide-item">
            <div class="inner-box text-center">
              <div class="image-box">
                <figure>
                  <img src="/agung/templates/medic_cyan/images/testimonials/3.png" alt="">
                </figure>
              </div>
              <h6>Amy Adams</h6>
              <p>Neque porro quisquam est, qui dolorem ipsum quia consectetur, dolor sit amet, consectetur, numquam Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, at?</p>
            </div>
          </div>
          <!--Slide Item-->
          <div class="slide-item">
            <div class="inner-box text-center">
              <div class="image-box">
                <figure>
                  <img src="/agung/templates/medic_cyan/images/testimonials/1.png" alt="">
                </figure>
              </div>
              <h6>Adam Rose</h6>
              <p>Neque porro quisquam est, qui dolorem ipsum quia consectetur, dolor sit amet, consectetur, numquam Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, at?</p>
            </div>
          </div>
          <!--Slide Item-->
          <div class="slide-item">
            <div class="inner-box text-center">
              <div class="image-box">
                <figure>
                  <img src="/agung/templates/medic_cyan/images/testimonials/2.png" alt="">
                </figure>
              </div>
              <h6>David Warner</h6>
              <p>Neque porro quisquam est, qui dolorem ipsum quia consectetur, dolor sit amet, consectetur, numquam Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, at?</p>
            </div>
          </div>
          <!--Slide Item-->
          <div class="slide-item">
            <div class="inner-box text-center">
              <div class="image-box">
                <figure>
                  <img src="/agung/templates/medic_cyan/images/testimonials/3.png" alt="">
                </figure>
              </div>
              <h6>Amy Adams</h6>
              <p>Neque porro quisquam est, qui dolorem ipsum quia consectetur, dolor sit amet, consectetur, numquam Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, at?</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--End testimonial-section-->

    <!-- Contact Section -->
    <section class="appoinment-section section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="accordion-section">
              <div class="section-title">
                <h3>FAQ</h3>
              </div>
              <div class="accordion-holder">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                      <h4 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          Why Should I choose Medical Health
                        </a>
                      </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                      <div class="panel-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                        non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                        sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                        helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                        vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't
                        heard of them accusamus labore sustainable VHS.
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                      <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          What are the Centre’s visiting hours?
                        </a>
                      </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                      <div class="panel-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                        non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                        sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                        helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                        vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't
                        heard of them accusamus labore sustainable VHS.
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                      <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          How many visitors are allowed?
                        </a>
                      </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                      <div class="panel-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                        non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                        sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                        helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                        vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't
                        heard of them accusamus labore sustainable VHS.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="contact-area">
              <div class="section-title">
                <h3>Request
                  <span>Appointment</span>
                </h3>
              </div>
              <form name="contact_form" class="default-form contact-form" action="sendmail.php" method="post">
                <div class="row">
                  <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="form-group">
                      <input type="text" name="Name" placeholder="Name" required="">
                    </div>
                    <div class="form-group">
                      <input type="email" name="Email" placeholder="Email" required="">
                    </div>
                    <div class="form-group">
                      <select name="subject">
                        <option>Departments</option>
                        <option>Diagnostic</option>
                        <option>Psychological</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="form-group">
                      <input type="text" name="Phone" placeholder="Phone" required="">
                    </div>
                    <div class="form-group">
                      <input type="text" name="Date" placeholder="Date" required="" id="datepicker">
                      <i class="fa fa-calendar" aria-hidden="true"></i>
                    </div>
                    <div class="form-group">
                      <select name="subject">
                        <option>Doctor</option>
                        <option>Diagnostic</option>
                        <option>Psychological</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                      <textarea name="form_message" placeholder="Your Message" required=""></textarea>
                    </div>
                    <div class="form-group text-center">
                      <button type="submit" class="btn-style-one">submit now</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Contact Section -->

    <!--footer-main-->
    <?php echo $sys->block_show('footer'); ?>
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
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, temporibus?</p>
                <ul class="location-link">
                  <li class="item">
                    <i class="fa fa-map-marker"></i>
                    <p>Modamba, NY 80021, United States</p>
                  </li>
                  <li class="item">
                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    <a href="#">
                      <p>Support@medic.com</p>
                    </a>
                  </li>
                  <li class="item">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <p>(88017) +123 4567</p>
                  </li>
                </ul>
                <ul class="list-inline social-icons">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                  <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <h6>Services</h6>
              <ul class="menu-link">
                <li>
                  <a href="#">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>Orthopadic Liabilities</a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>Dental Clinic</a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>Dormamu Clinic</a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>Psycological Clinic</a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>Gynaecological Clinic</a>
                </li>
              </ul>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="social-links">
                <h6>Recent Posts</h6>
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
            <p>&copy; Copyright 2018. All Rights Reserved by
              <a href="index.html">Medic</a>
            </p>
          </div>
          <ul class="footer-bottom-link">
            <li>
              <a href="index.html">Home</a>
            </li>
            <li>
              <a href="about.html">About</a>
            </li>
            <li>
              <a href="contact.html">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </footer>
    <!--End footer-main-->

  </div>
  <!--End pagewrapper-->


  <!--Scroll to top-->
  <div class="scroll-to-top scroll-to-target" data-target=".header-top">
    <span class="icon fa fa-angle-up"></span>
  </div>

  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
  <!-- <script src="/agung/templates/medic_cyan/plugins/google-map/gmap.js"></script> -->

  <?php
  $sys->link_js($sys->template_url . 'plugins/google-map/gmap.js', false);
  $sys->link_js($sys->template_url . 'plugins/jquery.js', false);
  $sys->link_js($sys->template_url . 'plugins/bootstrap.min.js', false);
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