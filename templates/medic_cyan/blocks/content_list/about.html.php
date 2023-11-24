<?php if (!defined('_VALID_BBC')) exit('No direct script access allowed'); ?>
<section class="feature-section section bg-gray">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-xs-12">
        <div class="image-content">
          <div class="section-title text-center">
            <h3>Best Features
              <span><?php echo lang('of Our Hospital')?></span>
            </h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam magni in at debitis <br>
              nam error officia vero tempora alias? Sunt?</p>
          </div>
          <div class="row">
            <?php
            foreach ($output['data'] as $data) {
              pr($output);
            ?>
              <div class="col-sm-6">
                <div class="item">
                  <div class="icon-box">
                    <figure>
                      <a href="#">
                        <img src="/agung/templates/medic_cyan/images/resource/1.png" alt="">
                      </a>
                    </figure>
                  </div>
                  <h6><?php echo $data['title'] ?></h6>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil ducimus veniam illo quibusdam pariatur ex sunt, est aspernatur
                    at debitis eius vitae vel nostrum dolorem labore autem corrupti odit mollitia?</p>
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



<!-- <section class="feature-section section bg-gray">
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
</section> -->