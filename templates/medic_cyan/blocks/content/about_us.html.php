<?php if (!defined('_VALID_BBC')) exit('No direct script access allowed'); ?>


<section class="service-tab-section section">
  <div class="outer-box clearfix">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <!-- Nav tabs -->
          <div class="tabs">
            <ul class="nav nav-tabs" role="tablist">
              <?php
              foreach ($cat['list'] as $index => $item) {
                $link = content_link($item['title']);
              ?>
                <li role="presentation" class="<?php echo $index ==  0 ? 'active in' : '' ?>">
                  <a href="#dormitory<?php echo $index ?>" data-toggle="tab"><?php echo $item['title'] ?></a>
                </li>
              <?php
              }
              ?>
            </ul>
          </div>
          <!--Start single tab content-->
          <div class="tab-content">
            <?php foreach ($cat['list']  as $index => $item) {
            ?>
              <div class="service-box tab-pane fade  <?php echo $index ==  0 ? 'active in' : '' ?>  " id="dormitory<?php echo $index ?>">
                <div class="col-md-6">
                  <img class="img-responsive" src="<?php echo $item['image'] ?>" style="height:550px ;" alt="service-image">
                </div>
                <div class="col-md-6">
                  <div class="contents">
                    <div class="section-title">
                      <h3><?php echo $item['title'] ?></h3>
                    </div>
                    <div class="text">
                      <p><?php echo $item['intro'] ?></p>
                      <p><?php echo $item['content'] ?></p>
                    </div>
                    <ul class="content-list">
                      <li>
                        <i class="fa fa-dot-circle-o"></i><?php echo lang('Whitening is among the most popular dental') ?>
                      </li>
                      <li>
                        <i class="fa fa-dot-circle-o"></i><?php echo lang('Teeth cleaning is part of oral hygiene and involves') ?>
                      </li>
                      <li>
                        <i class="fa fa-dot-circle-o"></i><?php echo lang('Teeth cleaning is part of oral hygiene and involves') ?>
                      </li>
                    </ul>
                    <a href="<?php echo content_link($item['id'], $item['title']) ?>" class="btn btn-style-one"><?php echo lang('Read more') ?></a>
                  </div>
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